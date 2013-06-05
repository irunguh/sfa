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
                        <table class="table table-striped table-hover">
                           <thead>
                              <tr>
                                 <th>Contact</th>
                                 <th>Meeting_Date</th>
                                 <th>Activity</th>
								 <th>Clock In</th>
								 <th>Reschedule</th>
                              </tr>
                           </thead>
                           <tbody>
						 <?php  
						      $today = Date(''); //retrieves system date
						      $date = new DateTime($today);
                              $newdate = $date->format('Y-m-d');
						 
						 $sql = "SELECT ContactID, Meeting_Date,Proposed_Activity FROM  work_plan where Meeting_Date = '$newdate' " ;
						 $result = $db->query($sql); ?>
						 
						    <?php  while($rows = $result->fetch(PDO::FETCH_ASSOC)){   ?>
                              <tr>
                                 <td><?php echo $rows['ContactID'] ?></td>
                                 <td><?php echo $rows['Meeting_Date'] ?></td>
                                 <td><?php echo $rows['Proposed_Activity'] ?></td>
                                 <td><button id="clocking" onclick="geoLocation()" type="button" class="btn green">Clock In</button></td>
                                 <td><button type="button" class="btn blue">Reschedule</button> </td>
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

<script type="application/javascript" >

//Check if browser supports W3C Geolocation API

if (navigator.geolocation) {

    navigator.geolocation.getCurrentPosition(successFunction, errorFunction);

} else {

    alert('It appears that Geolocation, which is required for this web page application, is not enabled in your browser. Please use a browser which supports the Geolocation API.');

}

function successFunction(position) {

    var lat = position.coords.latitude;

    var long = position.coords.longitude;

    alert('Your location coordinates are: Latitude:'+lat+' Longitude: '+long);

}

function errorFunction(position) {

    alert('Error!');

}

</script> -->
	
  
   <!-- END JAVASCRIPTS -->   



