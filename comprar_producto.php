<?php 

include 'conexion_sql_server.php';

$num = $_GET['num'];
$nom = $_GET['nom'];
$id = $_GET['id'];

$sql = "SELECT * FROM PRODUCTOS WHERE  nombre = '$nom' ";
$resultado = sqlsrv_query($conn_sis, $sql);

//Guardar todos los datos para la tabla
$nvonom; $nvocod; $nvodis; $nvoven; $nvocom; $nvonum; $nvoimg;
while( $row = sqlsrv_fetch_array( $resultado, SQLSRV_FETCH_ASSOC) ) {
      $nvonom= $row['nombre'];
      $nvocod= $row['codigo_b'];
      $nvoven= $row['precio_v'];
      $nvonum= $row['cantidad'];
}
if($num == 0){
	sqlsrv_close($conn_sis);
}
else{
	$res = $nvonum - $num;
	if($res == 0 or $res > 0){
		$sql2 = "DELETE from PRODUCTOS WHERE  nombre = '$nom'";
	}
	else{
		$sql2 = "UPDATE PRODUCTOS SET cantidad = '$res' WHERE  nombre = '$nom'";	
	}

	$resultado2 = sqlsrv_query($conn_sis, $sql2);
 	
	$exist = "SELECT cantidad FROM DISPONIBILIDAD WHERE codigo_b = '$nvocod' ";

	$resultado4 = sqlsrv_query($conn_sis, $exist, array(), array( "Scrollable" => 'static' ));
    $row_count = sqlsrv_num_rows($resultado4);


	if($row_count >= 1){
		$obj = sqlsrv_fetch_object($resultado4);
		$saldo_nuevo = $obj->cantidad + $num;
		$sql4 = "UPDATE DISPONIBILIDAD SET cantidad = '$saldo_nuevo' WHERE codigo_b = '$nvocod' ";	
		$resultado5 = sqlsrv_query($conn_sis, $sql4);
		
	}
	else{
		$sql3 = "INSERT INTO DISPONIBILIDAD (codigo_b, id_tienda, cantidad) VALUES ('".$nvocod."', '".$id."', '".$num."')";
		$resultado3 = sqlsrv_query($conn_sis, $sql3);			
		
	}
	sqlsrv_close($conn_sis);
}





