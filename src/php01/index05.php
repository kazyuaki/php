<?php
<?php
// [if文]
// $a = 5;

// if ($a === 5) {
// echo "\$aは5です";
// }


// [if ~ else]
// $a = 7;

// if ($a === 5) {
// echo "\$aは5です";
// }else{
// echo "\$aは5以外です";
// }


// [if ~ elseif ~ if]  
// $a = 7;

// if ($a === 5) {
// echo "\$aは5です";
// }elseif ($a === 7){
// echo "\$aは7です";
// }else{
// echo "\$aは5と7以外です";
// }

// [switch] 
// <?php
// $people = "Saburo";

// switch ($people) {
// case "Taro":
// echo "太郎です";
// break;
// case "Jiro":
// echo "次郎です";
// break;
// case "Saburo":
// echo "三郎です";
// break;
// }

// [三項演算子]

$a = 7;
$b = ($a > 5) ? "TRUE" : "FALSE";
echo $b;
