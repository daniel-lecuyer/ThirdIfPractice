<?php
function getFuelLiters($litersSpentPerHundredKilometers, $amountOfKilometers) {
    $fuelLiters = $litersSpentPerHundredKilometers * $amountOfKilometers;
    return $fuelLiters;
}
function getCostOfFuel($fuelLiters, $fuelCostPerLiters) {
    $costOfFuel = $fuelLiters * $fuelCostPerLiters;
    return $costOfFuel;
}
function getAmountOfDollars($amountOfCustomer, $pricePerCustomer) {
    $amountOfDollars = $amountOfCustomer * $pricePerCustomer;
    return $amountOfDollars;
}
function getText($total) {
    if($total >0 ) {
        return PHP_EOL."Il est profitable: ".$total.PHP_EOL;
    }
    if($total < 0) {
        return PHP_EOL."Il a perdu: ".$total.PHP_EOL;
    }     
}

$amountOfKilometers = 500;
$litersSpentPerHundredKilometers = 27 / 100;
$fuelCostPerLiter = rand(135, 147) /100;
$amountOfCustomer = 142;
$pricePerCustomer = 12;
$fuelLiters = getFuelLiters($litersSpentPerHundredKilometers, $amountOfKilometers);
$costOfFuel = getCostOfFuel($fuelLiters, $fuelCostPerLiter);
$amountOfDollars = getAmountOfDollars($amountOfCustomer, $pricePerCustomer);
$total = $amountOfDollars - $costOfFuel;

$text = getText($total);
echo $text;