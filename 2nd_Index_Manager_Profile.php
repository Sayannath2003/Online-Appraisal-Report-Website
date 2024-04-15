<?php
session_start();
include_once("Connection.php");
$obj=new conn1();
$objconn=$obj->fn();

$Manager_ID=$_SESSION["Manager_ID"];
$query="Select * from Manager where Manager_ID='$Manager_ID'";
echo($query);
$result=$objconn->prepare($query);
$result->execute();
$row = $result->fetch(PDO::FETCH_ASSOC);
foreach($row as $key=>$value){  
    echo $row[$key]."<br>";
}
// <a href="http://localhost/proj/2nd_Index.php"> BACK</a>

?>


