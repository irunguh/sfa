<?php
require_once("../db_connection/database_connect.php"); // For database connection 
require_once("../functions.php");
	//if user is not logged in
	if(!isLoggedIn())
	{
		header('Location: index.php');
		die();
	} 
?>
 <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <h3 class="page-title">
                     Work Plan Calendar
                     <small>View Events on a Calendar</small>
                  </h3>
                  <ul class="breadcrumb">
                     <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a> 
                        <span class="icon-angle-right"></span>
                     </li>
                     <li>
                        <a href="#">WorkPlan</a>
                        <span class="icon-angle-right"></span>
                     </li>
                     <li><a href="#">Calendar</a></li>
                  </ul>
               </div>
            </div>
            <!-- END PAGE HEADER-->
			  
			
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
			  
               <div class="span12">
                   <div class="portlet box blue calendar">
                        <div class="portlet-title">
                           <div class="caption"><i class="icon-calendar"></i>Calendar</div>
                        </div>
                        <div class="portlet-body light-grey">
                           <div id="calendar">
                           </div>
                        </div>
                     </div>
               </div>
			   
			    <div class="span11">
                  <!-- BEGIN SAMPLE TABLE PORTLET-->
                  <div class="portlet box purple">
                     <div class="portlet-title">
                        <div class="caption"><i class="icon-comments"></i>Meeting Clock In and Reschedule</div>
                     </div>
                     <div class="portlet-body">
					
                        <table id="table_clock_in" class="table table-striped table-hover mytableclick">
                           <thead>
                              <tr>
							     <th>Work Id</th>
                                 <th>Contact</th>
                                 <th>Meeting_Date</th>
                                 <th>Activity</th>
								 <th>Actions</th>
                              </tr>
                           </thead>
                           <tbody>
						 <?php  
						      $today = Date(''); //retrieves system date
						      $date = new DateTime($today);
                              $newdate = $date->format('Y-m-d');
						 
						 $sql = "SELECT WorkPlanID, ContactID, Meeting_Date,Proposed_Activity FROM  
						 work_plan where Meeting_Date = '$newdate' " ;
						 $result = $db->query($sql); ?>
						 
						    <?php  while($rows = $result->fetch(PDO::FETCH_ASSOC)){   ?>
                              <tr>
							     <td class="nr"><?php echo $rows['WorkPlanID'];$workId = $rows['WorkPlanID'];
								 ?></td>
                                 <td><?php echo $rows['ContactID'] ?></td> 	
                                 <td><?php echo $rows['Meeting_Date'] ?></td>
                                 <td><?php echo $rows['Proposed_Activity'] ?></td>
                                 <td>
								  <?php
								  //we make sure that this user has not yet clocked-in if so
								  //we show a message informing them that they have 
					           $sql2 = "SELECT count(WorkPlanID) FROM  
							   work_plan_clocking where WorkPlanID = '$workId' " ;
						      $result2 = $db->query($sql2);
							  //echo  $result2 ;
							  $count =  0;
							       while($row2 = $result2->fetch(PDO::FETCH_ASSOC)){
								      $count  = $row2['count(WorkPlanID)'];
								   
								   }
								?>
								
								  <?php
								  //we make sure that this user has not yet clocked-in if so
								  //we show a message informing them that they have 
					           $sql3 = "SELECT count(WorkPlanID) FROM  
							   work_plan_status where WorkPlanID = '$workId' " ;
						      $result3 = $db->query($sql3);
							  //echo  $result2 ;
							  $count2 =  0;
							       while($row3 = $result3->fetch(PDO::FETCH_ASSOC)){
								      $count2  = $row3['count(WorkPlanID)'];
								   
								   }
								?>	
								<?php 
								  
								   $sql4 = "SELECT count(WorkPlanID) FROM  
							   work_plan_status where WorkPlanID = '$workId' and Activity_Status = 1 " ;
						      $result4 = $db->query($sql4);
							  //echo  $result2 ;
							  $count3 =  0;
							       while($row4 = $result4->fetch(PDO::FETCH_ASSOC)){
								      $count3  = $row4['count(WorkPlanID)'];
								   
								   }
								  
								  
								?>
								 <?php if($count3 > 0): ?>
								    <a href="#myModal1" role="button" class="btn btn-primary edit-reschedule" data-toggle="modal">Edit</a>
								 <?php endif; ?>
								 </td>
								  <?php if($count == 0 && $count2 == 0): ?>
								 <td> <button  type="button" class="btn green clocking">Clock In</button></td>
                                <!-- <td><button type="button" class="btn blue use-address2">Reschedule</button> </td> -->
								 <td> <a href="#" role="button" class="btn btn-primary reschedule">Reschedule</a></td>
								 <td><button type="button" class="btn red cancel">Cancel</button> </td>
								 <?php endif; ?>
                              </tr>
                            <?php } ?>  
                           </tbody>
                        </table>
                     </div>
					 
					<div class="span11"> 
					 <div id="myModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                              <h3 id="myModalLabel1">WorkPlan Edit</h3>
                           </div>
                           <div class="modal-body">
                             
                            <div class="span12">
							
                         <form id="workplan_form_edit">
                                    <!--<h3 class="block"> WorkPlan </h3> -->
								  <h3 class="form-section"> WorkPlan Times and Date Settings </h3>
								  
								  <div class="row-fluid">
										   <div class="span6">
											<div class="control-group">
											   <label class="control-label">Company </label>
											   <div class="controls">
												<select id="company2" class="span9" name="company2" >
												  <?php 
													
													 $stmt = $db->query("SELECT CompanyID,Company_Name FROM  company"); // Retrieve data to display
                                                     $stmt->execute();
													?>
													<?php  while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
													<option value="<?php echo $row['CompanyID'] ?>"><?php echo $row['Company_Name'] ?></option>
												    <?php } ?> 
												</select>
												<input id="work_id_input" type="hidden" value=""/>
											   </div>
											</div>
									      </div>
								     <div class="span6">		  
										      <div class="control-group">
											  <label class="control-label">Meeting Date</label>
											  <div class="controls">
												 <div class="input-append date date-picker" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
													<input id= "meeting_date" name="meeting_date" class="m-wrap m-ctrl-medium date-picker" size="16" type="text" value="" /><span class="add-on"><i class="icon-calendar"></i></span>
												 </div>
											  </div>
										   </div>
											</div>
									</div>
								 <div class="row-fluid">	
								    <div class="span6">
										
										    <div class="control-group">
											   <label class="control-label">Contact</label>
											   <div class="controls">
												  <!--<input id ="contact" type="text" name="contact" class="span6 m-wrap" /> -->
												  <select id="contact2" class="span9 select2" name="contact2" >
													  <?php 
													
													 $stmt = $db->query("SELECT  ContactID , First_Name FROM  company_contacts "); // Retrieve data to display
                                                     $stmt->execute();
													?>
													<?php  while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
													<option value="<?php echo $row['ContactID'] ?>"><?php echo $row['First_Name'] ?></option>
												    <?php } ?> 
												   </select>
											   </div>
											</div>
									</div>
									 <div class="span6">
											<div class="control-group">
											  <label class="control-label">Start Time</label>
											  <div class="controls">
												 <div class="input-append bootstrap-timepicker-component">
													<input id="start_time" name="start_time" class="m-wrap m-ctrl-small timepicker-default" type="text" />
													<span class="add-on"><i class="icon-time"></i></span>
												 </div>
											  </div>
										   </div>
								    </div>
								  </div>
								  <div class="row-fluid">
                                     <div class="span6">
										   <div class="control-group">
										   <label class="control-label">Activity Type</label>
										   <div class="controls">
											 <!-- <input id ="work_activity_type" type="text" name="work_activity_type" class="span6 m-wrap" /> -->
											   <select id="work_activity_type2" class="span9 select2" name="work_activity_type2" >
												  <?php 
													
													 $stmt = $db->query("SELECT Company_TypeID, Company_Type FROM   company_type "); // Retrieve data to display
                                                     $stmt->execute();
													?>
													<?php  while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
													<option value="<?php echo $row['Company_TypeID'] ?>"><?php echo $row['Company_Type'] ?></option>
												    <?php } ?> 
											   </select>
										   </div>
											</div>
										</div>								  
								    <div class="span6">
									   <div class="control-group">
										  <label class="control-label">End Time</label>
										  <div class="controls">
											 <div class="input-append bootstrap-timepicker-component">
												<input id="end_time" name="end_time" class="m-wrap m-ctrl-small timepicker-default" type="text" />
												<span class="add-on"><i class="icon-time"></i></span>
											 </div>
										  </div>
									   </div>
								   </div>
									  
									</div>
									 <h3 class="form-section"> WorkPlan Meeting Address & Proposed Activities</h3>
									  <div class="row-fluid">
										   <div class="span6">
										   <div class="control-group">
											   <label class="control-label">Meeting Address:</label>
											   <div class="controls">
												   <textarea id="work_address" name="work_address" class="span8 m-wrap" rows="6"></textarea>
											   </div>
											</div> 
											</div> 
											 <div class="span6">
											 <div class="control-group">
												   <label class="control-label">Proposed Activity:</label>
												   <div class="controls">
													  <textarea id= "proposed_activity" class="span8 m-wrap"  rows="6"></textarea>
												   </div>
											 </div>
											 <input id="work_id_input" type="hidden" value=""/>
											 </div>
										</div> 
									
                                 </div>
                                 <div>
                                  <!--<button type = "submit" class="btn blue workplan-edit"><i class="icon-ok"></i>Update</button>-->
								  <td><button type="button" class="btn blue workplan-edit">Update Record</button> </td>
                              </div>
                              </form>
										  
					 
                           </div>
                          
                        </div>
						
						  </div>
						
                  </div>
                  <!-- END SAMPLE TABLE PORTLET-->
               </div>
			   
			   
            </div>
			 
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
   
      <!-- END PAGE -->  
   
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
  
   <script type="text/javascript" src="https://www.google.com/jsapi"></script>
 <!--<script>
	//var x=document.getElementById("demo");
	function getLocation()
	  {
	  if (navigator.geolocation)
		{
		navigator.geolocation.getCurrentPosition(showPosition);
		}
	  else{
	 // x.innerHTML="Geolocation is not supported by this browser.";
	  alert('Geolocation is not supported by this browser.');
	  }
	  }
	function showPosition(position)
	  {
	 // x.innerHTML="Latitude: " + position.coords.latitude + 
	 // "<br>Longitude: " + position.coords.longitude;	
	 alert("Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude);
	  }
</script>

<!-- Basic Geolocation script -->
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<!--<script src="http://j.maxmind.com/app/geoip.js"></script> <!-- For our fallback -->

  
   <!-- END JAVASCRIPTS -->   

 <script>
   
    $('.clocking').on('click', function() {		
			//console.log('Log Work Id is' + work_id);
			//do geolcation here
			if (navigator.geolocation) {
                 ////	
				 console.log('Navigator Activated!');
				navigator.geolocation.getCurrentPosition(successFunction, errorFunction,{timeout:10000});	

			} else {

				alert('It appears that Geolocation, which is required for this web page application, is not enabled in your browser. Please use a browser which supports the Geolocation API.');

			}
			//
			 function successFunction(position,work_id) {
	 ///
					var work_id = $(".use-address").closest("tr").find(".nr").text();
					
					var latitude = position.coords.latitude;
					var longitude = position.coords.longitude;
					
					
					  // set up the Geocoder object
					var geocoder = new google.maps.Geocoder();
					
					 // turn coordinates into an object
					var yourLocation = new google.maps.LatLng(latitude, longitude);
					//Find out my location
					  geocoder.geocode({ 'latLng': yourLocation }, function (results, status) {
					if(status == google.maps.GeocoderStatus.OK) {
					  if(results[0]) {
					                  /////
					                  $('.clocking').on('click', function() {
										//This code retrieve specific id 
										//check http://jsfiddle.net/beME9/  for more on this
										var $row = jQuery(this).closest('tr');
										var $columns = $row.find('td');

										$columns.addClass('row-highlight');
										var values = "";
										
										jQuery.each($columns, function(i, item) {
											values = values + 'td' + (i + 1) + ':' + item.innerHTML + '<br/>';
										   // alert(values);
										});
										//console.log(values[4]);
										var work_id = values[4] ;
										//send data via ajax
						             $.ajax({
									  type: "POST",
									  url: './api/saveWorkplanClocking.php',
									  data: {
									   latitude: latitude,
									   longitude: longitude,
									   location_address: results[0].formatted_address,
									   work_id: work_id
									   
									  },
									  success: function(data){
									   if(data === 'successful')
									   { 
									
										alert('Meeting Clock-in was successful');
										 $.gritter.add({
												// (string | mandatory) the heading of the notification
												title: 'Success',
												// (string | mandatory) the text inside the notification
												text: 'Meeting Clock-in was successful',
												// (string | optional) the image to display on the left
												image: 'http://a0.twimg.com/profile_images/59268975/jquery_avatar_bigger.png',
												// (bool | optional) if you want it to fade out on its own or just sit there
												sticky: false,
												// (int | optional) the time you want it to be alive for before fading out
												time: ''
											});
										// window.location.replace('dashboard.php?page=calendar');
									   }
									   else {
										 
											alert('An Error Occured '+data);
								
									   }
									  }
								   });
										});
										//////
						
						
					  } else {
					
					  console.log('Google did not return any results.');
					  }
					} else {
					  
					  console.log("Reverse Geocoding failed due to: " + status);
					}
				  });
				}
						//////
				function errorFunction(position,work_id) {
				
								
					alert('Sorry An Error Occured with Geolocation Server!'+ position ); 
					

				}	
			//
			
     });

	
			/////// Reschedule
         $(".reschedule").click(function() {
						
						//This code retrieve specific id 
						//check http://jsfiddle.net/beME9/  for more on this
						var $row = jQuery(this).closest('tr');
						var $columns = $row.find('td');

						$columns.addClass('row-highlight');
						var values = "";
						
						jQuery.each($columns, function(i, item) {
							values = values + 'td' + (i + 1) + ':' + item.innerHTML + '<br/>';
						   // alert(values);
						});
						//console.log(values[4]);
						var work_id_value = values[4] ;
						
				  $.ajax({
				      type: "POST",
					  url: './api/saveReschedule.php',
					  data: {
					   work_id: work_id_value   
					  },
					  success: function(data){
					   if(data === 'successful')
					   { 
					  
					  window.location.replace('dashboard.php?page=calendar');
						////
						//var work_id = $(".use-address2").closest("tr").find(".nr").text();
			           // window.location.replace('dashboard.php?page=workplan&work_id='+work_id);
						////
					   }
					   else {
					     
							alert(data);
	            
					   }
					  }
				   }); 
		
		}); 
		///// cancel meeting
		$(".cancel").click(function() {
					//This code retrieve specific id 
						//check http://jsfiddle.net/beME9/  for more on this
						var $row = jQuery(this).closest('tr');
						var $columns = $row.find('td');

						$columns.addClass('row-highlight');
						var values = "";
						
						jQuery.each($columns, function(i, item) {
							values = values + 'td' + (i + 1) + ':' + item.innerHTML + '<br/>';
						   // alert(values);
						});
						//console.log(values[4]);
						var work_id_value = values[4] ;
		  $.ajax({
				      type: "POST",
					  url: './api/saveCancelWorkplan.php',
					  data: {
					   work_id: work_id_value
					   
					  },
					  success: function(data){
					   if(data === 'successful')
					   { 
					   //alert('Reschedule Done');
					   // alert('Meeting Clock-in was successful');
					   window.location.replace('dashboard.php?page=calendar');
						 //window.location.replace('dashboard.php?page=calendar');
					   }
					   else {
					     
							alert(data);
	            
					   }
					  }
				   });
		
		}); 
		
		$(".use-edit").click(function() {

		//This code retrieve specific id 
		//check http://jsfiddle.net/beME9/  for more on this
		var $row = jQuery(this).closest('tr');
		var $columns = $row.find('td');

		$columns.addClass('row-highlight');
		var values = "";
		
		jQuery.each($columns, function(i, item) {
			values = values + 'td' + (i + 1) + ':' + item.innerHTML + '<br/>';
		   // alert(values);
		});
		//console.log(values[4]);
		var work_id = values[4] ;
		window.location.replace('dashboard.php?page=workplan&work_id='+work_id);

		}); 
  </script>
  <script>
   $('.edit-reschedule').click(function(){
     //This code retrieve specific id 
						//check http://jsfiddle.net/beME9/  for more on this
						var $row = jQuery(this).closest('tr');
						var $columns = $row.find('td');

						$columns.addClass('row-highlight');
						var values = "";
						
						jQuery.each($columns, function(i, item) {
							values = values + 'td' + (i + 1) + ':' + item.innerHTML + '<br/>';
						   // alert(values);
						});
						//console.log(values[4]);
						var work_id_value = values[4] ; ;
		 /////
		 $.ajax({
				      type: "POST",
					  url: './api/retrieveWorkplanToEdit.php',
					  data: {
					   work_id: work_id_value
					   
					  },
					  success: function(data){
					   //loop through the result
					            data = $.parseJSON(data) ;
							   var company = null;
							   var contact = null;
							   var meeting_date = null;
							   var starttime = null;
							   var endtime = null;
							   var proposed_activity = null;
							   var address = null;
							   var activity_type = null;
								  $.each(data, function() {
										// this = object in array
										// access attributes: this.Id, this.Name, etc
										company = this.company ;
										contact = this.contact ;
										meeting_date = this.meeting_date ;
										starttime = this.starttime ;
										endtime = this.endtime ;
										proposed_activity = this.proposed_activity ;
										address = this.address ;
										activity_type = this.activity_type ;
										/*console.log(this.company,this.contact, this.meeting_date,
										this.starttime, this.endtime, this.proposed_activity, this.address, this.activity_type); */
										///
									});
									//set variables
									console.log('Workplan to edit retrieved');
									
									$.gritter.add({
									// (string | mandatory) the heading of the notification
									title: 'Tip - For more types, open DIR /assets/plugins/gritter/ ',
									// (string | mandatory) the text inside the notification
									text: 'Use this Modal to Edit Wokplan - This is a sample gritter notification. Make changes and click update record button',
									// (string | optional) the image to display on the left
									image: 'http://a0.twimg.com/profile_images/59268975/jquery_avatar_bigger.png',
									// (bool | optional) if you want it to fade out on its own or just sit there
									sticky: false,
									// (int | optional) the time you want it to be alive for before fading out
									time: ''
								});
									
									  // $("select#company").val(company);
									  // console.log( $("select#company2").val(company));
									   $("select#company2 option").each(function() { this.selected = company; }); 
									   $("select#contact2 option").each(function() { this.selected = contact; }); 
									    $("select#work_activity_type2 option").each(function() { this.selected = activity_type; });
									   $("#work_activity_type").val(activity_type);
									   $("#meeting_date").val(meeting_date);
									   $("#start_time").val(starttime);
									   $("#end_time").val(endtime);
									   $("textarea#proposed_activity").val(proposed_activity);
									   $("textarea#work_address").val(address); 
									   //
									   $("#work_id_input").val(work_id_value);
									
											  
					
					  }
				   });
		 /////
	  
    });
	///
		$(".workplan-edit").click(function() {
		
		  
		           $.ajax({
				      type: "POST",
					  url: './api/saveWorkPlan.php',
					  data: {
					   work_id: $('#work_id_input').val(),
					   company: $('#company2').val(),
					   contact: $('#contact2').val(),
					   meeting_date: $('#meeting_date').val(),
					   start_time: $('#start_time').val(),
					   end_time: $('#end_time').val(),
					   proposed_activity: $('textarea#proposed_activity').val(),
					   work_address: $('textarea#work_address').val(),
					   work_activity_type: $('#work_activity_type2').val()
					  },
					  success: function(data){
					   if(data === 'successful')
					   { 
					   alert('Record Updated Successfuly');
					   // window.location.replace('dashboard.php?page=calendar');
						//jQuery('#form_wizard_workplan').hide();
						//jQuery('#success_save_workplan').show();
					//	alert($('#meeting_date').val());
					//alert(data[2]);
					////
					      $.gritter.add({
									// (string | mandatory) the heading of the notification
									title: 'Success',
									// (string | mandatory) the text inside the notification
									text: 'Record Updated Successfuly',
									// (string | optional) the image to display on the left
									image: 'http://a0.twimg.com/profile_images/59268975/jquery_avatar_bigger.png',
									// (bool | optional) if you want it to fade out on its own or just sit there
									sticky: false,
									// (int | optional) the time you want it to be alive for before fading out
									time: ''
								});
								 //window.location.replace('dashboard.php?page=calendar');
					     //////
					   }
					   else {
					        //$('.alert-invalid', $('.login-form')).show();
							alert(data);
	            
					   }
					  }
				   }); 
		});
  </script>
 
