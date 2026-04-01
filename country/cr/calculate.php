<?php
include_once("./includes/Viaje.php");
include_once("./includes/viajeX.php");
include_once("./includes/viajePlanet.php");
include_once("./includes/viajeFlash.php");
include_once("./includes/viajeComfort.php");
include_once("./includes/viajeXL.php");
include_once("./includes/tolls.php");

$calculation_type = filter_input(INPUT_POST, 'calculating');
$service_type = filter_input(INPUT_POST, 'service');
$payment_type = filter_input(INPUT_POST, 'payment');
$error = false;

if ($calculation_type == 'Simple') {
    $kilometers = filter_input(INPUT_POST, 'kilometers');
    $hours = filter_input(INPUT_POST, 'hours');
    $minutes = filter_input(INPUT_POST, 'minutes');
    $seconds = filter_input(INPUT_POST, 'seconds');
    $fare = filter_input(INPUT_POST, 'fare');
    $tolls = filter_input(INPUT_POST, 'selected_tolls');
    if (filter_input(INPUT_POST, 'discount') == "") {
        $discount = 0;
    } else {
        $discount = filter_input(INPUT_POST, 'discount');
    }
    if (filter_input(INPUT_POST, 'pendingamount') == "") {
        $pendingAmount = 0;
    } else {
        $pendingAmount = filter_input(INPUT_POST, 'pendingamount');
    }
    $extras = filter_input(INPUT_POST, 'extra');
    if ($service_type == 'X') {
        $viaje = new viajeX($kilometers, $hours, $minutes, $seconds, $fare, $tolls, 0.0, 0.0, $pendingAmount, 0.0, $extras, $payment_type);
    }
    if ($service_type == 'Planet') {
        $viaje = new viajePlanet($kilometers, $hours, $minutes, $seconds, $fare, $tolls, 0.0, 0.0, $pendingAmount, 0.0, $extras, $payment_type);
    }
    if ($service_type == 'Flash') {
        $viaje = new viajeFlash($kilometers, $hours, $minutes, $seconds, $fare, $tolls, 0.0, 0.0, $pendingAmount, 0.0, $extras, $payment_type);
    }
    if ($service_type == 'Comfort') {
        $viaje = new viajeComfort($kilometers, $hours, $minutes, $seconds, $fare, $tolls, 0.0, 0.0, $pendingAmount, 0.0, $extras, $payment_type);
    }
    if ($service_type == 'XL') {
        $viaje = new viajeXL($kilometers, $hours, $minutes, $seconds, $fare, $tolls, 0.0, 0.0, $pendingAmount, 0.0, $extras, $payment_type);
    }
    $viaje->calculaMontoTotalViaje();
} else {
    $error = true;
}

if ($calculation_type == 'Details') {
    $kilometers = filter_input(INPUT_POST, 'kilometers');
    $hours = filter_input(INPUT_POST, 'hours');
    $minutes = filter_input(INPUT_POST, 'minutes');
    $seconds = filter_input(INPUT_POST, 'seconds');
    $fare = filter_input(INPUT_POST, 'fare');
    $tolls = filter_input(INPUT_POST, 'selected_tolls');
    $earnings = filter_input(INPUT_POST, 'earnings');
    $totalTripPrice = filter_input(INPUT_POST, 'totalTripPrice');
    if (filter_input(INPUT_POST, 'discount') == "") {
        $discount = 0;
    } else {
        $discount = filter_input(INPUT_POST, 'discount');
    }
    if (filter_input(INPUT_POST, 'pendingamount') == "") {
        $pendingAmount = 0;
    } else {
        $pendingAmount = filter_input(INPUT_POST, 'pendingamount');
    }
    $extras = filter_input(INPUT_POST, 'extra');
    if ($service_type == 'X') {
        $viaje = new viajeX($kilometers, $hours, $minutes, $seconds, $fare, $tolls, $earnings, $totalTripPrice, $pendingAmount, $discount, $extras, $payment_type);
    }
    if ($service_type == 'Planet') {
        $viaje = new viajePlanet($kilometers, $hours, $minutes, $seconds, $fare, $tolls, $earnings, $totalTripPrice, $pendingAmount, $discount, $extras, $payment_type);
    }
    if ($service_type == 'Flash') {
        $viaje = new viajeFlash($kilometers, $hours, $minutes, $seconds, $fare, $tolls, $earnings, $totalTripPrice, $pendingAmount, $discount, $extras, $payment_type);
    }
    if ($service_type == 'Comfort') {
        $viaje = new viajeComfort($kilometers, $hours, $minutes, $seconds, $fare, $tolls, $earnings, $totalTripPrice, $pendingAmount, $discount, $extras, $payment_type);
    }
    if ($service_type == 'XL') {
        $viaje = new viajeXL($kilometers, $hours, $minutes, $seconds, $fare, $tolls, $earnings, $totalTripPrice, $pendingAmount, $discount, $extras, $payment_type);
    }
    $difference = $viaje->getDifference();
} else {
    $error = true;
}

include_once("views/calculate_result.php");
