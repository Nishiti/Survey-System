<?php
session_start();


$feedback=$_POST['feed'];
$emailid=$_POST['email'];
include 'registerdb.php';
$select_db1=mysql_select_db('b24_16398188_feedback');
if(!$select_db1)
{
die("Database Selection failed".mysql_error());
}
//$fee="select * from feed";
//$fetch=mysql_query($fee);

//for($row=1;$row<=$num_rows;$row++)
//{
	//$feed="feed_back".$row;
	//$fee=$_POST[$que];
	$insert="insert into feed values('$emailid','$feedback')";
	$count=mysql_query($insert);
//}
if($count==1)
{
	echo '<script type="text/javascript">alert("Thank You For Your Feedback");</script>';
include 'index.html';
}
?>



