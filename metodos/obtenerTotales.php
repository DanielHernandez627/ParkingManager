<?php

require 'Conexion.php';

date_default_timezone_set('America/Bogota');

$response = "";
$minutos_transcurridos = 0;
$mensaje = "";
$categoria = 0;
$total = 0;

$time1 = date('H:i:s', time());

$placa = $_POST['placa_finalizar'];

//Query para obtener minutos transcurridos desde el registro y el id de la categoria
$query_time = "SELECT DATE_FORMAT(TIMEDIFF(sc.hora_ingreso, '$time1'),'%i') * -1 AS minutos, vh.id_categoria FROM servicio sc INNER JOIN vehiculos vh ON sc.id_vehiculo = vh.id WHERE placa = '$placa' AND activo = 1";

if (!empty($con)){
    $exe_query = mysqli_query($con,$query_time);

    while ($row = mysqli_fetch_array($exe_query)){
        $minutos_transcurridos = $row['minutos'];
        $categoria = $row['id_categoria'];
    }

    //Totalizador
    if ($categoria == 1){
        $total = $minutos_transcurridos * 86;
    }elseif ($categoria == 2){
        $total = $minutos_transcurridos * 97;
    }

    //Query para inactivar servicio
    $query_end = "UPDATE servicio sc INNER JOIN vehiculos vh ON sc.id_vehiculo = vh.id SET Activo = 0,sc.valor_total  = $total WHERE vh.placa = '$placa'";

    //Ejecucion de actualizacion
    $exe_query_update = mysqli_query($con,$query_end);

    if ($exe_query_update){


    //Mensajes de respuesta
        $mensaje = "La cantidad de minutos transcurridos para la matricula ".$placa." es ".$minutos_transcurridos. " y el total a cancelar es de $" . $total;

        $response = "<script>alert('". $mensaje ."'); </script>";
        $response = $response."<script> window.location.href = 'index.php'; </script>";
    }
}
?>

<div>
    <?php echo $response; ?>
</div>
