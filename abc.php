<?php
session_start();
$id=$_SESSION['user'];
//echo "$id";

$surname=$_SESSION['selsurvey'];
$cate=$_SESSION['catsel'];
include 'registerdb.php';
$select_db1=mysql_select_db('b24_16398188_question');
if(!$select_db1)
{
die("Database Selection failed".mysql_error());
}
$qu="select * from $cate where sname='".$surname."'";
$fetch=mysql_query($qu);
$num_rows = mysql_num_rows($fetch);
//echo "$num_rows";

for($row=1;$row<=$num_rows;$row++)
{
	$que="ques".$row;
	$fn=$_POST[$que];

	$select_db2=mysql_select_db('b24_16398188_answer');
if(!$select_db2)
{
die("Database Selection failed".mysql_error());
}
	$insert="insert into $cate values('$surname','$id','$row','$fn')";
	$count=mysql_query($insert);
}
if($count==1)
{
	echo '<script type="text/javascript">alert("Thank You For Answering The Survey");</script>';
include 'aftlogin.php';
}
?>


