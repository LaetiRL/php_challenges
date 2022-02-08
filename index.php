<?php
$movies = [
    'L\'île au trésor' => ['Bobby Driscol', 'Robert Newton', 'Basil Sydney'],
    'Dr. Jekyll et Mr. Hyde' => ['Michael Caine', 'Cheryl Ladd', 'Joss Ackland'],
    'Antoinette dans les Cévennes' => ['Laure Calamy', 'Benjamin Lavernhe', 'Olivia Côte'],
];
foreach($movies as $key => $values) {
    echo "Dans le film $key, les principaux acteurs sont:\n";
    foreach($values as $actors) {
        echo $actors . ", ";
    }
    echo "\n";
} 