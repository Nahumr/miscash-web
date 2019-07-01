<?php ?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title>Usuarios</title> 
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
			<div class="grande" style="top: 65%; left: 35%">ADMINISTRADOR <br> DE USUARIOS</div>
			<div class="grandeR" id="RT" style="top:75%;left: 5%">REGISTRO DE USUARIO</div>
			<div class="grandeR" id="BT" style="top:88%;left: 5%">BAJA DE USUARIO</div>
			<form class="cuadro3" action="insertar_usuarios.php" method="POST" style="top: 80%; left:5%">
				<input type="text" name="user" placeholder="USER" style="height: 50px;  width: 300px; text-align: center;">
				<input type="text" name="password" placeholder="PASSWORD" style="height: 50px;width: 300px; text-align: center;">
				<input type="submit" name="registrar" value="REGISTRAR USUARIO" style="height: 60px; width: 200px; text-align: center; background-color: #1ecbd9; border: 2px; border-radius: 10px; margin:20px; ">
			</form>
			<form class="cuadro1" action="eliminar_usuario.php" method="POST" style="top:94%;left: 5%">
				<input type="text" name="username" placeholder="USER" style="height: 50px; width: 360px; text-align: center;">
				<input type="submit" name="baja" value="BORRAR" style="height: 60px; text-align: center; width: 200px; background-color:#1ecbd9; border:2px ; border-radius:10px; margin-left: 122px;">
			</form>
			<div class="rectangulo" style="width: 100%;	height: 500px;"></div>
			
		</div>
		
	</body> 
</html> 