<?php
require_once ('../konfigdatabazy.php');
session_start();
if(!empty($_POST['menoLDAP']) && !empty($_POST['hesloLDAP'])) {
    $pripojenie = new mysqli($hostname, $username, $password, $dbname);
    if($pripojenie->connect_error){
        die("Failed to connect with MySQL: " . $pripojenie->connect_error);
    }
    $pripojenie->set_charset("utf8");
    $sql = "SELECT LDAPlogin FROM Pracovnici";
    $result1 = $pripojenie->query($sql);
    if ($result1->num_rows) {
        while ($row1 = $result1->fetch_row()) {
            foreach ($row1 as $key1 => $val1) {
                if ($_POST['menoLDAP'] == "xpazitnyp1" || $_POST['menoLDAP'] == "xogurcaks1" || $_POST['menoLDAP'] == "xmrva" || $_POST['menoLDAP'] == "xhivko" || $_POST['menoLDAP'] == "xmasikova") {
                    $ldapuid = $_POST['menoLDAP'];
                    $ldappass = $_POST['hesloLDAP'];
                    $dn = 'ou=People, DC=stuba, DC=sk';
                    $ldaprdn = "uid=$ldapuid, $dn";
                    $ldapconn = ldap_connect("ldap.stuba.sk") or die("Nie je možné sa pripojiť na LDAP server");
                    ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
                    $ldapBindResult = ldap_bind($ldapconn, $ldaprdn, $ldappass);
                    if ($ldapBindResult) {
                        $sr = ldap_search($ldapconn, $ldaprdn, "uid=$ldapuid");
                        $entry = ldap_first_entry($ldapconn, $sr);
                        $usrId = ldap_get_values($ldapconn, $entry, "uisid")[0];
                        $usrName = ldap_get_values($ldapconn, $entry, "givenname")[0];
                        $usrSurname = ldap_get_values($ldapconn, $entry, "sn")[0];
                        $udajeLDAP = $usrName . ' ' . $usrSurname;
                        @ldap_close($ldapconn);
                        $ch = curl_init('http://is.stuba.sk/lide/clovek.pl');
                        $data = array(
                            'id' => 4948,
                            'lang' => 'sk',
                        );
                        curl_setopt($ch, CURLOPT_POST, 1);
                        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                        $result = curl_exec($ch);
                        curl_close($ch);
                        $doc = new DOMDocument();
                        libxml_use_internal_errors(true);
                        $doc->loadHTML($result);
                        $xPath = new DOMXPath($doc);
                        $udajeLDAP = $xPath->query('//html/body/div/div/div/table[1]/tbody/tr')[0]->childNodes[1]->childNodes[0]->childNodes[0]->childNodes[0]->childNodes[0]->textContent;
                        $_SESSION['LDAP'] = $udajeLDAP;
                        $nieco = explode(" ",$udajeLDAP);
                        $nieco = str_replace("."," ",$nieco);
                        $nieco = str_replace(","," ",$nieco);
                        $menoapriezvisko = 0;
                        $sql = "SELECT ID, Meno, Priezvisko FROM Pracovnici";
                        $result2 = $pripojenie->query($sql);
                        if ($result2->num_rows) {
                            while ($row2 = $result2->fetch_row()) {
                                foreach ($row2 as $key2 => $val2) {
                                    for ($t = 0; $t < sizeof($nieco); $t++) {
                                        $nieco[$t] = trim($nieco[$t]);
                                        $val2 = trim($val2);
                                        if ($nieco[$t] == $val2)
                                            $menoapriezvisko++;
                                        if ($menoapriezvisko == 2)
                                        {
                                            $_SESSION['riadok'] = $row2;
                                            break;
                                        }
                                    }
                                    if ($menoapriezvisko == 2)
                                        break;
                                }
                                $menoapriezvisko = 0;
                                if ($menoapriezvisko == 2)
                                    break;
                            }
                        }
                        header("Location: adminpanel.php");
                    } else {
                        header("Location: prihlasitsadointranetu.php");
                    }
                    @ldap_close($ldapconn);
                } else  header("Location: prihlasitsadointranetu.php");
            }
        }
    }
}
?>