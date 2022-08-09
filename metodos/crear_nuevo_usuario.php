<?php 

require 'Conexion.php';

date_default_timezone_set('America/Bogota');

$response = "";

$time1 = date('H:i:s', time());

$fecha = Date("Y-m-d");

$id_vehicle = 0;

$categoria = $_POST['categoria'];
$matricula = $_POST['matricula'];
$nombre = $_POST['nombre'];
$cedula = $_POST['cedula'];
$celular = $_POST['celular'];

$conteo = 0; //Variable para verificar la existencia de la matricula

$query_vehicles = "INSERT INTO vehiculos(placa,Nombre,cedula,celular,id_categoria) VALUES ('$matricula','$nombre',$cedula,'$celular',$categoria)"; /*Query de registro de vehiculo*/

$query_verify_exist = "SELECT COUNT(placa) AS conteo FROM vehiculos WHERE placa = '$matricula'"; //Query para verificacion de existencia de la matricula

if (!empty($con)) {

    $exe_query_verify = mysqli_query($con,$query_verify_exist);

    while($row = mysqli_fetch_array($exe_query_verify)){
        $conteo = $row['conteo'];
    }

    if ($conteo < 1){
        $exe_query = mysqli_query($con,$query_vehicles);

        if ($exe_query){

            $query_search_id = "SELECT id FROM vehiculos WHERE placa = '$matricula'"; /*Query para obtener id del vehiculo registrado*/

            $exe_query2 = mysqli_query($con,$query_search_id);

            while($row2 = mysqli_fetch_array($exe_query2)) {
                $id_vehicle = $row2['id'];
            }

            $query_service = "INSERT INTO servicio(id_vehiculo,hora_ingreso,fecha_ingreso,activo) VALUES ($id_vehicle,'$time1','$fecha',1)"; /*Query de registro para servicio*/

            $exe_query3 = mysqli_query($con,$query_service);

            if ($exe_query3){ //Respuestas
                $response = "<script>alert('Registro completado con exito'); </script>";
                $response = $response."<script> window.location.href = 'index.php'; </script>";
            }else{
                $response = "<script>alert('Error al registrar intente nuevemente'); </script>";
                $response = $response."<script> window.location.href = 'registro.php'; </script>";
            }
        }
    }else{
        $response = "<script>alert('Matricula existente, intente nuevemente'); </script>";
        $response = $response."<script> window.location.href = 'registro.php'; </script>";
    }
}

?>

<div>
    <?php echo $response; ?>
</div>
