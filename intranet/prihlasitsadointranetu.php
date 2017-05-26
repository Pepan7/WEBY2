<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prihlasenie do Intranetu</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="../javascript/menu.js"></script>
      <link rel="stylesheet" href="../css/menu.css">
</head>
<body>
<?php
$text="";
$myfile = fopen("menu.txt", "r") or die("Unable to open file!");
$text=fread($myfile,filesize("menu.txt"));
fclose($myfile);
$text .= "<ul class='nav navbar-nav navbar-right'>
    
    </ul>
  </div>
  </div>
  </div>
</nav>";
echo $text;
?>
<form action="prihlasenie.php" method="post">
    <input placeholder="Login do AIS" required name="menoLDAP" type="text">
    <input placeholder="Heslo do AIS" required name="hesloLDAP" type="password">
    <input type="submit" value="Prihlásiť">
</form>
<br><br><br><br><br><br><br><br>
 <?php
$text="";

$myfile = fopen("footer.txt", "r") or die("Unable to open file!");
$text=fread($myfile,filesize("footer.txt"));
fclose($myfile);
echo $text; 
?>
</body>
</html>