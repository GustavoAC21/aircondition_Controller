<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API_Result</title>
    <!-- BOOTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SCROOLL REVEAL JS LIBRARY CDN -->
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="api.js"></script>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/estiloMenu.css">
    <!-- FONTAWESOME ICONS -->
    <script src="https://kit.fontawesome.com/0fbbba592c.js" crossorigin="anonymous"></script>
</head>

<body>
    <style>
        /* .fakeimg {
            height: 200px;
            background: #aaa;
        } */
    </style>
    </head>

    <body>

        <div class="p-5 bg-primary text-white text-center">
            <h1>Control de Aire Acondicionado</h1>
            <p>Hospital: Unidad de Medicina Familiar UMF 055 Tekax, Yucatan</p>
        </div>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="action.html">Tools</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboar.php">Graphics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.html">Profiles</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container mt-5" id="contenedor">
            <div class="cont2 row">
                <div class="cont3 col-sm-4">
                    <h2>Datos de Temperatura</h2>
                    <h5>Número de Habitaciones/Tempertura</h5>
                    <div id="tabla_resultado" class="tabla mt-4">

                    </div>

                    <h3 class="mt-4 ">Escaneo Rapido</h3>
                    <p>Resultado de las Temperaturas de las Habitaciones</p>
                    <ul class="nav nav-pills flex-column ">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo" id="escanear">
                            Escanear Habitaciones Nuevamente
                            <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </ul>
                    <hr class="d-sm-none ">

                    <h3 class="mt-4 ">Herramientas Rapidas</h3>
                    <p>Control de Cuarto Principal</p>
                    <ul class="nav nav-pills flex-column ">
                        <li class="nav-item ">
                            <a class="nav-link active bg-success" href="# ">Optimizar Habitaciones</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link  " href="# ">Optimizar Pasillos</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="# ">Apagar Todo</a>
                        </li>
                    </ul>
                    <hr class="d-sm-none ">
                </div>
                <div class="col-sm-1 "></div>
                <div class="col-sm-7 ">
                    <h2>Gráfica de Temperaturas</h2>
                    <h5>Distribución de Temperatura por Hábitaciones</h5>
                    <div class="fakeimg ">
                        <img src="./img/dash1.png " alt=" " style="width: 600px; height: 300px ">
                    </div>
                    
                    <h2 class="mt-5 ">Pasillo Activo</h2>
                    <h5>Pasillo "Numero " Activo</h5>
                    <div class="fakeimg ">
                        <img src="./img/dash2.png " alt=" " style="width: 600px; height: 300px ">
                    </div>

                </div>
            </div>
        </div>

        <div class="mt-5 p-4 bg-dark text-white text-center ">
            <p>Desarrollador: Gustavo Alberto Chan Cauich</p>
        </div>
    </body>

</html>