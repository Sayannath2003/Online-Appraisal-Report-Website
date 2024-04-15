<?php
session_start();
include_once('Connection.php');

$obj = new conn1();
$objconn = $obj->fn();

$Emp_ID=$_SESSION["Emp_ID"];
$Update_Emp_Dept  = $_POST["Update_Emp_Dept"];
$Update_Emp_Age  = $_POST["Update_Emp_Age"];
$Update_Emp_Address = $_POST["Update_Emp_Address"];
$Update_Emp_Phone_No = $_POST["Update_Emp_Phone_No"];
$Update_Emp_Email = $_POST["Update_Emp_Email"];


$check = "UPDATE `employees` SET `Emp_Dept`='$Update_Emp_Dept',`Emp_Age`='$Update_Emp_Age',`Emp_Address`='$Update_Emp_Address',`Emp_Phone_No`='$Update_Emp_Phone_No',`Emp_Email`='$Update_Emp_Email' WHERE  `Emp_ID`='$Emp_ID'";
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
  <p>Depatment :  <?php echo $Update_Emp_Dept ?> </p>
  <p>Age :  <?php echo $Update_Emp_Age ?> </p>
  <p>Address : <?php echo $Update_Emp_Address ?> </p>
  <p>Phone Number : <?php echo $Update_Emp_Phone_No ?> </p>
  <p>Email : <?php echo $Update_Emp_Email ?></p>
</div>

    
</body>
</html>