<?php
$i = (int) readline("Masukan total : ");
$j = floor($i / 3600); // Jam
$m = floor(($i % 3600) / 60); // Menit
$d = $i % 60; // Detik

echo "$j jam $m menit $d detik";
?>
