<?php
// deklarasi variabel
$favcolor = "red";
// variabel yang dipilih untuk pemilihan
switch ($favcolor) {
    // jika nilai dari favcolor adalah red
    case "red":
        echo "Your favorite color is red!";// mencetak kalimat dibawah ini
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
        // jika tidak ada case yang sama maka akan menceta kalimat dibawah ini
}
?>