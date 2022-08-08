<?php

require 'Conexion.php';

$query_search_table = "SELECT vh.placa,vh.nombre,sc.hora_ingreso,sc.activo FROM servicio sc INNER JOIN vehiculos vh ON sc.id_vehiculo = vh.id WHERE sc.activo = 1";

if (!empty($con)){
    $exe_query = mysqli_query($con,$query_search_table);
}

?>

<div>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Placa</th>
            <th scope="col">Nombre</th>
            <th scope="col">Hora de Entrada</th>
            <th scope="col">Activo</th>
            <th scope="col">Finalizar</th>
        </tr>
        </thead>
        <tbody>
            <?php
                $contador = 0;
                while ($row = mysqli_fetch_array($exe_query)){
                    $contador ++;
            ?>
                <tr>
                    <input type="text" style="visibility: hidden" id="placa<?php echo $contador; ?>" class="v_placa" name="v_placa" value="<?php echo $row['placa']; ?>">
                    <td>
                        <?php echo $row['placa']; ?>
                    </td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['hora_ingreso']; ?></td>
                    <td><?php
                        if ($row['activo'] == 1){
                            echo "Activo";
                        }
                        ?>
                    </td>
                    <td>
                        <button type="button"  id="" onclick="finalizar_tiempo(<?php echo $contador; ?>)"  class="btn btn-warning">Finalizar Tiempo</button>
                    </td>
                </tr>
            <?php } ?>

        <tbody>
    <table>
</div>
