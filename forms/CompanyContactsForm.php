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
                     <small>Input Company Contacts</small>
                  </h3>
                  <ul class="breadcrumb">
                     <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a> 
                        <span class="icon-angle-right"></span>
                     </li>
                     <li>
                        <a href="#">Company Contacts</a>
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
                           <i class="icon-reorder"></i> Company Contacts Details Form - <span class="step-title">Step 1 of 2</span>
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
                        <form id="company_contacts_form" class="form-horizontal">
                           <div class="form-wizard">
                              <div class="navbar steps">
                                 <div class="navbar-inner">
                                    <ul class="row-fluid">
                                       <li class="span3">
                                          <a href="#tab1" data-toggle="tab" class="step active">
                                          <span class="number">1</span>
                                          <span class="desc"><i class="icon-ok"></i> Company Contacts Setup </span>   
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
                                    <h3 class="block">Company Contacts</h3>
                                    <div class="control-group">
                                       <label class="control-label">First Name</label>
                                       <div class="controls">
                                          <input id ="first_name" type="text" name="first_name" class="span6 m-wrap" />
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Last Name </label>
                                       <div class="controls">
                                          <input id= "last_name" type="text" name ="last_name" class="span6 m-wrap" />
                                       </div>
                                    </div>
                                     <div class="control-group">
                                       <label class="control-label">Mobile Number</label>
                                       <div class="controls">
                                          <input id="mobile_number" type="text" name="mobile_number" class="span6 m-wrap" />
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Alternative Mobile Number</label>
                                       <div class="controls">
                                          <input id="alt_mobile_number" name="alt_mobile_number" type="text" class="span6 m-wrap" />
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Email Address</label>
                                       <div class="controls">
                                          <input id="email_address" name="email_address" type="text" class="span6 m-wrap" />
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Select Relationship Strength </label>
                                       <div class="controls">
                                          <input id="relationship_strength" name="relationship_strength" type="text" class="span6 m-wrap" />
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Select Profession Id </label>
                                       <div class="controls">
                                          <input id="profession" name="profession" type="text" class="span6 m-wrap" />
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Select Speciality Id </label>
                                       <div class="controls">
                                          <input id="speciality" name="speciality" type="text" class="span6 m-wrap" />
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Select Speciality Id </label>
                                       <div class="controls">
                                          <input id="speciality" name="speciality" type="text" class="span6 m-wrap" />
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Select Company Id </label>
                                       <div class="controls">
                                          <input id="company" name="company" type="text" class="span6 m-wrap" />
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Select Branch Id </label>
                                       <div class="controls">
                                          <input id="branch" name="branch" type="text" class="span6 m-wrap" />
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Select Lead Source Id </label>
                                       <div class="controls">
                                          <input id="lead_source" name="lead_source" type="text" class="span6 m-wrap" />
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Reports To </label>
                                       <div class="controls">
                                          <input id="reports_to" name="reports_to" type="text" class="span6 m-wrap" />
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Position </label>
                                       <div class="controls">
                                          <input id="position" name="position" type="text" class="span6 m-wrap" />
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Any Extra Information? </label>
                                       <div class="controls">
                                          <input id="extra_info" name="extra_info" type="text" class="span6 m-wrap" />
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane" id="tab4">
                                    <h3 class="block">Confirm Details and Submit</h3>
                                    <div class="control-group">
                                       <label class="control-label">First Name:</label>
                                       <div class="controls">
                                          <span  class="text">
										  <span class = "text" id="confirm_first_name"></span>
										  </span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Last Name</label>
                                       <div class="controls">
                                          <span class = "text" id="confirm_last_name"></span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Mobile Number:</label>
                                       <div class="controls">
                                           <span class = "text" id="confirm_mobile_number"></span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Alternative Mobile Number:</label>
                                       <div class="controls">
                                         <span class = "text" id="confirm_alt_mobile_number"></span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Email Address:</label>
                                       <div class="controls">
                                           <span class = "text" id="confirm_email_address"></span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Relationship Strength:</label>
                                       <div class="controls">
                                           <span class = "text" id="confirm_relationship_strength"></span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Profession:</label>
                                       <div class="controls">
                                           <span class = "text" id="confirm_profession"></span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Speciality:</label>
                                       <div class="controls">
                                           <span class = "text" id="confirm_speciality"></span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Company:</label>
                                       <div class="controls">
                                           <span class = "text" id="confirm_company"></span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Branch:</label>
                                       <div class="controls">
                                           <span class = "text" id="confirm_branch"></span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Lead Source:</label>
                                       <div class="controls">
                                           <span class = "text" id="confirm_lead_source"></span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Reports To:</label>
                                       <div class="controls">
                                           <span class = "text" id="confirm_reports_to"></span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Postion:</label>
                                       <div class="controls">
                                           <span class = "text" id="confirm_position"></span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Extra Information:</label>
                                       <div class="controls">
                                           <span class = "text" id="confirm_extra_info"></span>
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
      
   
     function myconfirm(){
			$('#confirm_first_name').text(document.getElementById("first_name").value);
			$('#confirm_last_name').text(document.getElementById("last_name").value);
			$('#confirm_mobile_number').text(document.getElementById("mobile_number").value);
			$('#confirm_alt_mobile_number').text(document.getElementById("alt_mobile_number").value);
			$('#confirm_email_address').text(document.getElementById("email_address").value);
			$('#confirm_relationship_strength').text(document.getElementById("relationship_strength").value);
			$('#confirm_profession').text(document.getElementById("profession").value);
			$('#confirm_speciality').text(document.getElementById("speciality").value);
			$('#confirm_company').text(document.getElementById("company").value);
			$('#confirm_branch').text(document.getElementById("branch").value);
			$('#confirm_lead_source').text(document.getElementById("lead_source").value);
			$('#confirm_reports_to').text(document.getElementById("reports_to").value);
			$('#confirm_position').text(document.getElementById("position").value);
			$('#confirm_extra_info').text(document.getElementById("extra_info").value);
			
			 
	 }
   </script>
   
	
  
   <!-- END JAVASCRIPTS -->   



