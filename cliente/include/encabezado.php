<?php
session_start();
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid" style="background-color: rgb(182, 189, 189); padding-bottom: 10px; margin-bottom:30px;">
        <div class="row">
            <div class="col">
                <img src="recursos/logo.png" width="110px"/>
            </div>
            <div class="col">
              <?php if($_SESSION['rol']==1) {?>

                <div class="btn-group" style="padding-top:38px;">
                    <a href="Inicio.php" class="btn btn-primary " style="background-color: black; border-color:rgb(54,16,28);  ">Inicio</a>
                    <a href="Usuarios.php" class="btn btn-primary " style="background-color: black;   border-color:rgb(54,16,28) ;">Usuarios</a>
                    <a href="productos.php" class="btn btn-primary" style="background-color: black;border-color:rgb(54,16,28) ">Productos</a>
                    <a href="categorias.php" class="btn btn-primary" style="background-color: black; border-color:rgb(54,16,28) ">Gategorias</a>
                    <a href="promociones.php" class="btn btn-primary" style="background-color: black;  border-color:rgb(54,16,28) ">Promociones</a>
                    <a href="reportes.php" class="btn btn-primary" style="background-color: black;  border-color:rgb(54,16,28) ">Reportes</a>
                    <a href="salir.php" class="btn btn-primary" style="background-color: black; border-color:rgb(54,16,28) ">Salir</a>
                </div>
              <?php
                }
              ?>
              <?php if($_SESSION['rol']==4) {?>
                <div class="btn-group" style="padding-top:38px;">
                    <a href="Inicio.php" class="btn btn-primary " style="background-color: black; border-color:rgb(54,16,28);  ">Inicio</a>
                    <a href="productos.php" class="btn btn-primary" style="background-color: black;border-color:rgb(54,16,28) ">Productos</a>
                    <a href="promociones.php" class="btn btn-primary" style="background-color: black;  border-color:rgb(54,16,28) ">Promociones</a>
                    <a href="reportes.php" class="btn btn-primary" style="background-color: black;  border-color:rgb(54,16,28) ">Reportes</a>
                    <a href="salir.php" class="btn btn-primary" style="background-color: black; border-color:rgb(54,16,28) ">Salir</a>
                </div>
              <?php
                }
              ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>