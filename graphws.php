<?php
//session_start();
$sname=$_SESSION['selgraph'];
$cat=$_SESSION['surveycat'];
$quesno=$_SESSION['quesno'];
$stu1=0;
$working1=0;
$enter1=0;
$hm1=0;
$others1=0;
$stu2=0;
$working2=0;
$enter2=0;
$hm2=0;
$others2=0;

$stu3=0;
$working3=0;
$enter3=0;
$hm3=0;
$others3=0;

$stu4=0;
$working4=0;
$enter4=0;
$hm4=0;
$others4=0;
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
	$ws=$row1['workingstatus'];
if($option==1)
	switch ($ws) {
		case 'student':
			$stu1++;
			break;
		case 'working':
			$working1++;
			break;
		case 'entrepreneur':
			$enter1++;
			break;
		case 'hm':
			$hm1++;
			break;
		case 'others':
			$others1++;
			break;
			}
	if($option==2)
		switch ($ws) {
		case 'student':
			$stu2++;
			break;
		case 'working':
			$working2++;
			break;
		case 'entrepreneur':
			$enter2++;
			break;
		case 'hm':
			$hm2++;
			break;
		case 'others':
			$others2++;
			break;
			}
if($option==3)
		switch ($ws) {
		case 'student':
			$stu3++;
			break;
		case 'working':
			$working3++;
			break;
		case 'entrepreneur':
			$enter3++;
			break;
		case 'hm':
			$hm3++;
			break;
		case 'others':
			$others3++;
			break;
			}
	if($option==4)
		switch ($ws) {
		case 'student':
			$stu4++;
			break;
		case 'working':
			$working4++;
			break;
		case 'entrepreneur':
			$enter4++;
			break;
		case 'hm':
			$hm4++;
			break;
		case 'others':
			$others4++;
			break;
			}
}}}

$select_db3=mysql_select_db('b24_16398188_graphsurv');
if(!$select_db3)
{
die("Database Selection failed".mysql_error());
}
$insert1="insert into ws values('1','student','$stu1')";
$com1=mysql_query($insert1);
$insert2="insert into ws values('1','working','$working1')";
$com2=mysql_query($insert2);
$insert3="insert into ws values('1','entrepreneur','$enter1')";
$com3=mysql_query($insert3);
$insert4="insert into ws values('1','homemaker','$hm1')";
$com4=mysql_query($insert4);
$insert5="insert into ws values('1','others','$others2')";
$com5=mysql_query($insert5);
$insert1="insert into ws values('2','student','$stu2')";
$com1=mysql_query($insert1);
$insert2="insert into ws values('2','working','$working2')";
$com2=mysql_query($insert2);
$insert3="insert into ws values('2','entrepreneur','$enter2')";
$com3=mysql_query($insert3);
$insert4="insert into ws values('2','homemaker','$hm2')";
$com4=mysql_query($insert4);
$insert5="insert into ws values('2','others','$others2')";
$com5=mysql_query($insert5);

$insert1="insert into ws values('3','student','$stu3')";
$com1=mysql_query($insert1);
$insert2="insert into ws values('3','working','$working3')";
$com2=mysql_query($insert2);
$insert3="insert into ws values('3','entrepreneur','$enter3')";
$com3=mysql_query($insert3);
$insert4="insert into ws values('3','homemaker','$hm3')";
$com4=mysql_query($insert4);
$insert5="insert into ws values('3','others','$others3')";
$com5=mysql_query($insert5);

$insert1="insert into ws values('4','student','$stu4')";
$com1=mysql_query($insert1);
$insert2="insert into ws values('4','working','$working4')";
$com2=mysql_query($insert2);
$insert3="insert into ws values('4','entrepreneur','$enter4')";
$com3=mysql_query($insert3);
$insert4="insert into ws values('4','homemaker','$hm4')";
$com4=mysql_query($insert4);
$insert5="insert into ws values('4','others','$others4')";
$com5=mysql_query($insert5);
include 'finalgraph.php';
?>