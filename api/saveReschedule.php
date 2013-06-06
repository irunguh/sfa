<?php 
 /*
 Script to save company branch details form data after confirmation
 
 */
 
require_once("../db_connection/database_connect.php"); // For database connection

 
// Retrieve values from the post 
	$work_id = $_POST['work_id'];
	//$work_id = 2;
	/// do a select statement to retrieve values from work_plan table where WorkPlanID 	= $work_id
	
   $stmt = $db->query("SELECT WorkPlanID,Meeting_Date,Start_Time ,End_Time ,Proposed_Activity,Activity_TypeID,
	Meeting_Address FROM work_plan WHERE WorkPlanID = '$work_id' "); // Retrieve data to display
    $stmt->execute(); 
	//set variables
	$WorkPlanID = null ;
	$Meeting_Date = null ;
	$Start_Time = null ;
	$End_Time = null ;
	$Proposed_Activity = null ;
	$Address = 1 ;
	$Activity_TypeID = null ;
	$Activity_Status = 1 ;
	///
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
	{
				$WorkPlanID = $row['WorkPlanID'];
				$Meeting_Date = $row['Meeting_Date'];
				$Start_Time = $row['Start_Time'];
				$End_Time = $row['End_Time'];
				$Proposed_Activity = $row['Proposed_Activity'];
				$Address = $row['Meeting_Address'];
				$Activity_TypeID = $row['Activity_TypeID'];
	} 
////////////////////////////////////////////////////////
//Create a prepare statement
	$stmt2 = $db->prepare("INSERT INTO work_plan_status (WorkPlanID,Meeting_Date,Start_Time,End_Time,
	Proposed_Activity, Address, Activity_TypeID, Activity_Status)  
	VALUES(:workplanid, :meeting_date, :start_time, :end_time, :proposed_activity, :address, :activity_typeid, :activity_status) ");
///
		$stmt2->execute(array(':workplanid' => $WorkPlanID,
		   ':meeting_date' => $Meeting_Date,
		   ':start_time' => $Start_Time,
		   ':end_time' => $End_Time,
		   ':proposed_activity' => $Proposed_Activity,
		   ':address' => $Address,
		   ':activity_typeid' => $Activity_TypeID,
		   ':activity_status' => $Activity_Status
		));
      // $count = $stmt2->rowCount();
		 //echo $count;
///
		if(!$stmt2)
		{
		  echo "error" ;
		}
		else 
		{
	 
		  echo "successful"; 
		}

?>