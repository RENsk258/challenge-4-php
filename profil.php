<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Profil Mahasiswa</title>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">

<?php
date_default_timezone_set('Asia/Makassar');

$nama       = "Rangga Arya Pratama";
$panggilan  = "Rangga";
$peran      = "Mahasiswa Sistem Reyasa Komputer";
$tahunLahir = 2006;
$kota       = "Denpasar";
$github     = "RENsk258";
$email      = "aryaaa2258@gmail.com";

$tahunSekarang = (int) date('Y');
$umur          = $tahunSekarang - $tahunLahir;

$jam = (int) date('H');

if ($jam >= 4 && $jam < 11) {
    $sapaan = "Selamat pagi";
} elseif ($jam >= 11 && $jam < 15) {
    $sapaan = "Selamat siang";
} elseif ($jam >= 15 && $jam < 18) {
    $sapaan = "Selamat sore";
} else {
    $sapaan = "Selamat malam";
}

$kategoriUmur = ($umur >= 18) ? "dewasa" : "remaja";
$tanggalHariIni = date('d-m-Y');
?>

<!-- KARTU TAILWIND -->
<div class="bg-white rounded-2xl shadow-xl p-8 max-w-md w-full border border-gray-100">
    
    <!-- Header Sapaan & Nama -->
    <div class="border-b pb-4 mb-4">
        <span class="text-xs font-semibold text-indigo-600 bg-indigo-50 px-2.5 py-1 rounded-full"><?php echo $sapaan; ?>, <?php echo $panggilan; ?>!</span>
        <h2 class="text-2xl font-bold text-gray-800 mt-2"><?php echo $nama; ?></h2>
        <p class="text-sm text-gray-500 font-medium"><?php echo $peran; ?></p>
    </div>

    <!-- Informasi Detail -->
    <div class="space-y-3 text-sm text-gray-600">
        <div class="flex justify-between py-1 border-b border-gray-50">
            <span class="font-medium text-gray-500">Nama Panggilan</span>
            <span class="font-semibold text-gray-800"><?php echo $panggilan; ?></span>
        </div>
        <div class="flex justify-between py-1 border-b border-gray-50">
            <span class="font-medium text-gray-500">Tahun Lahir / Umur</span>
            <span class="font-semibold text-gray-800"><?php echo $tahunLahir; ?> (<?php echo $umur; ?> Tahun / <?php echo $kategoriUmur; ?>)</span>
        </div>
        <div class="flex justify-between py-1 border-b border-gray-50">
            <span class="font-medium text-gray-500">Kota</span>
            <span class="font-semibold text-gray-800"><?php echo $kota; ?></span>
        </div>
        <div class="flex justify-between py-1 border-b border-gray-50">
            <span class="font-medium text-gray-500">GitHub</span>
            <span class="font-semibold text-indigo-600">@<?php echo $github; ?></span>
        </div>
        <div class="flex justify-between py-1 border-b border-gray-50">
            <span class="font-medium text-gray-500">Email</span>
            <span class="font-semibold text-gray-800"><?php echo $email; ?></span>
        </div>
    </div>

    <!-- Footer Waktu & Tahun -->
    <div class="mt-6 pt-4 border-t border-gray-100 flex justify-between items-center text-xs text-gray-400">
        <span>Tanggal: <?php echo $tanggalHariIni; ?></span>
        <span>Jam Server: <?php echo $jam; ?>:00 WITA</span>
        <span>Tahun: <?php echo $tahunSekarang; ?></span>
    </div>

</div>

</body>
</html>