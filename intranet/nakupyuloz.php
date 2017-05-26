<?php
$subor = fopen("nakupytext.txt", "w") or die("Unable to open file!");
$txt = $_POST['data'];
fwrite($subor, $txt);
fclose($subor);
?>