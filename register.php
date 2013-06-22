<?php 
 /*
 * This File is used to register a new user
 */
require_once("./db_connection/database_connect.php"); // For database connection
///
require_once("functions.php");
// Retrieve values from the form for registration purposes
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	//get hash value of password
	//$hash = hash('sha256',$password);
	//
	$salt = createSalt();
   $hash = hash('sha256',$salt.hash('sha256',$password));
	///
	// $hash = hash('sha256',hash('sha256',$password));
	
	   $email = $_REQUEST['email'];
		//Create a prepare statement
		$statement = $db->prepare("INSERT INTO user_account (username, 
		password, email, salt)  VALUES(:username, :password, :email, :salt ) ");
		///
		$statement->execute(array(':username' => $username,
		   ':password' => $hash,
		   ':email' => $email,
		   ':salt' => $salt
		));

		///
		if(!$statement)
		{
		  echo "error" ;
		}
		else 
		{
		  echo "successful";
		 
		}



 

 
?>