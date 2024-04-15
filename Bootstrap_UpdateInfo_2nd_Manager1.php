<?php
session_start();

//Function
include_once("Connection.php");
$obj=new conn1();
$objconn=$obj->fn();

$Manager_ID=$_SESSION["Manager_ID"];

$query="Select * from Manager where Manager_ID='$Manager_ID'";
// echo($query."<br>");

$result1 = $objconn->prepare($query);
$result1->execute();
$row = $result1->fetch(PDO::FETCH_ASSOC); 
// echo $row['Manager_Name'];
// print_r($row);

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap4.css">
    <title>Manager Update details!</title>
  </head>
  <body>
    <div class="shadow-lg p-3 mb-5 bg-white rounded"><h1>Update your details here...(Manager)</h1></div>
    
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="jquery.js" ></script>
    <script src="bootstrap4.js"></script>
    <div class="container col-6" >
    <form method="POST">
        
          <div class="form-group">
            <label for="exampleInputEmail1">Enter Manager Age for update:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="Update_Manager_Age" value="<?php echo $row['Manager_Age']; ?>" aria-describedby="emailHelp" placeholder="Enter Age for update" pattern="[\d]+">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Enter Manager Address for update:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="Update_Manager_Address" value="<?php echo $row['Manager_Address']; ?>" aria-describedby="emailHelp" placeholder="Enter Address for update">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Enter Manager Phone Number for update:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="Update_Manager_Phone_No" value="<?php echo $row['Manager_Phone_No']; ?>" aria-describedby="emailHelp" pattern="[0-9]{10}" placeholder="Enter Phone Number for update">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Enter Manager Email for update:</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="Update_Manager_Email" value="<?php echo $row['Manager_Email']; ?>" aria-describedby="emailHelp" placeholder="email@example.com">
          </div>
        <button type="submit" class="btn btn-primary" formaction="Bootstrap_UpdateInfo_2nd_Manager.php" >Update</button>
      </form>
  </body>
</html>
