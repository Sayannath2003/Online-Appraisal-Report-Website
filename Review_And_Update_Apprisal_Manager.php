<?php
session_start();

//Function
include_once("Connection.php");
$obj=new conn1();
$objconn=$obj->fn();

$Manager_ID=$_SESSION["Manager_ID"];
$Emp_ID=$_GET["Emp_ID"];
echo $Emp_ID;
$query="Select * from Manager where Manager_ID='$Manager_ID'";
// echo($query."<br>");

$result1 = $objconn->prepare($query);
$result1->execute();
$row = $result1->fetch(PDO::FETCH_ASSOC); 

$today=date("Y-m-d");
// echo $row['Manager_Name'];
// print_r($row);

$query1="Select * from Apprisal where Emp_ID='$Emp_ID'";
$result = $objconn->prepare($query1);
$result->execute();
$row1 = $result->fetch(PDO::FETCH_ASSOC); 
// echo $row1['Indicate_Areas_Of_Strength_And_Lesser_Strength'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap4.css">
    <!-- <link rel="stylesheet" href="2nd_INDEX.css"> -->
    <title>Appraisal page for Manager</title>
</head>
<body>
    
    <header class="header">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Well done!!</strong> You have successfully logged in to your account
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
        <div class="first">
            <h1><a href="https://www.google.com/">Annual Appraisal Report(Manager)</a></h1>
        </div>
        <nav class="navigation">
            <ul class="nav">
                <li><a href="Bootstrap_UpdateInfo_2nd_Manager1.php">Update info</a></li>
                <li><a href="Managers_list.php">Managers list</a></li>
                <li><a href="Employees_list.php">Employees</a></li>
                <li><a href="Teamlead_list.php">Teamlead</a></li>
            </ul>
        </nav>
    </header>


    <!-- User Details -->
    <div class="container mt-1" style="width:300px">
    
        <img class="card-img-top" src="./userimage.jpg" alt="Card image">
        <div class="card-body">
            <h4 class="card-title"><?php echo $Manager_ID ?></h4>
            <p class="card-text"><?php echo $row['Manager_Name'] ?></p>
            <a href="2nd_Index_Manager_Profile.php" class="btn btn-primary">See Profile</a>
        </div>
    </div>
    <div class="container mt-5">
        <form action="2nd_Index_FomSQL_Manager2.php" method="post">
        <div class="form-group">
                <label for="Manager_ID">Manager ID:</label>
                <input type="text" class="form-control" id="Manager_ID" value="<?php echo $Manager_ID  ?>"  name="Manager_ID" readonly>
            </div>

            <div class="form-group">
                <label for="Manager_Name">Name:</label>
                <input type="text" class="form-control" id="Manager_Name" value="<?php echo $row['Manager_Name']; ?>" name="Manager_Name" readonly>
            </div>

            <div class="form-group">
                <label for="appraisalDate_Manager">Appraisal Date:</label>
                <input type="date" class="form-control" id="appraisalDate_Manager" name="appraisalDate_Manager" value="<?php echo $today; ?>" placeholder="DD/MM/YYYY" readonly>
            </div>

            <div class="form-group">
                <label for="Emp_ID_Manager">Employee ID:</label>
                <input type="text" class="form-control" id="Emp_ID_Manager" name="Emp_ID_Manager" value="<?php echo $Emp_ID ?>" placeholder="Choose Employee ID for apprisal" readonly>
            </div>

      
            
            <hr>
            <b>Employee Appraisal:</b>
            <br><br>

<!-- Emp er ota -->
                <label for="Emp_ID">Employee ID:</label>
                <Span><?php echo $Emp_ID  ?> </Span>
                <br>
                <label for="Emp_Name">Employee Name:</label>
                <span><?php echo $row1['Emp_Name']; ?></span>
                <br>
                <label for="Emp_Dept_Choose">Employee Department:</label>
                <span><?php echo $row1['Emp_Dept']; ?></span>
                <br>
                <label for="appraisalDate_Emp">Employee Appraisal Date:</label>
                <span><?php echo $row1['appraisalDate_Emp']; ?></span>
                <br>
                <label for="Start">Starting Month and Year:</label>
                <span><?php echo $row1['Start']; ?></span>
                <br>
                <label for="End">Ending Month and Year:</label>
                <span><?php echo $row1['End']; ?></span>
                <br>
                <label for="Brief_Description_Duties_Emp">(1) Brief description of duties:</label>
                <span><?php echo $row1['Brief_Description_Duties_Emp']; ?></span>
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
                            <td><span><?php echo $row1['Target1']; ?></span></td>
                            <td><span><?php echo $row1['Achievement1']; ?></span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><span><?php echo $row1['Target2']; ?></span></td>
                            <td><span><?php echo $row1['Achievement2']; ?></span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><span><?php echo $row1['Target3']; ?></span></td>
                            <td><span><?php echo $row1['Achievement3']; ?></span></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><span><?php echo $row1['Target4']; ?></span></td>
                            <td><span><?php echo $row1['Achievement4']; ?></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <label for="Brief_Achievements_Emp">(3) Please state briefly your achievements with reference to targets/objectives referred to in column 2. Please also indicate significantly higher achievements in relation to the targets and your contribution there to:</label>
            <span><?php echo $row1['Brief_Achievements_Emp']; ?></span>
            <br>
            <label for="Brief_Shortfalls_Emp">(4) Please state briefly the shortfalls with reference to the targets/objectives referred to in column 2. PLease specify the constraints, if any, in achieving the targets:</label>
            <span><?php echo $row1['Brief_Shortfalls_Emp']; ?></span>
            <br>
            <label for="Annual_Return_On_Immovable_Property_Emp">(5) Please state whether the Annual Return on immovable property for the preceding Calendar Year was filed within the prescribed date i.e. 31th January of the year following the Calender Year. If not the date of filing the return should be given. </label>
            <span><?php echo $row1['Annual_Return_On_Immovable_Property_Emp']; ?></span>
            <br>
            <label for="overallComments_Emp">Overall Comments:</label>
            <span><?php echo $row1['overallComments_Emp']; ?></span>
            <br><br>

<!-- Emp er ota -->
            
            <hr>

            <div class="form-group">
                <label for="Indicate_Areas_Of_Strength_And_Lesser_Strength">1. The reporting officer will be required to indicate areas of strength and lesser strength:</label>
                <textarea class="form-control" id="Indicate_Areas_Of_Strength_And_Lesser_Strength" name="Indicate_Areas_Of_Strength_And_Lesser_Strength"  rows="4"><?php echo $row1['Indicate_Areas_Of_Strength_And_Lesser_Strength']; ?></textarea>
            </div>

            <div class="form-group">
                <label for="Attitude">2. Attitude towards Schedule Classes/Schedule Tribes/Weaker sections of society:</label>
                <textarea class="form-control" id="Attitude" name="Attitude"  rows="4"><?php echo $row1['Attitude']; ?></textarea>
            </div>

            <div class="form-group">
                <label for="Relation_With_Outside">3. Relation with outside agencies/public:</label>
                <textarea class="form-control" id="Relation_With_Outside" name="Relation_With_Outside" rows="4"><?php echo $row1['Relation_With_Outside']; ?></textarea>
            </div>

            <div class="form-group">
                <label for="Recommendations_For_Training">4. Training(Please give recommendations for training with a view of further improving the effectiveness and professional competece/capability of the officer):</label>
                <textarea class="form-control" id="Recommendations_For_Training" name="Recommendations_For_Training" rows="4"><?php echo $row1['Recommendations_For_Training']; ?></textarea>
            </div>

            <div class="form-group">
                <label for="State_Of_Health">5. State of health:</label>
                <textarea class="form-control" id="State_Of_Health" name="State_Of_Health" rows="4"><?php echo $row1['State_Of_Health']; ?></textarea>
            </div>

            <div class="form-group">
                <label for="Integrity">6. Integrity:</label>
                <textarea class="form-control" id="Integrity" name="Integrity" rows="4"><?php echo $row1['Integrity']; ?></textarea>
            </div>

            <!-- Table -->
            <div class="form-group">
                <label for="manager_behaviour_comment_Emp">7. Assesment of <B>PERSONAL ATTRIBUTES</B>(Weightage to this section would be 30%):</label>
                <table cellspacing="2" cellpading="5" border="1">
                    <thead>
                        <tr>
                            <th>Sl No.</th>
                            <th></th>
                            <th>Manager</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Attitude to work</td>
                            <td><input type="number" class="form-control" id="Attitude_Point_M" name="Attitude_Point_M" step="0.1" value="<?php echo $row1['Attitude_Point_M']; ?></td>" required > <!-- step kaj korche na-->
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Sense of Responsibility</td>
                            <td><input type="number" class="form-control" id="Sense_Of_Responsibility_Point_M" name="Sense_Of_Responsibility_Point_M" step="0.1"value="<?php echo $row1['Sense_Of_Responsibility_Point_M']; ?>" required ></td> 
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Maintenance of Discipline</td>
                            <td><input type="number" class="form-control" id="Maintenance_Of_Discipline_Point_M" name="Maintenance_Of_Discipline_Point_M" step="0.1" value="<?php echo $row1['Maintenance_Of_Discipline_Point_M']; ?>" required ></td> 
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Communication Skill</td>
                            <td><input type="number" class="form-control" id="Communication_Skills_Point_M" name="Communication_Skills_Point_M" step="0.1" value="<?php echo $row1['Communication_Skills_Point_M']; ?>" required ></td> 
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Leadership Quality</td>
                            <td><input type="number" class="form-control" id="Leadership_Quality_Point_M" name="Leadership_Quality_Point_M" step="0.1" value="<?php echo $row1['Leadership_Quality_Point_M']; ?>" required ></td> 
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Capacity to work in team spirit</td>
                            <td><input type="number" class="form-control" id="Capacity_To_Work_In_Teamspirit_Point_M" name="Capacity_To_Work_In_Teamspirit_Point_M" value="<?php echo $row1['Capacity_To_Work_In_Teamspirit_Point_M']; ?>" step="0.1" required ></td> 
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Capacity to work in time limit</td>
                            <td><input type="number" class="form-control" id="Capacity_To_Work_In_Timelimit_Point_M" name="Capacity_To_Work_In_Timelimit_Point_M" value="<?php echo $row1['Capacity_To_Work_In_Timelimit_Point_M']; ?>" step="0.1" required ></td> 
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Inter-personal relations</td>
                            <td><input type="number" class="form-control" id="Inter_Personal_Relations_Point_M" name="Inter_Personal_Relations_Point_M" step="0.1" value="<?php echo $row1['Inter_Personal_Relations_Point_M']; ?>" required ></td> 
                        </tr>
                        <tr>
                            <td>~</td>
                            <td><b>Overall Grading on "PERSONAL ATTRIBUTES"</b></td>
                            <td><input type="number" class="form-control" id="Overall_Grading_Personal_Attributes_M" name="Overall_Grading_Personal_Attributes_M" step="0.1" readonly ></td> 
                        </tr>
                        
                    </tbody>
                </table>
            </div>

            <!-- Table 2 -->
            <div class="form-group">
                <label for="manager_behaviour_comment_Emp">8. Assesment of <B>FUNCTIONAL COMPETENCY</B>(Weightage to this section would be 30%):</label>
                <table cellspacing="2" cellpading="5" border="1">
                    <thead>
                        <tr>
                            <th>Sl No.</th>
                            <th></th>
                            <th>Manager</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Knowledge of Rules/Regulations/Procedures in the area of function and ability to apply them correctly</td>
                            <td><input type="number" class="form-control" id="Knowledge_Of_Rules_Point_M" name="Knowledge_Of_Rules_Point_M" step="0.1" value="<?php echo $row1['Knowledge_Of_Rules_Point_M']; ?>" required ></td> <!-- step kaj korche na-->
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Strategic planning ability</td>
                            <td><input type="number" class="form-control" id="Strategic_Planning_Ability_Point_M" name="Strategic_Planning_Ability_Point_M" step="0.1" value="<?php echo $row1['Strategic_Planning_Ability_Point_M']; ?>" required ></td> <!-- step kaj korche na-->
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Decision making ability</td>
                            <td><input type="number" class="form-control" id="Decision_Making_Ability_Point_M" name="Decision_Making_Ability_Point_M" step="0.1" value="<?php echo $row1['Decision_Making_Ability_Point_M']; ?>" required ></td> <!-- step kaj korche na-->
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Co-ordination ability</td>
                            <td><input type="number" class="form-control" id="Coordination_Ability_Point_M" name="Coordination_Ability_Point_M" step="0.1" value="<?php echo $row1['Coordination_Ability_Point_M']; ?>" required ></td> <!-- step kaj korche na-->
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Ability to motivate and develop subordinates</td>
                            <td><input type="number" class="form-control" id="Ability_To_Motivate_And_Develop_Point_M" name="Ability_To_Motivate_And_Develop_Point_M" step="0.1" value="<?php echo $row1['Ability_To_Motivate_And_Develop_Point_M']; ?>" required ></td> <!-- step kaj korche na-->
                        </tr>
                        <tr>
                            <td>~</td>
                            <td><b>Overall Grading on "FUNCTIONAL COMPETENCY"</b></td>
                            <td><input type="number" class="form-control" id="Overall_Grading_Functional_Competency_M" name="Overall_Grading_Functional_Competency_M" step="0.1" readonly ></td> <!-- step kaj korche na-->
                        </tr>
                        
                    </tbody>
                </table>
            </div>

            <div class="form-group">
                <label for="Pen_Picture_About_Officer">9. Pen-Picture about the officer reported upon:</label>
                <textarea class="form-control" id="Pen_Picture_About_Officer_M" name="Pen_Picture_About_Officer_M" rows="4"><?php echo $row1['Pen_Picture_About_Officer_M']; ?></textarea>
            </div>
            

            <!-- Table 3 -->
            <div class="form-group">
                <table cellspacing="2" cellpading="5" border="1">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Manager</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>                            
                            <td>Overall Grading in 1-10 point scale(After computing the weightages specified in Part 7,8)</td>
                            <td><input type="number" class="form-control" id="Overall_M" name="Overall_M" step="0.1" readonly ></td> <!-- step kaj korche na-->
                        </tr>                        
                    </tbody>
                </table>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br><br>
        <form action="logout.php">
        <input type="submit" value="Log out">
    </form>
    </div>
    </div>


</body>
</html>