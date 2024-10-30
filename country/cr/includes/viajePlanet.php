<?php

class viajePlanet {

    private $basicFare = 400.00;
    private $kilometerFare = 240.00;
    private $minuteFare = 40.00;
    private $extraCharge20KmFare = 390;
    private $minimunFare = 800;
    private $profit = 0.75;
    private $Uberfee = 0.25;
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

    function __construct($kilometers, $hours, $minutes, $seconds, $fare, $tolls, $earnings, $totalTripPrice, $pendingAmount, $discount, $extras, $payment) { // Si esta
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
    private function convertirMinutos($hours, $minutes, $seconds) {// Si esta interno
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

//###################################### Métodos toString #######################################################

    public function toString_montoKilometraje() { 
        if ($this->getKilometers() > 20) {
            $excess = $this->getKilometers() - 20;
            echo "&#8353;" . $this->calculaKilometraje() . " => " .
            " (20 x " . "&#8353;" . $this->getKilometerFare() . ") + (" . $excess . " x &#8353;" . $this->getExtraCharge20KmFare() . ")";
        } else {
            echo "&#8353;" . $this->calculaKilometraje() . " => " .
            " (" . "&#8353;" . $this->getKilometers() . " x " . "&#8353;" . $this->getKilometerFare() . ")";
        }
    }

    public function toString_montoTiempo() { 
        echo "&#8353;" . number_format($this->calculaTiempo(), 2) . " => " .
        " (" . number_format($this->getTime(), 2) .
        " x " . "&#8353;" . number_format($this->getMinuteFare(), 2) . ")";
    }

    public function toString_montoDinamica() { 
        echo "&#8353;" . $this->calculaTarifaDinamica() . " => " .
        " (" . $this->getFare() .
        " x (" . "&#8353;" . number_format($this->calculaKilometraje(), 2) . " + " . "&#8353;" . number_format($this->calculaTiempo(), 2) . "))";
    }

    public function toString_montoGanancia() {
        // Importante se suma minimunFare y calculaComisionUber ya que el resultado de calculaComisionUber() es negativo
        return ((double) $this->minimunFare + (double) $this->calculaComisionUber()) + (double) $this->getExtraAmount() + (double) $this->getTotalTolls();
    }

    public function toString_montoTotal() { 
        echo "&#8353;" . number_format($this->calculaMontoTotalViaje(), 2) . " => ";
        if ($this->getKilometers() <= 1.5 && $this->getFare() == 0) {
            echo "(&#8353;" . $this->getMinimunFare();
            if ($this->getTotalTolls() > 0) {
                echo " + " . "&#8353;" . $this->getTotalTolls();
            }
            if ($this->getExtraAmount() > 0) {
                echo " + " . "&#8353;" . $this->getExtraAmount();
            }            
            if ($this->getPayment() == "Efectivo") {
                echo " + " . "&#8353;" . $this->getPendingAmount();
            }
        } else {
            echo "(&#8353;" . (float) $this->getBasicFare() .
            " + " . "&#8353;" . (float) $this->calculaKilometraje() .
            " + " . "&#8353;" . number_format($this->calculaTiempo(), 2);
            if ($this->getFare() > 0) {
                echo " + " . "&#8353;" . $this->calculaTarifaDinamica();
            }
            if ($this->getTotalTolls() > 0) {
                echo " + " . "&#8353;" . $this->getTotalTolls();
            }
            if ($this->getExtraAmount() > 0) {
                echo " + " . "&#8353;" . $this->getExtraAmount();
            }            
            if ( $this->getPayment() == "Efectivo") {
                echo " + " . "&#8353;" . $this->getPendingAmount();
            }
        }
        echo ")";
    }

    public function toString_Ganancia() {
        $uberfee = $this->calculaComisionUber() * -1;
        echo "&#8353;" . number_format($this->calculaGanancia(), 2) . " => ";
        echo "(&#8353;" . number_format($this->calculaMontoTotalViaje(), 2) .
    " - " . "&#8353;" . number_format($uberfee, 2);
        echo ")";
    }

    public function toStringSimple() {
        echo
        'Kilómetros = ' . number_format($this->getKilometers(), 2) . '<br>' .
        'Tiempo = ' . number_format($this->getTime(), 2) . '<br>';
        if ($this->getFare() > 0) {
            echo 'Tarifa dinámica = ' . number_format($this->getFare(), 2) . '<br>';
        }
        if ($this->getTotalTolls() > 0) {
            echo 'Peajes = &#8353;' . $this->getTotalTolls() . '<br>';
        }
        if ($this->getExtraAmount() > 0) {
            echo 'Gratificación extra = &#8353;' . $this->getExtraAmount() . '<br>';
        }
        echo "Comisión de Uber = &#8353;" . $this->calculaComisionUber() . '<br>';
        echo 'Monto total del viaje: &#8353;' . number_format($this->calculaMontoTotalViaje(), 2);
    }

    public function toStringDifference(){
        echo "&#8353;" . number_format($this->calculateDifference(), 2);
    }

}
?>