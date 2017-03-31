<div id="googleMap" style="width:100%;height:380px;"></div>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCL5CAec3olrJr0k7ZnFYCBUYuTiNShNtw"></script>

<script>
var myCenter=new google.maps.LatLng(43.771829,-79.330852);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:12,
  scrollwheel:false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);

var infowindow = new google.maps.InfoWindow({
  content:"<b>Monest Financial Group</b> <br> Unit #1008, 250 Consumers Road. Toronto ON Canada, M2J 4V6"
  });

infowindow.open(map,marker);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
