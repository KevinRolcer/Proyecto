<?php

include "conexion.php";



if (!empty($_POST)) {


    if (empty($_POST['nombre']) ) {
        $alert = '<p class="error">Todos los campos son requeridos</p>'; 
    } else {
        $idcat = $_GET['id'];

        
        $nombrec = $_POST['nombre'];
      

        // Ejecutar la consulta de actualización
        $sql_update = mysqli_query($conexion, "UPDATE categorias  SET  categoria = '$nombrec' WHERE idcat = $idcat");

        $alert = '<p>Usuario Actualizado</p>';
        header("Location: ../cliente/categorias.php");
        exit();
    }
}

// Mostrar Datos

if (empty($_REQUEST['id'])) {
    header("Location: ../cliente/categorias.php");
    exit();
}
$idcat = $_REQUEST['id'];
$sql = mysqli_query($conexion, "SELECT * FROM categorias WHERE idcat = $idcat");
$result_sql = mysqli_num_rows($sql);

if ($result_sql == 0) {
    header("Location: ../cliente/categorias.php");
    exit();
} else {

    if ($data = mysqli_fetch_array($sql)) {
        //$idcate = $data['idcat'];
        $nombrect = $data['categoria'];
     
    }
}
?>
<header>
    <?php include "../cliente/include/encabezado.php"; ?>
</header>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-6 m-auto">
            <form class="" action="" method="POST">

                <?php echo isset($alert) ? $alert : ''; ?>
                <input type="hidden" name="id" value="<?php echo $idcat; ?>">

                <div class="form-group">
                    <label for="nombre">Nombre de categoria: </label>
                    <input type="text" placeholder="Ingrese nombre" class="form-control" name="nombre" id="nombre"
                        value="<?php echo $nombrect; ?>">
                </div>
                <br>
                <a href="categorias.php" class="btn btn-primary"><i class="fas fa-user-edit"></i> Cancelar</a>
                <button type="submit" class="btn btn-primary"><i class="fas fa-user-edit"></i> Editar Categoria</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<footer>
    <!--PIE-->
    <?php include_once("../cliente/include/pie.php"); ?>
    <!--PIE-->
</footer>