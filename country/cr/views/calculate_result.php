<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="HandheldFriendly" content="true" />
        <meta name="keywords" content="UberCalc, Calculadora, Viajes, Uber, Calcular Viaje, Calculadora de viajes, Viajes de Uber, calculadora uber, calculador de tarifas uber, calcular precio uber, calcular tarifa uber, uber calcular precio, calcular uber, calcular viaje uber, Covid-19, Ganancia, Monto total, Peajes, Ganacia del Vieje, Descuentos">
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
        <link rel="stylesheet" href="vendor/bootstrap.min.css">
        <link href="css/default.css" rel="stylesheet">
        <!-- endbuild -->

        <!-- Title -->
        <title>UberCalc - Calculo de viaje de Uber</title>

        <!-- Send the difference value to change color -->
        <script type="text/javascript">difference = <?php echo number_format($difference ?? 0, 2) ?></script>
    </head>
    <?php include_once("./includes/analyticstracking.php") ?>
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
            <div class="col-sm-12 col-md12 col-lg-12">
                <div class="thumbnail">
                    <?php if ($error != false) { ?>
                        <?php if ($calculation_type == 'Simple') { ?>
                            <div class="horizontal-center"><h2>Calculo de simple viaje</h2></div>
                            <div class="horizontal-center col-sm-12 col-md12 col-lg-12">
                                <!--AdSense-->
                                <?php include_once("includes/ads.php") ?>
                                <!--AdSense-->
                            </div>
                            <div class="justify-text alert alert-info" role="alert">
                                <strong>Información del viaje:<br></strong>
                                <?php echo 'Tipo de servicio: Uber ' . $service_type; ?><br>
                                <?php echo 'Método de pago: Uber ' . $payment_type; ?><br>
                                Kilómetros = <?php echo number_format($viaje->getKilometers(), 2) ?><br>
                                Tiempo = <?php echo number_format($viaje->getTime(), 2) ?><br>
                                <?php if ($viaje->getFare() > 0) { ?>
                                    Tarifa dinámica = <?php echo number_format($viaje->getFare(), 2) ?><br>
                                <?php } ?>
                                <?php if ($viaje->getTotalTolls() > 0) { ?>
                                    Peajes = &#8353;<?php echo $viaje->getTotalTolls() ?><br>
                                <?php } ?>
                                <?php if ($viaje->getExtraAmount() > 0) { ?>
                                    Gratificación extra = &#8353;<?php echo $viaje->getExtraAmount() ?><br>
                                <?php } ?>
                                Comisión de Uber = &#8353;<?php echo $viaje->calculaComisionUber() ?><br>
                                Monto total del viaje: &#8353;<?php echo number_format($viaje->calculaMontoTotalViaje(), 2) ?><br>
                                <hr>
                                <p><strong>Ganancia del viaje = &#8353;<?php echo number_format($viaje->calculaGanancia(), 2) ?> => (&#8353;<?php echo number_format($viaje->calculaMontoTotalViaje(), 2) ?> - &#8353;<?php echo number_format($viaje->calculaComisionUber() * -1, 2) ?>)</strong></p>

                            </div>
                            <?php
                        }
                        if ($calculation_type == 'Details') {
                            ?>
                            <div class="horizontal-center"><h2>Calculo detallado de viaje</h2></div>
                            <div id="contCalcViaje" class="justify-text alert" role="alert">
                                <h4>Detalle del viaje</h4>
                                <p><?php echo 'Tipo de servicio: Uber ' . $service_type; ?></p>
                                <p><?php echo 'Método de pago: ' . $payment_type; ?></p>
                                <?php if ($viaje->getKilometers() <= 1.5 && $viaje->getFare() == 0) { ?>
                                    <p>Cantidad de Kilometros = <?php echo number_format($viaje->getKilometers(), 2) ?></p>
                                    <p>Cantidad de Minutos = <?php echo number_format($viaje->getTime(), 2) ?></p>
                                    <p>Monto de tarifa mínima= <?php echo "&#8353;" . number_format($viaje->getMinimunFare(), 2) ?></p>
                                    <?php if ($viaje->getTotalTolls() > 0) { ?>
                                        <p>Monto por peajes = <?php echo "&#8353;" . $viaje->getTotalTolls() . " => (" . $viaje->getTolls() . ")" ?></p>
                                    <?php } ?>
                                    <?php if ($viaje->getExtraAmount() > 0) { ?>
                                        <p>Gratificación extra = <?php echo "&#8353;" . $viaje->getExtraAmount() ?></p>
                                    <?php } ?>
                                    <?php if ($viaje->getPendingAmount() > 0 && $viaje->getPayment() == "Efectivo") { ?>
                                        <p>Saldo pendiente = <?php echo "&#8353;" . $viaje->getPendingAmount() ?></p>
                                    <?php } ?>
                                    <p>Monto total = &#8353;<?php echo number_format($viaje->calculaMontoTotalViaje(), 2) ?> => (&#8353;<?php echo $viaje->getMinimunFare() ?><?php if ($viaje->getTotalTolls() > 0) { ?> + &#8353;<?php echo $viaje->getTotalTolls() ?><?php } ?><?php if ($viaje->getExtraAmount() > 0) { ?> + &#8353;<?php echo $viaje->getExtraAmount() ?><?php } ?><?php if ($viaje->getPayment() == "Efectivo") { ?> + &#8353;<?php echo $viaje->getPendingAmount() ?><?php } ?>)</p>
                                    <p>Comisión de Uber = <?php echo "&#8353;" . number_format($viaje->calculaComisionUber(), 2) ?></p>
                                    <p><strong>Monto de ganancia = &#8353;<?php echo number_format($viaje->calculaGanancia(), 2) ?> => (&#8353;<?php echo number_format($viaje->calculaMontoTotalViaje(), 2) ?> - &#8353;<?php echo number_format($viaje->calculaComisionUber() * -1, 2) ?>)</strong></p>
                                    <hr>
                                    <h4>Detalle ganancias reportadas en la aplicación</h4>
                                    <p>Total del viaje = <?php echo "&#8353;" . number_format($viaje->getTotalTripPrice(), 2) ?></p>
                                    <?php if ($viaje->getDiscount() > 0) { ?>
                                        <p>Descuentos = <?php echo "&#8353;" . number_format($viaje->getDiscount(), 2) ?></p>
                                    <?php } ?>
                                    <?php if ($viaje->getPendingAmount() > 0 && $viaje->getPayment() == "Tarjeta") { ?>
                                        <p>Saldo pendiente = <?php echo "&#8353;" . $viaje->getPendingAmount() ?></p>
                                    <?php } ?>
                                    <p>Ganancia del viaje = <?php echo "&#8353;" . number_format($viaje->getEarnings(), 2) ?></p>
                                    <p><strong>Diferencia = &#8353;<?php echo number_format($viaje->getDifference(), 2) ?></strong></p>
                                <?php } else { ?>
                                    <p>Tarifa base = <?php echo "&#8353;" . $viaje->getBasicFare() ?></p>
                                    <p>Monto por kilometraje = &#8353;<?php echo $viaje->calculaKilometraje() ?> => <?php if ($viaje->getKilometers() > 20) { $excess = $viaje->getKilometers() - 20; ?>(20 x &#8353;<?php echo $viaje->getKilometerFare() ?>) + (<?php echo $excess ?> x &#8353;<?php echo $viaje->getExtraCharge20KmFare() ?>)<?php } else { ?>(&#8353;<?php echo $viaje->getKilometers() ?> x &#8353;<?php echo $viaje->getKilometerFare() ?>)<?php } ?></p>
                                    <p>Monto por tiempo = &#8353;<?php echo number_format($viaje->calculaTiempo(), 2) ?> => (<?php echo number_format($viaje->getTime(), 2) ?> x &#8353;<?php echo number_format($viaje->getMinuteFare(), 2) ?>)</p>
                                    <?php if ($fare > 0.1) { ?>
                                        <p>Monto tarifa dinámica = &#8353;<?php echo $viaje->calculaTarifaDinamica() ?> => (<?php echo $viaje->getFare() ?> x (&#8353;<?php echo number_format($viaje->calculaKilometraje(), 2) ?> + &#8353;<?php echo number_format($viaje->calculaTiempo(), 2) ?>))</p>
                                    <?php } ?>
                                    <?php if ($tolls > 0) { ?>
                                        <p>Monto por peajes = <?php echo "&#8353;" . $viaje->getTotalTolls() . " => (" . $viaje->getTolls() . ")" ?></p>
                                    <?php } ?>
                                    <?php if ($viaje->getExtraAmount() > 0) { ?>
                                        <p>Gratificación extra = <?php echo "&#8353;" . $viaje->getExtraAmount() ?></p>
                                    <?php } ?>
                                    <?php if ($viaje->getPendingAmount() > 0 && $viaje->getPayment() == "Efectivo") { ?>
                                        <p>Saldo pendiente = <?php echo "&#8353;" . $viaje->getPendingAmount() ?></p>
                                    <?php } ?>
                                    <p>Monto total = &#8353;<?php echo number_format($viaje->calculaMontoTotalViaje(), 2) ?> => (&#8353;<?php echo (float) $viaje->getBasicFare() ?> + &#8353;<?php echo (float) $viaje->calculaKilometraje() ?> + &#8353;<?php echo number_format($viaje->calculaTiempo(), 2) ?><?php if ($viaje->getFare() > 0) { ?> + &#8353;<?php echo $viaje->calculaTarifaDinamica() ?><?php } ?><?php if ($viaje->getTotalTolls() > 0) { ?> + &#8353;<?php echo $viaje->getTotalTolls() ?><?php } ?><?php if ($viaje->getExtraAmount() > 0) { ?> + &#8353;<?php echo $viaje->getExtraAmount() ?><?php } ?><?php if ($viaje->getPayment() == "Efectivo") { ?> + &#8353;<?php echo $viaje->getPendingAmount() ?><?php } ?>)</p>
                                    <p>Comisión de Uber = <?php echo "&#8353;" . number_format($viaje->calculaComisionUber(), 2) ?></p>
                                    <p><strong>Monto de ganancia = &#8353;<?php echo number_format($viaje->calculaGanancia(), 2) ?> => (&#8353;<?php echo number_format($viaje->calculaMontoTotalViaje(), 2) ?> - &#8353;<?php echo number_format($viaje->calculaComisionUber() * -1, 2) ?>)</strong></p>
                                    <hr>
                                    <h4>Detalle ganancias reportadas en la aplicación</h4>
                                    <p>Total del viaje = <?php echo "&#8353;" . number_format($viaje->getTotalTripPrice(), 2) ?></p>
                                    <?php if ($viaje->getDiscount() > 0) { ?>
                                        <p>Descuentos = <?php echo "&#8353;" . number_format($viaje->getDiscount(), 2) ?></p>
                                    <?php } ?>
                                    <?php if ($viaje->getPendingAmount() > 0 && $viaje->getPayment() == "Tarjeta") { ?>
                                        <p>Saldo pendiente = <?php echo "&#8353;" . $viaje->getPendingAmount() ?></p>
                                    <?php } ?>
                                    <p>Ganancia del viaje = <?php echo "&#8353;" . number_format($viaje->getEarnings(), 2) ?></p>
                                    <p><strong>Diferencia = &#8353;<?php echo number_format($viaje->getDifference(), 2) ?></strong></p>
                                <?php } ?>
                                <div class="horizontal-center col-sm-12 col-md12 col-lg-12">
                                    <!--AdSense-->
                                    <?php include_once("includes/ads.php") ?>
                                    <!--AdSense-->
                                </div>
                                <?php if ($viaje->getDifference() < 0) { ?>
                                    <button type="button" class="btn btn-update btn-lg btn-block" data-toggle="modal" data-target="#supportMessageModal">Mensaje para revisión de tarifa</button>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <?php
                    } else {
                        // Redirect to error because $calculation_type is undefine
                        header("Location: https://crubercalc.azurewebsites.net/country/cr/error.php?calculate=true");
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="supportMessageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Mensaje para revisión de tarifas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="supportMessage">
                        ¡Hola! Estaba revisando mis granacias y he notado que en este viaje existe una diferencia,
                        según los datos en la aplicación y el calculo que he hecho. Por tal razón adjunto el detalle
                        del calculo correcto para el viaje: <br><br>

                        Detalle del viaje<br>
                        <?php echo 'Tipo de servicio: Uber' . $service_type; ?><br>
                        <?php echo 'Tipo de pago: ' . $payment_type; ?><br>
                        <?php if ($viaje->getKilometers() <= 1.5 && $viaje->getFare() == 0) { ?>
                            Cantidad de kilometros recorridos: <?php echo number_format($viaje->getKilometers(), 2) ?><br>
                            Cantidad de tiempo: <?php echo number_format($viaje->getTime(), 2) ?> en minutos.<br>
                            Monto de tarifa mínima= &#8353;<?php echo number_format($viaje->getMinimunFare(), 2) ?><br>
                            <?php if ($viaje->getTotalTolls() > 0) { ?>
                                Monto por peajes = &#8353;<?php echo $viaje->getTotalTolls() ?> => (<?php echo $viaje->getTolls() ?>)<br>
                            <?php } ?>
                            <?php if ($viaje->getExtraAmount() > 0) { ?>
                                Gratificación extra = &#8353;<?php echo $viaje->getExtraAmount() ?><br>
                            <?php } ?>
                            <?php if ($viaje->getPendingAmount() > 0 && $viaje->getPayment() == "Efectivo") { ?>
                                Saldo pendiente = &#8353;<?php echo $viaje->getPendingAmount() ?><br>
                            <?php } ?>
                            Monto total = &#8353;<?php echo number_format($viaje->calculaMontoTotalViaje(), 2) ?> => (&#8353;<?php echo $viaje->getMinimunFare() ?><?php if ($viaje->getTotalTolls() > 0) { ?> + &#8353;<?php echo $viaje->getTotalTolls() ?><?php } ?><?php if ($viaje->getExtraAmount() > 0) { ?> + &#8353;<?php echo $viaje->getExtraAmount() ?><?php } ?><?php if ($viaje->getPayment() == "Efectivo") { ?> + &#8353;<?php echo $viaje->getPendingAmount() ?><?php } ?>)<br>
                            Comisión de la aplicación: &#8353;<?php echo number_format($viaje->calculaComisionUber(), 2) ?><br>
                            <strong>Monto de ganancia = &#8353;<?php echo number_format($viaje->calculaGanancia(), 2) ?></strong><br><br>
                            Detalle ganancias reportadas en la aplicación<br>
                            Total del viaje = &#8353;<?php echo number_format($viaje->getTotalTripPrice(), 2) ?><br>
                            <?php if ($viaje->getDiscount() > 0) { ?>
                                Descuentos = &#8353;<?php echo number_format($viaje->getDiscount(), 2) ?><br>
                            <?php } ?>
                            <?php if ($viaje->getPendingAmount() > 0 && $viaje->getPayment() == "Tarjeta") { ?>
                                Saldo pendiente = &#8353;<?php echo $viaje->getPendingAmount() ?><br>
                            <?php } ?>
                            Ganancia del viaje = &#8353;<?php echo number_format($viaje->getEarnings(), 2) ?><br>
                            <strong>Diferencia = &#8353;<?php echo number_format($viaje->getDifference(), 2) ?></strong><br><br>
                            Por tanto existen una diferencia de &#8353;<?php echo number_format($viaje->getDifference(), 2) ?><br><br>
                            Espero me puedan ayudar.<br>
                            Saludos.<br>
                        <?php } else { ?>
                            Tarifa base = &#8353;<?php echo $viaje->getBasicFare() ?><br>
                            Monto por kilometraje = &#8353;<?php echo $viaje->calculaKilometraje() ?> => <?php if ($viaje->getKilometers() > 20) { $excess = $viaje->getKilometers() - 20; ?>(20 x &#8353;<?php echo $viaje->getKilometerFare() ?>) + (<?php echo $excess ?> x &#8353;<?php echo $viaje->getExtraCharge20KmFare() ?>)<?php } else { ?>(&#8353;<?php echo $viaje->getKilometers() ?> x &#8353;<?php echo $viaje->getKilometerFare() ?>)<?php } ?><br>
                            Monto por tiempo = &#8353;<?php echo number_format($viaje->calculaTiempo(), 2) ?> => (<?php echo number_format($viaje->getTime(), 2) ?> x &#8353;<?php echo number_format($viaje->getMinuteFare(), 2) ?>)<br>
                            <?php if ($fare > 0.1) { ?>
                                Monto tarifa dinámica = &#8353;<?php echo $viaje->calculaTarifaDinamica() ?> => (<?php echo $viaje->getFare() ?> x (&#8353;<?php echo number_format($viaje->calculaKilometraje(), 2) ?> + &#8353;<?php echo number_format($viaje->calculaTiempo(), 2) ?>))<br>
                            <?php } ?>
                            <?php if ($tolls > 0) { ?>
                                Monto por peajes = &#8353;<?php echo $viaje->getTotalTolls() ?> => (<?php echo $viaje->getTolls() ?>)<br>
                            <?php } ?>
                            <?php if ($viaje->getExtraAmount() > 0) { ?>
                                Gratificación extra = &#8353;<?php echo $viaje->getExtraAmount() ?><br>
                            <?php } ?>
                            <?php if ($viaje->getPendingAmount() > 0 && $viaje->getPayment() == "Efectivo") { ?>
                                Saldo pendiente = &#8353;<?php echo $viaje->getPendingAmount() ?><br>
                            <?php } ?>
                            Monto total = &#8353;<?php echo number_format($viaje->calculaMontoTotalViaje(), 2) ?> => (&#8353;<?php echo (float) $viaje->getBasicFare() ?> + &#8353;<?php echo (float) $viaje->calculaKilometraje() ?> + &#8353;<?php echo number_format($viaje->calculaTiempo(), 2) ?><?php if ($viaje->getFare() > 0) { ?> + &#8353;<?php echo $viaje->calculaTarifaDinamica() ?><?php } ?><?php if ($viaje->getTotalTolls() > 0) { ?> + &#8353;<?php echo $viaje->getTotalTolls() ?><?php } ?><?php if ($viaje->getExtraAmount() > 0) { ?> + &#8353;<?php echo $viaje->getExtraAmount() ?><?php } ?><?php if ($viaje->getPayment() == "Efectivo") { ?> + &#8353;<?php echo $viaje->getPendingAmount() ?><?php } ?>)<br>
                            Comisión de Uber = &#8353;<?php echo number_format($viaje->calculaComisionUber(), 2) ?><br>
                            <strong>Monto de ganancia = &#8353;<?php echo number_format($viaje->calculaGanancia(), 2) ?></strong><br><br>
                            Detalle ganancias reportadas en la aplicación<br>
                            Total del viaje = &#8353;<?php echo number_format($viaje->getTotalTripPrice(), 2) ?><br>
                            <?php if ($viaje->getDiscount() > 0) { ?>
                                Descuentos = &#8353;<?php echo number_format($viaje->getDiscount(), 2) ?><br>
                            <?php } ?>
                            <?php if ($viaje->getPendingAmount() > 0 && $viaje->getPayment() == "Tarjeta") { ?>
                                Saldo pendiente = &#8353;<?php echo $viaje->getPendingAmount() ?><br>
                            <?php } ?>
                            Ganancia del viaje = &#8353;<?php echo number_format($viaje->getEarnings(), 2) ?><br>
                            <strong>Diferencia = &#8353;<?php echo number_format($viaje->getDifference(), 2) ?></strong><br><br>
                            Por tanto existen una diferencia de &#8353;<?php echo number_format($viaje->getDifference(), 2) ?><br><br>
                            Espero me puedan ayudar.<br>
                            Saludos.<br>
                        <?php } ?>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-update2" data-dismiss="modal">Cerrar</button>
                    <button id="tollsFares" type="button" class="btn btn-update" onclick="CopyToClipboard('supportMessage')">Copiar</button>
                </div>
            </div>
        </div>
    </div>

    <footer><?php include_once("includes/footer.php") ?></footer>
    <!-- JavaScript -->
    <!-- build:js dist/country/cr/js -->
    <script src="vendor/jquery.min.js"></script>
    <script src="vendor/bootstrap.bundle.min.js"></script>
    <script src="vendor/bootstrap.min.js"></script>
    <script src="js/index-scripts.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/form-scripts.js"></script>
    <script src="js/calculatescripts.js"></script>
    <script src="js/defaultscripts.js"></script>
    <!-- endbuild -->
</body>
</html>
