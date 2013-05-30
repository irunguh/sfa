<?php 
 /*
 * This File is used to register a new user
 */
require_once("./db_connection/database_connect.php"); // For database connection

// Retrieve values from the form for registration purposes
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
//Create a prepare statement
$statement = $db->prepare("INSERT INTO user_account (username, 
password, email)  VALUES(:username, :password, :email ) ");
///
$statement->execute(array(':username' => $username,
   ':password' => $password,
   ':email' => $email
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