<?php

include 'conexion_sql_server.php';

$id = $_POST['user'];
$pass = $_POST['password'];

$sql = "INSERT INTO administradores (usuario,contraseña) VALUES ('".$id."', '".$pass."')";

if($id =="" or $pass==""){
    echo "<script>
                alert('Error, algun campo esta vacio');
                window.location= 'usuarios.php'
    </script>";
}
else{
    $result = sqlsrv_query($conn_sis,$sql);
    if($result){
    echo "<script>
                 alert('Has registrado un nuevo usuario');
                window.location= 'usuarios.php'
    </script>";

    }
}
