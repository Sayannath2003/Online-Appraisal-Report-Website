<?php
session_start();

//Function
include_once("Connection.php");
$obj=new conn1();
$objconn=$obj->fn();

$Emp_ID=$_SESSION["Emp_ID"];
$today=date("Y-m-d");
$query="Select * from Employees where Emp_ID='$Emp_ID'";
// echo($query."<br>");

$result1 = $objconn->prepare($query);
$result1->execute();
$row = $result1->fetch(PDO::FETCH_ASSOC); 
// echo $row['Emp_Name'];
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
    <link rel="stylesheet" href="./style.css">
    <!-- <link rel="stylesheet" href="2nd_INDEX.css"> -->
    
    <title>Welcome page for Employees</title>
</head>                                                                                                                                                 
<body>
    
    <header class="header" id="box1" >
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Well done!!</strong> You have successfully logged in to your account
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <!-- Close button kaj korchena -->
    <span aria-hidden="true">&times;</span>
  </button>
</div>
        <div class="first">
            <h1><a href="https://www.google.com/">Annual Appraisal Report(Employees)</a></h1>
        </div>
        <nav class="navigation">
            <ul class="nav">
                <li><a href="Bootstrap_UpdateInfo_2nd_Emp1.php">Update info</a></li>
                <li><a href="Employees_list.php">Employees</a></li> 
                <li><a href="Managers_list.php">Managers</a></li> 
                <li><a href="Teamlead_list.php">Teamlead</a></li>
            </ul>
        </nav>
    </header>
    <!-- User Details -->
    <div class="container mt-1" style="width:300px" id="box2">
    
        <img class="card-img-top" src="./userimage.jpg" alt="Card image">
        <div class="card-body">
            <h4 class="card-title"><?php echo $Emp_ID ?></h4>
            <p class="card-text"><?php echo $row['Emp_Name'];  ?></p>
            <a href="2nd_Index_Emp_Profile.php" class="btn btn-primary">See Profile</a>
        </div>
    </div>
    <div class="container mt-5">
        <form action="./2nd_Index_FormSQL_Emp.php" method="post">
            <div class="form-group">
                <label for="Emp_ID">Employee ID:</label>
                <input type="text" class="form-control" id="Emp_ID" value="<?php echo $Emp_ID  ?>"  name="Emp_ID" readonly>
            </div>
            
            <!-- <div class="form-group">
                <label for="Emp_Name">Name:</label>
                <input type="text" class="form-control" id="Emp_Name" name="Emp_Name" placeholder="Enter your name" required >
            </div> -->
            <div class="form-group">
                <label for="Emp_Name">Name:</label>
                <input type="text" class="form-control" id="Emp_Name" value="<?php echo $row['Emp_Name']; ?>" name="Emp_Name" readonly>
            </div>
            <div class="form-group">
                <label for="Emp_Dept_Choose">Department:</label>
                <input type="text" class="form-control" id="Emp_Dept_Choose" value="<?php echo $row['Emp_Dept']; ?>" name="Emp_Dept_Choose" readonly>
            </div>
            
<!-- Manual 
            <div class="form-group">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Choose Your Department:</label>
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="Emp_Dept_Choose">
                <option selected>Choose...</option>
                <option value="Technical">Technical</option>
                <option value="Marketing">Marketing</option>
                <option value="Design">Design</option>
                <option value="Outreach">Outreach</option>
                <option value="Finance">Finance</option>
            </select>
        </div> -->




            <div class="form-group">
                <label for="appraisalDate_Emp">Appraisal Date:</label>
                <input type="date" class="form-control" id="appraisalDate_Emp" name="appraisalDate_Emp" value="<?php echo $today; ?>" placeholder="Month-Year" required>
            </div>
<!-- SystemDate hocche na -->
            <div class="form-group">
                <label for="Start">Starting Month and Year:</label>
                <input type="text" class="form-control" id="Start" name="Start" placeholder="Month-Year" required>
            </div>
            <div class="form-group">
                <label for="End">Ending Month and Year:</label>
                <input type="text" class="form-control" id="End" name="End" placeholder="Month-Year" required>
            </div>
            <div class="form-group">
                <label for="Brief_Description_Duties_Emp">1. Brief description of duties:</label>
                <textarea class="form-control" id="Brief_Description_Duties_Emp" name="Brief_Description_Duties_Emp" placeholder="Write your Brief description of your duties here!!"></textarea>
            </div>
            <div class="form-group">
                <label for="manager_behaviour_comment_Emp">2. Please specify the quantitative/physical/financial/targets/objectives set for yourself or that were set for your achievement against each target:</label>
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
                            <td><textarea class="form-control" id="Target1" name="Target1" rows="4" placeholder="Write your 1st Target here!!"></textarea></td>
                            <td><textarea class="form-control" id="Achievement1" name="Achievement1"rows="4"  placeholder="Write your 1st Achievement here!!"></textarea></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><textarea class="form-control" id="Target2" name="Target2" rows="4" placeholder="Write your 2nd Target here!!"></textarea></td>
                            <td><textarea class="form-control" id="Achievement2" name="Achievement2"rows="4"  placeholder="Write your 2nd Achievement here!!"></textarea></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><textarea class="form-control" id="Target3" name="Target3"rows="4"  placeholder="Write your 3rd Target here!!"></textarea></td>
                            <td><textarea class="form-control" id="Achievement3" name="Achievement3"rows="4"  placeholder="Write your 3rd Achievement here!!"></textarea></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><textarea class="form-control" id="Target4" name="Target4" rows="4" placeholder="Write your 4th Target here!!"></textarea></td>
                            <td><textarea class="form-control" id="Achievement4" name="Achievement4"rows="4"  placeholder="Write your 4th Achievement here!!"></textarea></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            

            <div class="form-group">
                <label for="Brief_Achievements_Emp">3. Please state briefly your achievements with reference to targets/objectives referred to in column 2. Please also indicate significantly higher achievements in relation to the targets and your contribution there to:</label>
                <textarea class="form-control" id="Brief_Achievements_Emp" name="Brief_Achievements_Emp" rows="4" placeholder="Write your Brief Achievements here!!"></textarea>
            </div>


            <div class="form-group">
                <label for="Brief_Shortfalls_Emp">4. Please state briefly the shortfalls with reference to the targets/objectives referred to in column 2. PLease specify the constraints, if any, in achieving the targets:</label>
                <textarea class="form-control" id="Brief_Shortfalls_Emp" name="Brief_Shortfalls_Emp" rows="4" placeholder="Write your Brief Shortfalls here!!"></textarea>
            </div>

            <div class="form-group">
                <label for="Annual_Return_On_Immovable_Property_Emp">5. Please state whether the Annual Return on immovable property for the preceding Calendar Year was filed within the prescribed date i.e. 31th January of the year following the Calender Year. If not the date of filing the return should be given. </label>
                <textarea class="form-control" id="Annual_Return_On_Immovable_Property_Emp" name="Annual_Return_On_Immovable_Property_Emp" rows="4" placeholder="Write your Annual return on immovable Property for the preceding Calendar Year was filed within the prescribed date  here!!"></textarea>
            </div>

            <div class="form-group">
                <label for="overallComments_Emp">Overall Comments:</label>
                <textarea class="form-control" id="overallComments_Emp" name="overallComments_Emp" rows="4"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
        <br><br>
        <form action="logout.php">
            <input type="submit" value="Log out">
        </form>
    </div>
    </div>
    </div>
    <!-- <form action="logout.php">
        <input type="submit" value="Log out">
    </form> -->

</body>
</html>