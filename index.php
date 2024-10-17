<?php
$alert = "";
session_start();
if (!empty($_SESSION['activa'])) {
    header('location: cliente/Inicio.php');
    exit;
} else {
    if (!empty($_POST)) {
        // Valida que correo y contraseña no estén vacíos
        if (empty($_POST['correo']) || empty($_POST['contra'])) {
            $alert = '<div class="alert alert-warning d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        <div>
                            Correo y/o contraseña son obligatorios.
                        </div>
                    </div>';
        } else { // Cuando se ingresan datos
            require_once('servidor/conexion.php');
            $usuario = mysqli_real_escape_string($conexion, $_POST['correo']);
            $pass = mysqli_real_escape_string($conexion, $_POST['contra']);
            $query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$usuario' AND contra='$pass'");
            $resultado = mysqli_num_rows($query);

            if ($resultado > 0) {
                $dato = mysqli_fetch_array($query);
                // Creamos variables de tipo sesión para tener los datos disponibles
                $_SESSION['activa'] = true;
                $_SESSION['nombre'] = $dato['nomusu'];
                $_SESSION['paterno'] = $dato['apausu'];
                $_SESSION['materno'] = $dato['amausu'];
                $_SESSION['rol'] = $dato['idtipo'];
                mysqli_close($conexion);
                header('location: cliente/Inicio.php');
                exit;
            } else {
                $alert = '<div class="alert alert-danger d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                            <div>
                                Usuario y/o contraseña incorrecta.
                            </div>
                          </div>';
                session_destroy();
            }
        }
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto de kevin y luis tilinos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <style>
    body{
      background-color:black;
    }
  </style>
  <div class="container" style="padding-top: 170px;" > 
    <div class="row" style="background-color: #98a9fb;">
      <div class="col" style="background-color: black;">
        <img src="cliente/recursos/logoDark.jpg" height="70px"  style=" margin-top: 150px;">
      </div>

      <div class="col" style="background-color:white;">
        <h1 style="color:black;">Login kevin</h1>
      <div>

      <form style="padding: 30px;" method="POST">
        <div>
          <?php echo isset($alert) ? $alert : ""; ?>
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label" style="color:black">Correo Electronico</label>
          <input type="email" class="form-control" id="correo" name="correo" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">No se compartirá tu correo electrónico</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"style="color:black">Contraseña</label>
            <input type="password" class="form-control" id="contra" name="contra">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" >
            <label class="form-check-label" for="exampleCheck1" style="color:#6f6f6f">Recordar usuario</label>
          </div>
            <button type="submit" class="btn btn-primary" style="background-color:black; border: #black 1px solid; color:white;">Iniciar Sesión</button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>
</body>

</html>