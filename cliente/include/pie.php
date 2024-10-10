<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <style>
    /* Aseguramos que el footer esté en la parte inferior */
    body, html {
      height: 100%;
      margin: 0;
      display: flex;
      flex-direction: column;
    }

    footer {
      margin-top: auto; /* Empuja el footer hacia abajo */
      background-color: black;
      color: white;
      padding: 10px 0;
    }

    .container-fluid {
      padding: 20px;
    }

    iframe {
      border: 0;
      width: 100%;
    }
  </style>
</head>

<body>
  <footer>
    <div class="container-fluid text-center">
      <div class="row">
        <div class="col" style="padding-top: 35px">
          <pre style="text-align: justify;">
            Domicilio: Calle Domingo Arenas, 
            Colonia: Alvaro Obregón,
            San Martin Puebla,
            Teléfono: 248 159 27 56,
            Representante: Kevin Astrin Roldan Cervantes,
            Email: kevinrolce6@gmail.com
          </pre>
        </div>
        <div class="col">
          <img src="recursos/logoDark.jpg" height="60px" style="padding-top:15px;">
        </div>
        <div class="col">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1266.238379494389!2d-98.44055180131438!3d19.28056788122985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfd4807f7e2497%3A0xc696a2973a198a02!2sCalle%20Domingo%20Arenas%201C%2C%20Col%20Alvaro%20Obreg%C3%B3n%2C%2074060%20San%20Mart%C3%ADn%20Texmelucan%20de%20Labastida%2C%20Pue.!5e0!3m2!1ses-419!2smx!4v1725068713345!5m2!1ses-419!2smx" 
            width="240" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
