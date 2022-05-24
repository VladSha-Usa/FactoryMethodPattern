<?php

namespace TaxiStation\Creators;

use TaxiStation\Taxi;
use TaxiStation\Types\EconomyConnector;

class TaxiEconomy extends Taxi
{

    public function getTaxi(): EconomyConnector
    {
        return new EconomyConnector();
    }
}
