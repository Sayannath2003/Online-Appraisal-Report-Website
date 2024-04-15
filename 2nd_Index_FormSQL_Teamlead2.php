<?php
session_start();
include_once('Connection.php');
// print_r($_POST);
$obj=new conn1();
$objconn=$obj->fn();


$Teamlead_ID=$_POST["Teamlead_ID"];
$Teamlead_Name=$_POST["Teamlead_Name"];
$appraisalDate_Teamlead=$_POST["appraisalDate_Teamlead"];
$Emp_ID_Manager=$_POST["Emp_ID_Manager"];

// Table 1
$Attitude_Point_L=$_POST["Attitude_Point_L"];
$Sense_Of_Responsibility_Point_L=$_POST["Sense_Of_Responsibility_Point_L"];
$Maintenance_Of_Discipline_Point_L=$_POST["Maintenance_Of_Discipline_Point_L"];
$Communication_Skills_Point_L=$_POST["Communication_Skills_Point_L"];
$Leadership_Quality_Point_L=$_POST["Leadership_Quality_Point_L"];
$Capacity_To_Work_In_Teamspirit_Point_L=$_POST["Capacity_To_Work_In_Teamspirit_Point_L"];
$Capacity_To_Work_In_Timelimit_Point_L=$_POST["Capacity_To_Work_In_Timelimit_Point_L"];
$Inter_Personal_Relations_Point_L=$_POST["Inter_Personal_Relations_Point_L"];
$Overall_Grading_Personal_Attributes_L=($Attitude_Point_L+$Sense_Of_Responsibility_Point_L+$Maintenance_Of_Discipline_Point_L+$Communication_Skills_Point_L+$Leadership_Quality_Point_L+$Capacity_To_Work_In_Teamspirit_Point_L+$Capacity_To_Work_In_Timelimit_Point_L+$Inter_Personal_Relations_Point_L)/8;
// Table 2
$Knowledge_Of_Rules_Point_L=$_POST["Knowledge_Of_Rules_Point_L"];
$Strategic_Planning_Ability_Point_L=$_POST["Strategic_Planning_Ability_Point_L"];
$Decision_Making_Ability_Point_L=$_POST["Decision_Making_Ability_Point_L"];
$Coordination_Ability_Point_L=$_POST["Coordination_Ability_Point_L"];
$Ability_To_Motivate_And_Develop_Point_L=$_POST["Ability_To_Motivate_And_Develop_Point_L"];
$Overall_Grading_Functional_Competency_L=($Knowledge_Of_Rules_Point_L+$Strategic_Planning_Ability_Point_L+$Decision_Making_Ability_Point_L+$Coordination_Ability_Point_L+$Ability_To_Motivate_And_Develop_Point_L)/5;

$Overall_L=($Overall_Grading_Personal_Attributes_L+$Overall_Grading_Functional_Competency_L)/2;
$Status=6;
// if(isset($_POST["sub1"]){
//     $status=1;
//   }
//   else{
//     $status=2;
//   }

// $query = "INSERT INTO apprisal (Manager_ID, Manager_Name, appraisalDate_Manager, performanceRating_Manager, improvementAreas_Manager, trainingNeeds_Manager, recommendations_Manager, overallComments_Manager) VALUES ('$Manager_ID', '$Manager_Name', '$appraisalDate_Manager', '$performanceRating_Manager', '$improvementAreas_Manager', '$trainingNeeds_Manager', '$recommendations_Manager', '$overallComments_Manager') where 'Emp_ID'='$Emp_ID_Manager' ";

$query = "UPDATE apprisal SET Teamlead_ID = '$Teamlead_ID', Teamlead_Name = '$Teamlead_Name', appraisalDate_Teamlead = '$appraisalDate_Teamlead', Attitude_Point_L = '$Attitude_Point_L', Sense_Of_Responsibility_Point_L = '$Sense_Of_Responsibility_Point_L', Maintenance_Of_Discipline_Point_L = '$Maintenance_Of_Discipline_Point_L', Communication_Skills_Point_L = '$Communication_Skills_Point_L', Leadership_Quality_Point_L = '$Leadership_Quality_Point_L', Capacity_To_Work_In_Teamspirit_Point_L = '$Capacity_To_Work_In_Teamspirit_Point_L', Capacity_To_Work_In_Timelimit_Point_L = '$Capacity_To_Work_In_Timelimit_Point_L', Inter_Personal_Relations_Point_L = '$Inter_Personal_Relations_Point_L', Overall_Grading_Personal_Attributes_L = '$Overall_Grading_Personal_Attributes_L', Knowledge_Of_Rules_Point_L = '$Knowledge_Of_Rules_Point_L', Strategic_Planning_Ability_Point_L = '$Strategic_Planning_Ability_Point_L', Decision_Making_Ability_Point_L = '$Decision_Making_Ability_Point_L', Coordination_Ability_Point_L = '$Coordination_Ability_Point_L', Ability_To_Motivate_And_Develop_Point_L = '$Ability_To_Motivate_And_Develop_Point_L', Overall_Grading_Functional_Competency_L = '$Overall_Grading_Functional_Competency_L', Overall_L = '$Overall_L', Status = $Status WHERE Emp_ID = '$Emp_ID_Manager'";

   
// echo($query);

$result=$objconn->prepare($query);
$result->execute();


$query1="Select * from Apprisal where Emp_ID='$Emp_ID_Manager'";
// echo $query1;
$result = $objconn->prepare($query1);
$result->execute();
$row = $result->fetch(PDO::FETCH_ASSOC); 
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
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <link rel="stylesheet" href="2nd_Index_Emp_Profile.css">
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

<!-- Appraisal -->

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap4.css">
    <!-- <link rel="stylesheet" href="2nd_INDEX.css"> -->
    <title>Submitted!!</title>
</head>
<body class="container mt-9">
  </div>
    <header class="header">
        <div class="first">
            <h1><a href="https://www.google.com/">Your Remarks(Manager)</a></h1>
        </div>

    </header>


    <!-- User Details -->
    
    <div class="container mt-5">
        <form action="2nd_Index_FormSQL_Manager.php" method="post">
        <div class="form-group">
                <label for="Teamlead_ID">Teamlead ID:</label>
                <input type="text" class="form-control" id="Teamlead_ID" value="<?php echo $Teamlead_ID  ?>"  name="Teamlead_ID" readonly>
            </div>
            <div class="form-group">
                <label for="Teamlead_Name">Teamlead Name:</label>
                <input type="text" class="form-control" id="Teamlead_Name" value="<?php echo $row['Teamlead_Name']; ?>" name="Teamlead_Name" readonly>
            </div>
            <div class="form-group">
                <label for="Manager_ID">Manager ID:</label>
                <input type="text" class="form-control" id="Manager_ID" value="<?php echo $row["Manager_ID"]  ?>"  name="Manager_ID" readonly>
            </div>

            <div class="form-group">
                <label for="Manager_Name">Name:</label>
                <input type="text" class="form-control" id="Manager_Name" value="<?php echo $row['Manager_Name']; ?>" name="Manager_Name" readonly>
            </div>

            <div class="form-group">
                <label for="appraisalDate_Manager">Appraisal Date Manager:</label>
                <input type="date" class="form-control" id="appraisalDate_Manager" name="appraisalDate_Manager" value="<?php echo $row["appraisalDate_Manager"]; ?>" placeholder="DD/MM/YYYY" readonly>
            </div>

            <div class="form-group">
                <label for="Emp_ID_Manager">Employee ID:</label>
                <input type="text" class="form-control" id="Emp_ID_Manager" name="Emp_ID_Manager" value="<?php echo $Emp_ID_Manager ?>" placeholder="Choose Employee ID for apprisal" readonly>
            </div>

      
            
            <hr>
            <b>Employee Appraisal:</b>
            <br><br>

<!-- Emp er ota -->
                <label for="Emp_ID">Employee ID:</label>
                <Span><?php echo $row["Emp_ID"];   ?> </Span>
                <br>
                <label for="Emp_Name">Employee Name:</label>
                <span><?php echo $row['Emp_Name']; ?></span>
                <br>
                <label for="Emp_Dept_Choose">Employee Department:</label>
                <span><?php echo $row['Emp_Dept']; ?></span>
                <br>
                <label for="appraisalDate_Emp">Employee Appraisal Date:</label>
                <span><?php echo $row['appraisalDate_Emp']; ?></span>
                <br>
                <label for="Start">Starting Month and Year:</label>
                <span><?php echo $row['Start']; ?></span>
                <br>
                <label for="End">Ending Month and Year:</label>
                <span><?php echo $row['End']; ?></span>
                <br>
                <label for="Brief_Description_Duties_Emp">(1) Brief description of duties:</label>
                <span><?php echo $row['Brief_Description_Duties_Emp']; ?></span>
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
                            <td><span><?php echo $row['Target1']; ?></span></td>
                            <td><span><?php echo $row['Achievement1']; ?></span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><span><?php echo $row['Target2']; ?></span></td>
                            <td><span><?php echo $row['Achievement2']; ?></span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><span><?php echo $row['Target3']; ?></span></td>
                            <td><span><?php echo $row['Achievement3']; ?></span></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><span><?php echo $row['Target4']; ?></span></td>
                            <td><span><?php echo $row['Achievement4']; ?></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <label for="Brief_Achievements_Emp">(3) Please state briefly your achievements with reference to targets/objectives referred to in column 2. Please also indicate significantly higher achievements in relation to the targets and your contribution there to:</label>
            <span><?php echo $row['Brief_Achievements_Emp']; ?></span>
            <br>
            <label for="Brief_Shortfalls_Emp">(4) Please state briefly the shortfalls with reference to the targets/objectives referred to in column 2. PLease specify the constraints, if any, in achieving the targets:</label>
            <span><?php echo $row['Brief_Shortfalls_Emp']; ?></span>
            <br>
            <label for="Annual_Return_On_Immovable_Property_Emp">(5) Please state whether the Annual Return on immovable property for the preceding Calendar Year was filed within the prescribed date i.e. 31th January of the year following the Calender Year. If not the date of filing the return should be given. </label>
            <span><?php echo $row['Annual_Return_On_Immovable_Property_Emp']; ?></span>
            <br>
            <label for="overallComments_Emp">Overall Comments:</label>
            <span><?php echo $row['overallComments_Emp']; ?></span>
            <br><br>

<!-- Emp er ota -->
            
            <hr>
            <b>Manager's Remarks:</b>
            <br><br>
            <div class="form-group">
                <label for="Indicate_Areas_Of_Strength_And_Lesser_Strength">1. The reporting officer will be required to indicate areas of strength and lesser strength:</label>
                <span><?php echo $row['Indicate_Areas_Of_Strength_And_Lesser_Strength']; ?></span>
            </div>

            <div class="form-group">
                <label for="Attitude">2. Attitude towards Schedule Classes/Schedule Tribes/Weaker sections of society:</label>
                <span><?php echo $row['Attitude']; ?></span>
            </div>

            <div class="form-group">
                <label for="Relation_With_Outside">3. Relation with outside agencies/public:</label>
                <span><?php echo $row['Relation_With_Outside']; ?></span>
            </div>

            <div class="form-group">
                <label for="Recommendations_For_Training">4. Training(Please give recommendations for training with a view of further improving the effectiveness and professional competece/capability of the officer):</label>
                <span><?php echo $row['Recommendations_For_Training']; ?></span>
            </div>

            <div class="form-group">
                <label for="State_Of_Health">5. State of health:</label>
                <span><?php echo $row['State_Of_Health']; ?></span>
            </div>

            <div class="form-group">
                <label for="Integrity">6. Integrity:</label>
                <span><?php echo $row['Integrity']; ?></span>
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
                            <th>Teamlead</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Attitude to work</td>
                            <td><span><?php echo $row['Attitude_Point_M']; ?></span></td>
                            <td><span><?php echo $row['Attitude_Point_L']; ?></span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Sense of Responsibility</td>
                            <td><span><?php echo $row['Sense_Of_Responsibility_Point_M']; ?></span></td>
                            <td><span><?php echo $row['Sense_Of_Responsibility_Point_L']; ?></span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Maintenance of Discipline</td>
                            <td><span><?php echo $row['Maintenance_Of_Discipline_Point_M']; ?></span></td>
                            <td><span><?php echo $row['Maintenance_Of_Discipline_Point_L']; ?></span></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Communication Skill</td>
                            <td><span><?php echo $row['Communication_Skills_Point_M']; ?></span></td>
                            <td><span><?php echo $row['Communication_Skills_Point_L']; ?></span></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Leadership Quality</td>
                            <td><span><?php echo $row['Leadership_Quality_Point_M']; ?></span></td>
                            <td><span><?php echo $row['Leadership_Quality_Point_L']; ?></span></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Capacity to work in team spirit</td>
                            <td><span><?php echo $row['Capacity_To_Work_In_Teamspirit_Point_M']; ?></span></td>
                            <td><span><?php echo $row['Capacity_To_Work_In_Teamspirit_Point_L']; ?></span></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Capacity to work in time limit</td>
                            <td><span><?php echo $row['Capacity_To_Work_In_Timelimit_Point_M']; ?></span></td>
                            <td><span><?php echo $row['Capacity_To_Work_In_Timelimit_Point_L']; ?></span></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Inter-personal relations</td>
                            <td><span><?php echo $row['Inter_Personal_Relations_Point_M']; ?></span></td>
                            <td><span><?php echo $row['Inter_Personal_Relations_Point_L']; ?></span></td>
                        </tr>
                        <tr>
                            <td>~</td>
                            <td><b>Overall Grading on "PERSONAL ATTRIBUTES"</b></td>
                            <td><span><?php echo $row['Overall_Grading_Personal_Attributes_M']; ?></span></td>
                            <td><span><?php echo $row['Overall_Grading_Personal_Attributes_L']; ?></span></td>
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
                            <th>Teamlead</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Knowledge of Rules/Regulations/Procedures in the area of function and ability to apply them correctly</td>
                            <td><span><?php echo $row['Knowledge_Of_Rules_Point_M']; ?></span></td>
                            <td><span><?php echo $row['Knowledge_Of_Rules_Point_L']; ?></span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Strategic planning ability</td>
                            <td><span><?php echo $row['Strategic_Planning_Ability_Point_M']; ?></span></td>
                            <td><span><?php echo $row['Strategic_Planning_Ability_Point_L']; ?></span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Decision making ability</td>
                            <td><span><?php echo $row['Decision_Making_Ability_Point_M']; ?></span></td>
                            <td><span><?php echo $row['Decision_Making_Ability_Point_L']; ?></span></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Co-ordination ability</td>
                            <td><span><?php echo $row['Coordination_Ability_Point_M']; ?></span></td>
                            <td><span><?php echo $row['Coordination_Ability_Point_L']; ?></span></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Ability to motivate and develop subordinates</td>
                            <td><span><?php echo $row['Ability_To_Motivate_And_Develop_Point_M']; ?></span></td>
                            <td><span><?php echo $row['Ability_To_Motivate_And_Develop_Point_L']; ?></span></td>
                        </tr>
                        <tr>
                            <td>~</td>
                            <td><b>Overall Grading on "FUNCTIONAL COMPETENCY"</b></td>
                            <td><span><?php echo $row['Overall_Grading_Functional_Competency_M']; ?></span></td>
                            <td><span><?php echo $row['Overall_Grading_Functional_Competency_L']; ?></span></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>

            <div class="form-group">
                <label for="Pen_Picture_About_Officer">9. Pen-Picture about the officer reported upon:</label>
                <span><?php echo $row['Pen_Picture_About_Officer_M']; ?></span>
            </div>       

            <!-- Table 3 -->
            <div class="form-group">
                <table cellspacing="2" cellpading="5" border="1">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Manager</th>
                            <th>Teamlead</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>                            
                            <td>Overall Grading in 1-10 point scale(After computing the weightages specified in Part 7,8)</td>
                            <td><span><?php echo $row['Overall_M'] ?></span></td> 
                            <td><span><?php echo $Overall_L; ?></span></td> 
                        </tr>                        
                    </tbody>
                </table>
            </div>            
        </form>
        <br><br>
        </div>
    </div>
</body>
</html>

<!-- Appraisal End -->
<p>Want to go to the 1st Page?? <a href="./Choose_Apprisal_Teamlead.php">Click here!!</a></p>



<form action="logout.php">
    <input type="submit" value="Log out">
</form>
</body>
</html>
