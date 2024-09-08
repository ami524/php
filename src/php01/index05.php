<?php

for ($i = 1; $i <= 5; $i++) {
    echo $i * 2 . "<br />";
}


$count = 0;

while ($count < 20) {
    $count += 1;
    echo $count . "<br />";
}
echo "<br />";

while ($count <= 100) {
    if ($count === 20) {
        break;
    }
    if ($count % 3 === 0) {
        $count++;
        continue;
    }
    echo $count . "<br />";
    $count++;
}


echo "do...while文";
echo "<br />";



$nume = 0;
do {
    echo "num = $nume" . "<br />";
    $nume++;
} while ($nume < 3);


$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i2 = 1; $i2 <= 50; $i2++) {
    if ($i2 % 15 == 0) {
        echo $FizzBuzz;
    }
    else if ($i2 % 3 == 0) {
        echo $Fizz;
    }
    else if ($i2 % 5 == 0) {
        echo $Buzz;
    } else {
        echo $i2;
    }
}
echo "<br / >";


for ($i3 = 1; $i3 < 6; $i3++) {
    for ($j = 1; $j < 6; $j++) {
        echo "●";
    }
    echo "<br />";
}