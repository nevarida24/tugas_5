<?php
// variabel t dengan nilai dari Hour
$t = date("H");
// mencetak kalimat dibawah ini
echo "<p>The hour (of the server) is " . $t; 
echo ", and will give the following message:</p>";
// jika t kurang dari 10
if ($t < "10") {
    echo "Have a good morning!"; // mencetak kalimat dibawah ini
    // jika t kurang dari 20 dan lebih dari 10
} elseif ($t < "20") {
    echo "Have a good day!";// mencetak kalimat dibawah ini
} else {
    echo "Have a good night!";  // mencetak kalimat dibawah ini
}
?>