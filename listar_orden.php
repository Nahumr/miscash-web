<?php

include 'conexion_sql_server.php';

$orden = $_GET['id_ticket'];
$sql = "SELECT codigo_b, cantidad FROM COMPRA WHERE id_ticket = '$orden'";
$resultado = sqlsrv_query($conn_sis, $sql, array(), array( "Scrollable" => 'static' ));
$row_count = sqlsrv_num_rows($resultado);
if($row_count >= 1){
	$col_cod; $col_can; $col_nom; $col_venta; $col_num; $cont = 0;
	$a=array(array());
	while( $row = sqlsrv_fetch_array( $resultado, SQLSRV_FETCH_ASSOC) ) {
    	$col_cod= $row['codigo_b'];
      	$col_can= $row['cantidad'];

	    $sql2= "SELECT nombre, precio_v, cantidad FROM PRODUCTOS WHERE codigo_b = '$col_cod'";
	  	$resultado2 = sqlsrv_query($conn_sis, $sql2, array(), array( "Scrollable" => 'static' ));      
	  	while( $row2 = sqlsrv_fetch_array( $resultado2, SQLSRV_FETCH_ASSOC) ) {
	  		$col_nom= $row2['nombre'];
      		$col_venta= $row2['precio_v'];
      		$col_num= $row2['cantidad'];
	  	}
	  	$a[$cont]["cantidad"]="".$col_can;	
	  	$a[$cont]["nombre"]=$col_nom;	
	  	$a[$cont]["venta"]=$col_venta;	
	  	$a[$cont]["numero"]=$col_num;	
	  	$a[$cont]["mensaje"]="Existe";	
	  	$cont++;
	  	
	}	
	sqlsrv_close($conn_sis);
}
else{
	$a=array(array());
	$a[0]["mensaje"]="Ninguno";
	sqlsrv_close($conn_sis);
}



	
echo json_encode($a);
