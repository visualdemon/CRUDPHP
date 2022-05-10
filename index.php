<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="css/estilos.css">

    <title>DIGITAL ID CARD</title>
</head>

<body>
    <div class="container fondo">
        <h1 class="text-center">DIGITAL ID CARD</h1>

        <div class="row">
            <div class="col-2 offset-10">
                <div class="text-center">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modalUsuario" id="botonCrear">
                        <i class="bi bi-plus-circle-fill"></i> Crear
                    </button>
                </div>
            </div>
        </div>
        </br>
        </br>

        <div class="table-responsive">
            <table id="datos-usuario" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombres</th>
                        <th>Dependencia</th>
                        <th>Cédula</th>
                        <th>Rh</th>
                        <th>Fecha de creación</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                </thead>
            </table>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Crear Usuario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" method="POST" id="formulario" enctype="multipart/form-data">
                        <div class="modal-content">
                            <div class="modal-body">
                                <label for="nombre">Nombres</label>
                                <input type="text" name="nombre" id="nombre" class="form-control">
                                <br />
                                <label for="dependencia">Dependencia</label>
                                <input type="text" name="dependencia" id="dependencia" class="form-control">
                                <br />
                                <label for="cedula">Cedula</label>
                                <input type="number" name="cedula" id="cedula" class="form-control">
                                <br />
                                <label for="rh">Rh</label>
                                <input type="text" name="rh" id="rh" class="form-control">
                                <br />
                                <label for="imagen">Ingrese imagen</label>
                                <input type="file" name="imagen_usuario" id="imagen_usuario" class="form-control">
                                <br />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="id_usuario" id="id_usuario">
                            <input type="hidden" name="operacion" id="operacion">
                            <input type="submit" name="action" id="action" class="btn btn-success" value="Crear">
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

</body>

</html>