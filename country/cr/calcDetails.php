<!DOCTYPE html>
<?php include_once("includes/tolls.php") ?>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="HandheldFriendly" content="true" />
        <meta name="description" content="Aquí podras verificar tus viajes de la plataforma Uber de una forma fácil y segura">
        <meta name="keywords" content="UberCalc, Calculadora, Viajes, Uber, Calcular Viaje, Calculadora de viajes, Viajes de Uber">
        <meta http-equiv="Expires" content="5">

        <!-- Miniature -->
        <meta property="og:title" content="Calculadora de viajes de Uber" />
        <meta property="og:site_name" content="UberCalc">
        <meta property="og:url" content="http://crubercalc.azurewebsites.net/" />
        <meta property="og:type" content="website"/>
        <meta property="og:description" content="Aquí podras verificar tus viajes de la plataforma Uber de una forma fácil y segura">
        <meta property="og:image" content="http://crubercalc.azurewebsites.net/img/calculator_128.png">

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
            "url": "http://crubercalc.azurewebsites.net/",
            "address": "Costa Rica",
            "potentialAction": {
            "@type": "SearchAction",
            "target": "http://crubercalc.azurewebsites.net/search?q={search_term_string}Buscar",
            "query-input": "required name=search_term_string"
            }
            }
        </script>

        <!-- build:css dist/country/cr/css -->
        <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link href="css/default.css" rel="stylesheet">        
        <!-- endbuild -->

        <!-- Title -->
        <title>UberCalc - Calculadora detallada</title>

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
            <div class="col-sm-12 col-md12 col-lg-12">
                <div class="thumbnail center">
                    <div class="horizontal-center"><h2>Calcular viaje detallado</h2></div>
                    <div class="caption">
                        <form id="form_details_calc" class="form-horizontal" method="post" action="calcularTarifa.php">                            
                            <div class="form-group row">
                                <label for="calculation_type" class="col-sm-2 control-label" hidden="true">Tipo de calculo</label>
                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                                    <input type="text" class="form-control" id="calculating" name="calculating" Value="Details" hidden="true">
                                </div> 
                            </div>	
                            <div class="form-group row"> 
                                <label for="service" class="col-md-4 col-lg-2 control-label">Tipo de Servicio:</label>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="btn-group btn-group-toggle">
                                        <label id="serviceX" class="btn radioActive">
                                            <input type="radio" name="service" value="X" autocomplete="off" checked>X
                                        </label>
                                        <label id="servicePlanet" class="btn radioInactive">
                                            <input type="radio" name="service" value="Planet" autocomplete="off">Planet
                                        </label>
                                        <label id="serviceFlash" class="btn radioInactive">
                                            <input type="radio" name="service" value="Flash" autocomplete="off">Flash
                                        </label>                                        
                                        <label id="serviceComfort" class="btn radioInactive">
                                            <input type="radio" name="service" value="Comfort" autocomplete="off">Comfort
                                        </label>
                                        <label id="serviceXL" class="btn radioInactive">
                                            <input type="radio" name="service" value="XL" autocomplete="off">XL
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row"> 
                                <label for="service" class="col-md-4 col-lg-2 control-label">Método de pago:</label>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="btn-group btn-group-toggle">
                                        <label id="Creditcard" class="btn radioActive">
                                            <input type="radio" name="payment" value="Tarjeta" autocomplete="off" checked> Tarjeta
                                        </label>
                                        <label id="Cash" class="btn radioInactive">
                                            <input type="radio" name="payment" value="Efectivo" autocomplete="off" > Efectivo
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="totalTripPrice" class="col-md-4 col-lg-2 control-label">Monto total del viaje:</label>
                                <div class="col-md-8 col-lg-10">
                                    <input type="number" class="form-control" id="totalTripPrice" name="totalTripPrice" step="any" min="0" placeholder="Monto total del viaje">
                                    <div id="val_totalTripPrice" class="alert alert-danger validation" role="alert" hidden="true"></div>
                                </div>
                            </div>                             
                            <div class="form-group row">
                                <label for="discount" class="col-md-4 col-lg-2 control-label">Descuento:</label>
                                <div class="col-md-8 col-lg-10">
                                    <input type="number" class="form-control" id="discount" name="discount" step="any" min="0" placeholder="Descuento">
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label for="pendingamount" class="col-md-4 col-lg-2 control-label">Saldo pendiente:</label>
                                <div class="col-md-8 col-lg-10">
                                    <input type="number" class="form-control" id="pendingamount" name="pendingamount" step="any" min="0" placeholder="Saldo pendiente">
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label for="earnings" class="col-md-4 col-lg-2 control-label">Ganancia obtenida:</label>
                                <div class="col-md-8 col-lg-10">
                                    <input type="number" class="form-control" id="earnings" name="earnings" step="any" min="0" placeholder="Ganancia obtenida">
                                    <div id="val_earnings" class="alert alert-danger validation" role="alert" hidden="true"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kilometers" class="col-md-4 col-lg-2 control-label">Kilómetros recorridos:</label>
                                <div class="col-md-8 col-lg-10">                      
                                    <input type="number" class="form-control" id="kilometers" name="kilometers" step="any" min="0.1" placeholder="Kilómetros recorridos">                          
                                    <div id="val_kilometers" class="alert alert-danger validation" role="alert" hidden="true"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="time" class="col-md-4 col-lg-2 control-label">Tiempo de duración:</label>
                                <div class="row col-md-8 col-lg-10">
                                    <div class="col">
                                        <input type="number" id="hours" name="hours" class="form-control" placeholder="Horas">
                                        <div id="val_hours" class="alert alert-danger validation" role="alert" hidden="true"></div>
                                    </div>
                                    <div class="col">
                                        <input type="number" id="minutes" name="minutes" class="form-control" placeholder="Minutos">
                                        <div id="val_minutes" class="alert alert-danger validation" role="alert" hidden="true"></div>
                                    </div>
                                    <div class="col">
                                        <input type="number" id="seconds" name="seconds" class="form-control" placeholder="Segundos">
                                        <div id="val_seconds" class="alert alert-danger validation" role="alert" hidden="true"></div>
                                    </div>   
                                    <div>
                                        <button type="button" class="btn btn-update btn-sm" data-toggle="modal" data-target="#informationModal">?</button>
                                    </div>
                                    <div class="col-md-8 col-lg-12">
                                        <div id="val_time" class="alert alert-danger validation" role="alert" hidden="true"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="extra" class="col-md-4 col-lg-2 control-label">Gratificación extra:</label>
                                <div class="col-md-8 col-lg-10">                      
                                    <input type="number" class="form-control" id="extra" name="extra" step="any" min="1" placeholder="Gratificacion extra">                          
                                </div>
                            </div>                            
                    </div>
                    <div class="form-group row">
                        <label for="dinamica" class="col-md-4 col-lg-2 control-label">Tarifa dinámica:</label>
                        <div class="col-md-8 col-lg-10">
                            <select class="form-control" id="fare" name="fare">
                                <option value="">Seleccione una opción</option>
                                <option value="1.1">1.1x</option>
                                <option value="1.2">1.2x</option>
                                <option value="1.3">1.3x</option>
                                <option value="1.4">1.4x</option>
                                <option value="1.5">1.5x</option>
                                <option value="1.6">1.6x</option>
                                <option value="1.7">1.7x</option>
                                <option value="1.8">1.8x</option>
                                <option value="1.9">1.9x</option>
                                <option value="2.0">2.0x</option>
                                <option value="2.1">2.1x</option>
                                <option value="2.2">2.2x</option>
                                <option value="2.3">2.3x</option>
                                <option value="2.4">2.4x</option>
                                <option value="2.5">2.5x</option>
                                <option value="2.6">2.6x</option>
                                <option value="2.7">2.7x</option>
                                <option value="2.8">2.8x</option>
                                <option value="2.9">2.9x</option>
                                <option value="3.0">3.0x</option>
                                <option value="3.1">3.1x</option>
                                <option value="3.2">3.2x</option>
                                <option value="3.3">3.3x</option>
                                <option value="3.4">3.4x</option>
                                <option value="3.5">3.5x</option>
                                <option value="3.6">3.6x</option>
                                <option value="3.7">3.7x</option>
                                <option value="3.8">3.8x</option>
                                <option value="3.9">3.9x</option>
                                <option value="4.0">4.0x</option>
                                <option value="4.1">4.1x</option>
                                <option value="4.2">4.2x</option>
                                <option value="4.3">4.3x</option>
                                <option value="4.4">4.4x</option>
                                <option value="4.5">4.5x</option>
                                <option value="4.6">4.6x</option>
                                <option value="4.7">4.7x</option>
                                <option value="4.8">4.8x</option>
                                <option value="4.9">4.9x</option>
                                <option value="5.0">5.0x</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Seleccionar peajes" class="col-md-4 col-lg-2 control-label">Monto de peajes:</label>
                        <div class="col-md-8 col-lg-10">
                            <button type="button" class="btn btn-update btn-lg btn-block" data-toggle="modal" data-target="#tollsModal">Seleccionar peajes</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Monto de peajes selecionados" class="col-md-4 col-lg-2 control-label" hidden="true">Monto de peajes selecionados</label>
                        <div class="col-md-8 col-lg-10">
                            <input type="text" class="form-control" id="selected_tolls" name="selected_tolls" value="" hidden="true">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-12">
                        <div class="horizontal-center">
                            <!--AdSense-->
                            <?php include_once("includes/ads.php") ?>  
                            <!--AdSense-->
                        </div>
                    </div>                               
                    <div class="form-group row">
                        <div class="col-sm-12 horizontal-center" style="margin-top: 30px">
                            <button id="btn_details_calc" type="submit" class="btn btn-update btn-lg btn-block">Calcular</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 horizontal-center">
                            <button type="reset" class="btn btn-update2 btn-lg btn-block">Borrar</button>
                        </div>
                    </div>                                
                    </form> 
                </div>
            </div>
        </div>  
    </div>

    <!-- Tolls Modal -->
    <div class="modal fade" id="tollsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Seleccione el los peajes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">           
                    <div class="btn-group-toggle" data-toggle="buttons">
                        <label id="AtenasLabel" class="btn btn-default border btn-block ">
                            <input id="Atenas" type="checkbox" autocomplete="off" name="fares" value="<?php echo $tollAtenas ?>"> Atenas - &#8353;<?php echo $tollAtenas ?>        
                        </label>
                        <label id="BraulioCarrilloLabel" class="btn btn-default border btn-block">
                            <input id="BraulioCarrillo" type="checkbox" autocomplete="off" name="fares" value="<?php echo $tollBraulioCarrillo ?>"> Braulio Carrillo - &#8353;<?php echo $tollBraulioCarrillo ?>
                        </label>
                        <label id="BernardoSotoLabel" class="btn btn-default border btn-block">
                            <input id="BernardoSoto" type="checkbox" autocomplete="off" name="fares" value="<?php echo $tollBernardoSoto ?>"> Bernardo Soto - &#8353;<?php echo $tollBernardoSoto ?>
                        </label>
                        <label id="CuidadColonLabel" class="btn btn-default border btn-block">
                            <input id="CuidadColon" type="checkbox" autocomplete="off" name="fares" value="<?php echo $tollCuidadColon ?>"> Cuidad Colón - &#8353;<?php echo $tollCuidadColon ?>
                        </label>
                        <label id="EscazuLabel" class="btn btn-default border btn-block">
                            <input id="Escazu" type="checkbox" autocomplete="off" name="fares" value="<?php echo $tollEscazu ?>"> Escazú - &#8353;<?php echo $tollEscazu ?>
                        </label>
                        <label id="FlorencioDelCastilloLabel" class="btn btn-default border btn-block">
                            <input id="FlorencioDelCastillo" type="checkbox" autocomplete="off" name="fares" value="<?php echo $tollFlorencioDelCastillo ?>"> Florencio del Castillo - &#8353;<?php echo $tollFlorencioDelCastillo ?>
                        </label>
                        <label id="GeneralCanasLabel" class="btn btn-default border btn-block">
                            <input id="GeneralCanas" type="checkbox" autocomplete="off" name="fares" value="<?php echo $tollGeneralCanas ?>"> General Cañas - &#8353;<?php echo $tollGeneralCanas ?>
                        </label>
                        <label id="GuacimaLabel" class="btn btn-default border btn-block">
                            <input id="Guacima" type="checkbox" autocomplete="off" name="fares" value="<?php echo $tollGuacima ?>"> Guácima - &#8353;<?php echo $tollGuacima ?>
                        </label>
                        <label id="PozonLabel" class="btn btn-default border btn-block">
                            <input id="Pozon" type="checkbox" autocomplete="off" name="fares" value="<?php echo $tollPozon ?>"> Pozón - &#8353;<?php echo $tollPozon ?>
                        </label>	
                        <label id="RampaAtenasLabel" class="btn btn-default border btn-block">
                            <input id="RampaAtenas" type="checkbox" autocomplete="off" name="fares" value="<?php echo $tollRampaAtenas ?>"> Rampa Atenas - &#8353;<?php echo $tollRampaAtenas ?>
                        </label>
                        <label id="RampaPozonLabel" class="btn btn-default border btn-block">
                            <input id="RampaPozon" type="checkbox" autocomplete="off" name="fares" value="<?php echo $tollRampaPozon ?>"> Rampa Pozón - &#8353;<?php echo $tollRampaPozon ?>
                        </label>
                        <label id="SanRafaelLabel" class="btn btn-default border btn-block">
                            <input id="SanRafael" type="checkbox" autocomplete="off" name="fares" value="<?php echo $tollSanRafael ?>"> San Rafael - &#8353;<?php echo $tollSanRafael ?>
                        </label>
                        <label id="SiquiaresLabel" class="btn btn-default border btn-block">
                            <input id="Siquiares" type="checkbox" autocomplete="off" name="fares" value="<?php echo $tollSiquiares ?>"> Siquiares - &#8353;<?php echo $tollSiquiares ?>
                        </label>					  
                    </div>                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-update2" data-dismiss="modal">Cerrar</button>
                    <button id="tollsFares" type="button" class="btn btn-update">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Information Modal -->
    <div class="modal fade" id="informationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Información general</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">           
                    <div class="btn-group-toggle" data-toggle="buttons">
                        <h5><strong>Información general del uso de la calculadora</strong></h5>
                        <p>A continuación, se detalla una explicación para cada uno de los campos de la calculadora de viajes</p>
                        <h5>Monto total del viaje</h5>
                        <p>El monto total del viaje hace referencia al valor total pagado por el viaje, eso quiere decir, el monto que pagó el cliente por el viaje. Al igual que las ganancias del viaje, en caso de existir números decimales estos se deben escribir con punto (.)</p>
                        <h5>Descuento</h5>
                        <p>Este valor corresponde al monto total de los descuentos aplicados a un viaje por parte de la plataforma.</p>                              
                        <h5>Saldo pendiente</h5>
                        <p>Este monto corresponde a las tarifas que el cliente tiene pendientes por viajes anteriores y cancela en este viaje. Si el cliento no tiene montos pendientes este campo puede quedar vacio.</p>                              
                        <h5>Ganancias obtenidas</h5>
                        <p>Las ganancias obtenidas en el viaje corresponden al monto que se pagará por haber realizado el viaje. En caso de que existan números decimales, los mismo deben ser ingresados con punto (.) Por ejemplo: ₡ 5180.95</p>
                        <h5>Kilómetros recorridos</h5>
                        <p>Este dato corresponde a el total de kilómetros recorridos en el viaje, si este dato no es un número entero, se debe utilizar un punto (.) para los decimales. Por ejemplo: Un kilómetro y medio = 1.5</p>                              
                        <h5>Tiempo de duración</h5>
                        <p><b>Horas:</b> Corresponde a la cantidad de horas que duró el viaje. Si el viaje duró menos de 1 hora, debes colocar cero (0). Este campo solo acepta números del 0 al 24.<br>
                            <b>Minutos:</b> Lo minutos es la cantidad de minutos que duró el viaje. Este dato no puede ser igual a cero (0). Este campo acepta números del 1 al 59.<br>
                            <b>Segundos:</b> Los segundo son la cantidad de segundos que alcanzó el viaje. Si el mismo quedó en minutos exactos debes colocar cero (0). Este campo acepta números del 0 al 59. 
                            <i>Nota:</i> Ninguno de estos campos acepta números negativos.
                        </p>                              
                        <h5>Tarifa dinámica</h5>
                        <p>Esta corresponde a la tarifa dinámica aplicada al viaje. Si el vieja no fue con tarifa dinámica puedes dejar este campo sin modificación.</p>                              
                        <h5>Monto de peajes</h5>
                        <p>Corresponde a los peajes pagados durante el viaje, podrás marcar los diferentes peajes pagados según corresponda.</p>                              
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-update2" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer><?php include_once("includes/footer.php") ?></footer>
    <!-- JavaScript -->
    <!-- build:js dist/country/cr/js -->
    <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../../node_modules/popper.js/dist/popper.min.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/index-scripts.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/form-scripts.js"></script>
    <script src="js/calculatescripts.js"></script>
    <script src="js/defaultscripts.js"></script>
    <!-- endbuild -->
</body>
</html>












