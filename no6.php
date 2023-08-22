<?php  
// mencari nilai tertinggi, dan juga menghitung berapa orang yang mendapatkan nilai tertinggi tersebut

$siswa = array();
$i = 0;
$max = 0;
$JumlahSiswaTertinggi = 0;

while ($i < 10) {
    // input dan masukan ke dalam array
    $nilai = readline();
    $siswa[$i] = $nilai;
    
    if ($siswa[$i] > $max){
        $max = $siswa[$i];
        $JumlahSiswaTertinggi = 1;
    } elseif ($siswa[$i] == $max) {
        $JumlahSiswaTertinggi++;
    } 

    $i++;
}

echo "Nilai tertinggi siswa : " . $max . "\n";
echo "Jumlah siswa yang memiliki siswa tertinggi : " . $JumlahSiswaTertinggi;

?>