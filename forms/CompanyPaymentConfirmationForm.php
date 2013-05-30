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
                     <small>Company Payment Confirmation</small>
                  </h3>
                  <ul class="breadcrumb">
                     <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a> 
                        <span class="icon-angle-right"></span>
                     </li>
                     <li>
                        <a href="#">Company Payment Confirmation</a>
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
                           <i class="icon-reorder"></i>Orders Payment Confirmation Details Form - <span class="step-title">Step 1 of 2</span>
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
                        <form id="company_payment_confirmation_form" class="form-horizontal">
                           <div class="form-wizard">
                              <div class="navbar steps">
                                 <div class="navbar-inner">
                                    <ul class="row-fluid">
                                       <li class="span3">
                                          <a href="#tab1" data-toggle="tab" class="step active">
                                          <span class="number">1</span>
                                          <span class="desc"><i class="icon-ok"></i> Company Payment Confirmation</span>   
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
                                    <h3 class="block">Payment Confirmation</h3>
                                    <div class="control-group">
                                       <label class="control-label">Username</label>
                                       <div class="controls">
                                          <input id ="username" type="text" name="username" class="span6 m-wrap" />
                                          <span class="help-inline">Provide your username</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Select Order </label>
                                       <div class="controls">
                                          <input id= "order" type="text" name ="order" class="span6 m-wrap" />
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Bank Code </label>
                                       <div class="controls">
                                          <input id= "bank_code" type="text" name ="bank_code" class="span6 m-wrap" />
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Bank Location </label>
                                       <div class="controls">
                                          <input id= "bank_location" type="text" name ="bank_location" class="span6 m-wrap" />
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Teller No </label>
                                       <div class="controls">
                                          <input id= "teller_no" type="text" name ="teller_no" class="span6 m-wrap" />
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Amount Paid </label>
                                       <div class="controls">
                                          <input id= "amount_paid" type="text" name ="amount_paid" class="span6 m-wrap" />
                                       </div>
                                    </div>
                                   <div class="control-group">
									  <label class="control-label">Payment Date</label>
									  <div class="controls">
										 <div class="input-append date form_datetime">
											 <input id= "payment_date" size="16" type="text" value="" readonly class="m-wrap">
											 <span class="add-on"><i class="icon-calendar"></i></span>
										 </div>
									  </div>
								   </div>
                                 </div>
                                 <div class="tab-pane" id="tab4">
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
                                       <label class="control-label">Order Id:</label>
                                       <div class="controls">
                                          <span class = "text" id="confirm_order"></span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Bank Code:</label>
                                       <div class="controls">
                                          <span class = "text" id="confirm_bank_code"></span>
                                       </div>
                                    </div>
									 <div class="control-group">
                                       <label class="control-label">Bank Location:</label>
                                       <div class="controls">
                                          <span class = "text" id="confirm_bank_location"></span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Teller No:</label>
                                       <div class="controls">
                                          <span class = "text" id="confirm_teller_no"></span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Amount Paid:</label>
                                       <div class="controls">
                                          <span class = "text" id="confirm_amount_paid"></span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Date Paid:</label>
                                       <div class="controls">
                                          <span class = "text" id="confirm_date_paid"></span>
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
	       
	       //var comments = CKEDITOR.instances['comments'].getData(); //retrieve data from ckeditor
	        //set text
			$('#confirm_username').text(document.getElementById("username").value);
			$('#confirm_order').text(document.getElementById("order").value);
			$('#confirm_bank_code').text(document.getElementById("bank_code").value);
			$('#confirm_bank_location').text(document.getElementById("bank_location").value);
			$('#confirm_teller_no').text(document.getElementById("teller_no").value);
			$('#confirm_amount_paid').text(document.getElementById("amount_paid").value);
			$('#confirm_date_paid').text(document.getElementById("payment_date").value);
			
			
			 
	 }
   </script>
   
	
  
   <!-- END JAVASCRIPTS -->   



