<?php
include_once('Connection_signup.php');

$obj=new conn1();
$objconn=$obj->fn();



// $Prev_Username=$_POST["Prev_Username"]
$Teamlead_ID=$_POST["Teamlead_ID"];
$Password=$_POST["Password"];


$query="Update Teamlead set Password='$Password' where Teamlead_ID='$Teamlead_ID'";
echo($query);
echo("<br>  <br>"); 
echo("Your Password is Updated to $Password");
$result=$objconn->prepare($query);
$result->execute();



?>
