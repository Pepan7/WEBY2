<?php
	function connectDB(){
		require_once '../konfigdatabazy.php';
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		mysqli_set_charset($conn,"utf8");
		return $conn;		
	}

	function showActual($filter,$lang){
		$conn = connectDB();
		$date = date('Y-m-d');
		if($lang == 'SK'){
			if($filter==0){
				$sql = "SELECT * FROM `aktuality` WHERE platnost >='{$date}' AND skact IS NOT NULL";
			}else{
				$sql = "SELECT * FROM `aktuality` WHERE platnost >='{$date}' AND kat = {$filter} AND skact IS NOT NULL";
			}
		echo "<table id = actTab>";
		echo "<tr>";
		echo "<td style = 'width: 50%;  font-weight: bold;'>Aktualita</td>";
		echo "<td style = 'width: 50%;  font-weight: bold;'>platnosť</td>";
		}else{
			if($filter==0){
				$sql = "SELECT * FROM `aktuality` WHERE platnost >='{$date}' AND enact IS NOT NULL";
			}else{
				$sql = "SELECT * FROM `aktuality` WHERE platnost >='{$date}' AND kat = {$filter} AND enact IS NOT NULL";
			}
		echo "<table id = actTab>";
		echo "<tr>";
		echo "<td style = 'width: 50%;  font-weight: bold;'>New</td>";
		echo "<td style = 'width: 50%;  font-weight: bold;'>Relevance</td>";
		}
		$result = $conn->query($sql);

		echo "</tr>";
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			if($lang == 'SK'){echo "<td>".$row['skact']."</td>";
			}else{echo "<td>".$row['enact']."</td>";}
			echo "<td>".$row['platnost']."</td>";
			echo "</tr>";
			
		}
		echo "</table>";
		$conn->close();
		
	}
	function showOlder($pageNum,$filter,$lang){
		$conn = connectDB();
		$rowPerPage = 10;
		$date = date('Y-m-d');
		if($lang == 'SK'){
			if($filter==0){
				$sql = "SELECT * FROM `aktuality` WHERE platnost < '{$date}' AND skact IS NOT NULL;";
			}else{
				$sql = "SELECT * FROM `aktuality` WHERE platnost < '{$date}' AND skact IS NOT NULL AND kat = {$filter};";
			}
		echo "<table id = actTab>";
		echo "<tr>";
		echo "<td style = 'width: 50%;  font-weight: bold;'>Aktualita</td>";
		echo "<td style = 'width: 50%;  font-weight: bold;'>platnosť</td>";
		}else{
			if($filter==0){
				$sql = "SELECT * FROM `aktuality` WHERE platnost < '{$date}' AND enact IS NOT NULL;";
			}else{
				$sql = "SELECT * FROM `aktuality` WHERE platnost < '{$date}' AND enact IS NOT NULL AND kat = {$filter};";
			}
		echo "<table id = actTab>";
		echo "<tr>";
		echo "<td style = 'width: 50%; font-weight: bold;'>New</td>";
		echo "<td style = 'width: 50%; font-weight: bold;'>Relevance</td>";
		}
		$result = $conn->query($sql);
		echo "</tr>";
		$a = 0;
		while($row = $result->fetch_assoc()) {

			if(($a>=(($pageNum*$rowPerPage)-$rowPerPage))&&($a<($pageNum*$rowPerPage))){
				echo "<tr>";
				if($lang == 'SK'){echo "<td>".$row['skact']."</td>";
				}else{echo "<td>".$row['enact']."</td>";}
				echo "<td>".$row['platnost']."</td>";
				echo "</tr>";
			}
			$a++;
		}
		echo "</table>";
		
		$countPages = ceil($result->num_rows/$rowPerPage);
		for($j = 1; $j<=$countPages;$j++){
			?> <a href = "aktuality.php?page=<?php echo $j;?>&filter=<?php echo $filter;?>&lang=<?php echo $lang;?>"><?php echo "<div style = 'position : relative ; border : 1px solid black; width: 10px; color: black; float: left;'>{$j}</div>";?></a><?php
			
		}
		$conn->close();
		
	}
	function showAddForm($lang){
		if($lang == 'SK'){
				echo "
					
						<label>Text v SK <input type =  'text' id = 'skact'></label><BR><BR>
						<label>Text v EN <input type =  'text' id = 'enact'></label><BR><BR>
						<label>Kategórie <select id = 'myType' name = 'myType'><label>
							<option value = '1' checked>Propagácia</option>
							<option value = '2'>Oznamy</option>
							<option value = '3'>Zo života ústavu</option>
						</select><BR><BR>
						<label>Dátum expirácie <input type =  'text' id = 'eDate' placeholder ='rrrr-mm-dd'></label><BR>
						<button onclick ='sendForm()'>potvrď</button>
			
				";
		}else{
				echo "

						<label>New in SK <input type =  'text' id = 'skact'></label><BR><BR>
						<label>New in EN <input type =  'text' id = 'enact'></label><BR><BR>
						<label>Categories <select id = 'myType' name = 'myType'></label>
							<option value = '1'>Propagation</option>
							<option value = '2'>Annoucement</option>
							<option value = '3'>Daily life</option>
						</select><BR><BR>
						<label>Expiration Date <input type =  'text' id = 'eDate' placeholder ='rrrr-mm-dd'></label><BR>
						<button onclick ='sendForm()'>potvrď</button>
			
				";			
		}
	}
	function addNewToDb($skact,$enact,$type,$edate){
		$conn = connectDB();
		//INSERT INTO `aktuality` (`id`, `skact`, `enact`, `platnost`, `kat`) 
		//VALUES (NULL, 'asads', 'dadsad', '2017-05-03', '3');
		$sql = "INSERT INTO `aktuality` (`id`, `skact`, `enact`, `platnost`, `kat`) VALUES (NULL, '{$skact}', '{$enact}', '{$edate}', '{$type}');";
		if($skact == ""){
			$sql = "INSERT INTO `aktuality` (`id`, `skact`, `enact`, `platnost`, `kat`) VALUES (NULL, NULL, '{$enact}', '{$edate}', '{$type}');";
		}
		if($enact == ""){
			$sql = "INSERT INTO `aktuality` (`id`, `skact`, `enact`, `platnost`, `kat`) VALUES (NULL, '{$skact}', NULL, '{$edate}', '{$type}');";
		}
		if(($enact == "")&&($skact == "")){
			$sql = "INSERT INTO `aktuality` (`id`, `skact`, `enact`, `platnost`, `kat`) VALUES (NULL, NULL, NULL, '{$edate}', '{$type}');";
		}
		$conn->query($sql);
		
		$webmaster = "pajom17@gmail.com";
		$header= "From: $webmaster";
		$message = "Dátum expirácie: ".$edate."\n Správa SK: ".$skact."\n English message: ".$enact;
		$sql = "SELECT * FROM `sub` WHERE 1";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()) {
			$email = $row['email'];
			mail($email,'Nová Aktualita', $message,$header);
		}
		
		
		
		
		$conn->close();
	}
	function showSubscribeForm($lang){
		
		if($lang == 'SK'){
			echo"
			<label>Zadajte meno<input type = 'text', id = 'myName', name = 'myName'></label><BR><BR>
			<label>Zadajte email<input type = 'text', id = 'myEmail', name = 'myEmail'></label><BR><BR>
			<button id = 'subscrNutton' onclick = 'subButton()'>Potvrď</button>
			";
			
		}else{
			echo"
			<label>Name<input type = 'text', id = 'myName', name = 'myName'></label><BR><BR>
			<label>Email<input type = 'text', id = 'myEmail', name = 'myEmail'></label><BR><BR>
			<button id = 'subscrNutton' onclick = 'subButton()'>Potvrď</button>
			";			
		}
	}
	function addSubscribe($myname,$myemail){
		$conn = connectDB();
		//SELECT * FROM `sub` WHERE email = 'pajo17@post.sk'
		$sql = "SELECT * FROM `sub` WHERE email = '{$myemail}'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0){
			//DELETE FROM `sub` WHERE email = 'pajo17@post.sk'
			$sql = "DELETE FROM `sub` WHERE email = '{$myemail}'";
			$conn->query($sql);
		}else{
			//INSERT INTO `sub` (`id`, `meno`, `email`) VALUES (NULL, 'pavol', 'pajo17@post.sk');
			$sql = "INSERT INTO `sub` (`id`, `meno`, `email`) VALUES (NULL, '{$myname}', '{$myemail}');";
			$conn->query($sql);
		}

		$conn->close();
	}
	$myname= $_REQUEST['myName'];
	$myemail= $_REQUEST['myEmail'];
	$skact = $_REQUEST['skact'];
	$enact = $_REQUEST['enact'];
	$type = $_REQUEST['myType'];
	$edate = $_REQUEST['eDate'];
	

	if(isset($skact)&&isset($enact)&&isset($type)&&isset($edate)){
		addNewToDb($skact,$enact,$type,$edate);
		
	}
	if(isset($myname)&&isset($myemail)){
		
		addSubscribe($myname,$myemail);
	}
	$act= $_REQUEST['act'];
	$filter= $_REQUEST['filter'];
	$lang = $_REQUEST['lang'];
			
	if(isset($lang)){
		if(isset($act)){
			if($act == "1"){
				showActual($filter,$lang);
			}
			if($act == "2"){
				$page = $_REQUEST['page'];
				if(isset($page)){
					showOlder($page,$filter,$lang);
				}	
			}
			if($act == "3"){
				showAddForm($lang);
			}
			if($act == "4"){
				showSubscribeForm($lang);
			}
		}
		
}


?>