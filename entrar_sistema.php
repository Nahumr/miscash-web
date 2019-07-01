<?php

include 'conexion_sql_server.php';

$id = $_REQUEST['user'];
$pass = $_REQUEST['contra'];

$sql = "SELECT * FROM administradores WHERE  usuario = '$id' AND contraseña = '$pass' ";
$resultado = sqlsrv_query($conn_sis, $sql, array(), array( "Scrollable" => 'static' ));
$row_count = sqlsrv_num_rows($resultado);

if($id =="" or $pass==""){
	echo "<script>
                alert('Error, algun campo esta vacio');
                window.location= 'log.php'
    </script>";
}
else{
	if($row_count >= 1){
        echo "<script> 
                alert('Bienvenido Administrador');
                window.location= 'iniciar.php'
                </script>";
    }
    else{
        echo "<script>
                alert('Error en el usuario y contraseña');
                window.location= 'log.php'
            </script>";
    }
}

