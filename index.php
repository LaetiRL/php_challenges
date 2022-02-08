<?php
$book = [
    'L\'île au trésor' => '1883',
    'Catriona' => '1893',
    'Le club du suicide' => '1878',
];
asort($book);
foreach ($book as $key => $value) {
    echo $value . " - " . "$key\n";
} 