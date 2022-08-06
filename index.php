<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
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
                            <button type="button" class="btn btn-secondary">Nuevo</button>
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
                            <input type="text" id="" class="form-control" placeholder="XDL627" aria-label="XDL627" aria-describedby="basic-addon1">
                        </div>
                        <span>&nbsp;&nbsp;&nbsp;</span>
                        <div>
                            <button type="button" class="btn btn-info">Buscar</button>
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
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
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
</body>
</html>