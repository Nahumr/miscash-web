<?php ?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title>Tienda</title> 
		<meta charset="utf-8">
		<style type="text/css"> 
  			html { height: 100% } 
  			body { height: 100%; margin: 0px; padding: 0px } 
  			#map_canvas { height: 100% } 
			</style> 
		
   			
			<script type="text/javascript" 
    		src="https://maps.google.com/maps/api/js?key=AIzaSyAqgUzS3ABd8GH0a3FfUtIKI367ry6OlXo&sensor=false"> 
			</script>

			<script type="text/javascript">
    		var x;
    		function obtCoor(marker) {
        		document.getElementById("oculto").value = marker.getPosition().lat();
        		document.getElementById("oculto2").value = marker.getPosition().lng();
        		document.getElementById("loglat").innerHTML = ''+ marker.getPosition().lat();

        		document.getElementById("loglong").innerHTML = '' + marker.getPosition().lng();
    		}
    		
    		function initialize() {
       			if (navigator.geolocation) {
          			navigator.geolocation.getCurrentPosition(showPosition);
			    } else { 
        			x.innerHTML = "Geolocation is not supported by this browser.";
      			}
    		}	
    
  			function showPosition(position) {
        		var myLatlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
        		var myOptions = {
            	zoom: 17,
            	center: myLatlng,
            	mapTypeId: google.maps.MapTypeId.ROADMAP,
        	}
        	var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

        	marker = new google.maps.Marker({
    	        position: myLatlng,
	            draggable: true,
        	    title: "Hello World!"
        	});
        	google.maps.event.addListener(marker, "dragend", function () {
            	obtCoor(marker);
        	});

        		marker.setMap(map);
        		obtCoor(marker);
    		}
			</script> 
		<link rel="stylesheet" type="text/css" href="estilos.css">
	</head> 
	<body onload="initialize()">  
		<div class="contenedor">
			<a href="iniciar.php"> 
				<div class="encima" id="pop">  POP MOBILE </div>
			</a>
			<a href="usuarios.php"> 
				<div class="encima" style="left: 25%">USUARIOS</div>
			</a>
			<a href="tienda.php"> 
				<div class="encima" id="tienda">TIENDA</div>
			</a>
			<a href="recompensas.php"> 
				<div class="encima" id="recom">RECOMPENSAS</div>
			</a>
			<a href="productos.php"> 
				<div class="encima" id="promo">PRODUCTOS</div>
			</a>
			<img src="bg.png" class="fondo">
			<div class="grande" style="top: 39%; left: 35%">ADMINISTRADOR <br> DE TIENDA</div>
			<div class="grandeR" style="top: 47%;">REGISTRO DE TIENDA</div>
			<div class="grandeR" style="top: 90%;">BAJA DE TIENDA</div>
			<div class="grandeR" style="top: 63%;">CONTACTO</div>
			<form class="cuadro3" action="insertar_tienda.php" style="top: 50%;" method="POST">
				<input type="text" name="nombre" placeholder="NOMBRE TIENDA" style="height: 50px;  width: 360px; text-align: center;">
				<input type="hidden" id="oculto" value="nada" name="latitud_x">
				<input type="hidden" id="oculto2" value="nada" name="latitud_y">
				<strong id="loglat" style="height: 50px; width: 200px; text-align: center;background-color: #FFF;">Latitud:</strong>
				<strong id="loglong" style="height: 50px;background-color: #FFF; width: 200px; text-align: center;">Longitud:</strong>
  				<input type="text" name="admin_tienda" placeholder="ADMINISTRADOR TIENDA" style="height: 50px; width: 300px; text-align: center;">
  				<input type="tel" name="telefono" placeholder="TELEFONO CELULAR" style="height: 50px; width: 300px; text-align: center;">
				<input type="submit" name="registrar" value="REGISTRAR" style="height: 60px; width: 200px; text-align: center; background-color: #1ecbd9; border: 2px; border-radius: 10px;">
				
			</form>
			<div style="height:700px;width:100%; position: absolute; top: 57%;left: 0%">
  				<div id="map_canvas"></div><br> 
  			<p style="font-size: 30px; font-weight: bold;color:#E8990C; position: absolute; top: -15%;left: 5%">PD: Da click y mueve el marcador en el mapa de abajo hasta la ubicacion exacta de tu tienda.</p>
  				
			</div>
			</form>
			<form class="cuadro1" action="eliminar_tienda.php" method="POST" style="top:94%">
				<input type="text" name="id_tienda" placeholder="ID TIENDA" style="height: 50px; width: 360px; text-align: center;">
				<input type="text" style="height: 50px; text-align: center; visibility: hidden;">
				<input type="text" style="height: 50px; text-align: center; visibility: hidden;">
				<input type="submit" name="baja" value="BAJA" style="height: 60px; text-align: center; width: 200px; background-color:#1ecbd9; border:2px ; border-radius:10px; ">
			</form>
			<div class="rectangulo" style="width: 100%;	height: 1500px;"></div>
			
		</div>
		
	</body> 
</html> 