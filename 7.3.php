<?php
    $x = 0;
    $array = array();
    echo "Geef me nu 10 doubles" . PHP_EOL;
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

echo "Het gemiddelde is " . $gemiddeld . PHP_EOL;
echo "Het aantal doubles boven het gemiddelde is " . $x . PHP_EOL;
