<?php

namespace TaxiStation\Types;

interface TaxiConnector
{
    public function printCarModel();

    public function printTripPrice();
}
