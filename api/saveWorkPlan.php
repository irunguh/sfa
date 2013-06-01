<?php 
 /*
 Script to save workplan details form data after confirmation
 
 */
 
require_once("../db_connection/database_connect.php"); // For database connection

 
// Retrieve values from the form for registration purposes
	$company = $_POST['company'];
	$contact = $_POST['contact'];
	$meeting_date = $_POST['meeting_date'];
	$start_time = $_POST['start_time'];
	$end_time = $_POST['end_time'];
	$proposed_activity = $_POST['proposed_activity'];
	$work_address = $_POST['work_address'];
	$work_activity_type = $_POST['work_activity_type'];
	
//Create a prepare statement
$statement = $db->prepare("INSERT INTO work_plan (CompanyID, 
ContactID, Meeting_Date,Start_Time,End_Time,Proposed_Activity,Address, Activity_TypeID)  
VALUES(:company, :contact, :meeting_date, :start_time , :end_time , :proposed_activity , :work_address , :work_activity_type) ");
///
$statement->execute(array(':company' => $company,
   ':contact' => $contact,
   ':meeting_date' => $meeting_date,
   ':start_time' => $start_time,
   ':end_time' => $end_time,
   ':proposed_activity' => $proposed_activity,
   ':work_address' => $work_address,
   ':work_activity_type' => $work_activity_type
   
));
$count = $statement->rowCount();
///
if($count > 0)
{
  echo "successful";
}
if($count <= 0)
{
   print_r($statement->errorInfo());
}

?>