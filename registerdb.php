<?php
$host="sql203.byethost24.com";
$username="b24_16398188";
$password="surveypro";

$connection=mysql_connect($host,$username,$password);
if(!$connection)
{
die("Database connection failed".mysql_error());
}
?>