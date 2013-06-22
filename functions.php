<?php 
 session_start();
   //functions
   
   //This function creates a 3 sequence character salt for hashing
   function createSalt()
   {
    $string = md5(uniqid(rand(),true));
	return substr($string,0,3);
   }
   //function to validate a user
   /*function validateUser()
   {
    session_regenerate_id();
	$_SESSION['valid'] = 1 ;
	$_SESSION['user_id'] = $user_id ;
   } */
   //check user logged on
    function isLoggedIn()
	 {
			/*if(isset($_SESSION['valid']) && $_SESSION['valid'])
			{
				return true;
			} */
			//
			if(isset($_SESSION['valid']))
			{
				return true;
			}
			return false;
	}
	//logout a user
	function logout()
	{
		//$_SESSION = array(); //destroy all of the session variables
		session_unset(); 
		session_destroy();
	}
?>