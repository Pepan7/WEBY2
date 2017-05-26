<!DOCTYPE html>
<html lang="sk">
<head>
  <title>Aktuality</title>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="../javascript/menu.js"></script>
      <link rel="stylesheet" href="../css/menu.css">
      <link rel="stylesheet" href="../css/ostatne.css">

	<style>
	  table,td, select,input {
		  border: 2px solid gray;
	  }
	  button, select{
		  width: 150px;
	  }
	  
	</style>
  </head>
<body>

<script>
function actButton(lang){
	document.getElementById("obal").innerHTML = "";
	var filter = document.getElementById("myfilter").value;
	var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("obal").innerHTML += this.responseText;
            }
        };
		xmlhttp.open("GET", "act_database.php?act=1&filter="+filter+"&lang="+lang, true);
        xmlhttp.send();
}

function olderButton(page,lang){
	document.getElementById("obal").innerHTML = "";
	var filter = document.getElementById("myfilter").value;
	var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("obal").innerHTML += this.responseText;
            }
        };
		xmlhttp.open("GET", "act_database.php?act=2&page="+page+"&filter="+filter+"&lang="+lang, true);
        xmlhttp.send();	
}
function olderButtonfilter(page,filter,lang){
	document.getElementById("obal").innerHTML = "";

	var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("obal").innerHTML += this.responseText;
            }
        };
		xmlhttp.open("GET", "act_database.php?act=2&page="+page+"&filter="+filter+"&lang="+lang, true);
        xmlhttp.send();	
}
function addNew(lang){
	document.getElementById("obal").innerHTML = "";

	var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("obal").innerHTML += this.responseText;
            }
        };
		xmlhttp.open("GET", "act_database.php?act=3&lang="+lang, true);
        xmlhttp.send();	
}
function sendForm(){

	  

		var skact =document.getElementById('skact').value;
	 var enact = document.getElementById('enact').value;
	 var myType = document.getElementById('myType').value;
	 var eDate = document.getElementById('eDate').value;
	document.getElementById("obal").innerHTML = "";
	var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("obal").innerHTML += this.responseText;
            }
        };
		xmlhttp.open("GET", "act_database.php?skact="+skact+"&enact="+enact+"&myType="+myType+"&eDate="+eDate, true);
        xmlhttp.send();	
}

function subscribeButton(lang){
	document.getElementById("obal").innerHTML = "";

	var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("obal").innerHTML += this.responseText;
            }
        };
		xmlhttp.open("GET", "act_database.php?act=4&lang="+lang, true);
        xmlhttp.send();	
}
function subButton(){

	var myName = document.getElementById("myName").value;
	var myEmail = document.getElementById("myEmail").value;
		document.getElementById("obal").innerHTML = "";	
	var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("obal").innerHTML += this.responseText;
            }
        };
		xmlhttp.open("GET", "act_database.php?myName="+myName+"&myEmail="+myEmail, true);
        xmlhttp.send();
}
</script>
<?php
$text="";
$myfile = fopen("menu.txt", "r") or die("Unable to open file!");
$text=fread($myfile,filesize("menu.txt"));
fclose($myfile);
$text .= "<ul class='nav navbar-nav navbar-right'>
      <li><a href='../strankySK/aktuality.php?lang=SK'><img src='subory/Flag_of_Slovakia.svg.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
      <li><a href=' '><img src='subory/gb.png' alt='Mountain View' style='width:40px;height:20px;'></a></li>
    </ul>
  </div>
  </div>
  </div>
</nav>";
echo $text;
?>


<?php
$lang=$_GET['lang'];

if($lang=='SK'){
	echo "<h1 class= 'nad'>Prehľad aktualít</h1>";
}else{
	if($lang=='EN'){
		echo "<h1 class= 'nad'>News</h1>";
	}
}


function showSkMenu($lang){
	echo "<div style = '	 width : 10%; position : absolute; left : 0;'>
	<button onclick = 'actButton(\"{$lang}\")'>Aktuality</button><BR>
	<button onclick = 'olderButton(1,\"{$lang}\")'>Staršie</button><BR>
	<button onclick = 'subscribeButton(\"{$lang}\")'>Odoberať</button><BR>
	<button onclick = 'addNew(\"{$lang}\")'>Pridať</button>
</div>
<div  style = ' width : 10%; position : absolute; left : 10%;'>
	<label>Kategórie<select id = 'myfilter'></label>
		<option value = '0' checked>Všetky</option>
		<option value = '1'>Propagácia</option>
		<option value = '2'>Oznamy</option>
		<option value = '3'>Zo života ústavu</option>
	</select>


</div>";
}

function showENMenu($lang){
echo "<div style = ' width : 10%; position : absolute; left : 0;'>
	<button onclick = 'actButton(\"{$lang}\")'>News</button><BR>
	<button onclick = 'olderButton(1,\"{$lang}\")'>Older news</button><BR>
	<button onclick = 'subscribeButton(\"{$lang}\")'>Subscribe</button><BR>
	<button onclick = 'addNew(\"{$lang}\")'	>Add new</button>
</div>
<div  style = ' width : 10%; position : absolute; left : 10%;'>
	<label>Categories<select id = 'myfilter'></label>
		<option value = '0' checked>All</option>
		<option value = '1'>Propagation</option>
		<option value = '2'>Annoucement</option>
		<option value = '3'>Daily life</option>
	</select>


</div>";
}




if(isset($lang)){
	if($lang == 'SK'){showSkMenu($lang);}
	else{showENMenu($lang);}
}


echo "<div id = 'obal', style = ' position : relative ;left : 30%;width: 30%;margin : 5px;'></div>";
$page=$_GET['page'];
$filter = $_GET['filter'];
if(isset($page)){

	echo "<script>olderButtonfilter({$page},{$filter},'{$lang}')</script>";
}

?>
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
