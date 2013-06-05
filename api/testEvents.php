<?php


require_once("../db_connection/database_connect.php"); // For database connection

////
/*$stmt = $db->query("SELECT id, Proposed_Activity as title, Meeting_Date  as start, 
DATE_FORMAT(start, '%Y-%m-%dT%H:%i' ) AS startDate
FROM  work_plan
ORDER BY startDate DESC"); */ // Retrieve data to display

$stmt = $db->query("SELECT * FROM  work_plan");
$stmt->execute();
/////////////////////
	$events = array();
		if ($stmt->execute()) {
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
					// $eventArray['id'] = $row['WorkPlanID'];
					 $eventArray['title'] =  $row['Proposed_Activity'];
				     $eventArray['start'] = $row['Meeting_Date'];
				     $events[] = $eventArray;
			}
		}
  echo json_encode($events);


?>