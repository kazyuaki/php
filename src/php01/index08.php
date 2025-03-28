<?php 
// 「配列」
// $people = array('Taro','Jiro','Saburo');

// 詳細を出力↓
// var_dump($people); 

// 配列番号で出力↓
// echo $people[0];




// 「連想配列」
// $people = array(
//     'person1' =>'Taro',
//     'person2' =>'Jiro',
//     'person3' =>'Saburo'
// );

// ↓出力の仕方は２種類
// echo $people['person2'];
// var_dump($people);



// 「連想配列」[]ver
// $people = [
//     "person1" => "taro",
//     "person2" => "jiro",
// ];

// ↓こちらも、出力の仕方は２種類
// echo $people["person1"];
// var_dump($people);

// 「多次元配列」
// $people = [
//     [
//         "last_name" => "山田",
//         "first_name" => "太郎",
//         "age" =>  29,
//         "gender" => "男性"
//     ],
//     [
//         "last_name" => "鈴木",
//         "first_name" => "次郎",
//         "age" => 25,
//         "gender" => "男性"
//     ],
//     [
//         "last_name" => "佐藤",
//         "first_name" => "花子",
//         "age" => 20,
//         "gender" => "女性"
//     ]
//     ];

//     echo $people[0]["last_name"] . "\n" . $people[0]["first_name"] . "<br>" ;
//     echo "年齢は". $people[0]["age"] ."です";

// 「foreach文」
// $people = array('Taro','Jiro','Saburo');

// foreach($people as $person){
//     echo $person;
//     echo '<br/>';
//     // var_dump($people);
// }

// 「foreach文」添字
// $people = array(
//     'person1' => 'Taro',
//     'person2' => 'Jiro',
//     'person3' => 'Saburo',
// );

// foreach($people as $person => $name){
//     print $person . "は" . $name . "です" . "<br/>";
// }

// Question 
$people = [
    ['Taro',25,'men'],
    ['Jiro',20,'men'],
    ['Hanako',16,'women']
];
    

foreach($people as $person){
    echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')' . '<br/>' ;
}