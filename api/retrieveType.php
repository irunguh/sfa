<?php 
//Retrieve the Type details

require_once("../db_connection/database_connect.php"); // For database connection
 
$stmt = $db->query("SELECT Company_TypeID, Company_Type FROM   company_type"); // Retrieve data to display
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