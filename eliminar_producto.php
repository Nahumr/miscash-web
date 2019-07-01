<?php

include 'conexion_sql_server.php';

$id = $_POST['codigo_de_barras'];

$sql = "DELETE FROM PRODUCTOS WHERE codigo_b = '$id' ";
$exist = "SELECT * FROM PRODUCTOS WHERE codigo_b = '$id'";
$resultado = sqlsrv_query($conn_sis, $exist, array(), array( "Scrollable" => 'static' ));
$row_count = sqlsrv_num_rows($resultado);

	if($row_count >= 1){
        $borrar = sqlsrv_query($conn_sis, $sql, array(), array( "Scrollable" => 'static' ));
        echo "<script> 
                alert('Has eliminado un producto');
                window.location= 'productos.php'
                </script>";
    }
    else{
        echo "<script>
                alert('No Existe ese Codigo');
                window.location= 'productos.php'
            </script>";
    }
	




