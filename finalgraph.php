<?php
include("phpgraphlib.php");
$graph=new PHPGraphLib(800,450); 
$cate=$_SESSION['surveycat'];
$sname=$_SESSION['selgraph'];
$ques=$_SESSION['quesno'];
include 'registerdb.php';
$select_db2=mysql_select_db('b24_16398188_question');
if(!$select_db2)
{
die("Database Selection failed".mysql_error());
}
$re="select * from $cate where quesno='".$ques."' and sname='".$sname."'";
$re1=mysql_query($re);
while($row=mysql_fetch_array($re1,MYSQL_ASSOC))
{
	$question=$row['ques'];
}
$select_db3=mysql_select_db('b24_16398188_graphsurv');
if(!$select_db3)
{
die("Database Selection failed".mysql_error());
}
$qu="select * from ws";
$fetch=mysql_query($qu);
$cn=0;
while($row=mysql_fetch_array($fetch,MYSQL_ASSOC))
{
	$count=$row['count'];
	$cn=$cn+$count;
}
$qu1="select * from ws where opno=1";
$count1=mysql_query($qu1);
while($row=mysql_fetch_array($count1,MYSQL_ASSOC))
{
	$cat=$row['category'];
	$num=$row['count'];
	$per=$num*100/$cn;
	$dataArray["1".$cat]=$per;
}
$qu1="select * from ws where opno=2";
$count1=mysql_query($qu1);
while($row=mysql_fetch_array($count1,MYSQL_ASSOC))
{
	$cat=$row['category'];
	$num=$row['count'];
	$per=$num*100/$cn;
	$dataArray["2".$cat]=$per;
}
$qu1="select * from ws where opno=3";
$count1=mysql_query($qu1);
while($row=mysql_fetch_array($count1,MYSQL_ASSOC))
{
	$cat=$row['category'];
	$num=$row['count'];
	$per=$num*100/$cn;
	$dataArray["3".$cat]=$per;
}
$qu1="select * from ws where opno=4";
$count1=mysql_query($qu1);
while($row=mysql_fetch_array($count1,MYSQL_ASSOC))
{
	$cat=$row['category'];
	$num=$row['count'];
	$per=$num*100/$cn;
	$dataArray["4".$cat]=$per;
}

$graph->addData($dataArray);
$graph->setTitle($question);
$graph->setGradient("gray", "silver");
$graph->setBarOutlineColor("black");
$graph->createGraph();
$select_db3=mysql_select_db('b24_16398188_graphsurv');
if(!$select_db3)
{
die("Database Selection failed".mysql_error());
}
$drop="drop table ws";
$exe=mysql_query($drop);
?>


