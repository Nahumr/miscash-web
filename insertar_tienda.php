<?php
    
    $name = $_POST['nombre'];
    $lat = $_POST['latitud_x'];
    $long= $_POST['latitud_y'];
    $admi = $_POST['admin_tienda'];
    $pass = "NULL";
    $cal = 0.0;
    $tel = $_POST['telefono'];

    $lati = floatval($lat);
    $longi = floatval($long);

$res = random($name,$lati,$longi,$admi,$pass,$cal,$tel);

function random($name,$lat,$long,$admi,$pass,$cal,$tel){
    include 'conexion_sql_server.php';

    $r = rand(100000000,999999999);
    $query = "SELECT * FROM TIENDA WHERE id_tienda = '$r'";
    $resultado = sqlsrv_query($conn_sis, $query, array(), array( "Scrollable" => 'static' ));
    $row_count = sqlsrv_num_rows($resultado);

    if($row_count >= 1)
        random($name,$lat,$long,$admi,$pass,$cal,$tel);
    else{
        if($name =="" or $admi==""){
            echo "<script>
                alert('Error, algun campo esta vacio');
                window.location= 'tienda.php'
            </script>";
        }
        else{
            $sql = "INSERT INTO TIENDA (id_tienda, nombre, latitud_x, latitud_y, admin_tienda, contraseña, calif, telefono) VALUES ('".$r."','".$name."', '".$lat."', '".$long."', '".$admi."', '".$pass."', '".$cal."', '".$tel."')";
            $result = sqlsrv_query($conn_sis,$sql);
                echo "<script> 
                        alert('El ID de tu tienda es: $r');
                        window.location= 'tienda.php'
                    </script>";
        }
    }
}
