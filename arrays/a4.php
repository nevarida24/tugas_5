<?php
$cars = array("Volvo", "BMW", "Toyota");//menginput beberapa daftar item dalam variabel tunggal
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x]; //menginput variabel
    echo "<br>";
}
?>