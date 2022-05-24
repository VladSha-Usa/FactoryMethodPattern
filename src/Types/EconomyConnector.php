<?php

namespace TaxiStation\Types;

class EconomyConnector implements TaxiConnector
{

    public function printCarModel()
    {
        echo "The model car is Daewoo Lanos";
    }

    public function printTripPrice()
    {
        echo "The price is 3 dollars";
    }
}
