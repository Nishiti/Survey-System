<?php
$param=$_POST["param"];
$quesno=$_POST["ques"];
session_start();
$_SESSION['para']=$param;
$_SESSION['quesno']=$quesno;
switch($param)
{
	
	case 'gender':
		include 'graphgender.php';
		break;
	case 'status':
		include 'graphstatus.php';
		break;
	case 'workingstatus':
		include 'graphws.php';
		break;
	case 'zone':
		include 'graphzone.php';
		break;
}
?>