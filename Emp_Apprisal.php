<?php
session_start();
include_once("Connection.php");
$obj=new conn1();
$objconn=$obj->fn();

$Emp_ID_Manager=$_SESSION["Emp_ID_Manager"];
$query="Select * from apprisal where Emp_ID='$Emp_ID_Manager'";
echo($query);
$result=$objconn->prepare($query);
$result->execute();
$row = $result->fetch(PDO::FETCH_ASSOC);
// foreach($row as $key=>$value){  
//     echo $row[$key]."<br>";
// }
print_r($row);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap4.css">
    <link rel="stylesheet" href="2nd_Index_Emp_Profile.css">
    <title>Employee's Appraisal!</title>
  </head>
<body>

    <div class="alert alert-warning container" role="alert">
        <h1>Employee ID : <?php echo $row['Emp_ID']; ?></h1>
        <br>
        <h1>Employee Name : <?php echo $row['Emp_Name']; ?></h1>
        <br>
        <h1>Employee Department : <?php echo $row['Emp_Dept']; ?></h1>
        <br>
        <h1>Employee Appraisal Date: <?php echo $row['appraisalDate_Emp']; ?></h1>
        <br>
        <h1>Office Ambiene Rating : <?php echo $row['office_ambience_rating_Emp']; ?></h1>
        <br>
        <h1>Office Ambience comment: <?php echo $row['office_ambience_comment_Emp']; ?></h1>
        <br>
        <h1>Manager Behaviour Rating : <?php echo $row['manager_behaviour_rating_Emp']; ?></h1>
        <br>
        <h1>Manager Behaviour Comment : <?php echo $row['manager_behaviour_comment_Emp']; ?></h1>
        <br>
        <h1>Other Stuff Rating : <?php echo $row['other_stuff_rating_Emp']; ?></h1>
        <br>
        <h1>Other Stuff Comment : <?php echo $row['other_stuff_rating_comment_Emp']; ?></h1>
        <br>
        <h1>Activity Done : <?php echo $row['activitydone_Emp']; ?></h1>
        <br>
        <h1>Specialized in : <?php echo $row['specializedin_Emp']; ?></h1>
        <br>
        <h1>Recommandation : <?php echo $row['recommendations_Emp']; ?></h1>
        <br>
        <h1>Overall comment : <?php echo $row['overallComments_Emp']; ?></h1>
    </div>
  </div>
  
 
  
</div>


</body>
</html>


