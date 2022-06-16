
<?php $mysql_hostname = "us-cdbr-east-05.cleardb.net";
$mysql_user = "b832c5f754fc37";
$mysql_password = "b8a89192";
$mysql_database = "heroku_222b9b6b8621f94";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
if($_GET['action']=='doctorid'){
	$docinfo=$_POST['docinfo'];
	$query= mysql_query("select * from doctors where doctorName=$docinfo");
	$array=mysql_fetch_array($query);
	echo $array['docFees'];
	
	}
	?>