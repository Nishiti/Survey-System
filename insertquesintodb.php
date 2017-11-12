<?php
session_start();
include 'registerdb.php';
$dbname=$_SESSION['cat'];
//echo "$dbname";
$select_db1=mysql_select_db('b24_16398188_question');
if(!$select_db1)
{
die("Database Selection failed".mysql_error());
}
$surveyname=$_SESSION['createsurvey'];
$id=0;
$fetch1=mysql_query("select * from $dbname where sname='".$surveyname."'");
$fetch2=mysql_query("select * from $dbname where sname='".$surveyname."'");
if($fetch1!=0)
{
while($row=mysql_fetch_array($fetch1))
{
	$id1=$row['quesno'];
	//echo "$id1";
	while($row=mysql_fetch_array($fetch2))
{
	$id2=$row['quesno'];
	$id=$id2;
	//echo "$id2";
	if($id1>$id2)
	{
	$id=$id1;
}
}}}
$id++;
$ques=$_POST["ques"];
$opt1=$_POST["opt_1"];
$opt2=$_POST["opt_2"];
$opt3=$_POST["opt_3"];
$opt4=$_POST["opt_4"];
//echo "$id";
$count=0;
//mysql_query("select * from $sn1");
$select_db1=mysql_select_db('b24_16398188_question');
if(!$select_db1)
{
die("Database Selection failed".mysql_error());
}
$insert="insert into $dbname values('$surveyname','$id','$ques','$opt1','$opt2','$opt3','$opt4')";
$count=mysql_query($insert);
if ($count==1)
{
	include'new.php';
}
?>