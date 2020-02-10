<?php
$x = 0;
$array = array();
echo "GEEF DOUBLES 10 NU".PHP_EOL;
for ($i = 1; $i <= 10; $i++) {
    $doubles = readline();
   
    $array[] =  $doubles;
}; 
$totaal = array_sum ($array);

$gemiddeld = $totaal / 10;
foreach($array as $value){
        if ($value > $gemiddeld){
            $x++;
        };

};

echo "Het gemiddelde is ". $gemiddeld.PHP_EOL;
echo "Het aantal boven het gemiddelde is ". $x.PHP_EOL;