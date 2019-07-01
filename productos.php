<?php ?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title>Productos</title> 
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
			<div class="grande" style="top: 65%; left: 35%">ADMINISTRADOR <br> DE PRODUCTO</div>
			<div class="grandeR" id="RT" style="top:75%;left: 5%">REGISTRO DE PRODUCTO</div>
			<div class="grandeR" id="BT" style="top:88%;left: 5%">BAJA DE PRODUCTO</div>
			<form class="cuadro3" action="insertar_productos.php" method="POST" style="top: 80%; left:5%">
				<input type="text" name="nombre_producto" placeholder="NOMBRE DEL PRODUCTO" style="height: 50px;  width: 300px; text-align: center;">
				<input type="text" name="codigo_barras" placeholder="CODIGO DE BARRAS" style="height: 50px;width: 180px; text-align: center;">
				<input type="text" name="venta" placeholder="VENTA" style="height: 50px; text-align: center;width: 150px">
				<input type="text" name="compra" placeholder="COMPRA" style="height: 50px; text-align: center;width: 150px">
				<input type="text" name="numero_mercancia" placeholder="CANTIDAD" style="height: 50px; text-align: center;width: 100px">
				<input type="text" name="vuelto" placeholder="VUELTO" style="height: 50px; text-align: center;width: 100px">
				<input type="submit" name="enviar_notificacion" value="ENVIAR NOTIFICACION" style="height: 60px; width: 200px; text-align: center; background-color: #1ecbd9; border: 2px; border-radius: 10px; margin:20px; ">
			</form>
			<form class="cuadro1" action="eliminar_producto.php" method="POST" style="top:94%;left: 5%">
				<input type="text" name="codigo_de_barras" placeholder="CODIGO DE BARRAS" style="height: 50px; width: 360px; text-align: center;">
				<input type="submit" name="baja_barras" value="BAJA" style="height: 60px; text-align: center; width: 200px; background-color:#1ecbd9; border:2px ; border-radius:10px; margin-left: 122px;">
			</form>
			<div class="rectangulo" style="width: 100%;	height: 500px;"></div>
			
		</div>
		
	</body> 
</html> 