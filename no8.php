<?php 
$kecepatan = readline("kecepatan: ");
$jarak = readline("jarak: ");

if (!is_numeric($kecepatan) || !is_numeric($jarak)) {
    echo "Input harus berupa angka.";
} elseif ($kecepatan == 0) {
    echo "Kecepatan tidak boleh nol.";
} else {
    $waktu = $jarak / $kecepatan;
    echo "Waktu yang dibutuhkan : " . $waktu;
}
?>
