<?php
require_once("../db_connection/database_connect.php"); // For database connection 
 //count total number of companies
  $sql = 'SELECT  Company_Name as name, MONTH(Meeting_Date) as month, count(Proposed_Activity) as activity from  work_plan 
  left join company on work_plan.CompanyID = company.CompanyID group by Company_Name limit 1' ;
  $stmt = $db->prepare($sql);
  $stmt->execute();
  ///
  $graph_company = array();
  $graph_data = array();
  $b = array(0,0,0,0,0,0,0,0,0,0,0,0);
  ////
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
  {
	  $value = $row['activity'] ;
	 // $graph_data[] = array($row['name'], round($value));		
      $graph_company[] = array($row['name']);	
      //$graph_data[] = array(round($value)) 	;  
	  /////
	  $b[$row['month']-1] = $row['activity'];
	  
	 
	  
	  //
	  $graph_data[] = implode(',', $b);
	  //echo json_encode($graph_data);
	  //
	  //echo implode(',', $b);
	 // $graph_data[] = preg_replace('/"([a-zA-Z_]+[a-zA-Z0-9_]*)":/','$1:',$graph_data); 
  }
  //$str = str_replace(array('\'', '"'), '',$graph_data); 
 $str =  json_encode($graph_data);
 $str = str_replace(array('\'', '"'), '',$str);  
 echo $str;
  //print_r ($graph_data);
 // echo json_encode($graph_company); 
  //echo("\n");
  //echo json_encode($graph_data); 
  
?> 