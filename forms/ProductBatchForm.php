<?php
require_once("./db_connection/database_connect.php"); // For database connection 
?>
 <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <h3 class="page-title">
                     Product Batch Form Wizard
                     <small>Lead Source </small>
                  </h3>
                  <ul class="breadcrumb">
                     <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a> 
                        <span class="icon-angle-right"></span>
                     </li>
                     <li>
                        <a href="#">Product Batch</a>
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
                           <i class="icon-reorder"></i>Product Batch Details Form - <span class="step-title">Step 1 of 2</span>
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
                                          <span class="desc"><i class="icon-ok"></i> Product Batch Setup </span>   
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
                                    <h3 class="block">Product Batch</h3>
                                    <div class="control-group">
                                       <label class="control-label">Product Id</label>
                                       <div class="controls">
                                          <input id ="product_id" type="text" name="product_id" class="span6 m-wrap" />
                                          <span class="help-inline">Select Product id</span>
                                       </div>
                                    </div>
                                   <div class="control-group">
                                       <label class="control-label">Batch No</label>
                                       <div class="controls">
                                          <input id ="batch_no" type="text" name="batch_no" class="span6 m-wrap" />
                                          
                                       </div>
                                    </div>
									<div class="control-group">
									  <label class="control-label">Expiry Date</label>
									  <div class="controls">
										 <div class="input-append date form_datetime">
											 <input id= "expiry_date" size="16" type="text" value="" readonly class="m-wrap">
											 <span class="add-on"><i class="icon-calendar"></i></span>
										 </div>
									  </div>
								   </div>
									 <div class="control-group">
                                       <label class="control-label">Mr Price</label>
                                       <div class="controls">
                                          <input id ="mr_price" type="text" name="mr_price" class="span6 m-wrap" />
                                          
                                       </div>
                                    </div>
									 <div class="control-group">
                                       <label class="control-label">List Price</label>
                                       <div class="controls">
                                          <input id ="list_price" type="text" name="list_price" class="span6 m-wrap" />
                                          
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane" id="tab4">
                                    <h3 class="block">Confirm Details and Submit</h3>
                                    <div class="control-group">
                                       <label class="control-label">Product Id:</label>
                                       <div class="controls">
                                          <span  class="text">
										  <span class = "text" id="confirm_product_id"></span>
										  </span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Batch No:</label>
                                       <div class="controls">
                                          <span  class="text">
										  <span class = "text" id="confirm_batch_no"></span>
										  </span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Expiry Date:</label>
                                       <div class="controls">
                                          <span  class="text">
										  <span class = "text" id="confirm_expiry_date"></span>
										  </span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">Mr Price:</label>
                                       <div class="controls">
                                          <span  class="text">
										  <span class = "text" id="confirm_mr_price"></span>
										  </span>
                                       </div>
                                    </div>
									<div class="control-group">
                                       <label class="control-label">List Price:</label>
                                       <div class="controls">
                                          <span  class="text">
										  <span class = "text" id="confirm_list_price"></span>
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
	        //set text
			$('#confirm_product_id').text(document.getElementById("product_id").value); 
			$('#confirm_batch_no').text(document.getElementById("batch_no").value); 
			$('#confirm_expiry_date').text(document.getElementById("expiry_date").value); 
			$('#confirm_mr_price').text(document.getElementById("mr_price").value); 
			$('#confirm_list_price').text(document.getElementById("list_price").value); 
			
	 }
   </script>
   
	
  
   <!-- END JAVASCRIPTS -->   



