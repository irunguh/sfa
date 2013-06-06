<?php 
 /*
 Script to save company branch details form data after confirmation
 
 */
 
require_once("../db_connection/database_connect.php"); // For database connection

 
// Retrieve values from the form for registration purposes
	$work_id = $_POST['work_id'];
	$lat = $_POST['latitude'];
	$long = $_POST['longitude'];
	$loc_address = $_POST['location_address'];
	//clocking date is now
	 $clocking_date = Date('Y-m-d');
    // $newdate = $date->format('Y-m-d');
	
//Create a prepare statement
	$statement = $db->prepare("INSERT INTO  work_plan_clocking (WorkPlanID,Clocking_Date,Longtitude,Latitude,Location_Address)  
	VALUES(:workplanid, :clocking_date, :longitude, :latitude, :location_address) ");
///
$statement->execute(array(':workplanid' => $work_id,
   ':clocking_date' => $clocking_date,
   ':longitude' => $lat,
   ':latitude' => $long,
   ':location_address' => $loc_address
));

///
if(!$statement)
{
  echo "error" ;
}
else 
{
  echo "successful";
 // echo $loc_address;
}

?>