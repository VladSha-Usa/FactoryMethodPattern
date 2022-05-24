<?php

include './vendor/autoload.php';

use TaxiStation\Creators\TaxiEconomy;
use TaxiStation\Creators\TaxiLuxury;
use TaxiStation\Creators\TaxiStandard;
use TaxiStation\Taxi;


function clientCode(Taxi $taxi)
{
    $taxi->orderTaxi();
}
$taxiEconomy = new TaxiEconomy();
clientCode($taxiEconomy);
