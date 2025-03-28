<?php

// （引数と戻り値あり
// function outputNumber($a)
// {
//     echo "引数の値は" . "a" . "です";
//     return;
// }
// 
// outputNumber(2);

// (引数と戻り値なし
// function outputHello()
// {
//   echo "Hello world";
// }

// outputHello();


// // (引数と戻り値あり)
// function text($number,$number2)
// {
//     $value = $number + $number2;
//     return $value;
// }

// $total = text(2,4);
// echo $total;

// Question 
// function addNumber($number1,$number2)
// {
//     $value = $number1 + $number2;
//     return $value;
// }

// $answer = addNumber(2,3);
// echo $answer;

// (問題)1

// function exam($score1,$score2,$score3)
// {
//     $total = $score1 + $score2 + $score3;
//     if( $total >210){
//         echo "合計点は" . $total . "点なので合格です";
//     }else{
//         echo "合計点は" . $total . "点なので不合格です";
//     }
// }

// echo(exam(60,20,90));

// (問題)2

function  getSquareArea($base,$height)
{
    return $base * $height;
}

function getTriangleArea($base,$height)
{
    return $base * $height / 2 ;
}

function getTrapezoidArea($upperBase,$lowerBase,$height)
{
    return ($upperBase + $lowerBase) * $height / 2; 
}

echo getSquareArea(5, 5) . "<br/>";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);