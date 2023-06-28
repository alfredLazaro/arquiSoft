<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Foro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="logout-button">
            <a href="logout.php" class="btn btn-primary">
                <-- Logout</a>
        </div>
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 offset-md-3">
                <div class="card bg-primary text-white">
                    <div class="card-header">
                        <span class="custom-header">Usuario: Estudiante</span>
                    </div>
                    <div class="card-body bg-light text-dark">
                        <?php
                        session_start();
                        if (isset($_SESSION['nombreUsuario'])) {
                            echo "<p><strong>Nombre: </strong>" . $_SESSION['nombreUsuario'] . "</p>";
                            echo "<p><strong>Codigo SIS: </strong>" . $_SESSION['codigo_sis'] . "</p>";
                        } else {
                            echo "<p>Inicia session.</p>";
                        }
                        ?>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <button type="button" class="btn btn-success" data-toggle="modal"
                        data-target="#agregarNuevoModal">Agregar Contenido</button>
                </div>
            </div>
            <div class="mt-2">
                <span id="count" class="ml-2 count-style"></span>
            </div>
        </div>
    </div>

    <div class="row mt-5 contenido-dinamico">
        <!-- Contenido dinamico -->
    </div>

    <!-- modal para agregar nuevo contenido. -->
    <div class="modal fade" id="agregarNuevoModal" tabindex="-1" role="dialog" aria-labelledby="addNewLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNewLabel">Agregar Contenido Nuevo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="agregarFormContenido">
                        <div class="form-group">
                            <label for="texto_contenido">Contenido Para Publicar</label>
                            <input type="text" class="form-control" id="texto_contenido" name="texto_contenido"
                                required>
                        </div>
                        <button type="submit" class="btn btn-primary">Publicar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- modal para modificar contenido -->
    <div class="modal fade" id="modificarModal" tabindex="-1" role="dialog" aria-labelledby="modifyLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modifyLabel">Modificar Contenido</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="modificarFormContenido">
                        <div class="form-group">
                            <label for="modificar_texto">Modificar Contenido</label>
                            <input type="text" class="form-control" id="modificar_texto" name="modificar_texto"
                                required>
                        </div>
                        <button type="submit" class="btn btn-primary">Modificar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="vista_estudiante.js"></script>

    <link rel="stylesheet" type="text/css" href="../vista/vista_estudiante.css">

</body>

</html>