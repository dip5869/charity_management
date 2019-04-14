<?php
$con=pg_connect("user=postgres dbname=charity");


$name=$_POST['name'];
$amount=$_POST['amount'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$trust_name=$_POST['trust_name'];


$q="select * from pp where name='$name'";
$r=pg_query($con,$q);
$num=  pg_num_rows($r);

if($num==1)
{
	echo"<h1>USER ALREADY REGISTERED!!!...please wait we will redirect to registration within FOUR second.</h1>";
header( "refresh:4;url=PayUMoney_form.php");
}
else
{
	$reg="insert into pp(name,amount,email,phone,trust_name) values('$name','$amount','$email','$phone','$trust_name')";
	pg_query($con,$reg);
	echo"<h1>Registration Succesfull...please wait...</h1>";
header( "refresh:4;url=PayUMoney_form.php");
}

?>

