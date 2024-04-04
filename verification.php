<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#myDIV {
  width: 100%;
  padding: 50px 0;
  text-align: center;
 }
</style>
</head>
<body>


<button onclick="myfunction()">Verify</button>

<div id="myDIV">

</div>


<script>
function myfunction()
{
//	window.open("http://maps.google.com/maps?daddr=10.8297° N, 76.4981° E");
   window.open("http://tax.lsgkerala.gov.in/epayment/index.php");
     window.Maximize();


     document.getElementsById("cmbDistrict").value = "2";
     //value=1;
     var map;
var service;
var infowindow;

function initMap() {
  var sydney = new google.maps.LatLng(-33.867, 151.195);

  infowindow = new google.maps.InfoWindow();

  map = new google.maps.Map(
      document.getElementById('map'), {center: sydney, zoom: 15});

  var request = {
    query: 'Museum of Contemporary Art Australia',
    fields: ['name', 'geometry'],
  };

  var service = new google.maps.places.PlacesService(map);

  service.findPlaceFromQuery(request, function(results, status) {
    if (status === google.maps.places.PlacesServiceStatus.OK) {
      for (var i = 0; i < results.length; i++) {
        createMarker(results[i]);
      }
      map.setCenter(results[0].geometry.location);
    }
  });
}
 } 
</script>
         

</body>
</html>

