<?php
include 'registerdb.php';
$select_db1=mysql_select_db("b24_16398188_register");
if(!$select_db1)
{
die("Database Selection failed".mysql_error());
}
$fn=$_POST["fname"];
$ln=$_POST["lname"];
$month=$_POST["month"];
$day=$_POST["day"];
$year=$_POST["year"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$cn=$_POST["phno"];
$status=$_POST["status"];
$work=$_POST["ws"];
$zone=$_POST["zone"];
$password=$_POST["pwd1"];
$count=0;
$id=0;
$qu="select * from user";
$fetch=mysql_query($qu);
while($row=mysql_fetch_array($fetch))
{
	$id=$row['userid'];
}
	$id++;

$insert="insert into user values('$id','$fn','$ln','$month','$day','$year','$gender','$email','$cn','$status','$work','$zone','$password')";
$count=mysql_query($insert);
if($count==1)
{
echo '<script type="text/javascript">alert("Registration Success!");</script>';
include 'index.html';
}
else
{
echo '<script type="text/javascript">alert("Registration Failed! Please try again.");</script>';
include 'index.html';
}


//if($count!=1)

?>