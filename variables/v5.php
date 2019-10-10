<?php
// mendeklarasikan variabel x
$x = 5; // global scope
//  membuat fungsi myTest
function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";// menampilkan text dengan nilai dari variabel x
}
myTest();// memanggil fungsi

echo "<p>Variable x outside function is: $x</p>";// menampilkan string dan nilai dari variabel x
?>