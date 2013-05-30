<?php
require_once("./db_connection/database_connect.php"); // For database connection 
?>
 <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <h3 class="page-title">
                     WorkPlan Status Form Wizard
                     <small> WorkPlan Status</small>
                  </h3>
                  <ul class="breadcrumb">
                     <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a> 
                        <span class="icon-angle-right"></span>
                     </li>
                     <li>
                        <a href="#">WorkPlan Status</a>
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
                           <i class="icon-reorder"></i> WorkPlan Status Details Form - <span class="step-title">Step 1 of 2</span>
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
                                          <span class="desc"><i class="icon-ok"></i> WorkPlan Status Setup </span>   
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
                                    <h3 class="block"> WorkPlan Status </h3>
                                    <div class="control-group">
                                       <label class="control-label">WorkPlan </label>
                                       <div class="controls">
                                          <input id ="workplan" type="text" name="workplan" class="span6 m-wrap" />
                                          <span class="help-inline">Select WorkPlan</span>
                                       </div>
                                    </div>
								  <div class="control-group">
									  <label class="control-label">Meeting Date</label>
									  <div class="controls">
										 <div class="input-append date form_datetime">
											 <input id= "meeting_date" size="16" type="text" value="" readonly class="m-wrap">
											 <span class="add-on"><i class="icon-calendar"></i></span>
										 </div>
									  </div>
								   </div>
								    <div class="control-group">
									  <label class="control-label">Start Time</label>
									  <div class="controls">
										 <div class="input-append bootstrap-timepicker-component">
											<input id="start_time" class="m-wrap m-ctrl-small timepicker-default" type="text" />
											<span class="add-on"><i class="icon-time"></i></span>
										 </div>
									  </div>
								   </div>
								   <div class="control-group">
									  <label class="control-label">End Time</label>
									  <div class="controls">
										 <div class="input-append bootstrap-timepicker-component">
											<input id="end_time" class="m-wrap m-ctrl-small timepicker-default" type="text" />
											<span class="add-on"><i class="icon-time"></i></span>
										 </div>
									  </div>
								   </div>
								   <div class="control-group">
                                       <label class="control-label">Proposed Activity</label>
                                       <div class="controls">
                                          <textarea id= "proposed_activity" class="span12 ckeditor m-wrap" name="editor3" rows="6"></textarea>
                                       </div>
                                    </div>
								   <div class="control-group">
                                       <label class="control-label">Address</label>
                                       <div class="controls">
                                          <input id ="work_address" type="text" name="work_address" class="span6 m-wrap" />
                                         
                                       </div>
                                    </div> 
									<div class="control-group">
                                       <label class="control-label">Activity Type</label>
                                       <div class="controls">
                                          <input id ="work_activity_type" type="text" name="work_activity_type" class="span6 m-wrap" />
                                         
                                       </div>
                                    </div> 
									<div class="control-group">
                                       <label class="control-label">Activity Status</label>
                                       <div class="controls">
                                          <input id ="work_activity_status" type="text" name="work_activity_type" class="span6 m-wrap" />
                                         
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
                                       <label class="control-label">Address:</label>
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
									<div class="control-group">
                                       <label class="control-label">Activity Status:</label>
                                       <div class="controls">
                                          <span  class="text">
										  <span class = "text" id="confirm_activity_status"></span>
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
			 var proposed_activity = CKEDITOR.instances['proposed_activity'].getData();
	        //set text
			$('#confirm_workplan').text(document.getElementById("workplan").value);
			$('#confirm_meeting_date').text(document.getElementById("meeting_date").value); 
			$('#confirm_start_time').text(document.getElementById("start_time").value);
			$('#confirm_end_time').text(document.getElementById("end_time").value); 
			$('#confirm_proposed_activity').text(jQuery(proposed_activity).text());
			$('#confirm_address').text(document.getElementById("work_address").value); 
			$('#confirm_activity_type').text(document.getElementById("work_activity_type").value);
			$('#confirm_activity_status').text(document.getElementById("work_activity_status").value);
	 }
   </script>
   
	
  
   <!-- END JAVASCRIPTS -->   



