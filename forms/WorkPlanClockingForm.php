<?php
require_once("./db_connection/database_connect.php"); // For database connection 
?>
 <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <h3 class="page-title">
                     WorkPlan Clocking
                     <small> Clock a Job</small>
                  </h3>
                  <ul class="breadcrumb">
                     <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a> 
                        <span class="icon-angle-right"></span>
                     </li>
                     <li>
                        <a href="#">WorkPlan Clocking</a>
                        <span class="icon-angle-right"></span>
                     </li>
                     
                  </ul>
               </div>
            </div>
            <!-- END PAGE HEADER-->
			
			
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <div class="portlet box blue" id="form_wizard_1">
                     <div class="portlet-title">
                        <div class="caption">
                           <i class="icon-reorder"></i> WorkPlan Clocking
                        </div>
                        <div class="tools hidden-phone">
                           <a href="javascript:;" class="collapse"></a>
                           <a href="#portlet-config" data-toggle="modal" class="config"></a>
                           <a href="javascript:;" class="reload"></a>
                           <a href="javascript:;" class="remove"></a>
                        </div>
                     </div>
                     <div class="portlet-body form">
					    <div class="alert alert-error hide">
							<button class="close" data-dismiss="alert"></button>
							<span>Some information missing.</span>
						  </div>
                           <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                           <form action="#" class="form-horizontal">
						      <div class="control-group">
                              <label class="control-label">Select Work To Clock</label>
                              <div class="controls">
                                 <select class="span6 chosen" data-placeholder="Choose a Category" tabindex="1">
                                    <option value=""></option>
                                    <option value="Category 1">Category 1</option>
                                    <option value="Category 2">Category 2</option>
                                    <option value="Category 3">Category 5</option>
                                    <option value="Category 4">Category 4</option>
                                 </select>
								  
                              </div>
							
                           </div>
						    <div class="form-actions">
                                   <button type="submit" class="btn blue">Clock In</button>
                             </div>
						   </form>
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
     function myconfirmbranch(){
	        ///
			
	        //set text
			$('#confirm_workplan').text(document.getElementById("workplan").value); 
			$('#confirm_clocking_date').text(document.getElementById("clocking_date").value); 
			$('#confirm_Longitude').text(document.getElementById("longitude").value); 
			$('#confirm_latitude').text(document.getElementById("latitude").value);
			$('#confirm_location_address').text(document.getElementById("location_address").value); 
			
	 }
   </script>
   
	
  
   <!-- END JAVASCRIPTS -->   



