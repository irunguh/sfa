<?php 

//protect direct access
 require_once("../functions.php");
	//if user is not logged in
	if(!isLoggedIn())
	{
		header('Location: index.php');
		die();
	} 
 /*
 Script to save company details form data after confirmation
 
 */
 
require_once("../db_connection/database_connect.php"); // For database connection

 
// Retrieve values from the form for registration purposes
	$username = $_REQUEST['username'];
	$company_name = $_REQUEST['company_name'];
	$company_address = $_REQUEST['company_address'];
	$company_office_number1 = $_REQUEST['company_office_number1'];
	$company_office_number2 = $_REQUEST['company_office_number2'];
	$company_email = $_REQUEST['company_email'];
	$company_website = $_REQUEST['company_website'];
	$company_location_no = $_REQUEST['company_location_no'];
	$company_size = $_REQUEST['company_size'];
	$company_type = $_REQUEST['company_type'];
	$company_status = $_REQUEST['company_status'];
	$company_state = $_REQUEST['company_state'];
	$country = $_REQUEST['country'];
//Create a prepare statement
$statement = $db->prepare("INSERT INTO company (Username, 
Company_Name, Address,Office_Number1,Office_Number2,Email, Website, Location_No, Company_SizeID, Company_TypeID,Company_StatusID,
StateID,Country_Code)  VALUES(:username, :company_name, :company_address, :company_office_number1, :company_office_number2,
:company_email, :company_website, :company_location_no, :company_size, :company_type, :company_status, :company_state, :country ) ");
///
$statement->execute(array(':username' => $username,
   ':company_name' => $company_name,
   ':company_address' => $company_address,
   ':company_office_number1' => $company_office_number1,
   ':company_office_number2' => $company_office_number2,
   ':company_email' => $company_email,
   ':company_website' => $company_website,
   ':company_location_no' => $company_location_no,
   ':company_size' => $company_size,
   ':company_type' => $company_type,
   ':company_status' => $company_status,
   ':company_state' => $company_state,
   ':country' => $country ));

$count = $statement->rowCount();
//print $count ;
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