<?php
$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)];

if ($opponentWeapon === $weapons[0]) {
    $stevensonWeapon = $weapons[2];
} elseif ($opponentWeapon === $weapons[1]) {
    $stevensonWeapon = $weapons[0];
} else {
    $stevensonWeapon = $weapons[1];
}
echo "L'opposant utilise $opponentWeapon, alors Stevenson utilise $stevensonWeapon.";