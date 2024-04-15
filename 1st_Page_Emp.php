<?php
session_start();
$_SESSION['abc']='abc';

include_once('Connection.php');

$obj=new conn1();
$objconn=$obj->fn();
// print_r($_POST);

$Emp_ID=$_POST["Emp_ID"];
$Password=$_POST["Password"];

$check="Select count(Emp_ID) as cnt from Employees where Emp_ID='$Emp_ID' and Password='$Password'";
// echo($check."<br>");


$result=$objconn->prepare($check);
$result->execute();

//For Username
$res=$result->fetch(PDO::FETCH_ASSOC);
$count=$res['cnt'];

if($count){
    $_SESSION["Emp_ID"]=$Emp_ID;
     header("Location:0th_Page_Emp.html");
}
else{
    

    // echo("Sorry no user name found, please Register your account or please check your Password and try again");
    // session_abort();
    session_destroy();
    
}

//ekhane else part e header diye onno page e giye dezine add kore debo.
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap4.css">
    
    <title>Password mismatched</title>
</head>
    <body>
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Sorry!</h4>
            <p>"Check your <b> Employee ID </b> or <b> Password </b> and try again"</p>
            <hr>
            <p class="mb-0">If you don't have your account then plese <a href="./Bootstrap_Signup_Employee.html">Resister your Employee account</a></p>
        </div>
    </body>
    </html>