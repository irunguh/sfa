<?php
require_once("./db_connection/database_connect.php"); // For database connection 
?>
 <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <h3 class="page-title">
                     WorkPlan Clocking Form Wizard
                     <small> WorkPlan</small>
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
                     <li><a href="#">Form Wizard</a></li>
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
                           <i class="icon-reorder"></i> WorkPlan Clocking Details Form - <span class="step-title">Step 1 of 2</span>
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
                        <form id="company_type_form" class="form-horizontal">
                           <div class="form-wizard">
                              <div class="navbar steps">
                                 <div class="navbar-inner">
                                    <ul class="row-fluid">
                                       <li class="span3">
                                          <a href="#tab1" data-toggle="tab" class="step active">
                                          <span class="number">1</span>
                                          <span class="desc"><i class="icon-ok"></i> WorkPlan Clocking Setup </span>   
                                          </a>
                                       </li>
                                       <li class="span3">
                                          <a href="#tab4" data-toggle="tab" class="step">
                                          <span class="number">2</span>
                                          <span class="desc"><i class="icon-ok"></i> Confirmation </span>   
                                          </a> 
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div id="bar" class="progress progress-success progress-striped">
                                 <div class="bar"></div>
                              </div>
                              <div class="tab-content">
                                 <div class="tab-pane active" id="tab1">
                                    <h3 class="block"> WorkPlan Clocking</h3>
                                    <div class="control-group">
                                       <label class="control-label">WorkPlan Id </label>
                                       <div class="controls">
                                          <input id ="workplan" type="text" name="workplan" class="span6 m-wrap" />
                                          <span class="help-inline">Select workplan</span>
                                       </div>
                                    </div>
                                   
								  <div class="control-group">
									  <label class="control-label">Clocking Date</label>
									  <div class="controls">
										 <div class="input-append date form_datetime">
											 <input id= "clocking_date" size="16" type="text" value="" readonly class="m-wrap">
											 <span class="add-on"><i class="icon-calendar"></i></span>
										 </div>
									  </div>
								   </div>
								    <div class="control-group">
                                       <label class="control-label">Longitude</label>
                                       <div class="controls">
                                          <input id ="longitude" type="text" name="longitude" class="span6 m-wrap" />
                                       </div>
                                    </div>
								    <div class="control-group">
                                       <label class="control-label">Latitude</label>
                                       <div class="controls">
                                          <input id ="latitude" type="text" name="latitude" class="span6 m-wrap" />
                                       </div>
                                    </div>
								   
								   <div class="control-group">
                                       <label class="control-label">Location Address</label>
                                       <div class="controls">
                                          <input id ="location_address" type="text" name="location_address" class="span6 m-wrap" />
                                         
                                       </div>
                                    </div> 
									
                                 </div>
                                 <div class="tab-pane" id="tab4">
                                    <h3 class="block">Confirm Details and Submit</h3>
                                    <div class="control-group">
                                       <label class="control-label">WorkPlan:</label>
                                       <div class="controls">
                                          <span  class="text">
										  <span class = "text" id="confirm_workplan"></span>
										  </span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Clocking Date:</label>
                                       <div class="controls">
                                          <span  class="text">
										  <span class = "text" id="confirm_clocking_date"></span>
										  </span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Longitude:</label>
                                       <div class="controls">
                                          <span  class="text">
										  <span class = "text" id="confirm_Longitude"></span>
										  </span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Latitude:</label>
                                       <div class="controls">
                                          <span  class="text">
										  <span class = "text" id="confirm_latitude"></span>
										  </span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Location Address:</label>
                                       <div class="controls">
                                          <span  class="text">
										  <span class = "text" id="confirm_location_address"></span>
										  </span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label"></label>
                                       <div class="controls">
                                          <label class="checkbox">
                                          <input type="checkbox" value="" /> I confirm details
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-actions clearfix">
                                 <a href="javascript:;" class="btn button-previous">
                                 <i class="m-icon-swapleft"></i> Back 
                                 </a>
                                 <a href="javascript:;" class="btn blue button-next" onclick="myconfirmbranch()">
                                 Continue <i class="m-icon-swapright m-icon-white"></i>
                                 </a>
                                 <a href="javascript:;" class="btn green button-submit">
                                 Submit <i class="m-icon-swapright m-icon-white"></i>
                                 </a>
                              </div>
                           </div>
                        </form>
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



