<?php

namespace TaxiStation\Types;

class StandardConnector implements TaxiConnector
{

    public function printCarModel()
    {
        echo "The model car is Hyundai Sonata";
    }

    public function printTripPrice()
    {
        echo "The price is 10 dollars";
    }
}
