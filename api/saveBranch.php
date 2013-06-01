<?php 
 /*
 Script to save company branch details form data after confirmation
 
 */
 
require_once("../db_connection/database_connect.php"); // For database connection

 
// Retrieve values from the form for registration purposes
	$branch_username = $_POST['branch_username'];
	$company_branch_name = $_POST['company_branch_name'];
	$branch_name = $_POST['branch_name'];
	$branch_address = $_POST['branch_address'];
	$company_state = $_POST['company_state'];
	$company_country = $_POST['company_country'];
	
//Create a prepare statement
$statement = $db->prepare("INSERT INTO  company_branch (Username, 
CompanyID, Branch_Name,Branch_Address,StateID,Country_Code)  
VALUES(:username, :companyid, :branch_name, :branch_address, :stateid, :country_code ) ");
///
$statement->execute(array(':username' => $branch_username,
   ':companyid' => $company_branch_name,
   ':branch_name' => $branch_name,
   ':branch_address' => $branch_address,
   ':stateid' => $company_state,
   ':country_code' => $company_country
   
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