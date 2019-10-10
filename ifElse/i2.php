<?php
// variabel t dengan nilai dari Hour
$t = date("H");
// jika t kurang dari 20
if ($t < "20") {
    echo "Have a good day!";// mencetak kalimat dibawah ini
} else {
    echo "Have a good night!";// jika tidak mencetak kalimat dibawah ini
}
?>