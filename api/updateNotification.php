<?php 
// update notification


require_once("../db_connection/database_connect.php"); // For database connection 
require_once("../functions.php");
	//if user is not logged in
	if(!isLoggedIn())
	{
		header('Location: index.php');
		die();
	} 
///
$id = $_REQUEST['id'];

$stmt = $db->query("UPDATE notifications SET status = 2 WHERE id = '$id' ");
///
$stmt->execute();

?>