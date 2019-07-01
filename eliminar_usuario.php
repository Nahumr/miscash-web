<?php

include 'conexion_sql_server.php';

$id = $_POST['username'];

$sql = "DELETE FROM administradores WHERE usuario = '$id' ";
if($id ==""){
	echo "<script>
                alert('Error, el campo esta vacio');
                window.location= 'usuarios.php'
    </script>";
}
else{
	$result = sqlsrv_query($conn_sis,$sql);
	if(!$result){
	echo "<script>
                alert('No se pudo borrar al usuario');
                window.location= 'usuarios.php'
    </script>";

	}
	else{
		echo "<script>
                alert('Eliminaste un usuario');
                window.location= 'usuarios.php'
    </script>";
	}
}


