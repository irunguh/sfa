<?php 
 /*
 Script to save workplan details form data after confirmation
 
 */
 
require_once("../db_connection/database_connect.php"); // For database connection

 
// Retrieve values from the form for registration purposes
	$company = $_REQUEST['company'];
	$contact = $_REQUEST['contact'];
	$meeting_date = $_REQUEST['meeting_date'];
	$start_time = $_REQUEST['start_time'];
	$end_time = $_REQUEST['end_time'];
	$proposed_activity = $_REQUEST['proposed_activity'];
	$work_address = $_REQUEST['work_address'];
	$work_activity_type = $_REQUEST['work_activity_type'];
	
//Create a prepare statement
$statement = $db->prepare("INSERT INTO work_plan (CompanyID,ContactID, Meeting_Date,Start_Time,End_Time,Proposed_Activity,Address, Activity_TypeID)  
VALUES(:company, :contact, :date, :start_time , :end_time , :activity , :work_address , :work_activity_type) ");
///
$statement->execute(array(':company' => $company,
   ':contact' => $contact,
   ':date' => $meeting_date,
   ':start_time' => $start_time,
   ':end_time' => $end_time,
   ':activity' => $proposed_activity,
   ':work_address' => $work_address,
   ':work_activity_type' => $work_activity_type
   
));
$count = $statement->rowCount();
///
if($count > 0)
{
  echo "successful";
  echo $meeting_date;
}
if($count <= 0)
{
   print_r($statement->errorInfo());
}

?>