<?php

$arrayDeIdades = [21, 23, 19, 25, 30, 41, 18];

echo "Elementos no array: " . count($arrayDeIdades) . PHP_EOL;

for ($i = 0; $i < count($arrayDeIdades); $i++) { 
    echo $arrayDeIdades[$i] . PHP_EOL;
}