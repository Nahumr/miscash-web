<?php ?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title>Log In</title> 
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="estilos.css">
	</head> 
	<body> 
		
		<section class="recta"> 
			<header class="form-title"> Log In</header>
				<form action="entrar_sistema.php" method="POST">
					<input type="text" class="input" name="user" placeholder="Usuario" />
					<input type="password" class="input" name="contra" placeholder="Password" />
					<input type="submit" class="submit-btn" value="Log In"> </input>
				</form>
		</section>
		<img src="bg.png" class="fondo">
	</body> 
</html> 