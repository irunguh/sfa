<?php
require_once("./db_connection/database_connect.php"); // For database connection 
?>
 <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <h3 class="page-title">
                     WorkPlan Tables  Data
                     <small>View Information About WorkPlan</small>
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
                           <div class="btn-group">
                              <!--  -->
                              <a href="dashboard.php?page=workplan"> <button  class="btn green">Add New</button><i class="icon-plus"></i> </a> 
                             <!--  -->
                           </div>
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
                                 
                                 <th>Company</th>
                                 <th>Contact</th>
                                 <th>Meeting Date</th>
								 <th>Start_Time</th>
								 <th>End_Time</th>
								 <th>Address</th>
                                 <th>Edit</th>
                                 <th>Delete</th>
                              </tr>
                           </thead>
                           <tbody>
						   <?php 
				        // $stmt = $db->prepare("SELECT * FROM  company ");
						 $sql = "SELECT * FROM   work_plan order by WorkPlanID desc" ;
						 $result = $db->query($sql);
                        // $query = $stmt->execute(); 						 
						   ?>
						   <?php  while($rows = $result->fetch(PDO::FETCH_ASSOC)){   ?>
                              <tr class="">
                                 <td><?php echo $rows['CompanyID'] ?></td>
                                 <td><?php echo $rows['ContactID'] ?></td>
                                 <td><?php echo $rows['Meeting_Date'] ?></td>
								 <td><?php echo $rows['Start_Time'] ?></td>
								 <td><?php echo $rows['End_Time'] ?></td>
                                 <td><?php echo $rows['Meeting_Address'] ?></td>
                                 <td><a class="edit" href="javascript:;">Edit</a></td>
                                 <td><a class="delete" href="javascript:;">Delete</a></td>
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
  
  
  
   <!-- END JAVASCRIPTS -->   



