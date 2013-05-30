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
                     <small>Create a Company Branch</small>
                  </h3>
                  <ul class="breadcrumb">
                     <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a> 
                        <span class="icon-angle-right"></span>
                     </li>
                     <li>
                        <a href="#">Company Branch</a>
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
                           <i class="icon-reorder"></i> Company Branch Details Form - <span class="step-title">Step 1 of 2</span>
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
                        <form id="company_branch_form" class="form-horizontal">
                           <div class="form-wizard">
                              <div class="navbar steps">
                                 <div class="navbar-inner">
                                    <ul class="row-fluid">
                                       <li class="span3">
                                          <a href="#tab1" data-toggle="tab" class="step active">
                                          <span class="number">1</span>
                                          <span class="desc"><i class="icon-ok"></i> Company Branch Setup </span>   
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
                                    <h3 class="block">Company Branch Details</h3>
                                    <div class="control-group">
                                       <label class="control-label">Username</label>
                                       <div class="controls">
                                          <input id ="branch_username" type="text" name="username" class="span6 m-wrap" />
                                          <span class="help-inline">Provide your username</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Select Company </label>
                                       <div class="controls">
                                          <input id= "company_name" type="text" name ="company_name" class="span6 m-wrap" />
                                       </div>
                                    </div>
                                     <div class="control-group">
                                       <label class="control-label">Branch Name</label>
                                       <div class="controls">
                                          <input id="branch_name" type="text" name="branch_name" class="span6 m-wrap" />
                                          <span class="help-inline">Enter Your Company Branch Name</span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Branch Address</label>
                                       <div class="controls">
                                          <input id="address" name="branch_address" type="text" class="span6 m-wrap" />
                                          <span class="help-inline">Enter Company Branch Address</span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Select State</label>
                                       <div class="controls">
                                          <input id="state" name="select_state" type="text" class="span6 m-wrap" />
                                          <span class="help-inline">Select Company State Name</span>
                                       </div>
                                    </div>
									
									<div class="control-group">
                                       <label class="control-label">Select Country Code</label>
									   
                                       <div class="controls">
										   <select name="" id="select2_sample4" class="span6 select2">
										 <?php foreach($db->query("SELECT country_code, country FROM  country") as $row): ?>
										  <option value="<?php echo $row['country_code'] ?>"><?php echo $row['country_code'] ?></option>
										 <?php endforeach; ?> 
										   </select>
                                          
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane" id="tab4">
                                    <h3 class="block">Confirm Details and Submit</h3>
                                    <div class="control-group">
                                       <label class="control-label">Username:</label>
                                       <div class="controls">
                                          <span  class="text">
										  <span class = "text" id="confirm_branch_username"></span>
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
                                       <label class="control-label">Branch Name:</label>
                                       <div class="controls">
                                           <span class = "text" id="confirm_company_branch_name"></span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Branch Address:</label>
                                       <div class="controls">
                                         <span class = "text" id="confirm_address"></span>
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
                                           <span class = "text" id="country_code"></span>
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
			$('#confirm_branch_username').text(document.getElementById("branch_username").value);
			$('#confirm_company_name').text(document.getElementById("company_name").value);
			$('#confirm_company_branch_name').text(document.getElementById("branch_name").value);
			$('#confirm_address').text(document.getElementById("address").value);
			$('#confirm_company_state').text(document.getElementById("state").value);
			$('#country_code').text(document.getElementById("select2_sample4").value);
			
			 
	 }
   </script>
   
	
  
   <!-- END JAVASCRIPTS -->   



