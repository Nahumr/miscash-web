<?php

include 'conexion_sql_server.php';
$sql = "SELECT nombre, precio_v, precio_c, cantidad FROM PRODUCTOS";
$resultado = sqlsrv_query($conn_sis, $sql, array(), array( "Scrollable" => 'static' ));

while( $row = sqlsrv_fetch_array( $resultado, SQLSRV_FETCH_ASSOC) ) {
      $json[] = array_map('utf8_encode',$row );
}


echo json_encode($json);
