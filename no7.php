<?php 
$juara = 0;
$juara_siswa = [];
for ($i = 1; $i <= 2; $i++) {
    echo "Siswa ke-$i\n";

    $nama = readline("Nama: ");
    $mtk = (int)readline("Mtk: ");
    $dpk = (int)readline("DPK: ");
    $ing = (int)readline("Ingg: ");
    $agama = (int)readline("Agama: ");
    $indo = (int)readline("Indo: ");
    $kehadiran = (int)readline("Kehadiran: ");
    echo $total = $mtk + $dpk + $ing + $agama + $indo;

    if ($kehadiran != 100) {
        continue;
    }

    if ($total < 475) {
        continue;
    }

    if ($total > $juara) {
        $juara = $total;
        $juara_siswa = [
            'nama' => $nama,
            'total_nilai' => $total
        ];
    }
}

if ($juara > 0) {
    echo "\nJuara kelas: " . $juara_siswa['nama'] . " dengan total nilai " . $juara_siswa['total_nilai'] . "\n";
} else {
    echo "Tidak ada siswa yang memenuhi kriteria\n";
}
?>
