<?php
include_once('Connection_signup.php');

$obj = new conn1();
$objconn = $obj->fn();

$Teamlead_ID  = $_POST["Teamlead_ID"];
$Password = $_POST["Password"];
$Teamlead_Name = $_POST["Teamlead_Name"];
$Teamlead_Age = $_POST["Teamlead_Age"];
$Teamlead_Address = $_POST["Teamlead_Address"];
$Teamlead_Phone_No = $_POST["Teamlead_Phone_No"];
$Teamlead_Joining_Date = $_POST["Teamlead_Joining_Date"];
$Teamlead_Email = $_POST["Teamlead_Email"];


$check = "SELECT COUNT(Teamlead_ID) as cnt FROM Teamlead WHERE Teamlead_ID = '$Teamlead_ID'";
$result2 = $objconn->prepare($check);
$result2->execute();
$cnt1 = $result2->fetch(PDO::FETCH_ASSOC);

if ($cnt1['cnt'] == 0) {

    $query = "INSERT INTO Teamlead (Teamlead_ID, Password, Teamlead_Name, Teamlead_Age, Teamlead_Address, Teamlead_Phone_No, Teamlead_Joining_Date, Teamlead_Email) VALUES ('$Teamlead_ID', '$Password', '$Teamlead_Name', '$Teamlead_Age', '$Teamlead_Address', '$Teamlead_Phone_No', '$Teamlead_Joining_Date', '$Teamlead_Email')";
    $result = $objconn->prepare($query);
    $result->execute();
    //Manager phone number random value chole asche

    echo "Record inserted successfully!";  //Egulo show korchena direct 1st login page e chole jacche
    echo "Click here to go to Login Page---> <a href='Bootstrap_index_Teamlead.html'>Sign In</a>";
} else {
    echo "Sorry, user name already exists.";
}
?>
