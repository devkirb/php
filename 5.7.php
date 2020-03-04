<?php
$kwadraat = 0;
$input = 0;
    while($kwadraat <= 1000) {
      $kwadraat = $input * $input;
      $input++;
}
echo "Het antwoord is " . $kwadraat . PHP_EOL;
