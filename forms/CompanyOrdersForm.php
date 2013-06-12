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
                                            <a href="javascript:;" class="btn green add-product">
												 Add Product <i class="m-icon-swapright m-icon-white"></i>
												 </a>	<br/><br/>								   
										   <div class="portlet-body">
													<table class="table table-bordered table-hover product-list">
													   <thead>
														  <tr>
														   
															 <th>Product</th>
															 <th>Quantity</th>
															 <th>Order Price</th>
															 <th>Total</th>
														  </tr>
													   </thead>
													   <tbody>
														  
														
													   </tbody>
													</table>
												 </div>		
												 
										</div>
										 <div class="span4">
											<div class="alert alert-success">
								            <a href="javascript:;" id="jqcc" class="btn blue" onclick="getTotals()">Calculate Totals
                                            </a> 
											</div>
										</div>
										<div class="span4">
											<div class="alert alert-success">
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
                                       <label class="control-label">Products:</label>
                                       <div class="controls">
                                        <!-- <span class = "text" id="confirm_product_no"></span> -->
										 <textarea id="confirm_product"></textarea>
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
								  <!-- <a href="javascript:;" id="jqcc" class="btn blue" onclick="selectedValues()">
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

var counter = 1;
jQuery('a.add-product').click(function(event){
    event.preventDefault();
    counter++;
    var newRow = jQuery('<tr class="txtMult"><td><select id="product" class="span12 select2 valname" name="product" ><option value=""></option></select></td><td><input id="quantity" class="val1" type="text" name="quantity' +
        counter + '"/></td><td><input id="order_price" class="val2" type="text" name="order_price' +
        counter + '"/></td><td><span class="multTotal">0.00</span></td></tr>');
		//// '+counter+'
		
    jQuery('table.product-list').append(newRow);
	/////
	 $.getJSON("./api/retrieveProduct.php", function(data) {
            //
			var elements = document.getElementsByName('product');
			//try a loop
			  //select.options.length = 0; 
				for (var i = 0; i < data.length; i++) 
				{
				     for(var el = 0; el < elements.length; el++)
			            {
			              select = elements[el];
							var d = data[i];
						//	select.options.add(new Option(d.Product_Name,d.ProductID));
				         }
						 select.options.add(new Option(d.Product_Name,d.ProductID));
			  //
			   }
			
          
        }, 'json');
});
//

</script>
<script>
 
   function getTotals(){
   
      var quantity = '';
		  var price = '';
		  var total = '';
		  var itemName = '' ;
		  var mult = 0;
		  //  var response = 0 ;
		  var arr = [] ;
		 $("tr.txtMult").each(function(){
		     quantity = $('.val1', this).val();
			 price = $('.val2', this).val();
			//itemName = $('.valname :selected', this).text();
			productId =  $('.valname', this).val() ;
			 total = (quantity * 1) * (price * 1);
			 //
			 $('.multTotal',this).text(total);
               mult += total;
			
		 });
		  $("#grandTotal").text(mult);
   }
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
			///
		  var quantity = '';
		  var price = '';
		  var total = '';
		  var itemName = '' ;
		  var mult = 0;
		  //  var response = 0 ;
		  var arr = [] ;
		 $("tr.txtMult").each(function(){
		     quantity = $('.val1', this).val();
			 price = $('.val2', this).val();
			//itemName = $('.valname :selected', this).text();
			productId =  $('.valname', this).val() ;
			 total = (quantity * 1) * (price * 1);
			 //
			 $('.multTotal',this).text(total);
               mult += total;
			///
			//console.log("Product Name: " + itemName + " :" + "  Quantity :" + quantity + "   Price: " +price);
			
			
			///
			arr.push(productId + ":" + quantity + ":" + price+"\n");
			
		 });
		//	$('#confirm_product_no').text("Product Name: " + $('.product :selected').text() + " :" + "  Quantity :" + quantity + "   Price: " +order_price);
			//alert(arr);
			//$('#confirm_product_no').text(arr);
			$("#confirm_product").val(arr);
			 ///
			
			
			//////
			
}
   </script>
   <script>
    /////////////////
	  function selectedValues(){
	      //alert('Clicked!');
	/*	  var quantity = document.getElementById("quantity").value ;
		  var order_price = document.getElementById("order_price").value ;
		  var total = quantity * order_price ;
		//  console.log("Total "+quantity * order_price);
		   $('.multTotal').text(total); */
		 // console.log(quantity);
		 // console.log(order_price);
		 /////////
		  var quantity = '';
		  var price = '';
		  var total = '';
		  var itemName = '' ;
		  var mult = 0;
		  //  var response = 0 ;
		  var arr = [] ;
		 $("tr.txtMult").each(function(){
		     quantity = $('.val1', this).val();
			 price = $('.val2', this).val();
			 itemName = $('.valname :selected', this).text()
			 total = (quantity * 1) * (price * 1);
			 //
			 $('.multTotal',this).text(total);
               mult += total;
			///
			console.log("Product Name: " + itemName + " :" + "  Quantity :" + quantity + "   Price: " +price);
			
			///
			
		 });
		
	  }
   </script>
  