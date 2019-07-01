<?php

include 'conexion_sql_server.php';

$id = $_POST['codigo_de_promocion'];

$sql = "DELETE FROM recompensas WHERE id_recompensa = '$id' ";
$exist = "SELECT * FROM recompensas WHERE id_recompensa = '$id'";
$resultado = sqlsrv_query($conn_sis, $exist, array(), array( "Scrollable" => 'static' ));
$row_count = sqlsrv_num_rows($resultado);

	if($row_count >= 1){
		$borrar = sqlsrv_query($conn_sis, $sql, array(), array( "Scrollable" => 'static' ));
		echo "<script> 
				alert('Has eliminado una recompensa');
				window.location= 'recompensas.php'
				</script>";
    }
    else{
    	echo "<script>
    			alert('No Existe ese ID');
    			window.location= 'recompensas.php'
    		</script>";
    }