<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App</title>
    <link rel="icon" type="image/png" href="https://i.blogs.es/82a22b/fbca226b-3a49-4aa4-9351-31dd115780bb/450_1000.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <div class="container my-4">
    </head>
    <body>
            <h1 style="color: green; text-align: center">ARTÍCULOS</h1>

        <div class="row pt-5">
         <div class="col-md-4">
        </div>
            <div class="col-md-4">
            <?php
            if(isset($_SESSION['message'])){ ?>
                <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php session_destroy(); } ?>
                    <form method="POST" action="login.php">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Usuario</label>
                              <input type="text" class="form-control" id="usuario"  name="usuario" placeholder="Ingrese us usuario" required>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Contraseña</label>
                              <input type="password" class="form-control" id="clave" name="clave" placeholder="Ingrese su contraseña" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-block" name="login" >Iniciar Sesión</button>
                          </form>
            </div>
            <div class="col-md-4">

                </div>

        </div>
    </div>


    
</body>
</html>