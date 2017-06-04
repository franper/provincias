<!DOCTYPE html>
<html>
  <head>
    <style>
       #map {
        height: 400px;
        width: 50%;
       }
    </style>
  </head>
  <body>
    <h3>My Google Maps</h3>
    <div id="map"></div>
    <script>
    var map, place, marker;

      function initMap() {
        var mapOptions = {
          center: new google.maps.LatLng(40.41311285612875,-3.709405729589883),
          zoom: 10,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.getElementById('map'), mapOptions);

        // para poner un marcador
        place = new google.maps.LatLng(40.41311285612875,-3.709405729589883);

        marker = new google.maps.Marker({
          position: place,
          title: "sitio",
          map: map
        });

        //llamamos la funciono showInfo
        google.maps.event.addListener(marker,"click",showInfo);

      }


      //para mostrar informacion
      function showInfo(){
        map.setZoom(15);
        map.setCenter(marker.getPosition());
        var infoWindow = new google.maps.InfoWindow({
          content: "esto es un contenido del sitio"



        });

        infoWindow.open(map,marker);

      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initMap">
    </script>
  </body>
</html>