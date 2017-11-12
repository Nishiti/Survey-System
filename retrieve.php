<?php
$un=$_POST["t1"];
$pw=$_POST["t2"];
include 'registerdb.php';
$select_db1=mysql_select_db("b24_16398188_register");
if(!$select_db1)
{
die("Database Selection failed".mysql_error());
}
//$count=0;
$check=0;


$q="select * from user";
$fetch1=mysql_query($q);

while($row=mysql_fetch_array($fetch1))
{

$id=$row['userid'];
$username=$row['email'];
$password=$row['password'];
if($un==$username && $pw==$password)
{
$check=1;

$_SESSION['user'] = $id;
  $_SESSION['password'] = $password;

}
}
//echo $check;

if($check==1)
{
echo '<script type="text/javascript">alert("Login Success!");</script>';
include 'aftlogin.php';
}
else
{
echo '<script type="text/javascript">alert("Login Failed! Please try again.");</script>';
include 'index.php';
}
?>