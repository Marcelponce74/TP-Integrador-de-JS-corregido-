<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conf Bs As</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="img/codoacodo.png" type="image/x-icon">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg sticky-top bg-body-tertiary bg-dark" data-bs-theme="dark">
            <div class="container-fluid header">
                <a class="navbar-brand" href="#">
                    <img src="img/codoacodo.png" alt="Logo" height="75" class="d-inline-block">
                    <h2 class="d-inline-block">Conf Bs As</h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item px-2">
                            <a class="nav-link" aria-current="page" href="index.html#conferencia">La conferencia</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link" href="index.html#oradores">Los oradores</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link" href="index.html#lugar">El lugar y la fecha</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link" href="index.html#orador">Conviértete en orador</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link active text-success" href="#">Comprar tickets</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container col-lg-4 text-center my-3">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Ticket</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Maria</td>
                        <td>Ortiz</td>
                        <td>mariaortiz@mail.com</td>
                        <td>2</td>
                        <td>General</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacobo</td>
                        <td>Thornton</td>
                        <td>jthornton@mail.com</td>
                        <td>3</td>
                        <td>Estudiante</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Laura</td>
                        <td>Benavides</td>
                        <td>lauraben@mail.com</td>
                        <td>1</td>
                        <td>Junior</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <footer class="position-absolute bottom-0 w-100 sticky-bottom bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="nav justify-content-center">
                        <div class="row text-center">
                            <div class="col">
                                <a class="nav-link text-white" href="#">Preguntas frecuentes</a>
                            </div>
                            <div class="col">
                                <a class="nav-link text-white" href="#">Contáctanos</a>
                            </div>
                            <div class="col">
                                <a class="nav-link text-white" href="#">Prensa</a>
                            </div>
                            <div class="col">
                                <a class="nav-link text-white" href="#">Conferencias</a>
                            </div>
                            <div class="col">
                                <a class="nav-link text-white" href="#">Términos y condiciones</a>
                            </div>
                            <div class="col">
                                <a class="nav-link text-white" href="#">Privacidad</a>
                            </div>
                            <div class="col">
                                <a class="nav-link text-white" href="#">Estudiantes</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
    <script src="scripts.js"></script>
</body>

</html>