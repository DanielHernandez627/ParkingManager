<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script src="js/jquery-3.3.1.js"></script>
	<script src="js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<script type="text/javascript">
    function search_init_table(){
        const url = "metodos/obtenerTabla.php";
        const url2 = "metodos/obtenerCupos.php";

        $.ajax({
            type: "POST",
            url: url,
            data: $("1").serialize(),
            success: function(data)
            {
                $('#table-response').html(data);
            }
        });

        $.ajax({
            type: "POST",
            url: url2,
            data: $("1").serialize(),
            success: function(data)
            {
                $('#cupos').html(data);
            }
        });
    }

    function finalizar_tiempo(oID) {
        const a1 = $("#placa" + oID).val();
        const url3 = "metodos/obtenerTotales.php";

        $('#placaF').val(a1);
        $.ajax({
            type: "POST",
            url: url3,
            data: $("#placa-finalizar").serialize(),
            success: function(data)
            {
                $('#response').html(data);
            }
        });
    }

</script>
<body onload="search_init_table()">
    <div class="principal">
        <div class="barra">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="index.php">PARKING MANAGER</a>
                <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#contenidoMenu"
                >
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="contenidoMenu">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" style="text-align: right;" href="index.php" >Inicio</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" style="text-align: right;" href="registro.php" >Registro</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <br>
        <br>
        <div class="menu">
            <center>
                <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                    <div class="input-group">
                        <div>
                            <a href="registro.php"><button type="button" class="btn btn-secondary">Nuevo</button></a>
                        </div>
                        <span>&nbsp;&nbsp;&nbsp;</span>
                        <div id="cupos">

                        </div>
                    </div>
                </div>
            </center>
        </div>
        <br>
        <br>
        <div class="tabla">
            <center>
                <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                    <div id="table-response">

                    </div>
                </div>
            </center>
        </div>
        <div id="response">

        </div>
        <div class="data-finalizar">
            <form method="post" id="placa-finalizar">
                <input style="display: none;" name="placa_finalizar" type="text" id="placaF">
            </form>
        </div>
    </div>
    <br>
    <footer class="footer">
        <?php require 'footer.php';  ?>
    </footer>
    <script type="js/bootstrap.min.js"></script>
    <script type="js/jquery-3.3.1.slim.min.js"></script>
    <script type="js/popper.min.js"></script>
</body>
</html>