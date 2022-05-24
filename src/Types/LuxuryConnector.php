<?php

namespace TaxiStation\Types;

class LuxuryConnector implements TaxiConnector
{

    public function printCarModel()
    {
        echo "The model car is LC 200";
    }

    public function printTripPrice()
    {
        echo "The price is 150 dollars";
    }
}
