<?php 
$num1 = (int)readline();
$num2 = (int)readline();
$num3 = (int)readline();

if ($num1 > $num2 && $num1 > $num3) {
    echo "num $num1 terbesar";
}
else if ($num2 > $num1 && $num2 > $num3) {
    echo "num1 $num2 terbesar";
}
else {
    echo "num3 $num3 terbesar";
}
?>