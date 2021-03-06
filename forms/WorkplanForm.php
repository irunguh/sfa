<?php
require_once("./db_connection/database_connect.php"); // For database connection 
require_once("./functions.php");
	//if user is not logged in
	if(!isLoggedIn())
	{
		header('Location: index.php');
		die();
	} 
?>
 <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <h3 class="page-title">
                     WorkPlan Form Wizard
                     <small> WorkPlan</small>
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
                     <li><a href="#">Form Wizard</a></li>
                  </ul>
               </div>
            </div>
            <!-- END PAGE HEADER-->
			
			
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <div class="portlet box blue" id="form_wizard_workplan">
                     <div class="portlet-title">
                        <div class="caption">
                           <i class="icon-reorder"></i> WorkPlan Details Form - <span class="step-title">Step 1 of 2</span>
                        </div>
                        <div class="tools hidden-phone">
                           <a href="javascript:;" class="collapse"></a>
                           <a href="#portlet-config" data-toggle="modal" class="config"></a>
                           <a href="javascript:;" class="reload"></a>
                           <a href="javascript:;" class="remove"></a>
                        </div>
                     </div>
                     <div class="portlet-body form">
					   
                        <form id="workplan_form" class="form-horizontal">
                           <div class="form-wizard">
                              <div class="navbar steps">
                                 <div class="navbar-inner">
                                    <ul class="row-fluid">
                                       <li class="span3">
                                          <a href="#tab1" data-toggle="tab" class="step active">
                                          <span class="number">1</span>
                                          <span class="desc"><i class="icon-ok"></i> WorkPlan Setup </span>   
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
							       <div id="myerror" class="alert alert-error hide">
									  <button class="close" data-dismiss="alert"></button>
									   Please correct the following missing fields.
								   </div>
                                    <!--<h3 class="block"> WorkPlan </h3> -->
								  <h3 class="form-section"> WorkPlan Times and Date Settings </h3>
								  
								  <div class="row-fluid">
										   <div class="span6">
											<div class="control-group">
											   <label class="control-label">Company </label>
											   <div class="controls">
												<select id="company" class="span9" name="company" >
													 <option value=""></option>
												</select>
												
											   </div>
											</div>
									      </div>
								     <div class="span6">		  
										      <div class="control-group">
											  <label class="control-label">Meeting Date</label>
											  <div class="controls">
												 <div class="input-append date date-picker" data-date="<?php echo("dd-mm-yyyy") ?>" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
													<input id= "meeting_date" name="meeting_date" class="m-wrap m-ctrl-medium date-picker" size="16" type="text" value="" /><span class="add-on"><i class="icon-calendar"></i></span>
												 </div>
											  </div>
										   </div>
											</div>
									</div>
								 <div class="row-fluid">	
								    <div class="span6">
										
										    <div class="control-group">
											   <label class="control-label">Contact</label>
											   <div class="controls">
												  <!--<input id ="contact" type="text" name="contact" class="span6 m-wrap" /> -->
												  <select id="contact" class="span9 select2" name="contact" >
													 <option value=""></option>
												   </select>
											   </div>
											</div>
									</div>
									 <div class="span6">
											<div class="control-group">
											  <label class="control-label">Start Time</label>
											  <div class="controls">
												 <div class="input-append bootstrap-timepicker-component">
													<input id="start_time" name="start_time" class="m-wrap m-ctrl-small timepicker-default" type="text" />
													<span class="add-on"><i class="icon-time"></i></span>
												 </div>
											  </div>
										   </div>
								    </div>
								  </div>
								  <div class="row-fluid">
                                     <div class="span6">
										   <div class="control-group">
										   <label class="control-label">Activity Type</label>
										   <div class="controls">
											 <!-- <input id ="work_activity_type" type="text" name="work_activity_type" class="span6 m-wrap" /> -->
											   <select id="work_activity_type" class="span9 select2" name="work_activity_type" >
												 <option value=""></option>
											   </select>
										   </div>
											</div>
										</div>								  
								    <div class="span6">
									   <div class="control-group">
										  <label class="control-label">End Time</label>
										  <div class="controls">
											 <div class="input-append bootstrap-timepicker-component">
												<input id="end_time" name="end_time" class="m-wrap m-ctrl-small timepicker-default" type="text" />
												<span class="add-on"><i class="icon-time"></i></span>
											 </div>
										  </div>
									   </div>
								   </div>
									  
									</div>
									 <h3 class="form-section"> WorkPlan Meeting Address & Proposed Activities</h3>
									  <div class="row-fluid">
										   <div class="span6">
										   <div class="control-group">
											   <label class="control-label">Meeting Address:</label>
											   <div class="controls">
												   <textarea id="work_address" name="work_address" class="span8 m-wrap" rows="6"></textarea>
											   </div>
											</div> 
											</div> 
											 <div class="span6">
											 <div class="control-group">
												   <label class="control-label">Proposed Activity:</label>
												   <div class="controls">
													  <textarea id= "proposed_activity" class="span8 m-wrap"  rows="6"></textarea>
												   </div>
											 </div>
											 </div>
										</div> 
									
                                 </div>
                                 <div class="tab-pane" id="tab4">
								   <div id="myerror2" class="alert alert-error hide">
									  <button class="close" data-dismiss="alert"></button>
									 The Form has some fields missing. Please click back button and review the missing fields.
								   </div>
                                    <h3 class="block">Confirm Details and Submit</h3>
                                    <div class="control-group">
                                       <label class="control-label">Company:</label>
                                       <div class="controls">
                                          <span  class="text">
										  <span class = "text" id="confirm_company"></span>
										  </span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Contact:</label>
                                       <div class="controls">
                                          <span  class="text">
										  <span class = "text" id="confirm_contact"></span>
										  </span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Meeting Date:</label>
                                       <div class="controls">
                                          <span  class="text">
										  <span class = "text" id="confirm_meeting_date"></span>
										  </span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Start Time:</label>
                                       <div class="controls">
                                          <span  class="text">
										  <span class = "text" id="confirm_start_time"></span>
										  </span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">End Time:</label>
                                       <div class="controls">
                                          <span  class="text">
										  <span class = "text" id="confirm_end_time"></span>
										  </span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Proposed Activity:</label>
                                       <div class="controls">
                                          <span  class="text">
										  <span class = "text" id="confirm_proposed_activity"></span>
										  </span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Meeting Address:</label>
                                       <div class="controls">
                                          <span  class="text">
										  <span class = "text" id="confirm_address"></span>
										  </span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Activity Type:</label>
                                       <div class="controls">
                                          <span  class="text">
										  <span class = "text" id="confirm_activity_type"></span>
										  </span>
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
                                 <a href="javascript:;" class="btn green button-submit-workplan">
                                 Submit <i class="m-icon-swapright m-icon-white"></i>
                                 </a>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
			    <div class="span10">
						   <div id="success_save_workplan" class="portlet box blue hide">
							 <div class="portlet-title">
								<div class="caption"><i class="icon-cogs"></i>Success</div>
								<div class="tools">
								   <a href="javascript:;" class="collapse"></a>
								   <a href="#portlet-config" data-toggle="modal" class="config"></a>
								   <a href="javascript:;" class="reload hidden-phone"></a>
								  
								</div>
							 </div>
								 <div  class="portlet-body">
									<div class="alert alert-block alert-success fade in">
									   
									   <h4 class="alert-heading">Success!</h4>
									   <p>
										Thank you for submitting data. The Record was successfully updated!
									   </p>
									   <p>
										 You can view data or create a new record. Please Select an action below
									   </p>
									   <p>
										  <a class="btn green" href="dashboard.php?page=workplan">Add Another</a> 
										  <a class="btn black" href="dashboard.php?page=workplan_table">View Record</a>
										   <a class="btn black" href="dashboard.php?page=calendar">View Calendar</a>
									   </p>
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
   <script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
   <script>
     function myconfirmbranch(){
	        ///
			 //var proposed_activity = CKEDITOR.instances['proposed_activity'].getData();
			  //var confirm_address = CKEDITOR.instances['work_address'].getData();
			  var confirm_address = $('textarea#work_address').val();
			  var proposed_activity = $('textarea#proposed_activity').val();
	        //set text
			//$('#confirm_company').text(document.getElementById("company").value); 
			 $('#confirm_company').text($('#company :selected').text());
			//$('#confirm_contact').text(document.getElementById("contact").value); 
			///
		    $('#confirm_contact').text($('#contact :selected').text());
			$('#confirm_meeting_date').text(document.getElementById("meeting_date").value); 
			$('#confirm_start_time').text(document.getElementById("start_time").value);
			$('#confirm_end_time').text(document.getElementById("end_time").value); 
			$('#confirm_proposed_activity').text(proposed_activity);
			
			//
		   $('#confirm_address').text(confirm_address);
		   
		   
		   $('#confirm_activity_type').text($('#work_activity_type :selected').text());
	 }
   </script>
   
	
  
   <!-- END JAVASCRIPTS -->   



