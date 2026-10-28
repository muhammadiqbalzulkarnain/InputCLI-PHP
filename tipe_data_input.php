<?php
$umur = readline("Masukkan umur: ");  // masih string
$umur = (int)$umur;                  // ubah jadi integer

$tinggi = (float)readline("Masukkan tinggi badan: "); // langsung float

var_dump($umur, $tinggi);
?>