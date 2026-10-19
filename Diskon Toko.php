<?php

$TotalHarga = 750000;

if ($TotalHarga >= 500000) {
    $Diskon = 0.15;
} elseif ($TotalHarga >= 200000) {
    $Diskon = 0.1;
} else {
    $Diskon = 0;
}

$HargaSetelahDiskon = $TotalHarga - ($TotalHarga * $Diskon);
echo "Total Harga:Rp. " . number_format($TotalHarga, 0, ',', '.') . "<br>";
echo "Diskon: " . ($Diskon * 100) . "%<br>";
echo "Harga Setelah Diskon:Rp. " . number_format($HargaSetelahDiskon, 0, ',', '.') . "<br>";