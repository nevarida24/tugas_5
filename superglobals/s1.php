<?php
// deklarasi
$x = 75;
$y = 25;
 // membuat fungsi
function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];  // menjumlahkan variabel x dan y
}
 
addition();// memanggil fungsi
echo $z;// mencetak z
?>