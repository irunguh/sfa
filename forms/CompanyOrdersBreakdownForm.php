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
                     <small>Create a Company Orders Breakdown</small>
                  </h3>
                  <ul class="breadcrumb">
                     <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a> 
                        <span class="icon-angle-right"></span>
                     </li>
                     <li>
                        <a href="#">Company Orders Breakdown</a>
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
                           <i class="icon-reorder"></i>Orders Breakdown Details Form - <span class="step-title">Step 1 of 2</span>
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
                        <form id="company_orders_breakdown_form" class="form-horizontal">
                           <div class="form-wizard">
                              <div class="navbar steps">
                                 <div class="navbar-inner">
                                    <ul class="row-fluid">
                                       <li class="span3">
                                          <a href="#tab1" data-toggle="tab" class="step active">
                                          <span class="number">1</span>
                                          <span class="desc"><i class="icon-ok"></i> Company Orders Breakdown Setup </span>   
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
                                    <h3 class="block">Order Breakdown Details</h3>
                                    <div class="control-group">
                                       <label class="control-label">Username</label>
                                       <div class="controls">
                                          <input id ="username" type="text" name="username" class="span6 m-wrap" />
                                          <span class="help-inline">Provide your username</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Select Order id </label>
                                       <div class="controls">
                                          <input id= "order" type="text" name ="order" class="span6 m-wrap" />
                                       </div>
                                    </div>
                                     <div class="control-group">
                                       <label class="control-label">Select Product Id</label>
                                       <div class="controls">
                                          <input id="product" type="text" name="product" class="span6 m-wrap" />
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">MR Price</label>
                                       <div class="controls">
                                          <input id="mr_price" name="mr_price" type="text" class="span6 m-wrap" />
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">List Price</label>
                                       <div class="controls">
                                          <input id="list_price" name="list_price" type="text" class="span6 m-wrap" />
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Order Price</label>
                                       <div class="controls">
                                          <input id="order_price" name="order_price" type="text" class="span6 m-wrap" />
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
                                       <label class="control-label">Order:</label>
                                       <div class="controls">
                                          <span class = "text" id="confirm_order"></span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Product:</label>
                                       <div class="controls">
                                           <span class = "text" id="confirm_product"></span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">MR Price:</label>
                                       <div class="controls">
                                         <span class = "text" id="confirm_mr_price"></span>
                                       </div>
                                    </div>
									 <div class="control-group">
                                       <label class="control-label">List Price:</label>
                                       <div class="controls">
                                         <span class = "text" id="confirm_list_price"></span>
                                       </div>
                                    </div>
									 <div class="control-group">
                                       <label class="control-label">Order Price:</label>
                                       <div class="controls">
                                         <span class = "text" id="confirm_order_price"></span>
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
			$('#confirm_username').text(document.getElementById("username").value);
			$('#confirm_order').text(document.getElementById("order").value);
			$('#confirm_product').text(document.getElementById("product").value);
			$('#confirm_mr_price').text(document.getElementById("mr_price").value);
			$('#confirm_list_price').text(document.getElementById("list_price").value);
			$('#confirm_order_price').text(document.getElementById("order_price").value);
			
			
			 
	 }
   </script>
   
	
  
   <!-- END JAVASCRIPTS -->   



