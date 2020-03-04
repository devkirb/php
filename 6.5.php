<?php
echo " Voer het getal waar je de dag van wilt weten in" . PHP_EOL;
$input = readline();

$array = array(
    "Maandag",
    "Dinsdag" ,
    "Woensdag" ,
    "Donderdag" ,
    "Vrijdag" ,
    "Zaterdag" ,
    "Zondag" ,
);
echo " Bij het nummer " . $input . " hoort de dag " . $array[$input] . PHP_EOL; 

