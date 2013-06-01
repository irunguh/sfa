<?php
require_once("./db_connection/database_connect.php"); // For database connection 
?>
 <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <h3 class="page-title">
                     Work Plan Calendar
                     <small>View Events on a Calendar</small>
                  </h3>
                  <ul class="breadcrumb">
                     <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a> 
                        <span class="icon-angle-right"></span>
                     </li>
                     <li>
                        <a href="#">WorkPlan</a>
                        <span class="icon-angle-right"></span>
                     </li>
                     <li><a href="#">Calendar</a></li>
                  </ul>
               </div>
            </div>
            <!-- END PAGE HEADER-->
			  
			
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
			  
               <div class="span12">
                   <div class="portlet box blue calendar">
                        <div class="portlet-title">
                           <div class="caption"><i class="icon-calendar"></i>Calendar</div>
                        </div>
                        <div class="portlet-body light-grey">
                           <div id="calendar">
                           </div>
                        </div>
                     </div>
               </div>
			   
			   
			   
            </div>
			 
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
   
      <!-- END PAGE -->  
   
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
  
   <script>
      
   
   
   </script>
   
  
	
  
   <!-- END JAVASCRIPTS -->   



