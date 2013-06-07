<?php
require_once("./db_connection/database_connect.php"); // For database connection 
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
					
                        <table id="table_clock_in" class="table table-striped table-hover">
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
							     <td class="nr"><?php echo $rows['WorkPlanID'];
                                    $workId = $rows['WorkPlanID'];
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
								 <?php if($count > 0 || $count2 >0): ?>
								    <div class="span10">
								      <div class="alert alert-success">
									   <button class="close" data-dismiss="alert"></button>
									  Sorry,not available.
									</div>
									</div>
								 <?php endif; ?>
								 
								 <?php if($count == 0 && $count2 == 0): ?>
								  <button id="clocking"  type="button" class="btn green use-address">Clock In</button>
								 
								 </td>
                                 <td><button type="button" class="btn blue use-address2">Reschedule</button> </td>
								 <td><button type="button" class="btn red use-address3">Cancel</button> </td>
								 <?php endif; ?>
                              </tr>
                            <?php } ?>  
                           </tbody>
                        </table>
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
   $(".use-address").click(function() {
			
			//console.log('Log Work Id is' + work_id);
			//do geolcation here
			if (navigator.geolocation) {
                 ////
				
				navigator.geolocation.getCurrentPosition(successFunction, errorFunction);
				

			} else {

				alert('It appears that Geolocation, which is required for this web page application, is not enabled in your browser. Please use a browser which supports the Geolocation API.');

			}
			/////////////////////////
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
     
		//alert('My Address is'+results[0].formatted_address + 'Work id is '+work_id);
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
					
					   // alert('Meeting Clock-in was successful');
						 window.location.replace('dashboard.php?page=calendar');
					   }
					   else {
					     
							alert(data);
	            
					   }
					  }
				   });
		
      } else {
	
	  console.log('Google did not return any results.');
      }
    } else {
      
	  console.log("Reverse Geocoding failed due to: " + status);
    }
  });
}
		//////
function errorFunction(position) {

    alert('Error!');

}	
			//////////////////////////
			
		});
		///////
$(".use-address2").click(function() {
		 var work_id = $(".use-address2").closest("tr").find(".nr").text();
		 ////
		  $.ajax({
				      type: "POST",
					  url: './api/saveReschedule.php',
					  data: {
					   work_id: work_id
					   
					  },
					  success: function(data){
					   if(data === 'successful')
					   { 
					   //alert('Reschedule Done');
					   // alert('Meeting Clock-in was successful');
					   window.location.replace('dashboard.php?page=workplan_status_table');
						 //window.location.replace('dashboard.php?page=calendar');
					   }
					   else {
					     
							alert(data);
	            
					   }
					  }
				   });
		
		});
		/////
		$(".use-address3").click(function() {
		 var work_id = $(".use-address3").closest("tr").find(".nr").text();
		 ////
		  $.ajax({
				      type: "POST",
					  url: './api/saveCancelWorkplan.php',
					  data: {
					   work_id: work_id
					   
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
  </script>

