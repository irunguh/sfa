<?php
require_once("./db_connection/database_connect.php"); // For database connection 
 //count total number of companies
  $sql = 'SELECT  Company_Name as name, MONTH(Meeting_Date) as month, count(Proposed_Activity) as activity from  work_plan 
  left join company on work_plan.CompanyID = company.CompanyID group by Company_Name limit 1' ;
  $stmt = $db->prepare($sql);
  $stmt->execute();
  ///
  $graph_company = array();
  $company = null ;
  $graph_data = array();
  $b = array(0,0,0,0,0,0,0,0,0,0,0,0);
  ////
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
  {
	  $value = $row['activity'] ;
	 // $graph_data[] = array($row['name'], round($value));		
      $graph_company[] = array($row['name']);	
      //
        $company = 	$row['name'] ;  
	  /////
	  $b[$row['month']-1] = $row['activity'];
	  //
	  $graph_data[] = implode(',', $b);
	 
	 
  }
 $str =  json_encode($graph_data);
 $str = str_replace(array('\'', '"'), '',$str); 
  
?> 
 
 <div class="container-fluid">
          <div class="row-fluid">
               <div class="span12">
                  <h3 class="page-title">
                    Sample Bar Chart
                     <small>Bar chart</small>
                  </h3>
                  <ul class="breadcrumb">
                     <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a> 
                        <span class="icon-angle-right"></span>
                     </li>
                     <li>
                        <a href="#">Bar Chart</a>
                        <span class="icon-angle-right"></span>
                     </li>
                    
                  </ul>
               </div>
            </div>
         <div class="row-fluid">
               <div class="span10">
                <div class="portlet box yellow">
                     <div class="portlet-title">
                        <div class="caption"><i class="icon-reorder"></i>Bar Chart</div>
                        <div class="tools">
                           <a href="#portlet-config" data-toggle="modal" class="config"></a>
                           <a href="javascript:;" class="reload"></a>
                        </div>
                     </div>
                     <div class="portlet-body">
                        <div id="bar_chart" class="chart"></div>
                     </div>
                  </div>
				  
               </div>
             
            </div>
</div>


  <!-- Charts Scripts -->
   <script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>  
    <script src="assets/scripts/custom/highcharts/highcharts.js"></script>
   <script src="assets/scripts/custom/highcharts/exporting.js"></script>
  
   <!-- end chart scripts -->
	<script type="text/javascript">
$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'bar_chart',
                type: 'column'
            },
            title: {
                text: '<?php echo $company ; ?> Company Monthly Meetings/Activities'
            },
            subtitle: {
                text: 'Source: mysystem.com'
            },
            xAxis: {
                categories: [
                    'Jan',
                    'Feb',
                    'Mar',
                    'Apr',
                    'May',
                    'Jun',
                    'Jul',
                    'Aug',
                    'Sep',
                    'Oct',
                    'Nov',
                    'Dec'
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'No of Meetings'
                }
            },
            legend: {
                layout: 'vertical',
                backgroundColor: '#FFFFFF',
                align: 'left',
                verticalAlign: 'top',
                x: 100,
                y: 70,
                floating: true,
                shadow: true
            },
			credits:
				{
					enabled: false
				},
            tooltip: {
                formatter: function() {
                    return ''+
                        this.x +': '+ this.y +' ';
                }
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
                series: [
				
				{
                name: <?php echo json_encode($graph_company); ?>,
                data: <?php echo $str; ?>
                }
			
			
			]
        });
    });
    
});
		</script>