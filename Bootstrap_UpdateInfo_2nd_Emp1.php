<?php
session_start();

//Function
include_once("Connection.php");
$obj=new conn1();
$objconn=$obj->fn();

$Emp_ID=$_SESSION["Emp_ID"];

$query="Select * from Employees where Emp_ID='$Emp_ID'";
// echo($query."<br>");

$result1 = $objconn->prepare($query);
$result1->execute();
$row = $result1->fetch(PDO::FETCH_ASSOC); 

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
    <title>Employee Update details!</title>
  </head>
  <body>
    <div class="shadow-lg p-3 mb-5 bg-white rounded"><h1>Update your details here...(Employee)</h1></div>
    
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="jquery.js" ></script>
    <script src="bootstrap4.js"></script>
    <div class="container col-6" >
    <form method="POST">

          <!-- <div class="form-group">
            <label for="exampleInputEmail1">Enter Employee Department for update:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="Update_Emp_Dept" value="<?php echo $row['Emp_Dept']; ?>" aria-describedby="emailHelp" placeholder="Enter Department for update" pattern="[\d]+">
          </div> -->
          <div class="form-group">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Choose Your Department:</label>
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="Update_Emp_Dept">
                <option selected value=<?php echo $row['Emp_Dept']; ?>><?php echo $row['Emp_Dept']; ?></option>
                <option value="Technical">Technical</option>
                <option value="Marketing">Marketing</option>
                <option value="Design">Design</option>
                <option value="Outreach">Outreach</option>
                <option value="Finance">Finance</option>
            </select>
          </div>


          <div class="form-group">
            <label for="exampleInputEmail1">Enter Employee Age for update:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="Update_Emp_Age" value="<?php echo $row['Emp_Age']; ?>" aria-describedby="emailHelp" placeholder="Enter Age for update" pattern="[\d]+">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Enter Employee Address for update:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="Update_Emp_Address" value="<?php echo $row['Emp_Address']; ?>" aria-describedby="emailHelp" placeholder="Enter Address for update">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Enter Employee Phone Number for update:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="Update_Emp_Phone_No" value="<?php echo $row['Emp_Phone_No']; ?>" aria-describedby="emailHelp" pattern="[0-9]{10}" placeholder="Enter Phone Number for update">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Enter Employee Email for update:</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="Update_Emp_Email" value="<?php echo $row['Emp_Email']; ?>" aria-describedby="emailHelp" placeholder="email@example.com">
          </div>
        <button type="submit" class="btn btn-primary" formaction="Bootstrap_UpdateInfo_2nd_Emp.php" >Update</button>
      </form>
  </body>
</html>
