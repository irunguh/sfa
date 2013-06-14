<?php 
 /*
 Script to save company branch details form data after confirmation
 
 */
 
require_once("../db_connection/database_connect.php"); // For database connection

// Retrieve values from the form for registration purposes
	$to = $_REQUEST['to'];
	$subject = $_REQUEST['subject'];
	$message = $_REQUEST['message'];
	$status = 0 ;
	$date = date('Y-m-d');
	///
	//Create a prepare statement
		$statement = $db->prepare("INSERT INTO  sent (to, 
		subject, message,status,date_sent)  
		VALUES(:to, :subject, :message, :status, :date_sent ) ");
		///
		$statement->execute(array(':to' => $to,
		   ':subject' => $subject,
		   ':message' => $message,
		   ':status' => $status,
		   ':date_sent' => $date
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