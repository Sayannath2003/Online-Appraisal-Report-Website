<?php
session_start();
include_once("Connection.php");
$obj=new conn1();
$objconn=$obj->fn();

$Emp_ID=$_SESSION["Emp_ID"];
$query1="Select * from Apprisal where Emp_ID='$Emp_ID'";
// echo($query1);
$result1=$objconn->prepare($query1);
$result1->execute();
$row1 = $result1->fetchAll(PDO::FETCH_ASSOC);
// foreach($row as $key=>$value){  
//     echo $row[$key]."<br>";
// }
// print_r($row1);
// echo $row1['Department'];

// foreach($row as $key=>$value){  
//     echo $row[$key]."<br>";
// }
// print_r($row);
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap4.css">
    <link rel="stylesheet" href="2nd_Index_Emp_Profile.css">
    <title>See Employee Appraisal!!</title>
  </head>
<body>
  <h1><b>My appraisals</b></h1>
<table cellspacing="5" cellpading="10" border="2">
        <thead>
            <th>Employee_ID</th>
            <th>Employee_Name</th>
            <th>Employee_Dept</th>
            <th>appraisalDate_Emp</th>
            <th>Start</th>
            <th>End</th>
            <th>View</th>
            <th>Update</th>
        </thead>
        <tbody>
<?php


foreach($row1 as $k=>$v)
{
  $query1="Select * from Apprisal where Emp_ID='".$row1[$k]['Emp_ID']."'";
  // echo $query1;
  $result = $objconn->prepare($query1);
  $result->execute();
  $row2 = $result->fetch(PDO::FETCH_ASSOC); 
// echo $row1['Indicate_Areas_Of_Strength_And_Lesser_Strength'];

?>
          <tr>
            <td><?php echo $row2['Emp_ID']; ?></td>
            <td><?php echo $row2['Emp_Name']; ?> </td>
            <td><?php echo $row2['Emp_Dept']; ?> </td>
            <td><?php echo $row2['appraisalDate_Emp']; ?> </td>
            <td><?php echo $row2['Start']; ?> </td>
            <td><?php echo $row2['End']; ?> </td>
            <td> <a href="SeeYourRemarks_Emp.php?Emp_ID=<?php echo $row2['Emp_ID'];?>">View Appraisal!</a></td>
            <td> <?php 
            if($row2['Status']==1){
               echo '<a href="Update_Apprisal_Emp.php?Emp_ID='.$row2['Emp_ID'].'">Click here!</a>';
            }
            else{
              echo '<p>Done</p>';
            } ?>
            </td>
          </tr>
          <?php
}
       
            ?>
        </tbody>

    </table>
    <form action="logout.php">
    <input type="submit" value="Log out">
</form>
  </div>
</div>
</body>
</html>
