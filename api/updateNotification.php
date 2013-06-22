<?php 
// update notification

require_once("../db_connection/database_connect.php"); // For database connection
///
$id = $_REQUEST['id'];

$stmt = $db->query("UPDATE notifications SET status = 2 WHERE id = '$id' ");
///
$stmt->execute();

?>