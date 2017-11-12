<?php
//session_start();
$sname=$_SESSION['selgraph'];
$cat=$_SESSION['surveycat'];
$quesno=$_SESSION['quesno'];
$male1=0;
$female1=0;
$other1=0;
$male2=0;
$female2=0;
$other2=0;
$male3=0;
$female3=0;
$other3=0;
$male4=0;
$female4=0;
$other4=0;
include 'registerdb.php';
$select_db3=mysql_select_db('b24_16398188_graphsurv');
if(!$select_db3)
{
die("Database Selection failed".mysql_error());
}
$qu1="create table ws (opno INT,category VARCHAR(1000), count INT)";
$count2=mysql_query($qu1);

$select_db1=mysql_select_db('b24_16398188_answer');
if(!$select_db1)
{
die("Database Selection failed".mysql_error());
}

$qu="select * from $cat where qno='".$quesno."' and sname='".$sname."'";
$count=mysql_query($qu);

//$query="select * from user";
//$count1=mysql_query($query);

while($row=mysql_fetch_array($count,MYSQL_ASSOC))
{
	$user=$row['id'];
	$option=$row['option'];

	{$select_db2=mysql_select_db('b24_16398188_register');
if(!$select_db2)
{
die("Database Selection failed".mysql_error());
}
		$query="select * from user where userid='".$user."'";
$count1=mysql_query($query);
while($row1=mysql_fetch_array($count1,MYSQL_ASSOC))
{
	$ws=$row1['gender'];
if($option==1)
	switch ($ws) {
		case 'male':
			$male1++;
			break;
		case 'female':
			$female1++;
			break;
		case 'others':
			$other1++;
			break;
			}
	if($option==2)
		switch ($ws) {
		case 'male':
			$male2++;
			break;
		case 'female':
			$female2++;
			break;
		case 'others':
			$other2++;
			break;
			}
if($option==3)
		switch ($ws) {
		case 'male':
			$male3++;
			break;
		case 'female':
			$female3++;
			break;
		case 'others':
			$other3++;
			break;
			}
	if($option==4)
		switch ($ws) {
		case 'male':
			$male4++;
			break;
		case 'female':
			$female4++;
			break;
		case 'others':
			$other4++;
			break;
			}
}}}

$select_db3=mysql_select_db('b24_16398188_graphsurv');
if(!$select_db3)
{
die("Database Selection failed".mysql_error());
}
$insert1="insert into ws values('1','male','$male1')";
$com1=mysql_query($insert1);
$insert2="insert into ws values('1','female','$female1')";
$com2=mysql_query($insert2);
$insert3="insert into ws values('1','others','$other1')";
$com3=mysql_query($insert3);
$insert1="insert into ws values('2','male','$male2')";
$com1=mysql_query($insert1);
$insert2="insert into ws values('2','female','$female2')";
$com2=mysql_query($insert2);
$insert3="insert into ws values('2','others','$other2')";
$com3=mysql_query($insert3);
$insert1="insert into ws values('3','male','$male3')";
$com1=mysql_query($insert1);
$insert2="insert into ws values('3','female','$female3')";
$com2=mysql_query($insert2);
$insert3="insert into ws values('3','others','$other3')";
$com3=mysql_query($insert3);
$insert1="insert into ws values('4','male','$male4')";
$com1=mysql_query($insert1);
$insert2="insert into ws values('4','female','$female4')";
$com2=mysql_query($insert2);
$insert3="insert into ws values('4','others','$other4')";
$com3=mysql_query($insert3);
include 'finalgraph.php';
?>