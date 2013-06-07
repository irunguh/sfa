 <?php
require_once("./db_connection/database_connect.php"); // For database connection 
 //count total number of companies
  $sql = 'SELECT  Company_Name as name, count(Proposed_Activity) as activity from  work_plan 
  left join company on work_plan.CompanyID = company.CompanyID group by Company_Name' ;
  $stmt = $db->prepare($sql);
  $stmt->execute();
  ///
  $graph_data = array();
  ////
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
  {
	  $value = $row['activity'] ;
	  $graph_data[] = array($row['name'], round($value));			 
  }
  
 // echo json_encode($graph_data); 
?> 
 
 <div class="container-fluid">
          <div class="row-fluid">
               <div class="span12">
                  <h3 class="page-title">
                    Sample Pie Chart
                     <small>pie chart</small>
                  </h3>
                  <ul class="breadcrumb">
                     <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a> 
                        <span class="icon-angle-right"></span>
                     </li>
                     <li>
                        <a href="#">Pie Chart</a>
                        <span class="icon-angle-right"></span>
                     </li>
                    
                  </ul>
               </div>
            </div>
         <div class="row-fluid">
               <div class="span10">
                <div class="portlet box yellow">
                     <div class="portlet-title">
                        <div class="caption"><i class="icon-reorder"></i>Pie Chart</div>
                        <div class="tools">
                           <a href="#portlet-config" data-toggle="modal" class="config"></a>
                           <a href="javascript:;" class="reload"></a>
                        </div>
                     </div>
                     <div class="portlet-body">
                        <div id="pie_chart" class="chart"></div>
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
                renderTo: 'pie_chart',
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: '% representation of activities/meeting per company'
            },
            tooltip: {
        	    pointFormat: '{series.name}: <b>{point.percentage}%</b>',
            	percentageDecimals: 1
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        color: '#000000',
                        connectorColor: '#000000',
                        formatter: function() {
                            return '<b>'+ this.point.name +'</b>: '+ this.percentage +' %';
                        }
                    }
                }
            },
			
				credits:
				{
					enabled: false
				},
            series: [{
                type: 'pie',
                name: 'No of activities/meeting',
                data: <?php echo json_encode($graph_data); ?>
            }]
        });
    });
    
});
		</script>