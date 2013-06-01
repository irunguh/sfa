<?php 
 /*
 Script to save company branch details form data after confirmation
 
 */
 
require_once("../db_connection/database_connect.php"); // For database connection

 
// Retrieve values from the form for registration purposes
	$username = $_POST['username'];
	$companyid = $_POST['company_name'];
	$branch_name = $_POST['company_address'];
	$branch_address = $_POST['company_office_number1'];
	$stateid = $_POST['company_office_number2'];
	$country_code = $_POST['company_email'];
	
//Create a prepare statement
$statement = $db->prepare("INSERT INTO  company_branch (Username, 
CompanyID, Branch_Name,Branch_Address,StateID,Country_Code)  
VALUES(:username, :companyid, :branch_name, :branch_address, :stateid, :country_code ) ");
///
$statement->execute(array(':username' => $username,
   ':companyid' => $companyid,
   ':branch_name' => $branch_name,
   ':branch_address' => $branch_address,
   ':stateid' => $stateid,
   ':country_code' => $country_code
   
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