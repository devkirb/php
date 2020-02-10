<?php
echo " van welk getal wil je dedag weten".PHP_EOL;
$input = readline();


$array = array(
    "kek",
    "maandag" ,
    "dinsdag" ,
    "woensdag" ,
    "dodnerdag" ,
    "vrietdagh" ,
    "zaterdag" ,
    "zondagj" ,
);
    
echo " Bij nummer  ". $input. " hoort de weekdag " . $array[$input].PHP_EOL; 

