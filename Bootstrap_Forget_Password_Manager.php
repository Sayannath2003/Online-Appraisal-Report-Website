<?php
include_once('Connection_signup.php');

$obj=new conn1();
$objconn=$obj->fn();



// $Prev_Username=$_POST["Prev_Username"]
$Manager_ID=$_POST["Manager_ID"];
$Password=$_POST["Password"];


$query="Update Manager set Password='$Password' where Manager_ID='$Manager_ID'";
echo($query);
echo("<br>  <br>"); 
echo("Your Password is Updated to $Password");
$result=$objconn->prepare($query);
$result->execute();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap4.css">
    <link rel="stylesheet" href="./style.css">
    <!-- <link rel="stylesheet" href="2nd_INDEX.css"> -->
    <title>Updated!!</title>
</head>
<body>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Thank You!!</strong> Your Password is updated successfully
  <br>
  Your Password is Updated to <?php "$Password" ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <!-- Close button kaj korchena -->
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<br><br>
</body>
</html>

