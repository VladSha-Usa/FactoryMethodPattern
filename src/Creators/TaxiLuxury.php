<?php

namespace TaxiStation\Creators;

use TaxiStation\Taxi;
use TaxiStation\Types\LuxuryConnector;

class TaxiLuxury extends Taxi
{

    public function getTaxi(): LuxuryConnector
    {
        return new LuxuryConnector();
    }
}
