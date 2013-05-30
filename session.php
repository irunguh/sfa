<?php
//error_reporting(1);
//Retrieve values from the form
$username = $_POST['username'];
$password = $_POST['password'];

 //$data = $_POST['data'] ;
require_once("./db_connection/database_connect.php"); 
$stmt = $db->prepare("SELECT * FROM  user_account WHERE username = '$username' AND password = '$password' ");
$stmt->execute(array(
    ':username' => $username,
    ':password' => $password
));

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

$affected_rows = $stmt->rowCount();

if ($affected_rows == 1) {
    //add the user to our session variables
    $_SESSION['username'] = $username;
    echo ('Correct');
	
	//echo 'correct username/password';
	
	//header('Location: login.php');
} 
else 
{
   // echo ($username) ;
	//echo "/n";
    echo 'Incorrect username/password';
}

?>