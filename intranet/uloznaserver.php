<?php
include_once ('prihlasenie.php');
require_once ('../konfigdatabazy.php');
$pripojenie = new mysqli($hostname, $username, $password, $dbname);
if ($pripojenie->connect_error) {
    die("Pripojenie zlyhalo: " . $pripojenie->connect_error);
}
$pripojenie->set_charset("utf8");
if ($_POST['rolyuloz']) {
    $sql = "INSERT INTO Pracovnikove_roly (ID, ID_roly, ID_pracovnika) VALUES (NULL," . $_POST['roly'] . "," . $_POST['pracovnik'] . ")";
    if ($pripojenie->query($sql) === FALSE)
        echo "Error: " . $sql . "<br>" . $pripojenie->error;
}
if ($_POST['rolyodober']) {
    $sql = "DELETE FROM Pracovnikove_roly WHERE ID = " . $_POST['rolynaodber'] . "";
    if ($pripojenie->query($sql) === FALSE)
        echo "Error: " . $sql . "<br>" . $pripojenie->error;
}
if ($_POST['udajeuloz']) {
    if ($_FILES["fotka"]["name"] != '') {
        $sql = "UPDATE Pracovnici SET Fotka = '" . $_FILES["fotka"]["name"] . "'  WHERE ID =" . $_SESSION['riadok'][0] . "";
        if ($pripojenie->query($sql) === FALSE)
            echo "Error: " . $sql . "<br>" . $pripojenie->error;
    }
    $sql = "UPDATE Pracovnici SET Meno = '" . $_POST['meno'] . "' , Priezvisko = '" . $_POST['priezvisko'] . "' , Titul_pred = '" . $_POST['titulpred'] . "' , Titul_za = '" . $_POST['titulza'] . "' , Telefon = '" . $_POST['telefon'] . "' , Oddelenie ='" . $_POST['oddelenie'] . "' , Pozicia_v_skole = '" . $_POST['poziciaskola'] . "' , Funkcia = '" . $_POST['funkcia'] . "' WHERE ID =" . $_SESSION['riadok'][0] . "";
    if ($pripojenie->query($sql) === FALSE)
        echo "Error: " . $sql . "<br>" . $pripojenie->error;
}
$uploadOk = 1;
if (move_uploaded_file($_FILES['fotka']['tmp_name'], '../photos/' . basename($_FILES["fotka"]["name"]))) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST["submit"])) {
$check = getimagesize($_FILES["fotka"]["tmp_name"]);
if($check !== false) {
echo "File is an image - " . $check["mime"] . ".";
$uploadOk = 1;
} else {
echo "File is not an image.";
$uploadOk = 0;
}
}
if (file_exists($target_file)) {
echo "Sorry, file already exists.";
$uploadOk = 0;
}
if ($_FILES["fotka"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
}
header("Location: adminpanel.php");
?>