<?php

class conn1{
    function fn(){
      if($_SESSION['abc']=='abc')
{
    // echo '';
}else{
    header("Location: Index.html");
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return ($conn);
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
}
}
?>
