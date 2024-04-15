<?php
session_start();
include_once("Connection.php");
$obj=new conn1();
$objconn=$obj->fn();

$Teamlead_ID=$_SESSION["Teamlead_ID"];
$query1="Select * from Apprisal where Teamlead_ID='$Teamlead_ID' and Status in (4,5,6)";
// echo($query);
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
    <title>See Employee and Manager Appraisal!</title>
  </head>
<body>
  <h1>Appraisal List</h1>
    <table cellspacing="5" cellpading="10" border="2">
        <thead>
            <th>Employee_ID</th>
            <th>Employee_Name</th>
            <th>Employee_Dept</th>
            <th>appraisalDate_Emp</th>
            <th>Review for this Employee</th>
            <th>View Appraisal</th>
            <th>Update Appraisal</th>
        </thead>
        <tbody>
          <?php
          foreach($row1 as $k=>$v)
          {        
          $query="Select * from Apprisal where Emp_ID='".$row1[$k]['Emp_ID']."'";
          // echo($query);
          $result=$objconn->prepare($query);
          $result->execute();
          $row2 = $result->fetchAll(PDO::FETCH_ASSOC);
          foreach($row2 as $sayan=>$v)
          {
          ?>
          <tr>
            <td><?php echo $row2[$sayan]['Emp_ID']; ?></td>
            <td><?php echo $row2[$sayan]['Emp_Name']; ?> </td>
            <td><?php echo $row2[$sayan]['Emp_Dept']; ?> </td>
            <td><?php echo $row2[$sayan]['appraisalDate_Emp']; ?> </td>
            <td> <?php 
            if($row2[$sayan]['Status']==4){
               echo '<a href="2nd_Index_Teamlead.php?Emp_ID='.$row2[$sayan]['Emp_ID'].'">Click here!</a>';
            }
            else{
              echo '<p>Done</p>';
            } ?>
            <!-- <td> <a href="2nd_Index_Teamlead.php?Emp_ID=<?php echo $row2[$sayan]['Emp_ID'];?>">Click here!!</a></td> -->
            <td> <a href="Apprisal_Teamlead.php?Emp_ID=<?php echo $row2[$sayan]['Emp_ID'];?>">View Appraisal!</a></td>
            <td> <?php
            if($row2[$sayan]['Status']==5){
               echo '<a href="Update_Apprisal_Teamlead.php?Emp_ID='.$row2[$sayan]['Emp_ID'].'">Update Appraisal!</a>';
            }
            else{
              
            }?>
            <!-- <td> <a href="Update_Apprisal_Teamlead.php?Emp_ID=<?php echo $row[$sayan]['Emp_ID'];?>">Update Appraisal!</a></td> -->
          </tr>
            <?php
          }
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
