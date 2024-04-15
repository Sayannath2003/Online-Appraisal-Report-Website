<?php
session_start();
include_once("Connection.php");
$obj=new conn1();
$objconn=$obj->fn();

$query="Select * from Manager where 1";
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
    <title>Managers!</title>
  </head>
<body>
    <table cellspacing="5" cellpading="10" border="2">
        <thead>
            <th>Manager_ID</th>
            <th>Manager_Name</th>
            <th>Manager_Phone_No</th>
            <th>Manager_Email</th>
        </thead>
        <tbody>
            <?php
            foreach($row as $sayan=>$v)
            {
            ?>

            <tr>
                <td><?php echo $row[$sayan]['Manager_ID']; ?></td>
                <td><?php echo $row[$sayan]['Manager_Name']; ?> </td>
                <td> <?php echo $row[$sayan]['Manager_Phone_No']; ?></td>
                <td> <?php echo $row[$sayan]['Manager_Email']; ?></td>
            </tr>
            <?php
          }
        ?>

        </tbody>
    </table>
  </div>
</div>
</body>
</html>
