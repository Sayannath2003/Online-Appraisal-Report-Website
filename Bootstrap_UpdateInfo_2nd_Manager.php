<?php
session_start();
include_once('Connection.php');

$obj = new conn1();
$objconn = $obj->fn();

$Manager_ID=$_SESSION["Manager_ID"];
$Update_Manager_Age  = $_POST["Update_Manager_Age"];
$Update_Manager_Address = $_POST["Update_Manager_Address"];
$Update_Manager_Phone_No = $_POST["Update_Manager_Phone_No"];
$Update_Manager_Email = $_POST["Update_Manager_Email"];


$check = "UPDATE `manager` SET `Manager_Age`='$Update_Manager_Age',`Manager_Address`='$Update_Manager_Address',`Manager_Phone_No`='$Update_Manager_Phone_No',`Manager_Email`='$Update_Manager_Email' WHERE `Manager_ID`='$Manager_ID'";
// echo($check);


$result2 = $objconn->prepare($check);
$result2->execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap4.css">
    <title>Update Done!!</title>
  </head>
<body>
<div class="alert alert-primary" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>Aww yeah, you have successfully updated your details.</p>
  <hr>
  <p class="mb-0"><b>Your updated details are...</b> </p>
  <br>
  <p>Age :  <?php echo $Update_Manager_Age ?> </p>
  <p>Address : <?php echo $Update_Manager_Address ?> </p>
  <p>Phone Number : <?php echo $Update_Manager_Phone_No ?> </p>
  <p>Email : <?php echo $Update_Manager_Email ?></p>
</div>

    
</body>
</html>