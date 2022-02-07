<?php
$message1 = '0@sn9sirppa@#?ia’jgtvryko1';
$message2 = 'q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj';
$message3 = 'aopi?sgnirts@#?sedhtg+p9l!';

$keyNumber = mb_strlen($message1) / 2;
$subChain = mb_substr($message1, 5, $keyNumber);
$replace = str_replace('@#?', ' ', $subChain);
$message1 = strrev($replace);

$keyNumber = mb_strlen($message2) / 2;
$subChain = mb_substr($message2, 5, $keyNumber);
$replace = str_replace('@#?', ' ', $subChain);
$message2 = strrev($replace);

$keyNumber = mb_strlen($message3) / 2;
$subChain = mb_substr($message3, 5, $keyNumber);
$replace = str_replace('@#?', ' ', $subChain);
$message3 = strrev($replace);

echo $message1.' '.$message2.' '.$message3;