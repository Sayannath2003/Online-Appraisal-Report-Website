<?php
session_start();
include_once('Connection.php');
// print_r($_POST);
$obj=new conn1();
$objconn=$obj->fn();


$Emp_ID=$_POST["Emp_ID"];
$Emp_Name=$_POST["Emp_Name"];
$Emp_Dept_Choose=$_POST["Emp_Dept_Choose"];
$status=1;

$query2 = "select * from choose where Department='$Emp_Dept_Choose'";
// echo $query2;
$result2=$objconn->prepare($query2);
$result2->execute();
$row2 = $result2->fetch(PDO::FETCH_ASSOC); 
$manager=$row2['Manager_ID'];
$teamlead=$row2['Teamlead_ID'];




$appraisalDate_Emp=$_POST["appraisalDate_Emp"];
$Start=$_POST["Start"];
$End=$_POST["End"];
$Brief_Description_Duties_Emp=$_POST["Brief_Description_Duties_Emp"];
$Target1=$_POST["Target1"];
$Achievement1=$_POST["Achievement1"];
$Target2=$_POST["Target2"];
$Achievement2=$_POST["Achievement2"];
$Target3=$_POST["Target3"];
$Achievement3=$_POST["Achievement3"];
$Target4=$_POST["Target4"];
$Achievement4=$_POST["Achievement4"];
$Brief_Achievements_Emp=$_POST["Brief_Achievements_Emp"];
$Brief_Shortfalls_Emp=$_POST["Brief_Shortfalls_Emp"];
$Annual_Return_On_Immovable_Property_Emp=$_POST["Annual_Return_On_Immovable_Property_Emp"];
$overallComments_Emp=$_POST["overallComments_Emp"];

$query = "INSERT INTO apprisal (Emp_ID, Emp_Name, Emp_Dept, appraisalDate_Emp, `Start`, `End`, Brief_Description_Duties_Emp, Target1, Achievement1, Target2, Achievement2, Target3, Achievement3, Target4, Achievement4, Brief_Achievements_Emp, Brief_Shortfalls_Emp, Annual_Return_On_Immovable_Property_Emp, overallComments_Emp, Manager_ID, Teamlead_ID,`Status`) 
VALUES ('$Emp_ID', '$Emp_Name', '$Emp_Dept_Choose', '$appraisalDate_Emp', '$Start', '$End', '$Brief_Description_Duties_Emp', '$Target1', '$Achievement1', '$Target2', '$Achievement2', '$Target3', '$Achievement3', '$Target4', '$Achievement4', '$Brief_Achievements_Emp', '$Brief_Shortfalls_Emp', '$Annual_Return_On_Immovable_Property_Emp', '$overallComments_Emp', '$manager', '$teamlead', '$status')";

// $query = "INSERT INTO apprisal (Emp_ID, Emp_Name, Emp_Dept, appraisalDate_Emp, Start, End, Brief_Description_Duties_Emp, Target1, Achievement1, Target2, Achievement2, Target3, Achievement3, Target4, Achievement4, Brief_Achievements_Emp, 	Brief_Shortfalls_Emp, Annual_Return_On_Immovable_Property_Emp, 	overallComments_Emp, status, Manager_ID, Teamlead_ID) VALUES ('$Emp_ID', '$Emp_Name', '$Emp_Dept_Choose', '$appraisalDate_Emp', '$Start', '$End', '$Brief_Description_Duties_Emp', '$Target1', '$Achievement1', '$Target2', '$Achievement2', '$Target3', '$Achievement3', '$Target4', '$Achievement4', '$Brief_Achievements_Emp', '$Brief_Shortfalls_Emp', '$Annual_Return_On_Immovable_Property_Emp','$overallComments_Emp',$status, '$manager', '$teamlead')";
   
// echo($query);

$result=$objconn->prepare($query);
$result->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap4.css">
    <link rel="stylesheet" href="./style.css">
    <!-- <link rel="stylesheet" href="2nd_INDEX.css"> -->
    <title>Submitted!!</title>
</head>
<body>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Thank You!!</strong> Your record is submitted successfully
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <!-- Close button kaj korchena -->
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<br><br>


<!-- Start -->
<div class="container">
            <b>Employee Appraisal:</b>
            <br><br>

<!-- Emp er ota -->
                <label for="Emp_ID">Employee ID:</label>
                <Span><?php echo $Emp_ID  ?> </Span>
                <br>
                <label for="Emp_Name">Employee Name:</label>
                <span><?php echo $Emp_Name ?></span>
                <br>
                <label for="Emp_Dept_Choose">Employee Department:</label>
                <span><?php echo $Emp_Dept_Choose; ?></span>
                <br>
                <label for="appraisalDate_Emp">Employee Appraisal Date:</label>
                <span><?php echo $appraisalDate_Emp ?></span>
                <br>
                <label for="Start">Starting Month and Year:</label>
                <span><?php echo $Start ?></span>
                <br>
                <label for="End">Ending Month and Year:</label>
                <span><?php echo $End ?></span>
                <br>
                <label for="Brief_Description_Duties_Emp">(1) Brief description of duties:</label>
                <span><?php echo $Brief_Description_Duties_Emp ?></span>
                <br>
                <div class="form-group">
                <label for="manager_behaviour_comment_Emp">(2) Please specify the quantitative/physical/financial/targets/objectives set for yourself or that were set for your achievement against each target:</label>
                <table cellspacing="2" cellpading="5" border="1">
                    <thead>
                        <tr>
                            <th>Sl No.</th>
                            <th>Target</th>
                            <th>Achievement</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><span><?php echo $Target1 ?></span></td>
                            <td><span><?php echo $Achievement1 ?></span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><span><?php echo $Target2 ?></span></td>
                            <td><span><?php echo $Achievement2 ?></span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><span><?php echo $Target3 ?></span></td>
                            <td><span><?php echo $Achievement3 ?></span></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><span><?php echo $Target4 ?></span></td>
                            <td><span><?php echo $Achievement4 ?></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <label for="Brief_Achievements_Emp">(3) Please state briefly your achievements with reference to targets/objectives referred to in column 2. Please also indicate significantly higher achievements in relation to the targets and your contribution there to:</label>
            <span><?php echo $Brief_Achievements_Emp ?></span>
            <br>
            <label for="Brief_Shortfalls_Emp">(4) Please state briefly the shortfalls with reference to the targets/objectives referred to in column 2. PLease specify the constraints, if any, in achieving the targets:</label>
            <span><?php echo $Brief_Shortfalls_Emp ?></span>
            <br>
            <label for="Annual_Return_On_Immovable_Property_Emp">(5) Please state whether the Annual Return on immovable property for the preceding Calendar Year was filed within the prescribed date i.e. 31th January of the year following the Calender Year. If not the date of filing the return should be given. </label>
            <span><?php echo $Annual_Return_On_Immovable_Property_Emp ?></span>
            <br>
            <label for="overallComments_Emp">Overall Comments:</label>
            <span><?php echo $overallComments_Emp ?></span>
            <br><br>


<!-- End -->





<form action="Update_Apprisal_Emp.php">
<input type="submit" value="Review and Submit">
</form>

<p>Want to go to the 1st page??? <a href="0th_Page_Emp.html">Click here!!</a></p>


<form action="logout.php">
    <input type="submit" value="Log out">
</form>
</body>
</html>
