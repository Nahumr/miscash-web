<?php

include 'conexion_sql_server.php';
$id= $_GET['id'];
$sql = "SELECT nombre, admin_tienda FROM TIENDA WHERE id_tienda= '$id' ";
$resultado = sqlsrv_query($conn_sis, $sql, array(), array( "Scrollable" => 'static' ));

while( $row = sqlsrv_fetch_array( $resultado, SQLSRV_FETCH_ASSOC) ) {
      $json[] = array_map('utf8_encode',$row );
}

echo json_encode($json);
