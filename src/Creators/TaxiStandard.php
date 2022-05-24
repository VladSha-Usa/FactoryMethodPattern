<?php

namespace TaxiStation\Creators;

use TaxiStation\Taxi;
use TaxiStation\Types\StandardConnector;

class TaxiStandard extends Taxi
{

    public function getTaxi(): StandardConnector
    {
        return new StandardConnector();
    }
}
