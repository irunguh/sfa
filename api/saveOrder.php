<?php 
 /*
 Script to save company branch details form data after confirmation
 
 */
 
require_once("../db_connection/database_connect.php"); // For database connection

// Retrieve values from the form for registration purposes
	$username = $_REQUEST['username'];
	$companyid = $_REQUEST['company'];
	$branch = $_REQUEST['branch'];
	//$quantity = $_REQUEST['quantity'];
	//$order_price = $_REQUEST['price'];
	//This is an array
	$product =  $_REQUEST['product'];
	//we use implode to convert to string
	$new_product = 1 ;

	
	$pieces = explode(",", $product); 
	//echo $pieces[0];
	foreach($pieces as $value) //loop over values
		{
			//echo $value."<br>"; //print value
			$pieces2 = explode(":", $value);
			echo $pieces2[0]; echo("<br>"); //product
			echo $pieces2[1]; echo("<br>"); //quantity
			echo $pieces2[2]; echo("<br>"); //order price
			////
		    echo $username; echo("<br>");
			echo $companyid; echo("<br>");
			echo $branch; echo("<br>");
          //  echo $quantity;	echo("<br>");		 
		//	echo $order_price; echo("<br>");
			///static to change
			$orderid = 1;
			$list_price = 12 ;
			$productid = 1;
			///
			//Create a prepare statement
			$statement = $db->prepare("INSERT INTO company_orders (Username, 
			CompanyID, BranchID,Product_No)  
			VALUES(:username, :companyid, :branch, :product) ");
			///
			$statement->execute(array(':username' => $username,
			   ':companyid' => $companyid,
			   ':branch' => $branch,
			   ':product' => $pieces2[0]
			));
			///
			$statement2 = $db->prepare("INSERT INTO  company_orders_breakdown (Username, 
			COrderID, ProductID, Qty, MR_Price, List_Price, Order_Price)  
			VALUES(:username, :orderid, :productid, :qty, :mr_price, :list_price, :order_price) ");
			///
			$statement2->execute(array(':username' => $username,
			   ':orderid' => $orderid,
			   ':productid' => $productid,
			   ':qty' => $pieces2[1],
			   ':mr_price' => $pieces2[2],
			   ':list_price' => $list_price,
			   ':order_price' => $pieces2[2]
			));
			
		}
        	
		/*	if(!$statement) 
			{
			  echo "error" ;
			}
			else 
			{
			  echo "successful";
			} */

?>