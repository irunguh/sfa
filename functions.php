<?php 
   //functions
   
   //This function creates a 3 sequence character salt for hashing
   function createSalt()
   {
    $string = md5(uniqid(rand(),true));
	return substr($string,0,3);
   }
  
?>