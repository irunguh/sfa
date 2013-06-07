<?php 
 /*
 Script to save company branch details form data after confirmation
 
 */
 
require_once("../db_connection/database_connect.php"); // For database connection

// Retrieve values from the form for registration purposes
	$username = $_POST['username'];
	$companyid = $_POST['company'];
	$branch = $_POST['branch'];
	$product = 1 ;

	
//Create a prepare statement
$statement = $db->prepare("INSERT INTO   company_orders (Username, 
CompanyID, BranchID,Product_No)  
VALUES(:username, :companyid, :branch, :product) ");
///
$statement->execute(array(':username' => $username,
   ':companyid' => $companyid,
   ':branch' => $branch,
   ':product' => $product
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