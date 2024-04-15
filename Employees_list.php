<!-- change baki ache -->

<?php
session_start();
include_once("Connection.php");
$obj=new conn1();
$objconn=$obj->fn();

$query="Select * from employees where 1";
// echo($query);
$result=$objconn->prepare($query);
$result->execute();
$row = $result->fetchAll(PDO::FETCH_ASSOC);
// foreach($row as $key=>$value){  
//     echo $row[$key]."<br>";
// }
// print_r($row);

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
    <title>Employees!</title>
  </head>
<body>
    <table cellspacing="5" cellpading="10" border="2">
        <thead>
            <th>Employee_ID</th>
            <th>Employee_Name</th>
            <th>Employee_Dept</th>
            <th>Employee_Phone_No</th>
            <th>Employee_Email</th>
        </thead>
        <tbody>
          <?php
          foreach($row as $sayan=>$v)
          {
          ?>
          <tr>
            <td><?php echo $row[$sayan]['Emp_ID']; ?></td>
            <td><?php echo $row[$sayan]['Emp_Name']; ?> </td>
            <td><?php echo $row[$sayan]['Emp_Dept']; ?> </td>
            <td> <?php echo $row[$sayan]['Emp_Phone_No']; ?></td>
            <td> <?php echo $row[$sayan]['Emp_Email']; ?></td>
          </tr>
            <?php
          }
            ?>
        </tbody>
<!-- Ekhane sob kota Employees er details dekhacchena -->
    </table>

  </div>
</div>
</body>
</html>
