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
					    <div class="alert alert-error hide">
							<button class="close" data-dismiss="alert"></button>
							<span>Some information missing.</span>
						  </div>
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
                                    <h3 class="block">Company Details</h3>
                                    <div class="control-group">
                                       <label class="control-label">Username</label>
                                       <div class="controls">
                                          <input id ="user" type="text" name="username" class="span6 m-wrap" />
                                          <span class="help-inline">Provide your username</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Company Name</label>
                                       <div class="controls">
                                          <input id= "company_name" type="company_name" name ="company_name" class="span6 m-wrap" />
                                          <span class="help-inline">Enter Full Company Name</span>
                                       </div>
                                    </div>
                                     <div class="control-group">
                                       <label class="control-label">Company Address</label>
                                       <div class="controls">
                                          <input id="company_address" type="company_address" name="company_address" class="span6 m-wrap" />
                                          <span class="help-inline">Enter Your Company Address</span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Company Office Number 1</label>
                                       <div class="controls">
                                          <input id="company_office_number1" name="company_office_number1" type="company_office_number1" class="span6 m-wrap" />
                                          <span class="help-inline">Enter Company Office Number 1</span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Company Office Number 2</label>
                                       <div class="controls">
                                          <input id="company_office_number2" name="company_office_number2" type="company_office_number2" class="span6 m-wrap" />
                                          <span class="help-inline">Enter Company Office Number 2</span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Email</label>
                                       <div class="controls">
                                          <input id="company_email" name="company_email" type="company_email" class="span6 m-wrap" />
                                          <span class="help-inline">Enter Email Address</span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Website</label>
                                       <div class="controls">
                                          <input id="company_website" name="company_website" type="company_website" class="span6 m-wrap" />
                                          <span class="help-inline">Enter Company Website</span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Company Location No</label>
                                       <div class="controls">
                                          <input id="company_location_no" name="company_location_no" type="company_location_no" class="span6 m-wrap" />
                                          <span class="help-inline">Enter Location No</span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Company Size</label>
                                       <div class="controls">
                                          <input id="company_size" name="company_size" type="company_size" class="span6 m-wrap" />
                                         
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Company Type</label>
                                       <div class="controls">
                                          <input id="company_type" name="company_type" type="company_type" class="span6 m-wrap" />
                                         
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Company Status</label>
                                       <div class="controls">
                                          <input id="company_status" name="company_status" type="company_status" class="span6 m-wrap" />
                                          
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">State</label>
                                       <div class="controls">
                                          <input id="company_state" name="company_state" type="company_state" class="span6 m-wrap" />
                                          
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Country</label>
									   
                                       <div class="controls">
										   <select name="" id="select2_sample4" class="span6 select2">
											  <?php 
										   //we write a query to retrive countries from database table
										   
										   
										   /*while($rows = $stmt->fetchAll(PDO::FETCH_ASSOC))
										   {
										    echo "<option value=\"".$row['country']."\">".$row['country']."\n  ";
										   } */
										   
										  
										  ?>
										 <?php foreach($db->query("SELECT country_code, country FROM  country") as $row): ?>
										  <option value="<?php echo $row['country_code'] ?>"><?php echo $row['country'] ?></option>
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
			$('#confirm_username').text(document.getElementById("user").value);
			$('#confirm_company_name').text(document.getElementById("company_name").value);
			$('#confirm_company_address').text(document.getElementById("company_address").value);
			$('#confirm_company_office1').text(document.getElementById("company_office_number1").value);
			$('#confirm_company_office2').text(document.getElementById("company_office_number2").value);
			$('#confirm_company_email').text(document.getElementById("company_email").value);
			$('#confirm_company_website').text(document.getElementById("company_website").value);
			$('#confirm_company_location').text(document.getElementById("company_location_no").value);
			$('#confirm_company_size').text(document.getElementById("company_size").value);
			$('#confirm_company_type').text(document.getElementById("company_type").value);
			$('#confirm_company_status').text(document.getElementById("company_status").value);
			$('#confirm_company_state').text(document.getElementById("company_state").value);
			$('#confirm_company_country').text(document.getElementById("select2_sample4").value);
			
			 
	 }
   </script>
   
	
  
   <!-- END JAVASCRIPTS -->   



