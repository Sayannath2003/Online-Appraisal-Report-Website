<?php
include_once('Connection_signup.php');

$obj=new conn1();
$objconn=$obj->fn();

// $Prev_Username=$_POST["Prev_Username"]
$Emp_ID=$_POST["Emp_ID"];
$Password=$_POST["Password"];


$query="Update Employees set Password='$Password' where Emp_ID='$Emp_ID'";
echo($query);
echo("<br>  <br>"); 
echo("Your Password is Updated to $Password");
$result=$objconn->prepare($query);
$result->execute();



?>
