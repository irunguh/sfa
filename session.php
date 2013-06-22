<?php
//error_reporting(1);

	//Retrieve values from the form
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

 //$data = $_POST['data'] ;
   require_once("./db_connection/database_connect.php"); 
   require_once("functions.php");
	$stmt = $db->prepare("SELECT userid,password, salt FROM  user_account WHERE username = '$username' limit 1");
	$stmt->execute(array(
		':username' => $username
	));

	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

	$affected_rows = $stmt->rowCount();
	///
	if($affected_rows < 1)
	{
      //invalid user the user does not exist
	   echo ('invalid user the user does not exist');
	}
	//
	else{
				$db_pass = NULL ;
				$hash = NULL;
				$user_id = NULL;
				// $hash = hash('sha256', $userData['salt'] . hash('sha256', $password) );
				foreach($rows as $data )
				{
				  // $hash = hash('sha256',hash('sha256',$password));
			     $hash = hash('sha256' , $data['salt'].hash('sha256',$password));
				  // hash('sha256',$salt.$hash);
				   $db_pass = $data['password'];
				   $user_id = $data['userid'];
				  //
				//  echo "salt is ".$data['salt'];
				//  echo "<br/>";
				//  echo $hash." = ".$db_pass;
				}
				if($hash != $db_pass)
				{
				// echo "<br/>";
				 echo ('Invalid password');
				}
				///
				else
				{
				
				 echo ('Correct');
				 ///
				    session_regenerate_id();
					$_SESSION['valid'] = 1 ;
					$_SESSION['user_id'] = $user_id ;
				// validateUser();
				// echo $hash; 
				 //echo $db_pass;
				}

    }
?>