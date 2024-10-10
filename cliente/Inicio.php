


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>INICIO</title>
</head>

<header>
    <!--ENCABEZADO-->
    <?php include_once("include/encabezado.php"); ?>
    <!--ENCABEZADO-->
</header>
<div>
    <p>
        <?php 
        echo " ";echo $_SESSION['nombre']; 
        echo " ";echo $_SESSION['paterno'] ; 
        echo " ";echo $_SESSION['materno']; 
        echo " "; echo $_SESSION['rol']; 
        ?>
    </p>

</div>
<body>
    <h1>Hola, este es el inicio de la pagina!</h1>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!--Carrusel -->
    <div class="container" height="100px">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" whidt="300px ">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="recursos/gorro.jpg" class="d-block w-100" alt="..." height="500px" >
                </div>
                <div class="carousel-item">
                    <img src="recursos/gorro1.jpg" class="d-block w-100" alt="..." height="500px">
                </div>
                <div class="carousel-item">
                    <img src="recursos/gorro3.jpg" class="d-block w-100" alt="..." height="500px">
                </div>
                <div class="carousel-item">
                    <img src="recursos/gorro4.jpg" class="d-block w-100" alt="..." height="500px">
                </div>

                <div class="carousel-item">
                    <img src="recursos/gorro5.jpg" class="d-block w-100" alt="..." height="500px">
                </div>
                
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

<!--Fin de carrusel -->

    <footer>
        <!--PIE-->
        <?php include_once("include/pie.php"); ?>
        <!--PIE-->
    </footer>
</body>





</html>