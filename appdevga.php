
<?php
echo "data received by Mostafa Hassan\n";
$uname = $_POST["min"];//$_POST["name"];
$proj = $_POST["max"];//$_POST["project"];
$remote = $_SERVER['REMOTE_ADDR'];
$efile = "mydata.txt";
$today = date("Y-m-d H:i:s");
$record = $today . ' ' . $uname . ' ' . $proj . ' ' . $remote . "\n";
if(file_exists($efile))
	$fp = fopen($efile, "a");
else 
	$fp = fopen($efile, "w");
fwrite($fp, $record);
fclose($efile);
echo "Datastored!\n";
?>



