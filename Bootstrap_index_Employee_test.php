<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap4.css">

    <title>Employee Sign In!</title>
  </head>
  <body>
    <div class="alert alert-primary" role="alert">
      Please use Correct Username...
    </div>
    <div class="shadow-lg p-3 mb-5 bg-white rounded"><h1>Employee Sign In!</h1></div>
    
    
    <!-- Optional JavaScript; choose one of the two! -->
    
    
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="jquery.js" ></script>
    <script src="bootstrap4.js"></script>
    
    <div class="col-3">
      <form action="1st_Page_Emp.php" method="POST" enctype="">
        <div class="form-group">
          <label for="exampleInputEmail1">Employee ID:</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="Emp_ID" aria-describedby="emailHelp" placeholder="Employee ID" required>
          <small id="emailHelp" class="form-text text-muted">Example - E_####</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password:</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="Password" placeholder="Password"required>
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
      <br>
      <p class="signup"> <a href="Bootstrap_Signup_Employee.html">Signup</a></p>
      <p class="forgotpsd"> <a href="Bootstrap_Forget_Password_Employee.html">Forget Password?</a></p>
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      
     <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
    </div>
<?php
$emp_no=$_GET['emp_id'];
$age=$_GET['age'];
echo $emp_no;
$sql="SELECT * FROM employees WHERE Emp_ID='$emp_no'";
echo $sql;
?>
  </body>
</html>
