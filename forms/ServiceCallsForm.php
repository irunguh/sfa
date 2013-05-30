<?php
require_once("./db_connection/database_connect.php"); // For database connection 
?>
 <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <h3 class="page-title">
                     Company Form Wizard
                     <small>Create a Company Group Service Calls</small>
                  </h3>
                  <ul class="breadcrumb">
                     <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a> 
                        <span class="icon-angle-right"></span>
                     </li>
                     <li>
                        <a href="#">Company Group Service Calls</a>
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
                           <i class="icon-reorder"></i> Company Group Service Calls - <span class="step-title">Step 1 of 2</span>
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
                        <form id="company_servicecalls_form" class="form-horizontal">
                           <div class="form-wizard">
                              <div class="navbar steps">
                                 <div class="navbar-inner">
                                    <ul class="row-fluid">
                                       <li class="span3">
                                          <a href="#tab1" data-toggle="tab" class="step active">
                                          <span class="number">1</span>
                                          <span class="desc"><i class="icon-ok"></i> Group Service Call  Setup </span>   
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
                                    <h3 class="block">Group Service Call Details</h3>
                                    <div class="control-group">
                                       <label class="control-label">Company Id</label>
                                       <div class="controls">
                                          <input id ="company" type="text" name="company" class="span6 m-wrap" />
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Meeting Summary </label>
                                       <div class="controls">
                                           <textarea id= "meeting_summary_id" class="span12 ckeditor m-wrap" name="editor1" rows="6"></textarea>
                                       </div>
                                    </div>
                                     <div class="control-group">
                                       <label class="control-label">Questions Asked</label>
                                       <div class="controls">
                                         <textarea id= "questions_asked" class="span12 ckeditor m-wrap" name="editor2" rows="6"></textarea>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Unresolved Issues</label>
                                       <div class="controls">
                                          <textarea id= "unresolved_issues" class="span12 ckeditor m-wrap" name="editor3" rows="6"></textarea>
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
                                       <label class="control-label">Meeting List</label>
                                       <div class="controls">
                                          <input id="meeting_list" name="meeting_list" type="text" class="span6 m-wrap" />
                                          
                                       </div>
                                    </div>
								
                                 </div>
                                 <div class="tab-pane" id="tab4">
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
                                       <label class="control-label">Meeting Summary:</label>
                                       <div class="controls">
                                          <span class = "text" id="confirm_meeting_summary"></span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Questions Asked:</label>
                                       <div class="controls">
                                           <span class = "text" id="confirm_questions_asked"></span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Unresolved Issues:</label>
                                       <div class="controls">
                                         <span class = "text" id="confirm_unresolved_issues"></span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Meeting Date:</label>
                                       <div class="controls">
                                           <span class = "text" id="confirm_meeting_date"></span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Meeting List:</label>
                                       <div class="controls">
                                           <span class = "text" id="confirm_meeting_list"></span>
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
                                 <a href="javascript:;" class="btn blue button-next" onclick="myconfirm()">
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
      
   
     function myconfirm(){
	 
	      //Retrieves values from the CKEDITOR
		  var meeting_summary = CKEDITOR.instances['meeting_summary_id'].getData();
		  var questions_asked = CKEDITOR.instances['questions_asked'].getData();
		  var unresolved_issues = CKEDITOR.instances['unresolved_issues'].getData();
		 //set text
			$('#confirm_company').text(document.getElementById("company").value);
			$('#confirm_meeting_summary').text(jQuery(meeting_summary).text());
			$('#confirm_questions_asked').text(jQuery(questions_asked).text());
			$('#confirm_unresolved_issues').text(jQuery(unresolved_issues).text());
		    $('#confirm_meeting_date').text(document.getElementById("meeting_date").value);
			$('#confirm_meeting_list').text(document.getElementById("meeting_list").value);
			
			
			 
	 }
   </script>
   

