<?php declare(strict_types=1); // strict requirement
function setHeight(int $minheight = 50) {
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50 //mengubah nilai default 50
setHeight(135);//menguban nilai default 135
setHeight(80);
?>