<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="HandheldFriendly" content="true" />
        <meta name="description" content="Aquí podrás verificar tus viajes de la plataforma Uber de una forma fácil y segura">
        <meta name="keywords" content="UberCalc, Calculadora, Viajes, Uber, Calcular Viaje, Calculadora de viajes, Viajes de Uber, calculadora uber, calculador de tarifas uber, calcular precio uber, calcular tarifa uber, uber calcular precio, calcular uber, calcular viaje uber">
        <meta http-equiv="Expires" content="5">

        <!-- Canonical Tag -->        
        <link rel="canonical" href="https://crubercalc.azurewebsites.net/country/cr/" />
        
        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="https://crubercalc.azurewebsites.net/">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Calculadora de viajes de Uber">
        <meta property="og:description" content="Aquí podrás verificar tus viajes de la plataforma Uber de una forma fácil y segura">
        <meta property="og:image" content="https://crubercalc.azurewebsites.net/img/calculator_128.png">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="crubercalc.azurewebsites.net">
        <meta property="twitter:url" content="https://crubercalc.azurewebsites.net/">
        <meta name="twitter:title" content="Calculadora de viajes de Uber">
        <meta name="twitter:description" content="Aquí podrás verificar tus viajes de la plataforma Uber de una forma fácil y segura">
        <meta property="twitter:image:alt" content="UberCalc">
        <meta name="twitter:image" content="https://crubercalc.azurewebsites.net/img/calculator_128.png">

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
        <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">

        <script type="application/ld+json">
            {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "UberCalc",
            "url": "https://crubercalc.azurewebsites.net/",
            "address": "Costa Rica",
            "sameAs": [
            "https://www.facebook.com/calculadoradeplataformasdigitales/"
            ]
            }
        </script>

        <script type="application/ld+json">
            {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "name": "UberCalc",
            "url": "https://crubercalc.azurewebsites.net/",
            "address": "Costa Rica",
            "potentialAction": {
            "@type": "SearchAction",
            "target": "https://crubercalc.azurewebsites.net/search?q={search_term_string}Buscar",
            "query-input": "required name=search_term_string"
            }
            }
        </script>

        <!-- build:css dist/country/cr/css -->
        <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link href="css/default.css" rel="stylesheet">        
        <!-- endbuild -->

        <!-- Title -->
        <title>UberCalc - Calculadora de viajes de Uber</title>       

    </head>
    <?php include_once("includes/analyticstracking.php") ?>
    <!-- Loading page -->
    <div id="loading" class="loader">
        <div class="img-loading spinner-border text-light" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Cookies modal -->
    <div class="modal fade" id="cookieModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-update" role="document">
            <div class="modal-content modal-content-update">
                <div class="modal-body">
                    <div class="notice d-flex justify-content-between align-items-center">
                        <div class="cookie-text">Al usar este sitio acepta el uso de cookies para análisis y contenido personalizado. <button id="learMore" type="button" class="btn btn-update2 buttons btn-sm">Leer más</button></div>
                        <div class="buttons d-flex flex-column flex-lg-row">
                            <button id="acept" type="button" class="btn btn-update buttons btn-sm" data-dismiss="modal">Acepto</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
    <div class="page-container">
        <header>
            <?php include_once("./includes/header.php") ?>
        </header>
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="2000">
                    <img src="img/carouseln_1.jpg" class="d-block w-100" alt="Seguridad">
                </div>
                <div class="carousel-item" data-interval="2000">
                    <img src="img/carouseln_2.jpg" class="d-block w-100" alt="Confianza">
                </div>
                <div class="carousel-item">
                    <img src="img/carouseln_3.jpg" class="d-block w-100" alt="Un servicio 100% Gratuito">
                </div>
            </div>
        </div>                
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 card-margin">
                    <div class="card h-100">
                        <img class="img-responsive card-img-top" src="img/administrate.jpg" alt="Administre sus ganancias"/>
                        <div class="card-body">
                            <h5 class="card-title">Administre sus ganancias</h5>
                            <p class="card-text justify-text">Con UberCalc podras dar seguimiento a tus ganancias de una forma fácil, rápida y segura.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 card-margin">
                    <div class="card h-100">
                        <img class="img-responsive card-img-top" src="img/free_service.jpg" alt="Servicio 100% gratuito"/>
                        <div class="card-body">
                            <h5 class="card-title">100% Gratuito</h5>
                            <p class="card-text justify-text">UberCalc es una plataroma 100% gratuita, para los socios conductores, por lo que no tendras que preocuparte por cargos mensuales.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 card-margin">
                    <div class="card h-100">
                        <img class="img-responsive card-img-top" src="img/safe.jpg" alt="Seguridad en sus consultas"/>
                        <div class="card-body">
                            <h5 class="card-title">Seguridad</h5>
                            <p class="card-text justify-text">El sistama de UberCalc nunca almacena tus consultas, además contamos con encriptacion SSL.</p>
                        </div>
                    </div>
                </div>

                <div class="jumbotron">
                    <div class="container">
                        <h1 class="display-3"><b>UberCalc</b></h1>
                        <p>Una herramienta especialmente pensada para socios condutores.</p>
                        <hr class="my-4">
                        <p>Hemos logrado crear una plataforma, para que tu como conductor de Uber, puedas calcular de forma detallada un viaje completado. Aquí podrás saber de manera precisa tus ingresos estimados para cada viaje y si el mismo está siendo correctamente calculado. Además si tus viaje está mal calculados, tendras la posibilidad copiar un mensaje listo para que lo envies a la plataforma de soporte.</p>                            
                    </div>
                </div>               
                <div class="col-sm-12 col-md-12 col-lg-6 card-margin">
                    <div class="card h-100">
                        <img src="img/calculate_details.jpg" alt="Calculadora de viajes de Uber detallada" />
                        <div class="card-body">
                            <h5 class="card-title">Calculadora detallada</h5>
                            <p class="card-text justify-text">En calculadora de viajes de Uber detallada hemos logrado crear una plataforma, para que tu como conductor de Uber, puedas calcular de forma detallada un viaje completado. Aquí podrás saber de manera precisa tus ingresos estimados para cada viaje y si el mismo está siendo correctamente calculado. Además si tus viaje está mal calculado tendras la posibilidad copiar un mensaje listo para que lo envies a la plataforma de soporte.</p>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-update btn-lg btn-block" id="calc_details">Calcular</button>                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 card-margin">
                    <div class="card h-100">
                        <img src="img/calculate_simple.jpg" alt="alculadora de viajes de Uber simple" />
                        <div class="card-body">
                            <h5 class="card-title">Calculadora simple</h5>
                            <p class="card-text justify-text">En la calculadora de viajes de Uber simple, como conductor de Uber, encontrarás una manera rápida de calcular tu viaje realizado, en pocos pasos y sin complicaciones, esta herramienta te permitirá saber si tus ganancias fueron corectas o no de una forma muy simple.</p>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-update btn-lg btn-block" id="calc_simple">Calcular</button>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer><?php include_once("./includes/footer.php") ?></footer>  
    </div>
    <!-- JavaScript -->
    <!-- build:js dist/country/cr/js -->
    <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/index-scripts.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/form-scripts.js"></script>
    <script src="js/calculatescripts.js"></script>
    <script src="js/defaultscripts.js"></script>
    <!-- endbuild -->
</body>
</html>
