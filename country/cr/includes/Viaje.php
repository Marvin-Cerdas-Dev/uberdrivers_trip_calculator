<?php

abstract class Viaje {

    protected $serviceKey;
    protected $basicFare;
    protected $kilometerFare;
    protected $minuteFare;
    protected $extraCharge20KmFare;
    protected $minimunFare;
    protected $profit = 0.75;
    protected $Uberfee = 0.25;
    private $kilometers = 0.00;
    private $time = 0.00;
    private $fare = 0.00;
    private $tolls;
    private $difference = 0.00;
    private $earnings = 0.00;
    private $totalTripPrice = 0.00;
    private $pendingAmount = 0.00;
    private $discount = 0.00;
    private $extraAmount = 0.00;
    private $payment = "";

    function __construct($kilometers, $hours, $minutes, $seconds, $fare, $tolls, $earnings, $totalTripPrice, $pendingAmount, $discount, $extras, $payment) {
        $fares = require(__DIR__ . '/../config/fares.php');
        $this->basicFare           = $fares[$this->serviceKey]['basicFare'];
        $this->kilometerFare       = $fares[$this->serviceKey]['kilometerFare'];
        $this->minuteFare          = $fares[$this->serviceKey]['minuteFare'];
        $this->extraCharge20KmFare = $fares[$this->serviceKey]['extraCharge20KmFare'];
        $this->minimunFare         = $fares[$this->serviceKey]['minimunFare'];
        $this->kilometers = $kilometers;
        $this->time = $this->convertirMinutos($hours, $minutes, $seconds);
        if ($fare > 1 && $fare < 2) {
            $this->fare = $fare - 1;
        } else {
            $this->fare = $fare;
        }
        $this->tolls = $tolls;
        $this->earnings = $earnings;
        $this->totalTripPrice = $totalTripPrice;
        $this->pendingAmount = $pendingAmount;
        $this->discount = $discount;
        $this->extraAmount = $extras;
        $this->difference = $this->calculateDifference();
        $this->payment = $payment;
    }

//###################################### Métodos getters #######################################################

    public function getBasicFare() {
        return $this->basicFare;
    }

    public function getKilometerFare() {
        return $this->kilometerFare;
    }

    public function getMinuteFare() {
        return $this->minuteFare;
    }

    public function getExtraCharge20KmFare() {
        return $this->extraCharge20KmFare;
    }

    public function getMinimunFare() {
        return $this->minimunFare;
    }

    public function getProfit() {
        return $this->profit;
    }

    public function getUberfee() {
        return $this->Uberfee;
    }

    public function getKilometers() {
        return $this->kilometers;
    }

    public function getTime() {
        return $this->time;
    }

    public function getFare() {
        return $this->fare;
    }

    public function getTolls() {
        return $this->tolls;
    }

    public function getDifference() {
        return $this->difference;
    }

    public function getEarnings() {
        return $this->earnings;
    }

    public function getTotalTripPrice() {
        return $this->totalTripPrice;
    }

    function getPendingAmount() {
        return $this->pendingAmount;
    }

    function getDiscount() {
        return $this->discount;
    }

    function getExtraAmount() {
        return $this->extraAmount;
    }

    public function getTotalTolls() {
        $cadena = preg_split("/\s/", $this->getTolls());
        $total = 0;
        for ($i = 0; $i < count($cadena); $i++) {
            if ($cadena[$i] != "+") {
                $total += (integer) $cadena[$i];
            }
        }
        return $total;
    }

    function getPayment() {
        return $this->payment;
    }

//###################################### Métodos de calculo #######################################################
    // Conviente los valores de horas, minutos y segundos a minutos
    private function convertirMinutos($hours, $minutes, $seconds) {
        $htomin = $hours * 60;
        $stomin = $seconds / 60;
        return $htomin + $minutes + $stomin;
    }

    public function calculaMontoTotalViaje() {
        if ($this->getKilometers() <= 1.5 && $this->getFare() == 0) {
            if ($this->getPayment() == "Efectivo") {
                return (double) $this->getMinimunFare() + (double) $this->getExtraAmount() + (integer) $this->getTotalTolls() + $this->getPendingAmount();
            } else {
                return (double) $this->getMinimunFare() + (double) $this->getExtraAmount() + (integer) $this->getTotalTolls();
            }
        } else {
            $fare = 0.0;
            if ($this->getFare() > 0) {
                $subTotal = $this->calculaKilometraje() + $this->calculaTiempo();
                $fare = $subTotal * $this->getFare();
            }
            $pending = 0.0;
            if ($this->getPayment() == "Efectivo") {
                $pending = (float) $this->getPendingAmount();
            }
            return (float) $this->getBasicFare() + (float) $this->calculaKilometraje() +
                    (float) $this->calculaTiempo() + (float) $fare +
                    (integer) $this->getTotalTolls() + (float) $this->getExtraAmount() + $pending;
        }
    }

    public function calculaTarifaDinamica() {
        $subTotal = $this->calculaKilometraje() + $this->calculaTiempo();
        return number_format($subTotal * $this->getFare(), 2);
    }

    public function calculaKilometraje() {
        if ($this->getKilometers() > 20) {
            $excess = $this->getKilometers() - 20;
            return (20 * $this->getKilometerFare()) + ($excess * $this->getExtraCharge20KmFare());
        } else {
            return $this->getKilometers() * $this->getKilometerFare();
        }
    }

    public function calculaTiempo() {
        $whole = floor($this->getTime());
        $decimal = ($this->getTime() - $whole) * 100;
        if ($decimal != NULL && $decimal > 0 && $decimal < 59) {
            return ($whole * $this->getMinuteFare()) + (($decimal / 60) * $this->getMinuteFare());
        } else {
            return $this->getTime() * $this->getMinuteFare();
        }
    }

    private function calculateDifference() {
        $uberfee = (float) $this->calculaComisionUber() * -1;
        return (float) $this->getEarnings() - ($this->calculaMontoTotalViaje() - $uberfee);
    }

    public function calculaComisionUber() {
        if ($this->getKilometers() <= 1.5 && $this->getFare() == 0) {
            return number_format(-($this->getMinimunFare() * $this->getUberfee()), 2);
        } else {
            if ($this->getPayment() == "Efectivo") {
                return -1 * (($this->calculaMontoTotalViaje() - $this->getExtraAmount() - $this->getTotalTolls() - $this->getPendingAmount()) * $this->getUberfee());
            } else {
                return -1 * (($this->calculaMontoTotalViaje() - $this->getExtraAmount() - $this->getTotalTolls()) * $this->getUberfee());
            }
        }
    }

    public function calculaGanancia() {
        $total = (float) $this->calculaMontoTotalViaje() - $this->getExtraAmount() - $this->getTotalTolls();
        $uberfee = (float) $this->calculaComisionUber() * -1;
        return ($total - $uberfee) + $this->getExtraAmount() + $this->getTotalTolls();
    }

}
?>
