<?php

include 'conexion_sql_server.php';

$id = $_GET['id_ticket'];
$Y = 'y';

$sql = "UPDATE TICKET SET statusT = '$Y' WHERE id_ticket = '$id' ";

$resultado = sqlsrv_query($conn_sis, $sql, array(), array( "Scrollable" => 'static' ));