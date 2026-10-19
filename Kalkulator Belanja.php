<?php

$NamaBarang = "Keranjang Belanja";
$Harga      = 15000;
$jumlah     = 5;

$TotalHarga = $Harga * $jumlah;
echo "Nama Barang: " . $NamaBarang . "<br>";
echo "Harga Barang:Rp. " . number_format($Harga, 0, ',', '.') . "<br>";
echo "Jumlah Barang: " . $jumlah . "<br>";
echo "Total Harga:Rp. " . number_format($TotalHarga, 0, ',', '.') . "<br>";