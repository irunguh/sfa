<?php 
   require_once("../db_connection/database_connect.php"); // For database connection

 
// Retrieve values from the form for registration purposes
	$product_id = $_POST['product'];
	//
	$stmt = $db->query("SELECT List_Price  FROM  products where ProductID = '$product_id' "); // Retrieve data to display
	$stmt->execute();
	/////////////////////
		$list_price = 0;
			if ($stmt->execute()) 
			{
				while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
				{
					$list_price = $row['List_Price'];
				}
				echo $list_price;
			}

?>