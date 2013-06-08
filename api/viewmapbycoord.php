<?php 
//Retrieve the branch details

require_once("../db_connection/database_connect.php"); // For database connection
 
$workId =$_REQUEST['workplanid'];

	  //we show a message informing them that they have 
      $sql2 = "SELECT * FROM work_plan_clocking where WorkPlanID = '$workId' " ;
      $result2 = $db->query($sql2);
      $row2 = $result2->fetch(PDO::FETCH_ASSOC);

?>
<section id="wrapper">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<article>
</article>
<script>
function success(position) {
  var mapcanvas = document.createElement('div');
  mapcanvas.id = 'mapcontainer';
  mapcanvas.style.height = '400px';
  mapcanvas.style.width = '550px';
  document.querySelector('article').appendChild(mapcanvas);
  var coords = new google.maps.LatLng(<?php echo $row2['Longtitude']; ?>,<?php echo $row2['Latitude']; ?>);
  var options = {
    zoom: 16,
    center: coords,
    mapTypeControl: true,
    navigationControlOptions: {
    	style: google.maps.NavigationControlStyle.SMALL
    },
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById("mapcontainer"), options);
  var marker = new google.maps.Marker({
      position: coords,
      map: map,
      title:"You are here!"
  });
}
if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(success);
} else {
  error('Geo Location is not supported');
}
</script>
</section>