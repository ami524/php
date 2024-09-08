<?php
function outputNumber($a)
{
  echo "引数の値は" . $a . "です";
  return;
}

outputNumber(2);



function text($number1, $number2)
{
    $value = $number1 + $number2;
    return $value;
}

$total = text(2, 3);
echo $total;
echo "<br />";



function score($score1, $score2, $score3)
{
    $score = $score1 + $score2 + $score3;
    if ($score > 210) {
        echo "合計点は" . $score . "なので合格です";
    }else{
        echo "合計点は" . $score . "なので不合格です";
    }
}
echo (score(80, 60, 90));
echo "<br />";


//三角形の面積
function triangle($bottom, $hight)
{
    $area = ($bottom * $hight) / 2;
    return $area;
}
$area = triangle(4, 6);
echo $area;
//四角形の面積
function square($bottom2, $hight2)
{
    $area2 = $bottom2 * $hight2;
    return $area2;
}
$area2 = square(4, 6);
echo $area2;
//台形の面積
function trapezoid($bottom3, $hight3)
{
    $area3 = $bottom3 * $hight3;
    return $area3;
}
$area3 = trapezoid(5, 6);
echo $area3;
echo "<br />";

//計算式はまとめられるらしい

function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);