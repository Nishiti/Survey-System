<?php
//session_start();
$sname=$_SESSION['selgraph'];
$cat=$_SESSION['surveycat'];
$quesno=$_SESSION['quesno'];
$single1=0;
$relationship1=0;
$engaged1=0;
$married1=0;
$divorced1=0;
$widow1=0;
$separated1=0;
$complicated1=0;
$single2=0;
$relationship2=0;
$engaged2=0;
$married2=0;
$divorced2=0;
$widow2=0;
$separated2=0;
$complicated2=0;
$single3=0;
$relationship3=0;
$engaged3=0;
$married3=0;
$divorced3=0;
$widow3=0;
$separated3=0;
$complicated3=0;
$single4=0;
$relationship4=0;
$engaged4=0;
$married4=0;
$divorced4=0;
$widow4=0;
$separated4=0;
$complicated4=0;
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
	$ws=$row1['status'];
if($option==1)
	switch ($ws) {
		case 'single':
			$single1++;
			break;
		case 'relationship':
			$relationship1++;
			break;
		case 'engaged':
			$engaged1++;
			break;
		case 'married':
			$married1++;
			break;
		case 'divorced':
			$divorced1++;
			break;
		case 'widow':
			$widow1++;
			break;
		case 'separated':
			$separated1++;
			break;
		case 'complicated':
			$complicated1++;
			break;
			}
	if($option==2)
		switch ($ws) {
		case 'single':
			$single2++;
			break;
		case 'relationship':
			$relationship2++;
			break;
		case 'engaged':
			$engaged2++;
			break;
		case 'married':
			$married2++;
			break;
		case 'divorced':
			$divorced2++;
			break;
		case 'widow':
			$widow2++;
			break;
		case 'separated':
			$separated2++;
			break;
		case 'complicated':
			$complicated2++;
			break;
			}
if($option==3)
		switch ($ws) {
		case 'single':
			$single3++;
			break;
		case 'relationship':
			$relationship3++;
			break;
		case 'engaged':
			$engaged3++;
			break;
		case 'married':
			$married3++;
			break;
		case 'divorced':
			$divorced3++;
			break;
		case 'widow':
			$widow3++;
			break;
		case 'separated':
			$separated3++;
			break;
		case 'complicated':
			$complicated3++;
			break;
			}
	if($option==4)
		switch ($ws) {
		case 'single':
			$single4++;
			break;
		case 'relationship':
			$relationship4++;
			break;
		case 'engaged':
			$engaged4++;
			break;
		case 'married':
			$married4++;
			break;
		case 'divorced':
			$divorced4++;
			break;
		case 'widow':
			$widow4++;
			break;
		case 'separated':
			$separated4++;
			break;
		case 'complicated':
			$complicated4++;
			break;
			}
}}}

$select_db3=mysql_select_db('b24_16398188_graphsurv');
if(!$select_db3)
{
die("Database Selection failed".mysql_error());
}
$insert1="insert into ws values('1','single','$single1')";
$com1=mysql_query($insert1);
$insert2="insert into ws values('1','relationship','$relationship1')";
$com2=mysql_query($insert2);
$insert3="insert into ws values('1','engaged','$engaged1')";
$com3=mysql_query($insert3);
$insert4="insert into ws values('1','married','$married1')";
$com4=mysql_query($insert4);
$insert5="insert into ws values('1','divorced','$divorced1')";
$com5=mysql_query($insert5);
$insert6="insert into ws values('1','widow','$widow1')";
$com6=mysql_query($insert6);
$insert7="insert into ws values('1','separated','$separated1')";
$com7=mysql_query($insert7);
$insert8="insert into ws values('1','complicated','$complicated1')";
$com8=mysql_query($insert8);
$insert1="insert into ws values('2','single','$single2')";
$com1=mysql_query($insert1);
$insert2="insert into ws values('2','relationship','$relationship2')";
$com2=mysql_query($insert2);
$insert3="insert into ws values('2','engaged','$engaged2')";
$com3=mysql_query($insert3);
$insert4="insert into ws values('2','married','$married2')";
$com4=mysql_query($insert4);
$insert5="insert into ws values('2','divorced','$divorced2')";
$com5=mysql_query($insert5);
$insert6="insert into ws values('2','widow','$widow2')";
$com6=mysql_query($insert6);
$insert7="insert into ws values('2','separated','$separated2')";
$com7=mysql_query($insert7);
$insert8="insert into ws values('2','complicated','$complicated2')";
$com8=mysql_query($insert8);
$insert1="insert into ws values('3','single','$single3')";
$com1=mysql_query($insert1);
$insert2="insert into ws values('3','relationship','$relationship3')";
$com2=mysql_query($insert2);
$insert3="insert into ws values('3','engaged','$engaged3')";
$com3=mysql_query($insert3);
$insert4="insert into ws values('3','married','$married3')";
$com4=mysql_query($insert4);
$insert5="insert into ws values('3','divorced','$divorced3')";
$com5=mysql_query($insert5);
$insert6="insert into ws values('3','widow','$widow3')";
$com6=mysql_query($insert6);
$insert7="insert into ws values('3','separated','$separated3')";
$com7=mysql_query($insert7);
$insert8="insert into ws values('3','complicated','$complicated3')";
$com8=mysql_query($insert8);
$insert1="insert into ws values('4','single','$single4')";
$com1=mysql_query($insert1);
$insert2="insert into ws values('4','relationship','$relationship4')";
$com2=mysql_query($insert2);
$insert3="insert into ws values('4','engaged','$engaged4')";
$com3=mysql_query($insert3);
$insert4="insert into ws values('4','married','$married4')";
$com4=mysql_query($insert4);
$insert5="insert into ws values('4','divorced','$divorced4')";
$com5=mysql_query($insert5);
$insert6="insert into ws values('4','widow','$widow4')";
$com6=mysql_query($insert6);
$insert7="insert into ws values('4','separated','$separated4')";
$com7=mysql_query($insert7);
$insert8="insert into ws values('4','complicated','$complicated4')";
$com8=mysql_query($insert8);

include 'finalgraph.php';
?>