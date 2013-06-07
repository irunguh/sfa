<?php 
//Retrieve the status details

require_once("../db_connection/database_connect.php"); // For database connection

$company_id = $_REQUEST['id'];
 
$stmt = $db->query("SELECT  ContactID , First_Name FROM  company_contacts where CompanyID = '$company_id' "); // Retrieve data to display
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