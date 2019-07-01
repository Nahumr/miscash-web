<?php

include 'conexion_sql_server.php';

$name = $_POST['nombre_producto'];
$cod = $_POST['codigo_barras'];
$ven = $_POST['venta'];
$com= $_POST['compra'];
$num= $_POST['numero_mercancia'];
$vuelto= $_POST['vuelto'];

$sql = "INSERT INTO PRODUCTOS (nombre, codigo_b, precio_v, precio_c, cantidad, vuelto) VALUES ('".$name."', '".$cod."', '".$ven."','".$com."','".$num."','".$vuelto."')";

if($name =="" or $cod=="" or $ven=="" or $com=="" or $num==""){
	echo "<script>
                alert('Error, algun campo esta vacio');
                window.location= 'productos.php'
    </script>";
}
else{
	$result = sqlsrv_query($conn_sis,$sql);
	if($result){
	echo "<script>
                alert('Has registrado un nuevo producto');
                window.location= 'productos.php'
    </script>";

	}
}