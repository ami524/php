<?php
$a = 15;
$b = 3;
$c = 10;

$answer1 = $a + $b;
$answer2 = $a - $b;
$answer3 = $a * $b;
$answer4 = $a / $b;
$answer5 = $a % $c;

echo $answer1;
echo "<br />";
echo $answer2;
echo "<br />";
echo $answer3;


$a2 = 15;
$b2 = 3;
$c2 = 10;
$d2 = 5;

$a2 = $b2;
$c2 += $d2;

echo $a2;
echo "<br />";
echo $c2;
echo "<br />";


$a3 = 20;
$b3 = 5;

echo ($a3 > $b3);
echo "<br >";


$a4 = 20;
$b4 = 5;

echo ($a4 > 10 && $a4 < 30);
echo "<br />";


$a5 = $b5 = 10;
$c5 = $d5 = 5;

echo ++$a5;
echo "<br />";
echo $b5++;
echo "<br />";
echo --$c5;
echo "<br />";
echo $d5--;

$a = 20;
$b = 5;

echo ($a > $b);
echo "<br />";