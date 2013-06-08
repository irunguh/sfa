<?php 
//Retrieve the company details

require_once("../db_connection/database_connect.php"); // For database connection
 
 $id = $_REQUEST['work_id'];
  //
$stmt = $db->query("SELECT CompanyID as company,ContactID as contact,Meeting_Date as meeting_date
,Start_Time as starttime,End_Time as endtime,Proposed_Activity as proposed_activity,Meeting_Address
as address,Activity_TypeID as activity_type FROM work_plan WHERE WorkPlanID = '$id' "); // Retrieve data to display
$stmt->execute();
/////////////////////
	$data = array();
		if ($stmt->execute()) {
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$data[] = $row;
			}
		}
  echo json_encode($data);

?>