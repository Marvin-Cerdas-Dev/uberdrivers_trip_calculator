<!DOCTYPE html>
<?php
$error = filter_input(INPUT_GET, 'calculate');
echo $error;
if ($error == "true") {
    ?>
    <html lang="es">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
            <meta name="HandheldFriendly" content="true" />
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
            <title>UberCalc - Error en los calculos</title>   

        </head>
        <?php include_once("includes/analyticstracking.php") ?>
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
        <header>
            <?php include_once("includes/header.php") ?>
        </header>
        <div class="container-fluid">
            <div class="row">
                <div class="card md-3 card-update">
                    <center><img src="img/shield-error.png" alt="Error en la página web"/></center>
                    <div class="card-body">
                        <center><h1>Error en los calculos</h1></center>
                        <p>Se ha presentado un error a la hora de hacer los calculos, por favor vuelve seleccionar una opcion para realizar el calculo de nuevo</p>
                        <p>
                            <button type="button" class="btn btn-update btn-lg btn-block" id="calc_details">Calculadora detallada</button>
                        </p>
                        <p>
                            <!--AdSense-->
                            <?php include_once("includes/ads.php") ?>  
                            <!--AdSense-->
                        </p>
                        <p>
                            <button type="button" class="btn btn-update btn-lg btn-block" id="calc_simple">Calculadora simple</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <footer><?php include_once("./includes/footer.php") ?></footer>      
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
    <?php
} else {
    // Redirect to error because $calculation_type is undefine 
    header("Location: https://crubercalc.azurewebsites.net/");
}
?>