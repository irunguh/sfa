<?php 
//session destroy all
 require_once("functions.php");
 logout();
 //redirect
        header('Location: index.php');
		die();
?>