<?php
require_once("./db_connection/database_connect.php"); // For database connection 
?>
 <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <h3 class="page-title">
                     WorkPlan Status Tables  Data
                     <small> WorkPlan Status Information</small>
                  </h3>
                  <ul class="breadcrumb">
                     <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a> 
                        <span class="icon-angle-right"></span>
                     </li>
                     <li>
                        <a href="#">WorkPlan Status</a>
                        <span class="icon-angle-right"></span>
                     </li>
                     <li><a href="#">View</a></li>
                  </ul>
               </div>
            </div>
            <!-- END PAGE HEADER-->
			
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
			 
			   <div class="span12">
                  <!-- BEGIN EXAMPLE TABLE PORTLET-->
                  <div class="portlet box blue">
                     <div class="portlet-title">
                        <div class="caption"><i class="icon-edit"></i>Data Table</div>
                        <div class="tools">
                           <a href="javascript:;" class="collapse"></a>
                           <a href="#portlet-config" data-toggle="modal" class="config"></a>
                           <a href="javascript:;" class="reload"></a>
                           <a href="javascript:;" class="remove"></a>
                        </div>
                     </div>
					 
                     <div class="portlet-body">
                        <div class="clearfix">
                           <div class="btn-group pull-right">
                              <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
                              </button>
                              <ul class="dropdown-menu pull-right">
                                 <li><a href="#">Print</a></li>
                                 <li><a href="#">Save as PDF</a></li>
                                 <li><a href="#">Export to Excel</a></li>
                              </ul>
                           </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                           <thead>
                              <tr>
                                 <th>WorkPlanID</th>
                                 <th>Meeting Date</th>
								 <th>Start Time</th>
								 <th>End Time</th>
								  <th>Proposed Activity</th>
								 <th>Address</th>
								 <th>Activity Status</th>
                                 <th>Action</th>
                                
                              </tr>
                           </thead>
                           <tbody>
						   <?php 
				        // $stmt = $db->prepare("SELECT * FROM  company ");
						 $sql = "SELECT * FROM   work_plan_status order by WorkPlanID desc" ;
						 $result = $db->query($sql);
                        // $query = $stmt->execute(); 						 
						   ?>
						   <?php  while($rows = $result->fetch(PDO::FETCH_ASSOC)){   ?>
                              <tr class="">
                                 <td class="nr"><?php echo $rows['WorkPlanID'] ?></td>
                                 <td class="nr1"><?php echo $rows['Meeting_Date'] ?></td>
								 <td class="nr2"><?php echo $rows['Start_Time'] ?></td>
								 <td class="nr3"><?php echo $rows['End_Time'] ?></td>
                                 <td class="nr4"><?php echo $rows['Proposed_Activity'] ?></td>
								  <td class="nr5"><?php echo $rows['Activity_TypeID'] ?></td>
								  <td class="nr6"><?php echo $rows['Activity_Status'] ?></td>
                                 <td><button type="button" class="btn blue use-address2">Edit</button> </td>
                             
                              </tr>
							<?php } ?>
                           </tbody>
                        </table>
                     </div>
					 
					 
                  </div>
                  <!-- END EXAMPLE TABLE PORTLET-->
               </div>
			   
			   
            </div>
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
   
      <!-- END PAGE -->  
   
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
  
  <script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
  <script>
    		///////
$(".use-address2").click(function() {

    var work_id = $(".use-address2").closest("tr").find(".nr").text();
	/*var Meeting_Date = $(".use-address2").closest("tr").find(".nr1").text();
	var Start_Time = $(".use-address2").closest("tr").find(".nr2").text();
	var End_Time = $(".use-address2").closest("tr").find(".nr3").text();
	var Proposed_Activity = $(".use-address2").closest("tr").find(".nr4").text();
    var Activity_TypeID = $(".use-address2").closest("tr").find(".nr5").text();
	var Activity_Status = $(".use-address2").closest("tr").find(".nr6").text();*/
	
   window.location.replace('dashboard.php?page=workplan&work_id='+work_id);

});
  </script>
   <!-- END JAVASCRIPTS -->   



