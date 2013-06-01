<?php 
//Retrieve the status details

require_once("../db_connection/database_connect.php"); // For database connection
 
$stmt = $db->query("SELECT  ContactID , First_Name FROM  company_contacts"); // Retrieve data to display
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