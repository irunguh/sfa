<?php 
  /* Database Connection Setting
   * You can change this to match your server settings
  */
  
	 //Declare your Database Connection Variables
	  $server = "127.0.0.1" ; // Your Mysql server
	  $database = "v_sfa"; // Database Name
	  $database_username = "root" ; // Your username
	  $database_password = "" ;  // Your password  default Mysql server NULL
	  
	  //we use pdo for databases connection
	  $db = new PDO('mysql:host='.$server.';dbname='.$database.';charset=utf8', $database_username, $database_password);
     //test if the connection was successful
	if (!$db) 
	{
	  die('Sorry Connection to '.$server.' server refused.  : ' . mysql_error());
	}
	// Select MySQL database 
	/*$db_select = mysql_select_db($database, $conn);
	if (!$db_select) 
	{
	  die ('Sorry selection of '.$database.' database failed : ' . mysql_error());
	} */
	
	
	

?>