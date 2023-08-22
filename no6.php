<?php  
// mencari nilai tertinggi, dan juga menghitung berapa orang yang mendapatkan nilai tertinggi tersebut

$siswa = array();
$i = 0;
$max = 0;
$JumlahSiswaTertinggi = 0;

while ($i < 10) {
    // input dan masukan ke dalam array
    $nilai = readline("Masukan nilai siswa: ");
    $siswa[$i] = $nilai;

    if (!is_numeric($nilai)) {
        echo "Input harus berupa angka\n";
        continue;
    }elseif ($nilai <= 0 || $nilai > 100) {
        echo "Nilai harus berada dalam rentang 1 hingga 100.\n";
        continue;
    }

    if ($siswa[$i] > $max){
        $max = $siswa[$i];
        $JumlahSiswaTertinggi = 1;
    } elseif ($siswa[$i] == $max) {
        $JumlahSiswaTertinggi++;
    } 

    $i++;
}

echo "\nNilai tertinggi siswa : " . $max . "\n";
echo "Jumlah siswa yang memiliki siswa tertinggi : " . $JumlahSiswaTertinggi;

?>