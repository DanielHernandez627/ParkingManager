<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/registro.css">
    <script src="js/jquery-3.3.1.js"></script>
	<script src="js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<script type="text/javascript">
    $(document).on('ready', function(){
        const botonEnviar = document.getElementById('idEnviar');
        botonEnviar.disabled = true;
        $("#matricula").keyup(function(){
            if ($("#matricula").val().length <= 6) {
                $.ajax({
                    type: "POST",
                    data: $("#loginWrite").serialize(),
                    success: function(data){
                        $('#confirmacion').val("Correcto");
                    }
                });
                botonEnviar.disabled = false;
            }else{
                $.ajax({
                    type: "POST",
                    success: function(data){
                        $('#confirmacion').val("La matricula no puede contener mas de 6 caracteres");
                    }
                });
                botonEnviar.disabled = true;
            }
        });
    });

    $(document).on('ready',function(){
            $('#idEnviar').click(function(){
                var url = "metodos/crear_nuevo_usuario.php";
                $.ajax({                        
                    type: "POST",                 
                    url: url,                     
                    data: $("#generador").serialize(), 
                    success: function(data)             
                    {
                        $('#resp').html(data);               
                    }
                });
            });
        });
</script>
<body>
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
                    </ul>
                </div>
            </nav>
        </div>
        <br>
        <br>
        <center>
            <div class="registro">
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <form method="POST" id="generador">
                        <div class="mb-3">
                            <b><label for="" class="form-label">Matricula</label></b>
                            <br>
                            <input type="text" class="form-control" placeholder="XDL627" aria-label="XDL627" id="matricula" name="matricula" required="required">
                        </div>
                        <div class="mb-3">
                            <b><label for="" class="form-label">Categoria</label></b>
                            <br>
                            <select name="categoria" class="custom-select" id="inputGroupSelect01">
                                        <option value="1" selected>Automovil</option>
                                        <option value="2">Motocicleta</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <b><label for="" class="form-label">Nombre</label></b>
                            <br>
                            <input type="text" class="form-control" id="nombre" name="nombre" required="required">
                        </div>
                        <div class="mb-3">
                            <b><label for="" class="form-label">Cedula</label></b>
                            <br>
                            <input type="text" class="form-control" id="cedula" name="cedula" required="required">
                        </div>
                        <div class="mb-3">
                            <b><label for="" class="form-label">Celular</label></b>
                            <br>
                            <input type="text" class="form-control" id="celular" name="celular" required="required">
                            <input id="confirmacion" type="" readonly name="validador">
                        </div>
                        <input type="button" name="enviar" id="idEnviar" style="background-color: #8064A2;border-color: #8064A2;" class="btn btn-primary" value="Guardar">
                    </form>
                    <div id="resp"></div>
                </div>
            </div>
        </center>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer>
    <?php require 'footer.php';  ?>
    </footer>
    <script type="js/bootstrap.min.js"></script>
    <script type="js/jquery-3.3.1.slim.min.js"></script>
    <script type="js/popper.min.js"></script>
</body>
</html>