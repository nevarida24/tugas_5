<?php declare(strict_types=1); // strict requirement 

function addNumbers(int $a, int $b) {
    return $a + $b;
}
echo addNumbers(5, "5 days"); //karena php diaktifkan dan 5hari bukan bilangan bulat, maka akan terjadi kesalahan
// since strict is enabled and "5 days" is not an integer, an error will be thrown
?>