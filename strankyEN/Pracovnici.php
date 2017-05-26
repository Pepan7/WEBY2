<?php
require_once '../dbconnect.php';
require_once 'fetchPracovnik.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title> Employees</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/jquerydataTables.css">
    <link rel="stylesheet" href="../css/uloha7.css">
    <link rel="stylesheet" href="../css/tabulky7.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" type="text/css" href="../css/print.css" media="print">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="../javascript/menu.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../javascript/jquery-3.2.0.min.js" type="text/javascript"></script>
    <script src="../javascript/jquery.dataTables.min.js" type="text/javascript"></script>

</head>




<?php
$text="";
$myfile = fopen("menu.txt", "r") or die("Unable to open file!");
$text=fread($myfile,filesize("menu.txt"));
fclose($myfile);
$text .= "<ul class='nav navbar-nav navbar-right'>
      <li><a href='../strankySK/Pracovnici.php'><img src='subory/Flag_of_Slovakia.svg.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
      <li><a href=' '><img src='subory/gb.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
    </ul>
  </div>
  </div>
  </div>
</nav>";
echo $text;
?>
<div id ="myModal" class="modal">
    <span class="close">X</span>
    <div id="modal-content" class="modal-content"></div>
</div>
<br>



<h1 class="nad"> Employees</h1>
<div class="hlavna">

<?php

$dbh = connect_to_db();
$pracovnici = fetchPracovnik($dbh);

//print_r($pracovnici);

        echo '<table class="display nowrap dataTable dtr-inline" id="myTable"><thead>';
                echo "<th>"."ID "."</th>";
                echo "<th>"."Title "."</th>";
                echo "<th>"."Name "."</th>";
                echo "<th>"."Surname "."</th>";
                echo "<th>"."Title"."</th>";
                echo "<th>"."Room "."</th>";
                echo "<th>"."Phone "."</th>";
                echo "<th>"."Department "."</th>";
                echo "<th>"."Staff Role"."</th>";
                echo "<th>"."Funcion "."</th>";
                echo "<th>"."Info "."</th>";

        echo '</thead>';
        foreach ($pracovnici as $clovek) {
            echo "<tr>";
                echo "<td class='idecko'>".$clovek[0]  ."</td>";
                echo "<td>".$clovek[3]  ."</td>";
                echo "<td>".$clovek[1]  ."</td>";
                echo "<td>".$clovek[2]  ."</td>";
                echo "<td>".$clovek[4]  ."</td>";
                echo "<td>".$clovek[7]  ."</td>";
                echo "<td>".$clovek[8] . "</td>";
                echo "<td>".$clovek[9] ."</td>";
                echo "<td>".$clovek[10] ."</td>";
                echo "<td>".$clovek[11] ."</td>";
                echo "<td class='info'>Viac</td>";

            echo "</tr>";
            }
 echo "</table>";



?>

<script>


    $(document).ready(function(){
        $("#myTable").DataTable();
    });

    $(".info").click(function(){
        $(".modal-content").html("");


        var row = $(this).closest("tr");    // Find the row
        var id = row.find(".idecko").text();

        $.ajax({
            type: 'GET',
            url: 'http://147.175.98.192/WB2_Semestralne_zadanie/strankyEN/InfoPracovnik.php/id/' +id ,
            success: function (msg) {
                $(".modal-content").html(msg);

                console.log("Vysledok: "+ msg);

            }

        });

        $(".modal").css('display','block');

        $('.close').click(function(){
            $(".modal").css('display','none');
        });
    });

</script>
</div>

<?php
$text="";

$myfile = fopen("footer.txt", "r") or die("Unable to open file!");
$text=fread($myfile,filesize("footer.txt"));
fclose($myfile);
echo $text;
?>
</body>
</html>