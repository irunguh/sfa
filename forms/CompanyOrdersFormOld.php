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
									  <h3 class="form-section">Product Order Form:</h3>
									   <div id="c_b" class="row-fluid">   
										 <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                           <thead>
                                                <tr>
												 <th></th>
												 <th>PRODUCT</th> 
												 <th>QUANTITY</th>
												 <th>MR PRICE</th>
												 <th>LIST PRICE</th>
												 <th>=</th>
												 <th style="text-align: right; padding-right: 30px;">TOTALS</th> 
												</tr>
                                           </thead>
												 <tbody>
											   <?php 
											// $stmt = $db->prepare("SELECT * FROM  company ");
											 $sql = "SELECT ProductID as id, Product_Name as product,List_Price as price FROM  products" ;
											 $result = $db->query($sql);
											// $query = $stmt->execute(); 						 
											   ?>
											   <?php  while($rows = $result->fetch(PDO::FETCH_ASSOC)){   ?>
												  <tr class="txtMult">
												     <td><input class = "prodSel" type="checkbox" id="chk[]"></td>
													 <td><input type="text" disabled="disabled" value="<?php echo $rows['product'] ?>" /></td>
													 <td><input type="text"  class="span4 val1" id="<?php echo $rows['id'] ?>"></input></td>
													 <td><input type="text"  class="span6 val2" id="<?php echo $rows['id'] ?>"></input></td>
													 <td><?php echo $rows['price'] ?></td>
													 <td>=</td>
													 <td><span class="multTotal">0.00</span></td>
												  </tr>
												<?php } ?>
												     
											   </tbody>
											</table>			
												 
										</div>
										 <div class="span4">
											<div class="alert alert-success">
											   <button class="close" data-dismiss="alert"></button>
											   <strong>Order Grand Total:</strong> <span id="grandTotal">0.00</span>
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
								   <!-- <a href="javascript:;" id="jqcc" class="btn blue">
                                 Test Selected 
                                 </a> -->
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
  
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
<script>
 $(document).ready(function () {
       $(".txtMult input").keyup(multInputs);
       function multInputs() {
           var mult = 0;
		  //  var response = 0 ;
		  var arr = [] ;
           // for each row:
           $("tr.txtMult").each(function () {
               // get the values from this row:
               var $val1 = $('.val1', this).val();
               var $val2 = $('.val2', this).val();
               var $total = ($val1 * 1) * ($val2 * 1)
               $('.multTotal',this).text($total);
               mult += $total;
			  ///
           });
	 }
	  
	 
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
			//$('#confirm_product_no').text(document.getElementById("product").value);
			
			//////
}
   </script>
  <script>
 var proddta = {
    init: function() {
        // hook into the checkbox/row selector
        $('td').change(proddta.rowSelect);
    },

    rowSelect: function(event) {
      //  alert('hello 1');
        var work = [];
        var $closestTr = $(this).closest('tr');
        var chkbox = $closestTr.find('td:eq(0)').find(':checkbox');
        
      //  alert('hello 2 ' + chkbox.is(':checked'));
        if (null !== chkbox && true === chkbox.is(':checked')) 
		{
           
            var s = '';
            for (var i = 0; i < 50; i++) 
			{
               /* if (i != 0 && i < 40) 
				{
                 //   s = $closestTr.find('td:eq(' + i + ')').text(); 
				 s = $closestTr.find('td:eq(' + i + ')').find(':input').val();
                } 
				else 
				{
                    s = $closestTr.find('td:eq(' + i + ')').find(':input').val();
                }*/
				 s = $closestTr.find('td:eq(' + i + ')').find(':input').val();
                work.push(s);
            } 
			
        }
        else 
		{
           // alert('hello 99');
        }
      //  alert('' + work.join(' '));
	//	console.log(work.join(' '));
		console.log(work[1], work[2],work[3]);
		$('#confirm_product_no').text(work.join(' '));
    }
}
proddta.init();
/////

 </script>