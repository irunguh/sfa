<?php 
//protect direct access
 require_once("../functions.php");
	//if user is not logged in
	if(!isLoggedIn())
	{
		header('Location: index.php');
		die();
	} 
 /*
 Script to save company branch details form data after confirmation
 
 */
 
require_once("../db_connection/database_connect.php"); // For database connection

// Retrieve values from the form for registration purposes
	$username = $_REQUEST['username'];
	$companyid = $_REQUEST['company'];
	$branch = $_REQUEST['branch'];

	//This is an array
	$product =  $_REQUEST['product'];

	//we use implode to convert to string
	$new_product = 1 ;

	
	$pieces = explode(",", $product); 
	
	$number = count($pieces) ;

//echo $number;

	//Create a prepare statement
			$statement = $db->prepare("INSERT INTO company_orders (Username, 
			CompanyID, BranchID,Product_No)  
			VALUES(:username, :companyid, :branch, :product)");
			///
			$statement->execute(array(':username' => $username,
			   ':companyid' => $companyid,
			   ':branch' => $branch,
			   ':product' =>$number
			));


		 $orderId=$db->lastInsertId();

			  
echo $orderId;
			
	//echo $pieces[0];
	foreach($pieces as $value) //loop over values
		{

			$pieces2 = explode(":", $value);

			///
			$statement2 = $db->prepare("INSERT INTO  company_orders_breakdown (Username, 
			COrderID, ProductID, Qty, MR_Price, List_Price, Order_Price)  
			VALUES(:username, :orderid, :productid, :qty, :mr_price, :list_price, :order_price) ");
			
			///we introduce a new query here that retrieves $orderid, $list_price, $productid
			/////
			
			$list_price =  $db->query("SELECT List_Price from products where ProductID = '$pieces2[0]' ") ;  
			while ($row = $list_price->fetch(PDO::FETCH_ASSOC)) 
			{
					$statement2->execute(array(':username' => $username,
					   ':orderid' => $orderId ,
					   ':productid' => $pieces2[0],
					   ':qty' => $pieces2[1],
					   ':mr_price' => $pieces2[2],
					   ':list_price' => $row['List_Price'],
					   ':order_price' => $pieces2[2]
					));
			
			}
			
			
			
		}
       

?>