<?php

namespace TaxiStation;

use TaxiStation\Types\TaxiConnector;

abstract class Taxi
{
    abstract public function getTaxi(): TaxiConnector;

    public function orderTaxi(): void
    {
        $taxi = $this->getTaxi();
        $taxi->printCarModel();
        $taxi->printTripPrice();
    }
}
