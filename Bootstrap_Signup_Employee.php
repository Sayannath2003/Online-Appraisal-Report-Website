<?php
include_once('Connection_signup.php');

$obj = new conn1();
$objconn = $obj->fn();

$Emp_ID = $_POST["Emp_ID"];
$Password = $_POST["Password"];
$Emp_Name = $_POST["Emp_Name"];
$Emp_Dept = $_POST["Emp_Dept"];
$Emp_Age = $_POST["Emp_Age"];
$Emp_Address = $_POST["Emp_Address"];
$Emp_Phone_No = $_POST["Emp_Phone_No"];
$Emp_Joining_Date = $_POST["Emp_Joining_Date"];
$Emp_Email = $_POST["Emp_Email"];


$check = "SELECT COUNT(Emp_ID) as cnt FROM Employees WHERE Emp_ID = '$Emp_ID'";
$result2 = $objconn->prepare($check);
$result2->execute();
$cnt1 = $result2->fetch(PDO::FETCH_ASSOC);

if ($cnt1['cnt'] == 0) {
   
    $query = "INSERT INTO Employees (Emp_ID, Password, Emp_Name, Emp_Dept, Emp_Age, Emp_Address, Emp_Phone_No, Emp_Joining_Date, Emp_Email) VALUES ('$Emp_ID', '$Password', '$Emp_Name', '$Emp_Dept', '$Emp_Age', '$Emp_Address', '$Emp_Phone_No', '$Emp_Joining_Date', '$Emp_Email')";
    $result = $objconn->prepare($query);
    $result->execute();
    echo($query);
    echo "Record inserted successfully!";
    echo "Click here to go to Login Page---> <a href='Bootstrap_index_Employee.html'>Sign In</a>";
} else {
    echo "Sorry, user name already exists.";  //Ei msg gulo dekhacche na. direct 1st page e chole jacche
}

//Autogenerate Emp_ID kora baki ache
?>


