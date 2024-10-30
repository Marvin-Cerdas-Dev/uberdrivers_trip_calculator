<!DOCTYPE html>
<?php include_once("./includes/viajeX.php") ?>
<?php include_once("./includes/viajePlanet.php") ?>
<?php include_once("./includes/viajeFlash.php") ?>
<?php include_once("./includes/viajeComfort.php") ?>
<?php include_once("./includes/viajeXL.php") ?>
<?php
$viaje = new viajeX(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, "");
$viaje1 = new viajePlanet(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, "");
$viaje2 = new viajeFlash(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, "");
$viaje3 = new viajeComfort(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, "");
$viaje4 = new viajeXL(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, "");
?>

<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="HandheldFriendly" content="true" />
        <meta name="description" content="Te detallamos cuanto podrás ganar con Uber, Además aquí podras verificar tus viajes de la plataforma Uber de una forma fácil y segura">
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
        <title>UberCalc - Tarifas de Uber en Costa Rica</title>

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
                <img src="img/fares.png" class="card-img-top" alt="Tarifas de los servicios de Uber">
                <div class="card-body">
                    <h1 class="card-title">Tarifas de Uber</h1>
                    <p class="card-text">
                        A partir del 21 en agosto de 2015 la empresa Uber empesó sus operaciones en Costa Rica ofreciendo descuentos para los usuarios y beneficios económicos a los conductores.<br><br>
                        Este servicio opera hoy en el Gran Área Metropolitana, Liberia, Cañas, Playas Aledañas, Pérez Zeledón, San Carlos, Jacó, Guápiles, Guácimo, Siquirres y Limón (ver todos cantones de cobertura <a href="coverage.php" hreflang="es"><b>aquí</b></a>)<br><br>
                        La tarifas ofrecidas para los conductores son las siguientes:<br>
                    <h6 class="card-title"><b>Servicio UberX</b></h6>    
                    <ul>
                        <li>Tarifa mínima: <?php echo "&#8353;" . $viaje->getMinimunFare() ?>*</li>
                        <li>Tarifa base: <?php echo "&#8353;" . $viaje->getBasicFare() ?>*</li>
                        <li>&ensp;+ por km: <?php echo "&#8353;" . $viaje->getKilometerFare() ?>/km*</li>
                        <li>&ensp;+ por minuto: <?php echo "&#8353;" . $viaje->getMinuteFare() ?>/min*</li>
                        <li>Distancia larga: <?php echo "&#8353;" . $viaje->getExtraCharge20KmFare() ?>/km* (Se cobrará una tarifa de distancia larga en viajes cuyo recorrido excedan los 20km)</li>
                    </ul>
                    <h6 class="card-title"><b>Servicio UberPlanet</b></h6>    
                    <ul>
                        <li>Tarifa mínima: <?php echo "&#8353;" . $viaje1->getMinimunFare() ?>*</li>
                        <li>Tarifa base: <?php echo "&#8353;" . $viaje1->getBasicFare() ?>*</li>
                        <li>&ensp;+ por km: <?php echo "&#8353;" . $viaje1->getKilometerFare() ?>/km*</li>
                        <li>&ensp;+ por minuto: <?php echo "&#8353;" . $viaje1->getMinuteFare() ?>/min*</li>
                        <li>Distancia larga: <?php echo "&#8353;" . $viaje1->getExtraCharge20KmFare() ?>/km* (Se cobrará una tarifa de distancia larga en viajes cuyo recorrido excedan los 20km)</li>
                    </ul>                    
                    </p>
                    <h6 class="card-title"><b>Servicio UberFlash</b></h6>    
                    <ul>
                        <li>Tarifa mínima: <?php echo "&#8353;" . $viaje2->getMinimunFare() ?>*</li>
                        <li>Tarifa base: <?php echo "&#8353;" . $viaje2->getBasicFare() ?>*</li>
                        <li>&ensp;+ por km: <?php echo "&#8353;" . $viaje2->getKilometerFare() ?>/km*</li>
                        <li>&ensp;+ por minuto: <?php echo "&#8353;" . $viaje2->getMinuteFare() ?>/min*</li>
                        <li>Distancia larga: <?php echo "&#8353;" . $viaje2->getExtraCharge20KmFare() ?>/km* (Se cobrará una tarifa de distancia larga en viajes cuyo recorrido excedan los 20km)</li>
                    </ul>                    
                    </p>                    
                    <h6 class="card-title"><b>Servicio UberConfort</b></h6>    
                    <ul>
                        <li>Tarifa mínima: <?php echo "&#8353;" . $viaje3->getMinimunFare() ?>*</li>
                        <li>Tarifa base: <?php echo "&#8353;" . $viaje3->getBasicFare() ?>*</li>
                        <li>&ensp;+ por km: <?php echo "&#8353;" . $viaje3->getKilometerFare() ?>/km*</li>
                        <li>&ensp;+ por minuto: <?php echo "&#8353;" . $viaje3->getMinuteFare() ?>/min*</li>
                        <li>Distancia larga: <?php echo "&#8353;" . $viaje3->getExtraCharge20KmFare() ?>/km* (Se cobrará una tarifa de distancia larga en viajes cuyo recorrido excedan los 20km)</li>
                    </ul>                    
                    </p>                    
                    <h6 class="card-title"><b>Servicio UberXL</b></h6>    
                    <ul>
                        <li>Tarifa mínima: <?php echo "&#8353;" . $viaje4->getMinimunFare() ?>*</li>
                        <li>Tarifa base: <?php echo "&#8353;" . $viaje4->getBasicFare() ?>*</li>
                        <li>&ensp;+ por km: <?php echo "&#8353;" . $viaje4->getKilometerFare() ?>/km*</li>
                        <li>&ensp;+ por minuto: <?php echo "&#8353;" . $viaje4->getMinuteFare() ?>/min*</li>
                        <li>Distancia larga: <?php echo "&#8353;" . $viaje4->getExtraCharge20KmFare() ?>/km* (Se cobrará una tarifa de distancia larga en viajes cuyo recorrido excedan los 20km)</li>
                    </ul>                    
                    </p>
                    <p class="card-text">
                        <small>*Estos montos no cuentan con la comisión de uber aplicada</small> 
                    </p>
                    <p class="card-text">
                        <h6 class="card-title"><b>También puedes verificar de forma detallada sus ganancias aquí:</b></h6> 
                    </p>
                    <p class="card-text">
                        <button type="button" class="btn btn-update btn-lg btn-block" id="calc_details">Verificar ganancias detallada</button>
                    </p>
                    <p class="card-text">
                        <!--AdSense-->
                        <?php include_once("includes/ads.php") ?>  
                        <!--AdSense-->
                    </p>
                    <p class="card-text">
                        <h6 class="card-title"><b>También si lo prefiere puede verificar sus ganancias de forma simple aquí:
                    </p>
                    <p class="card-text">
                        <button type="button" class="btn btn-update btn-lg btn-block" id="calc_simple">Verificar ganancias simple</button>
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
