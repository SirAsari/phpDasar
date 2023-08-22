<?php
$j;
$m;
$d;

echo "j ";
$j = (int)readline();
echo "m ";
$m = (int)readline();
echo "d ";
$d = (int)readline();

$td = $j * 3600 + $m * 60 + $d;

echo "Total detik = " . $td;
?>