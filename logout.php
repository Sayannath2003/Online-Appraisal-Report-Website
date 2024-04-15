<?php

session_start();
// $_SESSION['abc']='abc';
// include_once('Connection.php');


class conn2{
    function fnout(){
        session_start();
        // session_abort();
        session_destroy();
        
        header("Location:logout.html");
    }
}


$obj2=new conn2();
$objconn=$obj2->fnout();

// fnout();

echo("SUccesfully logged out"."<br>"."Want to Login again?"."<br>"."<br>");
?>