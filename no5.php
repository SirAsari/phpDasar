<?php 
// ganjil genap
$num = 1;
while ($num <= 50) {
    while ($num % 2 == 0) {
        echo "$num genap\n";
        $num++;
    }
    while ($num % 2 != 0) {
        echo "$num ganjil\n";
        $num++;
    }
    
}
?>