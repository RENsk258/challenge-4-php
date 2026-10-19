<?php

$berat = "75";
$tinggi = "1.70";

$HitungBMI = $berat / ($tinggi * $tinggi);
if ($HitungBMI < 18.5) {
    $kategori = "kurus";
} elseif ($HitungBMI >= 18.5 && $HitungBMI < 24.9) {
    $kategori = "Normal";
} elseif ($HitungBMI >= 25 && $HitungBMI < 29.9) {
    $kategori = "Gemuk";
} elseif ($HitungBMI >= 30)
    $kategori = "Obesitas";
    
    echo "Berat:". $berat . " KG". "<br>";
    echo "Tinggi:". $tinggi . " Meter". "<br>";
    echo "BMI:". number_format($HitungBMI, 0, '.', '.'). "<br>";
    echo "Kategori:". $kategori. "<br>";