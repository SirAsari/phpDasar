<?php 
$juara = 0;

for ($i = 1; $i <= 15; $i++) {
    echo "Siswa ke-$i\n";
    
    $mtk = (int) readline("Mtk: ");
    $dpk = (int) readline("DPK: ");
    $ing = (int) readline("Ingg: ");
    $agama = (int) readline("Agama: ");
    $indo = (int) readline("Indo: ");
    $kehadiran = (int) readline("Kehadiran: ");

    if ($kehadiran != 100) {
        echo "Kehadiran tidak mencapai 100\n";
        continue;
    }

    $total = $mtk + $dpk + $ing + $agama + $indo;

    if ($total <= 475) {
        echo "Total nilai tidak mencapai 475\n";
        continue;
    }

    if ($total > $juara) {
        $juara = $total;
    }
}

echo "Nilai tertinggi: $juara\n";

?>
