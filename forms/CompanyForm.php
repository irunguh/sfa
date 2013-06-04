


<?php
require_once("../db_connection/database_connect.php"); // For database connection 
?>
 <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <h3 class="page-title">
                     Company Form Wizard
                     <small>Create a Company</small>
                  </h3>
                  <ul class="breadcrumb">
                     <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a> 
                        <span class="icon-angle-right"></span>
                     </li>
                     <li>
                        <a href="#">Company</a>
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
                           <i class="icon-reorder"></i> Company Details Form - <span class="step-title">Step 1 of 2</span>
                        </div>
                        <div class="tools hidden-phone">
                           <a href="javascript:;" class="collapse"></a>
                           <a href="#portlet-config" data-toggle="modal" class="config"></a>
                           <a href="javascript:;" class="reload"></a>
                           <a href="javascript:;" class="remove"></a>
                        </div>
                     </div>
                     <div class="portlet-body form">
					    <form id="company_form" class="form-horizontal">
                           <div class="form-wizard">
                              <div class="navbar steps">
                                 <div class="navbar-inner">
                                    <ul class="row-fluid">
                                       <li class="span3">
                                          <a href="#tab1" data-toggle="tab" class="step active">
                                          <span class="number">1</span>
                                          <span class="desc"><i class="icon-ok"></i> Company Setup </span>   
                                          </a>
                                       </li>
                                       <li class="span3">
                                          <a href="#tab2" data-toggle="tab" class="step">
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
						   
                                   <h3 class="form-section">Company Details</h3>
									    <div class="row-fluid">
										   <div class="span6">
												<div class="control-group">
												   <label class="control-label">Username<span class="required">*</span></label>
												   <div class="controls">
													  <input id ="user" type="text" name="username" class="span9 m-wrap" />                                        
												   </div>
												</div>
										   </div>
											 <div class="span6">
												<div class="control-group">
												   <label class="control-label">Company Name<span class="required">*</span></label>
												   <div class="controls">
													  <input id= "company_name" type="text" name ="company_name" class="span9 m-wrap" />                                 
												   </div>
												</div>
											 </div>
										</div>
									<h3 class="form-section">Company Contacts</h3>	
									  <div class="row-fluid">
										   <div class="span6">
											 <div class="control-group">
											   <label class="control-label">Company Address<span class="required">*</span></label>
											   <div class="controls">
												  <input id="company_address" type="text" name="company_address" class="span9 m-wrap" />
											   </div>
											 </div>
											 </div>
											 <div class="span6"> 
												<div class="control-group">
												   <label class="control-label">Office Number 1<span class="required">*</span></label>
												   <div class="controls">
													  <input id="company_office_number1" name="company_office_number1" type="text" class="span9 m-wrap" />
													 
												   </div>
												</div>
											  </div>
                                          </div>
										   <div class="row-fluid">
											  <div class="span6"> 											  
													<div class="control-group">
													   <label class="control-label">Office Number 2<span class="required">*</span></label>
													   <div class="controls">
														  <input id="company_office_number2" name="company_office_number2" type="text" class="span9 m-wrap" />
													   </div>
													</div>
												</div>	 
												 <div class="span6"> 
													<div class="control-group">
													   <label class="control-label">Email<span class="required">*</span></label>
													   <div class="controls">
														  <input id="company_email" name="company_email" type="text" class="span9 m-wrap" />
													   </div>
													</div>
												</div>	
										  </div>	
  										   <div class="row-fluid">
												<div class="span6"> 
												<div class="control-group">
												   <label class="control-label">Website<span class="required">*</span></label>
												   <div class="controls">
													  <input id="company_website" name="company_website" type="text" class="span9 m-wrap" />
												   </div>
												</div>
												</div>
												 <div class="span6"> 
													<div class="control-group">
													   <label class="control-label">Company Location No<span class="required">*</span></label>
													   <div class="controls">
														  <input id="company_location_no" name="company_location_no" type="text" class="span9 m-wrap" />
													   </div>
													</div>
												</div>
										 </div>
								<h3 class="form-section">Other Details</h3>	
								  <div class="row-fluid">
								    <div class="span6"> 
										<div class="control-group">
										   <label class="control-label">Company Size</label>
										   <div class="controls">
										  
											   <select id="company_size" class="span9 select2" name="company_size" >
												 <option value=""></option>
											   </select>
											 
										   </div>
										</div>
									</div>
									 <div class="span6"> 
										<div class="control-group">
										   <label class="control-label">Company Type</label>
										   <div class="controls">
											 
												<select id="company_type" class="span9 select2" name="company_type" >
												 <option value=""></option>
											   </select>
										   </div>
										</div>
									</div>
									</div>
									   <div class="row-fluid">
								        <div class="span6"> 
											<div class="control-group">
											   <label class="control-label">Company Status</label>
											   <div class="controls">
												 
													<select id="company_status" class="span9 select2" name="company_status" >
													 <option value=""></option>
												   </select>
												  
											   </div>
											</div>
										</div>
										  <div class="span6"> 
											<div class="control-group">
											   <label class="control-label">State</label>
											   <div class="controls">
										
												   <select id="company_state" class="span9 select2" name="company_state" >
													 <option value=""></option>
												   </select>
												   
											   </div>
											</div>
											</div>
										</div>
										
										 <div class="row-fluid">
								          <div class="span6"> 
											<div class="control-group">
											   <label class="control-label">Country</label>
											   <div class="controls">
												   <select id="country" class="span9 select2" name="country" >
													 <option value=""></option>
												   </select>
											   </div>
											</div>
											</div>
											</div>
									
									
									
									
                                 </div>
                                 <div class="tab-pane" id="tab2">
								 <div id="myerror2" class="alert alert-error hide">
									  <button class="close" data-dismiss="alert"></button>
									 The Form has some fields missing. Please click back button and review the missing fields.
								   </div>
                                    <h3 class="block">Confirm Details and Submit</h3>
                                    <div class="control-group">
                                       <label class="control-label">Username:</label>
                                       <div class="controls">
                                          <span  class="text">
										  <span class = "text" id="confirm_username"></span>
										  </span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Company Name:</label>
                                       <div class="controls">
                                          <span class = "text" id="confirm_company_name"></span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Address:</label>
                                       <div class="controls">
                                           <span class = "text" id="confirm_company_address"></span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Office Number 1:</label>
                                       <div class="controls">
                                         <span class = "text" id="confirm_company_office1"></span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Office Number 2:</label>
                                       <div class="controls">
                                           <span class = "text" id="confirm_company_office2"></span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Email:</label>
                                       <div class="controls">
                                           <span class = "text" id="confirm_company_email"></span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Website:</label>
                                       <div class="controls">
                                           <span class = "text" id="confirm_company_website"></span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Location:</label>
                                       <div class="controls">
                                          <span class = "text" id="confirm_company_location"></span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Company Size:</label>
                                       <div class="controls">
                                           <span class = "text" id="confirm_company_size"></span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Company Type:</label>
                                       <div class="controls">
                                           <span class = "text" id="confirm_company_type"></span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Company Status:</label>
                                       <div class="controls">
                                           <span class = "text" id="confirm_company_status"></span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">State:</label>
                                       <div class="controls">
                                          <span class = "text" id="confirm_company_state"></span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Country Code:</label>
                                       <div class="controls">
                                           <span class = "text" id="confirm_company_country"></span>
                                       </div>
                                    </div>
                                 </div>
								
								  
                              </div>
							  
                              <div class="form-actions clearfix">
                                 <a href="javascript:;" class="btn button-previous">
                                 <i class="m-icon-swapleft"></i> Back 
                                 </a>
                                 <a href="javascript:;" class="btn blue button-next" onclick="myconfirm();"> <!--  -->
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
			     <div class="span10">
						   <div id="success_save" class="portlet box blue hide">
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
										  <a class="btn green" href="dashboard.php?page=company">Add Another</a> 
										  <a class="btn black" href="dashboard.php?page=company_table">View Record</a>
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
     
   
   <!-- END PAGE LEVEL STYLES -->    
 
 <!-- Include Relevant js files -->
  <script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>   
   <!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->  
   <script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
   <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   <!--[if lt IE 9]>
   <script src="assets/plugins/excanvas.js"></script>
   <script src="assets/plugins/respond.js"></script>  
   <![endif]-->   
   <script src="assets/plugins/breakpoints/breakpoints.js" type="text/javascript"></script>  
   <!-- IMPORTANT! jquery.slimscroll.min.js depends on jquery-ui-1.10.1.custom.min.js --> 
   <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery.blockui.js" type="text/javascript"></script>  
   <script src="assets/plugins/jquery.cookie.js" type="text/javascript"></script>
   <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script> 
   <!-- END CORE PLUGINS -->
   <!-- BEGIN PAGE LEVEL PLUGINS -->
    
  
   <!-- Forms Scripts -->
   <script type="text/javascript" src="assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
   <script type="text/javascript" src="assets/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
   
   <script src="assets/scripts/form-wizard.js"></script>     
   <script src="assets/scripts/form-components.js"></script> 
    <script src="assets/scripts/form-validation.js"></script>
  
    
   <!-- End Form Scripts -->
    <!-- Custom Scripts -->
   
   <script src="assets/scripts/custom/retrieveCountry.js"></script> 
   <script src="assets/scripts/custom/retrieveSize.js"></script> 
   <script src="assets/scripts/custom/retrieveType.js"></script> 
   <script src="assets/scripts/custom/retrieveState.js"></script> 
   <script src="assets/scripts/custom/retrieveStatus.js"></script> 
   <script src="assets/scripts/custom/retrieveCompany.js"></script> 
   <script src="assets/scripts/custom/retrieveContacts.js"></script> 
   <script src="assets/scripts/custom/retrieveActivityType.js"></script> 
    <script src="assets/scripts/custom/retrieveBranch.js"></script> 
	
	
	
	<script type="text/javascript" src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-validation/dist/additional-methods.min.js"></script>
   
   <!-- End custom scripts -->
   
  
   <!-- END PAGE LEVEL PLUGINS -->
   
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
    
 
   <!-- END PAGE LEVEL SCRIPTS -->  
   <script>
      jQuery(document).ready(function() {    
         
		 FormWizard.init();
		 FormComponents.init();
		// TableEditable.init();
		 
		// FormValidation.init();
      });
   </script>
 
 <!-- End Include --->

 
 
 
 
 
 
   <script>
      
   
     function myconfirm(){
	 
	         //////////
			
	
					
				/*	 if(validator.form()){ // validation perform
						$('form#company_form').attr({action: 'mycontroller'});			
						//$('form#myForm').submit();
						//alert('Nice form validated');
							
					} */
				        	$('#confirm_username').text(document.getElementById("user").value);
							$('#confirm_company_name').text(document.getElementById("company_name").value);
							$('#confirm_company_address').text(document.getElementById("company_address").value);
							$('#confirm_company_office1').text(document.getElementById("company_office_number1").value);
							$('#confirm_company_office2').text(document.getElementById("company_office_number2").value);
							$('#confirm_company_email').text(document.getElementById("company_email").value);
							$('#confirm_company_website').text(document.getElementById("company_website").value);
							$('#confirm_company_location').text(document.getElementById("company_location_no").value);
							$('#confirm_company_size').text($('#company_size :selected').text());
							$('#confirm_company_type').text($('#company_type :selected').text());
							$('#confirm_company_status').text($('#company_status :selected').text());
							$('#confirm_company_state').text($('#company_state :selected').text());
							$('#confirm_company_country').text($('#country :selected').text()); 
			
			
			 
	 }
   </script>
   
   
	
  
   <!-- END JAVASCRIPTS -->   



