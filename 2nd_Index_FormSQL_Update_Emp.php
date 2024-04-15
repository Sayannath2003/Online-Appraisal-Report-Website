<?php
session_start();
include_once('Connection.php');
// print_r($_POST);
$obj=new conn1();
$objconn=$obj->fn();


$Emp_ID=$_SESSION["Emp_ID"];
$Emp_Name=$_POST["Emp_Name"];
$Emp_Dept_Choose=$_POST["Emp_Dept_Choose"];
// if(isset($_POST["naam1"]){
//   $status=1;
// }
// else{
//   $status=2;
// }
$appraisalDate_Emp=$_POST["appraisalDate_Emp"];
$Start=$_POST["Start"];
$End=$_POST["End"];
$Brief_Description_Duties_Emp=$_POST["Brief_Description_Duties_Emp"];
$Target1=$_POST["Target1"];
$Achievement1=$_POST["Achievement1"];
$Target2=$_POST["Target2"];
$Achievement2=$_POST["Achievement2"];
$Target3=$_POST["Target3"];
$Achievement3=$_POST["Achievement3"];
$Target4=$_POST["Target4"];
$Achievement4=$_POST["Achievement4"];
$Brief_Achievements_Emp=$_POST["Brief_Achievements_Emp"];
$Brief_Shortfalls_Emp=$_POST["Brief_Shortfalls_Emp"];
$Annual_Return_On_Immovable_Property_Emp=$_POST["Annual_Return_On_Immovable_Property_Emp"];
$overallComments_Emp=$_POST["overallComments_Emp"];
$Status=2;

$query = "UPDATE apprisal SET appraisalDate_Emp = '$appraisalDate_Emp', Start = '$Start', End = '$End',
    Brief_Description_Duties_Emp = '$Brief_Description_Duties_Emp', Target1 = '$Target1', Achievement1 = '$Achievement1', Target2 = '$Target2',    Achievement2 = '$Achievement2', Target3 = '$Target3',  Achievement3 = '$Achievement3', Target4 = '$Target4', Achievement4 = '$Achievement4',
    Brief_Achievements_Emp = '$Brief_Achievements_Emp', Brief_Shortfalls_Emp = '$Brief_Shortfalls_Emp', Annual_Return_On_Immovable_Property_Emp = '$Annual_Return_On_Immovable_Property_Emp',overallComments_Emp = '$overallComments_Emp',Status=$Status WHERE Emp_ID = '$Emp_ID'";
   
// echo($query);

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
  <strong>Thank You!!</strong> Your record is updated successfully
  <br><br>
  <p>Want to go back in 1st Page?? <a href="0th_Page_Emp.html">Click here</a></p>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <!-- Close button kaj korchena -->
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<br><br>

<form action="logout.php">
    <input type="submit" value="Log out">
</form>
</body>
</html>
