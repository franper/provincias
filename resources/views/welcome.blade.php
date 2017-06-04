@extends('template')

@section('content')
<div class="col-md-6 col-md-offset-3">
    <form name="test-form" method="POST" action="#">

        <div class="form-group"><br><br>
            <h3 class="control-label">Introduce una provincia</h3>
            <table id="tabla">
            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
            <tr>
                <td>
                <input type="text" name="text" id="text" autocomplete="off" oninput="enviarDatos()">
                </td>
                <td><input type="button" id="btn" value="Ver mapa"></td>
            </tr>
            <tr id="resultado"></tr>
            </table>
            
        </div>
        
    </form>
</div>
<div id="map" class="col-md-6 col-md-offset-3"></div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('#map').hide();
        $('#btn').click(function(){

            var token = $('#token').val();
            var datos = $('#idProv').val();
            var parametros = {
                'idProv': datos
            };

            $.ajax({
                data: parametros,
                headers: {'X-CSRF-TOKEN':token},
                url:   '{{ url("map") }}',
                type:  'post',
                success:  function (result) {
                    
                    
                    /*
                    for(i=0; i<result.length; i++){
                        initMap(result[i].latitud,result[i].longitud);
                        

                    } 
                    */
                    initMap(result); 
                    $('#map').show();              
                }
            });
        });
    });

    function pasarDatos(){
        document.getElementById("text").value = document.getElementById("prov").value;
        $('#prov').hide();
    }

    function enviarDatos()
    {
        var datos = $('#text').val();
        var token = $('#token').val();
        var parametros = {
                'text': datos
        };
        $.ajax({
                data: parametros,
                headers: {'X-CSRF-TOKEN':token},
                url:   '{{ url("province") }}',
                type:  'post',
                success:  function (result) {
                    var provincia = result;
                    var str = '';  
                    
                    for(i=0; i<provincia.length; i++){
                        str += '<td><input type="hidden" name="idProv" id="idProv" value="'+provincia[i].id+'"><input type="text" disable id="prov" onclick="pasarDatos()" value="'+provincia[i].name+'" ></td>';

                    }

                    //Con DOM accedemos y manipulamos el documento HTML
                    document.getElementById("resultado").innerHTML =str;
                        
                }
        });


    }

    /*   mostrar mapas  */
    var map, place, marker;

    /*
      function initMap(latitud,longitud){
        var mapOptions = {
          center: new google.maps.LatLng(latitud,longitud),
          zoom: 7,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.getElementById('map'), mapOptions);

        // para poner un marcador
        place = new google.maps.LatLng(latitud,longitud);

        marker = new google.maps.Marker({
          position: place,
          title: "sitio",
          map: map
        });


        //llamamos la funciono showInfo
        google.maps.event.addListener(marker,"click",showInfo);

      }
      */

      function initMap(ciudad){
        var place = [];
        var marker = [];
        var mapOptions = {
          center: new google.maps.LatLng(ciudad[0].latitud,ciudad[0].longitud),
          zoom: 7,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.getElementById('map'), mapOptions);

        for(var i=0; i<ciudad.length; i++){
            // para poner un marcador
            place[i] = new google.maps.LatLng(ciudad[i].latitud,ciudad[i].longitud);

            marker[i] = new google.maps.Marker({
              position: place[i],
              title: "sitio",
              map: map
            });
        }
        
        //llamamos la funciono showInfo
        //google.maps.event.addListener(marker,"click",showInfo);

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
    src="https://maps.googleapis.com/maps/api/js?sensor=false">
</script>
@endsection
