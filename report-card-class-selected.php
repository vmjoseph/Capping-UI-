<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"> 

	<!--- this is for bootstrap -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel='stylesheet' media='screen and (min-width: 701px) and (max-width: 900px)' href='css/mobile.css' />
	<link rel="stylesheet" href="CSS/style.css">

	<title>CPCA Report Card </title>
</head>


<body>



	<!-- Top left Logo -->
	<div class="page-header">
		<h1><a class="home-button" href="homepage.php">CPCA</a></h1>
	</div>
	
	<nav class="navbar navbar-default CPCA_navbar">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Submit Attendance</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<ul class="nav navbar-nav navbar-right">
					<li><a href="admin-tools.php">Admin Tools</a></li>
					<li><a href="attendance-reports.php">Reports</a></li>
					<li><a href="participant-search.php">Search</a></li>
					<li><a href="index.php">Log out</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav> <!-- end of navbar-->
	
	
	<?php
session_start();
	
	if (!isset($_SESSION["username"]) ){
		header('Location: index.php');
		echo "hello";
	}


 $participantnumber = $_SESSION['report-card-pnum'] ;
 
 $cidSession = $_SESSION['report_card_curr'] ;
 
 $_SESSION['pnumreportcard'] = $participantnumber;
 

 
   
  // Connecting, selecting database
$dbconn = pg_connect("host=10.10.7.195 port=5432 dbname=cappingdb user=postgres password=admin")
    or die('Could not connect: ' . pg_last_error());

// Performing SQL query
$fnamequery = "SELECT r.ref_f_name FROM referrals r inner join participants p on p.p_num = r.p_num where p.p_num =  '$participantnumber'";
$fnameresult = pg_query($fnamequery) or die('Query failed: ' . pg_last_error());
$fnamerow = pg_fetch_array($fnameresult, null, PGSQL_ASSOC);

$participantfname = $fnamerow['ref_f_name'];

$lnamequery = "SELECT r.ref_l_name FROM referrals r inner join participants p on p.p_num = r.p_num where p.p_num =  '$participantnumber'";
$lnameresult = pg_query($lnamequery) or die('Query failed: ' . pg_last_error());
$lnamerow = pg_fetch_array($lnameresult, null, PGSQL_ASSOC);

$participantlname = $lnamerow['ref_l_name'];


$currnamequery = "SELECT curriculum_name FROM curriculum where cid = '$cidSession' ";
$currnameresult = pg_query($currnamequery) or die('Query failed: ' . pg_last_error());
$currnamerow = pg_fetch_array($currnameresult, null, PGSQL_ASSOC);

$currname = $currnamerow['curriculum_name'];


$classesquery = "SELECT classsub.class_subject FROM class_subjects classsub inner join curriculum_subjects currsub on currsub.c_subject = classsub.c_subject inner join curriculum curr on curr.cid = currsub.cid where curr.cid = ' $cidSession ' ";      
$classesresult = pg_query($classesquery) or die('Query failed: ' . pg_last_error());
$classesrow = pg_fetch_array($classesresult, 0, PGSQL_ASSOC);
	
$employeequery = "SELECT e.eid FROM employees e	inner join classes_scheduled csch on csch.eid = e.eid inner join class_attendence ca on ca.eid = csch.eid where ca.p_num = '$participantnumber'";
$employeeresult = pg_query($employeequery) or die('Query failed: ' . pg_last_error());
$employeerow = pg_fetch_array($employeeresult, null, PGSQL_ASSOC);	
	
$employeeID = 	$employeerow['eid'];


$class_selected = $_POST['class_selected'];

 $_SESSION['report_card_class_selected'] = $class_selected;



//need the specific class id

//$attendedclassquery = "SELECT ca.class_id from class_attendence ca inner join classes_scheduled csch on ca.class_id = csch.class_id inner join curriculum_subjects curr_sub on csch.cid = curr_sub.cid inner join class_subjects c_sub on c_sub.c_subject = curr_sub.c_subject where c_sub.class_subject = '$class_selected' and ca.p_num = '$participantnumber' ";


// Gets the id and names of all the classes a specific participant has already taken

$attendedclassquery = "

SELECT DISTINCT
Class_Subjects.C_Subject,
Class_Subjects.Class_Subject
FROM 
Referrals,
Participants,
Class_Attendence,
Classes_Scheduled,
Curriculum_Subjects,
Class_Subjects
WHERE

Referrals.P_Num = '$participantnumber'
AND Referrals.P_Num = Participants.P_Num
AND Participants.P_Num = Class_Attendence.P_Num
AND Class_Attendence.Class_ID = Classes_Scheduled.Class_ID
AND Classes_Scheduled.C_Subject = Curriculum_Subjects.C_Subject
AND Curriculum_Subjects.C_Subject = Class_Subjects.C_Subject
AND class_subjects.class_subject = '$class_selected'";






//$attendedclassquery = "SELECT c_sub.c_subject from class_subjects c_sub inner join curriculum_subjects curr_sub on c_sub.c_subject = curr_sub.c_subject inner join classes_scheduled csch on csch.cid = curr_sub.cid inner join class_attendence ca on ca.class_id = csch.class_id where ca.p_num = '$participantnumber' and c_sub.class_subject = '$class_selected'";


//$attendedclassquery = "SELECT ca.* FROM class_attendence ca inner join classes_scheduled csch on ca.class_id = csch.class_id inner join curriculum_subjects currsub on currsub.cid = csch.cid inner join class_subjects csub on csub.c_subject = currsub.c_subject where ca.p_num = '$participantnumber' AND csub.class_subject = '$class_selected' ";
$attendedclassresult = pg_query($attendedclassquery) or die('Query failed: ' . pg_last_error());
$attendedclassrow = pg_fetch_array($attendedclassresult, null, PGSQL_ASSOC);		


	

	
	

echo	'<div class = "container">';
echo		'<div class = "jumbotron">';

echo			'<form action = "report-card-class-selected.php" method="post" class="navbar-form">';
echo				'<div class="input-group">';
echo					"<h1>  $participantfname    $participantlname              </h1>";
echo				'</div>';
echo				'<div class="row" id="attendanceRow">';

echo					'<div class="col-md-4 input-lg">';
echo					'<label>Curriculum Name:';
echo                    " $currname ";

echo                 '</label>';
						
echo					'</div>';
echo					'<div class="col-md-4 input-lg">';
echo					'<label>Select class</label>';
echo						'<select class="form-control" name="class_selected">';

					while ($line = pg_fetch_array($classesresult, null, PGSQL_ASSOC)){
						foreach($line as $col_value){
echo						"<option value='$col_value'>   '$col_value'</option>"; //this needs to be a seperate php form so that the correct attendence value can be used

						}


					}
							
echo						'</select>  ';

echo					'</div>';
echo			'</div>';

echo				'<button type="submit" name="submitClass" class="btn btn-default ">Submit Class</button> ';   
echo			'</form>';



//if 

/*
<td><input type="radio" name="id" value="<?php echo $row['id']; ?>" <?php if($row['selected'] == 1) echo "checked"; ?> /></td>
*/
echo			'<form action = "post-report-card.php" method="post" >';
echo				'<div class="row">';
echo					'<div class="col-sm-5">';
				
					
echo						'<div id="checkbox1">';


			if(pg_num_rows($attendedclassresult) > 0){
				echo  '<h2>  CLASS WAS ATTENDED </h2>';
			} 
			else{
				echo  '<h2>  CLASS WAS NOT ATTENDED </h2>';
			}
			

				echo						'<label>';
				echo								'<input type="radio" value="submit_attended" name="radio1" >';
				echo								'Attended';
				echo							'</label>';
				echo						'<div id="checkbox2">';
				echo							'<label>';
				echo								'<input type="radio" value="submit_not_attended" name"radio1">';
				echo								'Not attended';
				echo							'</label>';
				echo                          '</select>';
				echo						'</div>';
					
									
echo					'<!--<div class="col-sm-3">-->';
echo					'<label style="text-align:left">';
echo						'Instructor Comments';
echo						'<textarea rows="10" cols="50"></textarea>	';					
echo					'</label>';
echo						'<!-- this needs to become an input -->';
echo					'</div>';
echo					'<!--</div>-->';



echo		'</div>';
echo				'</div>';
echo				'<button type="submit" name="submitAttendance" class="btn btn-default ">Submit</button> ';   
echo           '</form>';

echo 	'</div>';


//if form is submitted(attended clicked, insert record into db

	


					


?>


</body>
</html>
