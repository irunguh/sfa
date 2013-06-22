<?php 
//hide display of warning messages
//error_reporting(1);
//we start a session
//session_start();

//require_once('session.php');
//echo $_SESSION['username']; exit;
//if(!$_SESSION['username'])
//{
// header('Location: login.php');
//} 
require_once("db_connection/database_connect.php");
?>

<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 2.3.1
Version: 1.2.4
Author: KeenThemes
Website: http://www.keenthemes.com/preview/?theme=metronic
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469
-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Metronic | SFA Admin Dashboard</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <!-- BEGIN GLOBAL MANDATORY STYLES -->
   <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
   <!-- END GLOBAL MANDATORY STYLES -->
   <!-- BEGIN PAGE LEVEL STYLES --> 
   <link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
   <link href="assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" media="screen"/>
   <link href="assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
   <!-- Form Components Styles -->
   <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css" />
   <link rel="stylesheet" type="text/css" href="assets/plugins/gritter/css/jquery.gritter.css" />
   <link rel="stylesheet" type="text/css" href="assets/plugins/chosen-bootstrap/chosen/chosen.css" />
   <link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2_metro.css" />
   <link rel="stylesheet" type="text/css" href="assets/plugins/jquery-tags-input/jquery.tagsinput.css" />
   <link rel="stylesheet" type="text/css" href="assets/plugins/clockface/css/clockface.css" />
   <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
   <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-datepicker/css/datepicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-timepicker/compiled/timepicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-colorpicker/css/colorpicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
   <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css" />
   
   
      <!-- BEGIN PAGE LEVEL STYLES -->
   <link href="assets/plugins/bootstrap-tag/css/bootstrap-tag.css" rel="stylesheet" type="text/css" />
  
   <link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
   
   <!-- BEGIN:File Upload Plugin CSS files-->
 
   <!-- END:File Upload Plugin CSS files-->     
   <link href="assets/css/pages/inbox.css" rel="stylesheet" type="text/css" />
   <!-- End Form Component -->	
   <!-- Data Tables -->
  
   <link rel="stylesheet" href="assets/plugins/data-tables/DT_bootstrap.css" />
   <!-- End Data Tables -->
   <!-- END PAGE LEVEL STYLES -->
   <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <div class="header navbar navbar-inverse navbar-fixed-top">
      <!-- BEGIN TOP NAVIGATION BAR -->
      <div class="navbar-inner">
         <div class="container-fluid">
            <!-- BEGIN LOGO -->
            <a class="brand" href="index.php">
            <img src="assets/img/logo.png" alt="logo" />
            </a>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
            <img src="assets/img/menu-toggler.png" alt="" />
            </a>          
            <!-- END RESPONSIVE MENU TOGGLER -->            
            <!-- BEGIN TOP NAVIGATION MENU -->              
            <ul class="nav pull-right">
               <!-- BEGIN NOTIFICATION DROPDOWN -->   
               <li class="dropdown" id="header_notification_bar2">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="icon-warning-sign">
				   <?php  
						 $stmt = $db->query("SELECT COUNT(message) as number,id as notification_id FROM  notifications
						 WHERE status = 1
						 ") ;
						 $stmt->execute();
						 ///
						 $no = 0;
						 $notification_id = 0;
						while($row = $stmt->fetch(PDO::FETCH_ASSOC))
						{
						 $no = $row['number'];
						 $notification_id = $row['notification_id'];
						}
						 


						 ?>
				  
				  </i>
				  
				<?php if($no != 0): ?>
				
                  <span id="div2" class="badge"><?php //echo $no; ?></span>
				  
				  
				<?php endif; ?>  
				  
				  <span><input type="hidden" id="notify" value="<?php echo $notification_id ?>"></span>
                  </a>
                  <ul class="dropdown-menu extended notification">
                     <li>
                        <p>You have <?php echo $no; ?> new notifications</p>
                     </li>
					 <?php 
				   
				    $stmt2 = $db->query("SELECT message,date as time FROM  notifications where status = 1") ;
				    $stmt2->execute();
				   while($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){ ?>
                      <li>
                        <a href="#">
                        <span class="label label-success"><i class="icon-plus"></i></span>
                        <?php echo $row2['message']; ?>
                        <span class="time"><?php echo $row2['time']; ?></span>
                        </a>
                     </li>
                  
                   <?php } ?>
                     <li class="external">
                        <a href="#">See all notifications <i class="m-icon-swapright"></i></a>
                     </li>
                  </ul>
               </li>
               <!-- END NOTIFICATION DROPDOWN -->
               <!-- BEGIN INBOX DROPDOWN -->
               <li class="dropdown" id="header_inbox_bar">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="icon-envelope-alt"></i>
                  <span class="badge">5</span>
                  </a>
                  <ul class="dropdown-menu extended inbox">
                     <li>
                        <p>You have 12 new messages</p>
                     </li>
                     <li>
                        <a href="inbox.html?a=view">
                        <span class="photo"><img src="./assets/img/avatar2.jpg" alt="" /></span>
                        <span class="subject">
                        <span class="from">Lisa Wong</span>
                        <span class="time">Just Now</span>
                        </span>
                        <span class="message">
                        Vivamus sed auctor nibh congue nibh. auctor nibh
                        auctor nibh...
                        </span>  
                        </a>
                     </li>
                     <li>
                        <a href="inbox.html?a=view">
                        <span class="photo"><img src="./assets/img/avatar3.jpg" alt="" /></span>
                        <span class="subject">
                        <span class="from">Richard Doe</span>
                        <span class="time">16 mins</span>
                        </span>
                        <span class="message">
                        Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh
                        auctor nibh...
                        </span>  
                        </a>
                     </li>
                     <li>
                        <a href="inbox.html?a=view">
                        <span class="photo"><img src="./assets/img/avatar1.jpg" alt="" /></span>
                        <span class="subject">
                        <span class="from">Bob Nilson</span>
                        <span class="time">2 hrs</span>
                        </span>
                        <span class="message">
                        Vivamus sed nibh auctor nibh congue nibh. auctor nibh
                        auctor nibh...
                        </span>  
                        </a>
                     </li>
                     <li class="external">
                        <a href="inbox.html">See all messages <i class="m-icon-swapright"></i></a>
                     </li>
                  </ul>
               </li>
               <!-- END INBOX DROPDOWN -->
               <!-- BEGIN TODO DROPDOWN -->
               <li class="dropdown" id="header_task_bar">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="icon-tasks"></i>
                  <span class="badge">5</span>
                  </a>
                  <ul class="dropdown-menu extended tasks">
                     <li>
                        <p>You have 12 pending tasks</p>
                     </li>
                     <li>
                        <a href="#">
                        <span class="task">
                        <span class="desc">New release v1.2</span>
                        <span class="percent">30%</span>
                        </span>
                        <span class="progress progress-success ">
                        <span style="width: 30%;" class="bar"></span>
                        </span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="task">
                        <span class="desc">Application deployment</span>
                        <span class="percent">65%</span>
                        </span>
                        <span class="progress progress-danger progress-striped active">
                        <span style="width: 65%;" class="bar"></span>
                        </span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="task">
                        <span class="desc">Mobile app release</span>
                        <span class="percent">98%</span>
                        </span>
                        <span class="progress progress-success">
                        <span style="width: 98%;" class="bar"></span>
                        </span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="task">
                        <span class="desc">Database migration</span>
                        <span class="percent">10%</span>
                        </span>
                        <span class="progress progress-warning progress-striped">
                        <span style="width: 10%;" class="bar"></span>
                        </span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="task">
                        <span class="desc">Web server upgrade</span>
                        <span class="percent">58%</span>
                        </span>
                        <span class="progress progress-info">
                        <span style="width: 58%;" class="bar"></span>
                        </span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="task">
                        <span class="desc">Mobile development</span>
                        <span class="percent">85%</span>
                        </span>
                        <span class="progress progress-success">
                        <span style="width: 85%;" class="bar"></span>
                        </span>
                        </a>
                     </li>
                     <li class="external">
                        <a href="#">See all tasks <i class="m-icon-swapright"></i></a>
                     </li>
                  </ul>
               </li>
               <!-- END TODO DROPDOWN -->
               <!-- BEGIN USER LOGIN DROPDOWN -->
               <li class="dropdown user">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img alt="" src="assets/img/avatar1_small.jpg" />
                  <span class="username">Bob Nilson</span>
                  <i class="icon-angle-down"></i>
                  </a>
                  <ul class="dropdown-menu">
                     <li><a href="dashboard.php"><i class="icon-user"></i> My Profile</a></li>
                     <li><a href="dashboard.php"><i class="icon-calendar"></i> My Calendar</a></li>
                     <li><a href="dashboard.php"><i class="icon-envelope"></i> My Inbox(3)</a></li>
                     <li><a href="dashboard.php"><i class="icon-tasks"></i> My Tasks</a></li>
                     <li class="divider"></li>
                     <li><a href="index.php"><i class="icon-key"></i> Log Out</a></li>
                  </ul>
               </li>
               <!-- END USER LOGIN DROPDOWN -->
            </ul>
            <!-- END TOP NAVIGATION MENU --> 
         </div>
      </div>
      <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div class="page-container">
      <!-- BEGIN SIDEBAR -->
      <div class="page-sidebar nav-collapse collapse">
         <!-- BEGIN SIDEBAR MENU -->        	<ul>
				<li>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone"></div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li>
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<form class="sidebar-search">
						<div class="input-box">
							<a href="javascript:;" class="remove"></a>
							<input type="text" placeholder="Search..." />				
							<input type="button" class="submit" value=" " />
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
					        		
        		<li class="start active ">
        			<!--<a href="dashboard.php?page=main"> -->
					 <a href="dashboard.php?page=main">
					<i class="icon-home"></i> 
					<span class="title">Dashboard</span>
					<span class="selected"></span>
					</a>
				</li>	  
                <li class="">
        			<a href="javascript:;">
					<i class="icon-table"></i> 
					<span class="title">Company</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
					    <li class="">
							<a href="dashboard.php?page=company"> 
							<i class="icon-user"></i> 
							<span class="title">Company</span>
							</a>
						</li> 
						<!-- <li class="">
							<a href="dashboard.php?page=branch">
							<i class="icon-user"></i> 
							<span class="title">Company Branch</span>
							</a>
						</li> 
						 <li class="">
							<a href="dashboard.php?page=contacts">
							<i class="icon-user"></i> 
							<span class="title">Company Contacts</span>
							</a>
						</li> 
					<li class="">
							<a href="dashboard.php?page=company_size">
							<i class="icon-user"></i> 
							<span class="title">Company Size</span>
							</a>
						</li>	
					<li class="">
							<a href="dashboard.php?page=company_status">
							<i class="icon-user"></i> 
							<span class="title">Company Status</span>
							</a>
						</li>	
					
					<li class="">
							<a href="dashboard.php?page=company_type">
							<i class="icon-user"></i> 
							<span class="title">Company Type</span>
							</a>
						</li> -->
					
					</ul>
				</li>
				 
			   <li class="">
        			<a href="javascript:;">
					<i class="icon-table"></i> 
					<span class="title">View Tables</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
					    <li class="">
							<a href="dashboard.php?page=company_table">
							<i class="icon-user"></i> 
							<span class="title">View Companies</span>
							</a>
						</li> 
				   </ul>
					
			</li>
				
				
				<!-- <li class="">
        			<a href="javascript:;">
					<i class="icon-table"></i> 
					<span class="title">Services</span>
					<span class="arrow "></span>
					</a>
				       <ul class="sub-menu">
				         
						 <li class="">
							<a href="dashboard.php?page=service">
							<i class="icon-user"></i> 
							<span class="title">Company Service Calls</span>
							</a>
						</li> 
						 <li class="">
							<a href="dashboard.php?page=unitary_service">
							<i class="icon-user"></i> 
							<span class="title">Unitary Service Calls</span>
							</a>
						</li> 
				       </ul>
				 </li>  -->
				 <li class="">
        			<a href="javascript:;">
					<i class="icon-table"></i> 
					<span class="title">Products</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
					   <li class="">
							<a href="dashboard.php?page=product">
							<i class="icon-user"></i> 
							<span class="title">Create Product</span>
							</a>
						</li> 
						<li class="">
							<a href="dashboard.php?page=product_batch">
							<i class="icon-user"></i> 
							<span class="title">Product Batch</span>
							</a>
						</li> 
					</ul>
				</li>
				  <li class="">
        			<a href="javascript:;">
					<i class="icon-table"></i> 
					<span class="title">Orders</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
					 <li class="">
							<!-- <a class="ajaxify" href="./forms/CompanyOrdersForm.php"> -->
							 <a href="dashboard.php?page=orders">
							<i class="icon-user"></i> 
							<span class="title">Create Orders</span>
							</a>
						</li> 
					   <li class="">
							<a href="dashboard.php?page=orders_breakdown">
							<i class="icon-user"></i> 
							<span class="title">Orders Breakdown</span>
							</a>
						</li> 
					  <li class="">
							<a href="dashboard.php?page=orders_approval">
							<i class="icon-user"></i> 
							<span class="title">Orders Approval</span>
							</a>
						</li> 
						<li class="">
							<a href="dashboard.php?page=supplies_orders">
							<i class="icon-user"></i> 
							<span class="title">Supplies Order</span>
							</a>
						</li>
					
					</ul>
					
				 </li> 
				  <li class="">
        			<a href="javascript:;">
					<i class="icon-table"></i> 
					<span class="title">Charts</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
					    <li class="">
							<a href="dashboard.php?page=pie">
							<i class="icon-user"></i> 
							<span class="title">Pie Chart</span>
							</a>
						</li>
						 <li class="">
							<a href="dashboard.php?page=bar">
							<i class="icon-user"></i> 
							<span class="title">Bar Chart</span>
							</a>
						</li>
					</ul>
				  </li> 
				  <li class="">
        			<a href="javascript:;">
					<i class="icon-table"></i> 
					<span class="title">Messaging</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
					    <li class="">
							<a href="dashboard.php?page=inbox">
							<i class="icon-user"></i> 
							<span class="title">Inbox</span>
							</a>
						</li>
					</ul>
				  </li>
				  
				  <li class="">
        			<a href="javascript:;">
					<i class="icon-table"></i> 
					<span class="title">File Upload</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
					    <li class="">
							<a href="dashboard.php?page=uploadfile">
							<i class="icon-user"></i> 
							<span class="title">sample upload</span>
							</a>
						</li>
					</ul>
				  </li>
				 <!--  <li class="">
        			<a href="javascript:;">
					<i class="icon-table"></i> 
					<span class="title">Payments</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
					   <li class="">
							<a href="dashboard.php?page=payment_approval">
							<i class="icon-user"></i> 
							<span class="title">Payment Approval</span>
							</a>
						</li>
					<li class="">
							<a href="dashboard.php?page=confirmation">
							<i class="icon-user"></i> 
							<span class="title">Payment Confirmation</span>
							</a>
						</li>
					 
					</ul>
					
				 </li>  -->
				<!-- <li class="">
        			<a href="javascript:;">
					<i class="icon-table"></i> 
					<span class="title">Activities</span>
					<span class="arrow "></span>
					</a>
				       <ul class="sub-menu">
				         
						 <li class="">
							<a href="dashboard.php?page=activity_status">
							<i class="icon-user"></i> 
							<span class="title">Activity Status</span>
							</a>
						</li> 
						 <li class="">
							<a href="dashboard.php?page=activity_type">
							<i class="icon-user"></i> 
							<span class="title">Activity Type</span>
							</a>
						</li> 
						<li class="">
							<a href="dashboard.php?page=brand_reminders">
							<i class="icon-user"></i> 
							<span class="title">Brand Reminders</span>
							</a>
						</li> 
				       </ul>
				 </li> 
				<li class="">
        			<a href="dashboard.php?page=lead_source">
					<i class="icon-user"></i> 
					<span class="title">Lead Source</span>
					</a>
				</li> 
				<li class="">
        			<a href="dashboard.php?page=profession">
					<i class="icon-user"></i> 
					<span class="title">Profession</span>
					</a>
				</li> 
				<li class="">
        			<a href="dashboard.php?page=relationship">
					<i class="icon-user"></i> 
					<span class="title">Relationship</span>
					</a>
				</li> 
				<li class="">
        			<a href="dashboard.php?page=speciality">
					<i class="icon-user"></i> 
					<span class="title">Speciality</span>
					</a>
				</li> -->
				<!-- <li class="">
        			<a href="javascript:;">
					<i class="icon-table"></i> 
					<span class="title">User Management</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
					  <li class="">
						<a href="dashboard.php?page=transactions">
						<i class="icon-user"></i> 
						<span class="title">User Transaction</span>
						</a>
					</li> 
					</ul>
				</li>	-->
				 <li class="">
        			<a href="javascript:;">
					<i class="icon-table"></i> 
					<span class="title">WorkPlan</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
					  <li class="">
						<a href="dashboard.php?page=workplan">
						<i class="icon-user"></i> 
						<span class="title">Create WorkPlan</span>
						</a>
					  </li> 
					  <!-- <li class="">
						<a href="dashboard.php?page=workplan_clocking">
						<i class="icon-user"></i> 
						<span class="title">WorkPlan Clocking</span>
						</a>
					   </li> -->
					   <!-- <li class="">
						<a href="dashboard.php?page=workplan_status">
						<i class="icon-user"></i> 
						<span class="title">WorkPlan Status</span>
						</a>
					   </li> -->
					   <li class="">
						<a href="dashboard.php?page=calendar">
						<i class="icon-user"></i> 
						<span class="title">My Calendar</span>
						</a>
					   </li>
					   <li class="">
						<a href="dashboard.php?page=workplan_status_table">
						<i class="icon-user"></i> 
						<span class="title">Update WorkPlan Calendar</span>
						</a>
					   </li>
					</ul>
				</li>	
        		<li class="">
        			<a href="index.php">
					<i class="icon-user"></i> 
					<span class="title">Logout</span>
					</a>
				</li>
				
				</ul>
		<!-- END SIDEBAR MENU -->
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->
      <div class="page-content">
         <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <div id="portlet-config" class="modal hide">
            <div class="modal-header">
               <button data-dismiss="modal" class="close" type="button"></button>
               <h3>Widget Settings</h3>
            </div>
            <div class="modal-body">
               Widget settings form goes here
            </div>
         </div>
         <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
		 
				 <!-- BEGIN PAGE CONTAINER-->
				    <?php 
					   
                       // $page = $_GET['page']; 
					 //  $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 'main';
					
					  if(isset($_GET['page'])){
					  
					    //$page = $_GET['page'];
						switch($_GET['page'])
						{
						   case 'company':
						   include ('./forms/CompanyForm.php');
						   break;
						   
						   case 'main':
						    include('main.php');
							break;
						   case 'branch':
						    include('./forms/BranchForm.php');
							break;
						  case 'contacts':
						    include('./forms/CompanyContactsForm.php');
							break;
						  case 'service':
						    include('./forms/ServiceCallsForm.php');
							break;
						  case 'orders': 
						    include('./forms/CompanyOrdersForm.php');
							break;
						 case 'orders_breakdown': 
						    include('./forms/CompanyOrdersBreakdownForm.php');
							break;
						 case 'orders_approval': 
						    include('./forms/CompanyApproveOrderForm.php');
							break;
						 case 'payment_approval': 
						    include('./forms/CompanyPaymentApprovalForm.php');
							break;
						 case 'confirmation': 
						    include('./forms/CompanyPaymentConfirmationForm.php');
							break;
						 case 'company_size': 
						    include('./forms/CompanySizeForm.php');
							break;
						 case 'company_status': 
						    include('./forms/CompanyStatusForm.php');
							break;
						 case 'supplies_orders': 
						    include('./forms/CompanySuppliesOrderForm.php');
							break;
						case 'company_type': 
						    include('./forms/CompanyTypeForm.php');
							break;
						case 'unitary_service': 
						    include('./forms/CompanyUnitaryServicecallsForm.php');
							break;
						case 'lead_source': 
						    include('./forms/LeadSourceForm.php');
							break;
						case 'product': 
						    include('./forms/ProductForm.php');
							break;
						case 'product_batch': 
						    include('./forms/ProductBatchForm.php');
							break;
						case 'profession': 
						    include('./forms/ProfessionForm.php');
							break;
						case 'relationship': 
						    include('./forms/RelationshipForm.php');
							break;
						case 'speciality': 
						    include('./forms/SpecialityForm.php');
							break;
						case 'transactions': 
						    include('./forms/TransactionsForm.php');
							break;
						case 'workplan': 
						    include('./forms/WorkplanForm.php');
							break;
						case 'workplan_clocking': 
						    include('./forms/WorkPlanClockingForm.php');
							break;
						case 'workplan_status': 
						    include('./forms/WorkPlanStatusForm.php');
							break;
						case 'activity_status': 
						    include('./forms/ActivityStatusForm.php');
							break;
						case 'activity_type': 
						    include('./forms/ActivityTypeForm.php');
							break;
						case 'brand_reminders': 
						    include('./forms/BrandRemindersForm.php');
							break;
						case 'company_table': 
						    include('./tables/CompanyTable.php');
							break;
						case 'workplan_table': 
						    include('./tables/WorkplanTable.php');
							break;
						case 'calendar': 
						    include('./api/workPlanCalendar.php');
							break;
						case 'workplan_status_table': 
						    include('./tables/WorkplanStatus.php');
							break;
						case 'bar': 
						    include('./charts/barChart.php');
							break;
						case 'pie': 
						    include('./charts/pieChart.php');
							break;
						case 'inbox': 
						    include('./inbox/inbox.php');
							break;
						case 'uploadfile': 
						    include('./forms/UploadFile.php');
							break;
						default:
						   // $page ='dashboard';
	                        include('dashboard.php');
						}
						}
						else {
						    include('main.php');
						
						}
						
						
						
           
					?>
				 
				 
				
				 <!-- END PAGE CONTAINER-->    
      </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <div class="footer">
      2013 &copy; Metronic by keenthemes.
      <div class="span pull-right">
         <span class="go-top"><i class="icon-angle-up"></i></span>
      </div>
   </div>
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
   <!-- BEGIN CORE PLUGINS -->
   <script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>   
   <!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->  
   <script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
   <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   <!--[if lt IE 9]>
   <script src="assets/plugins/excanvas.js"></script>
   <script src="assets/plugins/respond.js"></script>  
   <![endif]-->   
   <script src="assets/plugins/breakpoints/breakpoints.js" type="text/javascript"></script>  
   <!-- IMPORTANT! jquery.slimscroll.min.js depends on jquery-ui-1.10.1.custom.min.js --> 
   <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery.blockui.js" type="text/javascript"></script>  
   <script src="assets/plugins/jquery.cookie.js" type="text/javascript"></script>
   <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script> 
   <!-- END CORE PLUGINS -->
   <!-- BEGIN PAGE LEVEL PLUGINS -->
   <script src="assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>   
   <script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
   <script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
   <script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
   <script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
   <script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
   <script src="assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>  
   <script src="assets/plugins/flot/jquery.flot.js" type="text/javascript"></script>
   <script src="assets/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>   
   <script src="assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
   <script src="assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>  
  
   <!-- Forms Scripts -->
   <script type="text/javascript" src="assets/plugins/ckeditor/ckeditor.js"></script>  
   <script type="text/javascript" src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
   <script type="text/javascript" src="assets/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
   <script type="text/javascript" src="assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
   <script type="text/javascript" src="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
   <script type="text/javascript" src="assets/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>
   <script type="text/javascript" src="assets/plugins/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
   <script type="text/javascript" src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="assets/plugins/clockface/js/clockface.js"></script>
   <script type="text/javascript" src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
   <script type="text/javascript" src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
   <script type="text/javascript" src="assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>   
   <script type="text/javascript" src="assets/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
   <script src="assets/plugins/bootstrap-daterangepicker/date.js" type="text/javascript"></script>
   <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script> 
   <script type="text/javascript" src="assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
   <script type="text/javascript" src="assets/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
   
   <script src="assets/scripts/form-wizard.js"></script>     
   <script src="assets/scripts/form-components.js"></script> 
    <script src="assets/scripts/form-validation.js"></script>
  
    
   <!-- End Form Scripts -->
    <!-- Custom Scripts -->
	<script src="assets/scripts/custom/calendar.js"></script> 
   <script src="assets/scripts/custom/branchWizard.js"></script> 
    <script src="assets/scripts/custom/workPlanWizard.js"></script>
	<script src="assets/scripts/custom/companyWizard.js"></script>
	<script src="assets/scripts/custom/orderWizard.js"></script>
	
   <script src="assets/scripts/custom/retrieveCountry.js"></script> 
   <script src="assets/scripts/custom/retrieveSize.js"></script> 
   <script src="assets/scripts/custom/retrieveType.js"></script> 
   <script src="assets/scripts/custom/retrieveState.js"></script> 
   <script src="assets/scripts/custom/retrieveStatus.js"></script> 
   <script src="assets/scripts/custom/retrieveCompany.js"></script> 
   <script src="assets/scripts/custom/retrieveContacts.js"></script> 
   <script src="assets/scripts/custom/retrieveActivityType.js"></script> 
   <script src="assets/scripts/custom/retrieveBranch.js"></script> 
   <script src="assets/scripts/custom/retrieveWorkplan.js"></script> 
   <script src="assets/scripts/custom/retrieveProduct.js"></script>
    <script src="assets/scripts/custom/jquery.numeric.js"></script>
	<script src="assets/scripts/custom/updateNotify.js"></script>
   
   <script src="assets/scripts/custom/jquery.dateFormat.js"></script> 	
	<script type="text/javascript" src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-validation/dist/additional-methods.min.js"></script>
   
   <!-- End custom scripts -->
   
    <!-- Inbox Scripts -->
	<script src="assets/plugins/bootstrap-tag/js/bootstrap-tag.js" type="text/javascript" ></script> 
   <script src="assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript" ></script>
  
   <!-- BEGIN:File Upload Plugin JS files-->
   <script src="assets/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
   <!-- The Templates plugin is included to render the upload/download listings -->
   <script src="assets/plugins/jquery-file-upload/js/vendor/tmpl.min.js"></script>
   <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
   <script src="assets/plugins/jquery-file-upload/js/vendor/load-image.min.js"></script>
   <!-- The Canvas to Blob plugin is included for image resizing functionality -->
   <script src="assets/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js"></script>
   <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
   <script src="assets/plugins/jquery-file-upload/js/jquery.iframe-transport.js"></script>
   <!-- The basic File Upload plugin -->
   <script src="assets/plugins/jquery-file-upload/js/jquery.fileupload.js"></script>
   <!-- The File Upload file processing plugin -->
   <script src="assets/plugins/jquery-file-upload/js/jquery.fileupload-fp.js"></script>
   <!-- The File Upload user interface plugin -->
   <script src="assets/plugins/jquery-file-upload/js/jquery.fileupload-ui.js"></script>
   <script src="assets/scripts/inbox.js"></script>  
	<!-- end inbox scripts -->
   
   
   
   <!-- Tables Scripts -->
   <script src="assets/scripts/table-editable.js"></script> 
   <script type="text/javascript" src="assets/plugins/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="assets/plugins/data-tables/DT_bootstrap.js"></script>
   <!-- End Tables Scripts -->
   <!-- END PAGE LEVEL PLUGINS -->
   
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="assets/scripts/app.js" type="text/javascript"></script>
   <script src="assets/scripts/form-fileupload.js"></script>
    <!--<script src="assets/scripts/custom-calendar.js" type="text/javascript"></script> -->
   <script src="assets/scripts/index.js" type="text/javascript"></script> 
   
 
   <!-- END PAGE LEVEL SCRIPTS -->  
   <script>
      jQuery(document).ready(function() {    
         App.init(); // initlayout and core plugins
         Index.init();
		// CustomCalendar.init();
        /* Index.initJQVMAP(); // init index page's custom scripts
         Index.initCalendar(); // init index page's custom scripts
         Index.initCharts(); // init index page's custom scripts
         Index.initChat();
         Index.initMiniCharts();
         Index.initDashboardDaterange();
         Index.initIntro(); */
		// FormWizard.init();
		 CompanyWizard.init();
		 FormComponents.init();
		 TableEditable.init();
		 BranchWizard.init();
		 WorkPlanWizard.init();
		 OrderWizard.init();
		 Inbox.init();
		 FormFileUpload.init();
		 
		// calendar.init();
		// FormValidation.init();
		////
		///////
	function retrieve(){
 $.ajax({
				url: 'api/retrieveNotification.php',
				dataType: 'json',
				type: 'GET',
				 success: function (notification) {
				  var data = [], row;
				  var i = 0 ;
				  var value;
				  for (i = 0, ilen = notification.notify.length; i < ilen; i++) {
					row = [];
				   // row[0] = res.costs[i].id;
					 value = notification.notify[i].number;
				
					}
					if(value != 0){
					
					document.getElementById('div2').innerHTML = +value;
					///
					 $.gritter.add({
												// (string | mandatory) the heading of the notification
												title: 'Notification',
												// (string | mandatory) the text inside the notification
												text: 'System Retrieving new notifications',
												// (string | optional) the image to display on the left
												image: 'http://a0.twimg.com/profile_images/59268975/jquery_avatar_bigger.png',
												// (bool | optional) if you want it to fade out on its own or just sit there
												sticky: false,
												// (int | optional) the time you want it to be alive for before fading out
												time: ''
											});
					
					}
					if(value == 0)
					{
					 $('#div2').hide('slow', function() {
						//alert('Animation complete.');
						console.log("No new Notifications");
						});
					  //document.getElementById('div2').hide();
					}
				}
			  });
			  }
			  setInterval(retrieve, 30000);
			  retrieve();
//////////////////////////////////////////////////	
		////
      });
   </script>
   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
