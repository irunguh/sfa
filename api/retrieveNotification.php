<?php
   require_once("../db_connection/database_connect.php"); // For database connection
     try {
				
				  //working if we select all
				 $stmt =  $db->query("SELECT COUNT(message) as number, message,date as time FROM  notifications where status = 1") ;
				 $stmt->execute(); 
				 if($stmt->execute())
				 {
				   $data = array();
                   while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
						$data[] = $row;
					}
				   $out = array('notify' => $data) ;
				   
				   echo(json_encode($out)); exit;
				  
				 }
				
				 }
				catch (Exception $e) {
				  print 'Exception : ' . $e->getMessage();
				}
				
?>				