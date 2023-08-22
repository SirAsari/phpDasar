<?php
// i = input user
// j = jam, m = menit, d = detik
$i = (int)readline();
$j = 0;
$m = 0;
$d = 0;

// convert ke jam jika bisa
while ($i >= 3600) {
    $j++;
    $i -= 3600;
}

//convert ke menit 
while ($i >= 60) {
    $m++;
    $i -= 60;
}

// ambil sisa detik
$d = $i;

echo $j . " jam " . $m . " menit " . $d . " detik";
