<?php 
 /*
 Script to save company details form data after confirmation
 
 */
 
require_once("../db_connection/database_connect.php"); // For database connection

 
// Retrieve values from the form for registration purposes
	$username = $_POST['username'];
	$company_name = $_POST['company_name'];
	$company_address = $_POST['company_address'];
	$company_office_number1 = $_POST['company_office_number1'];
	$company_office_number2 = $_POST['company_office_number2'];
	$company_email = $_POST['company_email'];
	$company_website = $_POST['company_website'];
	$company_location_no = $_POST['company_location_no'];
	$company_size = $_POST['company_size'];
	$company_type = $_POST['company_type'];
	$company_status = $_POST['company_status'];
	$company_state = $_POST['company_state'];
	$country = $_POST['country'];
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
   ':company_address' => $company_address,
   ':company_state' => $company_state,
   ':country' => $country
   
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