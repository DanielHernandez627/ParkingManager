<?php

require 'Conexion.php';

$query1 = "SELECT COUNT(vh.id) AS totalv FROM servicio sc INNER JOIN vehiculos vh ON sc.id_vehiculo = vh.id WHERE vh.id_categoria = '1' AND sc.activo = '1'";

$query2 = "SELECT COUNT(vh.id) AS totalm FROM servicio sc INNER JOIN vehiculos vh ON sc.id_vehiculo = vh.id WHERE vh.id_categoria = '2' AND sc.activo = '1'";

$motos = "";
$vehiculos="";

if (!empty($con)){
    $exe_query1 = mysqli_query($con,$query1);
    $exe_query2 = mysqli_query($con,$query2);
}

while ($row = mysqli_fetch_array($exe_query1)){
    $vehiculos = $row['totalv'];
}

while ($row = mysqli_fetch_array($exe_query2)){
    $motos = $row['totalm'];
}

?>

<div>
    Motos Disponibles: <b><span id="TMotos"><?php echo $motos; ?>/10</span></b>
    &nbsp;&nbsp;&nbsp;
    Carros Disponibles: <b><span id="TVehiculos"><?php echo $vehiculos; ?>/20</span></b>
</div>
