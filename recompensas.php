<?php ?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title>Recompensas</title> 
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="estilos.css">
	</head> 
	<body> 
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
				<div class="encima" id="promo">PRODUCTO</div>
			</a>
			<img src="bg.png" class="fondo">
			<div class="grande" style="top: 65%; left: 35%">ADMINISTRADOR <br> DE RECOMPENSAS</div>
			<div class="grandeR" id="RT" style="top:75%;left: 5%">REGISTRO DE RECOMPENSA</div>
			<div class="grandeR" id="BT" style="top:88%;left: 5%">BAJA DE RECOMPENSA</div>
			<form class="cuadro3" action="insertar_recompensa.php" method="POST" style="top: 80%; left:5%">
				<input type="text" name="promocion" placeholder="NOMBRE" style="height: 50px;  width: 300px; text-align: center;">
				<input type="text" name="descripcion" placeholder="DESCRIPCION" style="height: 50px; width: 350px; text-align: center;">
				<input type="text" name="valor" placeholder="PRECIO" style="height: 50px; text-align: center;">
				<input type="text" name="numero_promocion" placeholder="CANTIDAD" style="height: 50px; text-align: center; width: 300px;">
				<input type="submit" name="enviar_notificacionR" value="ENVIAR NOTIFICACION" style="height: 60px; width: 200px; text-align: center; background-color: #1ecbd9; border: 2px; border-radius: 10px; margin:20px; ">
			</form>
			<form class="cuadro1" action="eliminar_recompensa.php" method="POST" style="top:94%;left: 5%">
				<input type="text" name="codigo_de_promocion" placeholder="ID RECOMPENSA" style="height: 50px; width: 360px; text-align: center;">
				<input type="submit" name="baja_barrasR" value="BAJA" style="height: 60px; text-align: center; width: 200px; background-color:#1ecbd9; border:2px ; border-radius:10px; margin-left: 122px;">
			</form>
			<div class="rectangulo" style="width: 100%;	height: 500px;"></div>
			
		</div>
		
	</body> 
</html> 