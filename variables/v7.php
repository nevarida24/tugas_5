<?php
// deklarasi variabel x dan y
$x = 5;
$y = 10;
// membuat fungsi msTest
function myTest() {
    global $x, $y;// menjadikan variabel x dan y menjadi global
    $y = $x + $y; // menjumlahkan nilai dari x dan y
}

myTest();// menjalankan fungsi myTest
echo $y; // output the new value for variable $y
?>