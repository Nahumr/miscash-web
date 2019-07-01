<?php

include 'conexion_sql_server.php';

$id = $_GET['id'];
$pass = $_GET['contraseña'];

$sql = "SELECT * FROM TIENDA WHERE id_tienda = '$id' ";

if($id =="" or $pass==""){
    $named_array = array(
    "json" => array(
        array(
            "mensaje" => "Algun campo esta vacio"
        			)
    		)
		);
    sqlsrv_close($conn_sis);
}
else{
    $resultado = sqlsrv_query($conn_sis, $sql, array(), array( "Scrollable" => 'static' ));
    $row_count = sqlsrv_num_rows($resultado);
    if($row_count >= 1){
        $query = "UPDATE TIENDA SET contraseña = '$pass' WHERE id_tienda = '$id' ";
        $result = sqlsrv_query($conn_sis, $query, array(), array( "Scrollable" => 'static' ));
        $named_array = array(
    	"json" => array(
        	array(
            	"mensaje" => "Bienvenido"
        					)
    				)
			);
    	sqlsrv_close($conn_sis);

    }
    else{
        $named_array = array(
    	"json" => array(
        	array(
            	"mensaje" => "Error, no existe el id"
        				)
    				)
			);
    	sqlsrv_close($conn_sis);
    }
    
}

echo json_encode($named_array);



