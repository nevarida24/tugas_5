<?php
// membuat fungsi
function myTest() {
    static $x = 0;// deklarasi x sebagai static
    echo $x;// mencetak nilai dari variabel x
    $x++;// increment
}

myTest();// memanggil fungsi mytest
myTest();
myTest();
?>