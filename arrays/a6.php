<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");//menginput beberapa daftar umur dalam variabel tunggal

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value; //penginputan semua daftar yang dimasukkan secara berurutan
    echo "<br>";
}
?>