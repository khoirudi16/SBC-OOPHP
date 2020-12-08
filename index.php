<?php

require_once 'App/Elang.php';
require_once 'App/Harimau.php';

$elang1 = new Elang("elang_1", 2, "terbang tinggi", 10, 5);
$elang2 = new Elang("elang_2", 2, "terbang tinggi", 10, 5);

$harimau_1 = new Harimau("harimau_1", 4, "lari cepat", 7, 8);
$harimau_2 = new Harimau("harimau_2", 4, "lari cepat", 7, 8);

//State Awal
echo "State Awal <br>";
echo $elang1->getInfoHewan();
echo "<hr>";
echo $elang2->getInfoHewan();
echo "<hr>";


echo $elang1->diserang($harimau_1);
echo "<br>";
echo $elang1->getInfoHewan();
echo "<hr>";

echo $harimau_1->diserang($elang1);
echo "<br>";
echo $harimau_1->getInfoHewan();
echo "<hr>";
