<?php
// 「for文の使い方」
// for( $i = 0 ; $i <= 5 ; $i++){
//     echo $i * 2 .  "<br/>" ;
// }


// 「while文の使い方」
// $count = 1;

// while($count < 21){
//     echo  $count .' <br/>';
//     $count ++;
// }

// 「while-breakの使い方」
// $i = 0;
// while ($i < 10) {
//   if ($i == 5) {
//     break;
//     $iが5の時、ループから抜ける。
//   }
//   echo $i;
//   $i ++;
// }

// // 「while-continueの使い方」
// $i = 0;
// while($i < 10){
//     if($i ==5){
//         $i++;
//         continue;
//     }
//     echo $i . '<br>';
//     $i++;
// }

// Questuion while break+continue
// $count = 0;

// while($count <= 100){
//     if($count == 20){
//         break; 
//     }
//     if($count % 3 === 0){
//         $count++;
//         continue;
//     }
//     echo $count . '<br>';
//     $count++;
// }

// 「do...while文の使い方」
// $i = 0;
// do {
//     echo $i . '<br/>';
//     $i++;
// }while($i < 5);

// Quesution do while
// $num = 0;
// do{
//     echo "num = " . $num . '<br/>';
//     $num++;
// }while($num < 3);

// Question FizzBuzz for if
// $Fizz = "Fizz";
// $Buzz = "Buzz";
// $FizzBuzz = "FizzBuzz";

// for($i = 1; $i <= 50; $i++){
//     if($i % 3 == 0){
//         echo $Fizz;
//     }else if($i % 5 == 0){
//         echo $Buzz;
//     }else if($i % 15 == 0){
//         echo $FizzBuzz;
//     }else{
//         echo $i;
//     }
    }

// Question Double loop
for ($i = 1; $i < 6; $i++) {
  for ($j = 1; $j < 6; $j++) {
    echo "●";
  }
  echo "<br />";
}

