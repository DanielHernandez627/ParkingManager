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
                        <div class="lista-categorias">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Buscar</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option selected>Matricula</option>
                                    <option value="1">Fecha</option>
                                    <option value="2">Cedula</option>
                                </select>
                            </div>
                        </div>
                        <span>&nbsp;&nbsp;&nbsp;</span>
                        <div>
                            <input name="matricula" type="text" id="" class="form-control" placeholder="XDL627" aria-label="XDL627" aria-describedby="basic-addon1">
                        </div>
                        <span>&nbsp;&nbsp;&nbsp;</span>
                        <div>
                            <button type="button" class="btn btn-info">Buscar</button>
                        </div>
                        <span>&nbsp;&nbsp;&nbsp;</span>
                        <div>
                            Motos Disponibles: <span id="TMotos">10/0</span>
                        </div>
                        <span>&nbsp;&nbsp;&nbsp;</span>
                        <div>
                            Carros Disponibles: <span>10/0</span>
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
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Placa</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Hora de Entrada</th>
                            <th scope="col">Activo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td>@mdo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </center>
        </div>
    </div>
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