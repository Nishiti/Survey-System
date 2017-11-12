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
include 'rgisterdb.php';
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
	$ws=$row1['zone'];
if($option==1)
	switch ($ws) {
		case 'north':
			$stu1++;
			break;
		case 'east':
			$working1++;
			break;
		case 'south':
			$enter1++;
			break;
		case 'west':
			$hm1++;
			break;
		case 'central':
			$others1++;
			break;
			}
	if($option==2)
		switch ($ws) {
		case 'north':
			$stu2++;
			break;
		case 'east':
			$working2++;
			break;
		case 'south':
			$enter2++;
			break;
		case 'west':
			$hm2++;
			break;
		case 'central':
			$others2++;
			break;
			}
if($option==3)
		switch ($ws) {
		case 'north':
			$stu3++;
			break;
		case 'east':
			$working3++;
			break;
		case 'south':
			$enter3++;
			break;
		case 'west':
			$hm3++;
			break;
		case 'central':
			$others3++;
			break;
			}
	if($option==4)
		switch ($ws) {
		case 'north':
			$stu4++;
			break;
		case 'east':
			$working4++;
			break;
		case 'south':
			$enter4++;
			break;
		case 'west':
			$hm4++;
			break;
		case 'central':
			$others4++;
			break;
			}
}}}

$select_db3=mysql_select_db('b24_16398188_graphsurv');
if(!$select_db3)
{
die("Database Selection failed".mysql_error());
}
$insert1="insert into ws values('1','north','$stu1')";
$com1=mysql_query($insert1);
$insert2="insert into ws values('1','east','$working1')";
$com2=mysql_query($insert2);
$insert3="insert into ws values('1','south','$enter1')";
$com3=mysql_query($insert3);
$insert4="insert into ws values('1','west','$hm1')";
$com4=mysql_query($insert4);
$insert5="insert into ws values('1','central','$others2')";
$com5=mysql_query($insert5);
$insert1="insert into ws values('2','north','$stu2')";
$com1=mysql_query($insert1);
$insert2="insert into ws values('2','east','$working2')";
$com2=mysql_query($insert2);
$insert3="insert into ws values('2','south','$enter2')";
$com3=mysql_query($insert3);
$insert4="insert into ws values('2','west','$hm2')";
$com4=mysql_query($insert4);
$insert5="insert into ws values('2','central','$others2')";
$com5=mysql_query($insert5);

$insert1="insert into ws values('3','north','$stu3')";
$com1=mysql_query($insert1);
$insert2="insert into ws values('3','east','$working3')";
$com2=mysql_query($insert2);
$insert3="insert into ws values('3','south','$enter3')";
$com3=mysql_query($insert3);
$insert4="insert into ws values('3','west','$hm3')";
$com4=mysql_query($insert4);
$insert5="insert into ws values('3','central','$others3')";
$com5=mysql_query($insert5);

$insert1="insert into ws values('4','north','$stu4')";
$com1=mysql_query($insert1);
$insert2="insert into ws values('4','east','$working4')";
$com2=mysql_query($insert2);
$insert3="insert into ws values('4','south','$enter4')";
$com3=mysql_query($insert3);
$insert4="insert into ws values('4','west','$hm4')";
$com4=mysql_query($insert4);
$insert5="insert into ws values('4','central','$others4')";
$com5=mysql_query($insert5);
include 'finalgraph.php';
?>