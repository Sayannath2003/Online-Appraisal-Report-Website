<?php
session_start();
$_SESSION['abc']='abc';

include_once('Connection.php');

$obj=new conn1();
$objconn=$obj->fn();
// print_r($_POST);

$Manager_ID=$_POST["Manager_ID"];
$Password=$_POST["Password"];

$check="Select count(Manager_ID) as cnt from Manager where Manager_ID='$Manager_ID' and Password='$Password'";
// echo($check."<br>");


$result=$objconn->prepare($check);
$result->execute();

//For Username
$res=$result->fetch(PDO::FETCH_ASSOC);
$count=$res['cnt'];

if($count){
    $_SESSION["Manager_ID"]=$Manager_ID;
     header("Location:Choose_Apprisal_Manager.php");
}
else {
    // echo '<div class="alert alert-danger" role="alert">
    //         Sorry, no username found. Please <a href="./Bootstrap_Signup_Manager.html">register your account</a> or check your password and try again.
    //       </div>';
    session_destroy();
}
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
            <p>"<b>No User ID found, </b>Check your <b> Manager ID </b> or <b> Password </b> and try again"</p>
            <hr>
            <p class="mb-0">If you don't have your account then plese <a href="./Bootstrap_Signup_Manager.html">Resister your Manager account</a></p>
        </div>
    </body>
    </html>
