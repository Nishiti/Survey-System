<?php
session_start();
include 'registerdb.php';
$select_db1=mysql_select_db("b24_16398188_register");
if(!$select_db1)
{
die("Database Selection failed".mysql_error());
}
$sn=$_POST["surname"];
$ca=$_POST["category"];
$check=0;
$qu="select * from surveyname";
$fetch=mysql_query($qu);
while($row=mysql_fetch_array($fetch))
{
	$id=$row['sname'];

if($id==$sn)
{$check=1;
}}
if($check==1)
{
	echo '<script type="text/javascript">alert("Please select a new name for your survey");</script>';
	include 'form1.php';
}
else
{
$insert="insert into surveyname values('$sn','$ca')";
$count=mysql_query($insert);
if($count==1)
{
$_SESSION['cat']=$ca;
$_SESSION['createsurvey']=$sn;
include 'insert.php';
}
}


?>