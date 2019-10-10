<?php
// deklarasi x dan y
$x = 5;
$y = 10;

function myTest() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];// membuat global variabel dan menjumlahkan x dan y
}

myTest();// memanggil fungsi mytest
echo $y; // menampilkan nilai dari variabel y
?>
