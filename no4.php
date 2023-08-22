<?php
$i = (int)readline();
$j = 0;
$m = 0;
$d = 0;

while ($i >= 3600) {
    $j++;
    $i -= 3600;
}

while ($i >= 60) {
    $m++;
    $i -= 60;
}

$d = $i;

echo $j . " jam " . $m . " menit " . $d . " detik";
