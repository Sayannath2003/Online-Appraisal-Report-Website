<?php
include_once('Connection_signup.php');

$obj = new conn1();
$objconn = $obj->fn();

$Manager_ID  = $_POST["Manager_ID"];
$Password = $_POST["Password"];
$Manager_Name = $_POST["Manager_Name"];
$Manager_Age = $_POST["Manager_Age"];
$Manager_Address = $_POST["Manager_Address"];
$Manager_Phone_No = $_POST["Manager_Phone_No"];
$Manager_Joining_Date = $_POST["Manager_Joining_Date"];
$Manager_Email = $_POST["Manager_Email"];


$check = "SELECT COUNT(Manager_ID) as cnt FROM Manager WHERE Manager_ID = '$Manager_ID'";
$result2 = $objconn->prepare($check);
$result2->execute();
$cnt1 = $result2->fetch(PDO::FETCH_ASSOC);

if ($cnt1['cnt'] == 0) {

    $query = "INSERT INTO Manager (Manager_ID, Password, Manager_Name, Manager_Age, Manager_Address, Manager_Phone_No, Manager_Joining_Date, Manager_Email) VALUES ('$Manager_ID', '$Password', '$Manager_Name', '$Manager_Age', '$Manager_Address', '$Manager_Phone_No', '$Manager_Joining_Date', '$Manager_Email')";
    $result = $objconn->prepare($query);
    $result->execute();
    //Manager phone number random value chole asche

    echo "Record inserted successfully!";  //Egulo show korchena direct 1st login page e chole jacche
    echo "Click here to go to Login Page---> <a href='Bootstrap_index_Manager.html'>Sign In</a>";
} else {
    echo "Sorry, user name already exists.";
}
?>
