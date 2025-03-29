<?php

// (算術演算子)
// $a = 15;
// $b = 3;
// $c = 10;

// $answer1 = $a + $b;
// $answer2 = $a - $b;
// $answer3 = $a * $b;
// $answer4 = $a / $b;
// $answer5 = $a % $c;

// echo $answer1;
// echo "<br />";
// echo $answer2;
// echo "<br />";
// echo $answer3;
// echo "<br />";
// echo $answer4;
// echo "<br />";
// echo $answer5;

// (代入演算子と複合演算子)
// $a = 15;
// $b = 3;
// $c = 10;
// $d = 5;

// $a = $b;
// $c += $d;

// echo $a;
// echo "<br />";
// echo $c;
// echo "<br />";

// (比較演算子)
// $a = 20;
// $b = 5;

// echo ($a > $b);
// echo "<br />";

// (論理演算子)
// $a = 20;
// $b = 5;

// echo ($a > 10 && $a < 30);
// echo "<br />";

// (加算子と減算子)
// $a = $b = 10;
// $c = $d = 5;

// echo ++$a;
// echo "<br />";
// echo $b++;
// echo "<br />";
// echo --$c;
// echo "<br />";
// echo $d--;


// 番外編 九九表 for文

for($i = 1; $i <= 9; $i++){
    for($j = 1; $j <= 9; $j++){
        $result = $i * $j;
        $row = $result . " ";
        echo $row;
    }
        echo '<br>';
}
echo '<br>';

// 九九表 while文
$i = 1;
while ($i <= 9) {
    $j = 1;
    while($j <= 9){
        $result = $i * $j;
        $row = $result . " ";
        $j++;
        echo $row;
    }
    echo '<br>';
    $i++;   
}


