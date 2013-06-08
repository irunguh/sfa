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
                     <small>Create a Company Orders</small>
                  </h3>
                  <ul class="breadcrumb">
                     <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a> 
                        <span class="icon-angle-right"></span>
                     </li>
                     <li>
                        <a href="#">Company Orders</a>
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
                  <div class="portlet box blue" id="form_wizard_order">
                     <div class="portlet-title">
                        <div class="caption">
                           <i class="icon-reorder"></i> Company Orders Details Form - <span class="step-title">Step 1 of 2</span>
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
                        <form id="company_orders_form" class="form-horizontal">
                           <div class="form-wizard">
                              <div class="navbar steps">
                                 <div class="navbar-inner">
                                    <ul class="row-fluid">
                                       <li class="span3">
                                          <a href="#tab1" data-toggle="tab" class="step active">
                                          <span class="number">1</span>
                                          <span class="desc"><i class="icon-ok"></i> Company Orders Setup </span>   
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
                                    <h3 class="form-section">Company Order Details</h3>
									 <div class="row-fluid">
									  <div class="span6">
										<div class="control-group">
										   <label class="control-label">Username</label>
										   <div class="controls">
											  <input id ="username" type="text" name="username" class="span9 m-wrap" />
											
										   </div>
										</div>
										</div>
										 <div class="span6">
										<div class="control-group">
										   <label class="control-label">Select Company</label>
										   <div class="controls">
											  <select id="company" class="span9 select2" name="company" >
												 <option value=""></option>
											</select>
										   </div>
										   </div>
										</div>
									 </div>
									  <div class="row-fluid">
									     <div class="span6">
										 <div class="control-group">
										   <label class="control-label">Select Branch</label>
										   <div class="controls">
											 <!-- <input id="branch_name" type="text" name="branch_name" class="span6 m-wrap" /> -->
											   <select id="company_branch_name" class="span9 select2" name="company_branch_name" >
												 <option value=""></option>
											</select>
										   </div>
										   </div>
										</div>
										</div>
									  <h3 class="form-section">Products:</h3>
									   <div class="row-fluid">
									     <div class="span10">
											<div class="control-group">
											  <label class="control-label">Select Products</label>
											  <div class="controls">
												 <select id="product" class="span6 m-wrap" multiple="multiple" data-placeholder="Choose a Category" tabindex="1">
													
												 </select>
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
                                       <label class="control-label">Username:</label>
                                       <div class="controls">
                                          <span  class="text">
										  <span class = "text" id="confirm_username"></span>
										  </span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Company</label>
                                       <div class="controls">
                                          <span class = "text" id="confirm_company_name"></span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Branch:</label>
                                       <div class="controls">
                                           <span class = "text" id="confirm_company_branch_name"></span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Product No:</label>
                                       <div class="controls">
                                         <span class = "text" id="confirm_product_no"></span>
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
  
  <script src="assets/scripts/custom/retrieveCountry.js"></script> 
   <script src="assets/scripts/custom/retrieveSize.js"></script> 
   <script src="assets/scripts/custom/retrieveType.js"></script> 
   <script src="assets/scripts/custom/retrieveState.js"></script> 
   <script src="assets/scripts/custom/retrieveStatus.js"></script> 
   <script src="assets/scripts/custom/retrieveCompany.js"></script> 
   <script src="assets/scripts/custom/retrieveContacts.js"></script> 
   <script src="assets/scripts/custom/retrieveActivityType.js"></script> 
  <script src="assets/scripts/custom/retrieveBranch.js"></script> 
   <!-- End custom scripts -->
    
    <script>
      jQuery(document).ready(function() { 
					  
         OrderWizard.init();
		 FormComponents.init();

      });
   </script>
   <script>
      
   
     function myconfirmbranch(){
	 //alert($('#company :selected').text());
	 //alert($('#confirm_username').text(document.getElementById("username").value));
			$('#confirm_username').text(document.getElementById("username").value);
			//$('#confirm_company_name').text(document.getElementById("company").value);
			$('#confirm_company_name').text($('#company :selected').text());
			//$('#confirm_company_branch_name').text(document.getElementById("company_branch_name").value);
			$('#confirm_company_branch_name').text($('#company_branch_name :selected').text());
			$('#confirm_product_no').text($('#product :selected').text());
			
			
			 
	 }
   </script>
   
	
  
   <!-- END JAVASCRIPTS -->   



