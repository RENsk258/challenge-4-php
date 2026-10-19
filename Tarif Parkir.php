<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Sistem Parkir</title>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">

<?php
$jenisKendaraanBesar = "Mobil";
$lamaJamMobilParkir = 4;
$hargaParkirMobil = 5000;
$jenisKendaraanKecil = "Motor";
$lamaJamParkirMotor = 6;
$hargaParkirMotor = 2000;

if ($lamaJamMobilParkir <= 2 ) {
    $biayaMobil = 5000;
} elseif ($lamaJamMobilParkir > 2) {
    $sisaJamMobil = $lamaJamMobilParkir - 2;
    $biayaMobil = 5000 + ($sisaJamMobil * 3000);
}

if ($lamaJamParkirMotor <= 2) {
    $biayaMotor = 2000;
} elseif ($lamaJamParkirMotor > 2) {
    $sisaJamMotor = $lamaJamParkirMotor - 2;
    $biayaMotor = 2000 + ($sisaJamMotor * 1000);
}
?>

<!-- Container Kartu Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl w-full">
    
    <!-- Kartu Mobil -->
    <div class="bg-white rounded-2xl shadow-xl p-6 border border-gray-100">
        <div class="flex items-center justify-between border-b pb-4 mb-4">
            <h2 class="text-xl font-bold text-gray-800"><?php echo $jenisKendaraanBesar; ?></h2>
            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded">Roda Empat</span>
        </div>
        <div class="space-y-3 text-gray-600 text-sm">
            <div class="flex justify-between">
                <span class="font-medium">Berapa Jam Parkir:</span>
                <span class="font-bold text-gray-800"><?php echo $lamaJamMobilParkir; ?> Jam</span>
            </div>
            <div class="flex justify-between">
                <span class="font-medium">Tarif Awal:</span>
                <span>Rp <?php echo number_format($hargaParkirMobil, 0, ',', '.'); ?> (2 Jam Pertama)</span>
            </div>
            <div class="flex justify-between items-center bg-blue-50 p-3 rounded-lg mt-4">
                <span class="font-semibold text-blue-900">Total Biaya:</span>
                <span class="text-lg font-bold text-blue-700">Rp <?php echo number_format($biayaMobil, 0, ',', '.'); ?></span>
            </div>
        </div>
    </div>

    <!-- Kartu Motor -->
    <div class="bg-white rounded-2xl shadow-xl p-6 border border-gray-100">
        <div class="flex items-center justify-between border-b pb-4 mb-4">
            <h2 class="text-xl font-bold text-gray-800"><?php echo $jenisKendaraanKecil; ?></h2>
            <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">Roda Dua</span>
        </div>
        <div class="space-y-3 text-gray-600 text-sm">
            <div class="flex justify-between">
                <span class="font-medium">Berapa Jam Parkir:</span>
                <span class="font-bold text-gray-800"><?php echo $lamaJamParkirMotor; ?> Jam</span>
            </div>
            <div class="flex justify-between">
                <span class="font-medium">Tarif Awal:</span>
                <span>Rp <?php echo number_format($hargaParkirMotor, 0, ',', '.'); ?> (2 Jam Pertama)</span>
            </div>
            <div class="flex justify-between items-center bg-green-50 p-3 rounded-lg mt-4">
                <span class="font-semibold text-green-900">Total Biaya:</span>
                <span class="text-lg font-bold text-green-700">Rp <?php echo number_format($biayaMotor, 0, ',', '.'); ?></span>
            </div>
        </div>
    </div>

</div>

</body>
</html>