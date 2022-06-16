<?php
$DB_host = "us-cdbr-east-05.cleardb.net";
$DB_user = "b832c5f754fc37";
$DB_pass = "b8a89192";
$DB_name = "ingram";
try
{
 $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
 $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
 $e->getMessage();
}
?>