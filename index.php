<?php
echo writeSecretSentence("le chat", "la lune");

function writeSecretSentence(string $arg1, string $arg2) {
    return $arg1 . " s'incline face à " . $arg2;
}