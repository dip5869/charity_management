<?php
$con=pg_connect("user=postgres dbname=charity");

$name=$_POST['name'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phno'];
$address=$_POST['address'];
$pass=$_POST['password'];

$q="select * from users where name='$name'";
$r=pg_query($con,$q);
$num=  pg_num_rows($r);

if($num==1)
{
	echo"<h1>USER ALREADY REGISTERED!!!...please wait we will redirect to registration within FOUR second.</h1>";
header( "refresh:4;url=register.php");
}
else
{
	$reg="insert into users(name,gender,email,phno,address,password) values('$name','$gender','$email','$phone','$address','$pass')";
	pg_query($con,$reg);
	echo"<h1>Registration Succesfull...please wait...</h1>";
header( "refresh:4;url=index.php");
}

?>

