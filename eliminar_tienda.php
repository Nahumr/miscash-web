<?php

include 'conexion_sql_server.php';

$id = $_POST['id_tienda'];

$sql = "DELETE FROM TIENDA WHERE id_tienda = '$id' ";
$exist = "SELECT * FROM TIENDA WHERE id_tienda = '$id' ";
$resultado = sqlsrv_query($conn_sis, $exist, array(), array( "Scrollable" => 'static' ));
$row_count = sqlsrv_num_rows($resultado);

    if($row_count >= 1){
        $borrar = sqlsrv_query($conn_sis, $sql, array(), array( "Scrollable" => 'static' ));
        echo "<script> 
                alert('Has eliminado una tienda');
                window.location= 'tienda.php'
                </script>";
    }
    else{
        echo "<script>
                alert('No Existe ese ID');
                window.location= 'tienda.php'
            </script>";
    }