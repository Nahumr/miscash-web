<?php
$serverName = 'localhost';
$connectionInfo = array("Database"=>"XLR8", "UID"=>"sa", "PWD"=>"Mejia6012", "CharacterSet"=>"UTF-8");
$conn_sis = sqlsrv_connect($serverName,$connectionInfo);

if(!$conn_sis){
	echo "Fallo la conexion a la base de datos";
	die(print_r(sqlsrv_errors(),true));
}
	

