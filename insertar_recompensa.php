<?php

include 'conexion_sql_server.php';

$name = $_POST['promocion'];
$desc = $_POST['descripcion'];
$val= $_POST['valor'];
$num = $_POST['numero_promocion'];

$sql = "INSERT INTO recompensas (nombre,descripcion,precio,cantidad) VALUES ('".$name."', '".$desc."', '".$val."', '".$num."')";

if($name =="" or $desc=="" or $val=="" or $num==""){
	echo "<script>
                alert('Error, algun campo esta vacio');
                window.location= 'recompensas.php'
    </script>";
}
else{
	$result = sqlsrv_query($conn_sis,$sql);
	if($result){
	echo "<script>
                 alert('Has registrado una nueva recompensa');
                window.location= 'recompensas.php'
    </script>";

	}
}