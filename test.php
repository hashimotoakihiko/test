
<!-- //1. 基本的な変数の宣言
$number = 5;
$text = ああああ;
$flg = true;
$test = null;

2基本的な変数の出力
echo $number;
echo '<br>';
echo $text;
echo '<br>';
echo $flg;
echo '<br>';
echo $test;


3変数の情報の出力
echo vardump($flg);
echo vardump($test); -->


<!-- 4基本的な計算
$number1 = 10; 
$number2 = 5;

    //加算
    $number = $number1+$number2;
    echo $number;
    echo '<br>';
    //減算
    $number = $number1-$number2;
    echo $number;
    echo '<br>';
    //乗算
    $number = $number1*$number2;
    echo $number;
    echo '<br>';
    //除算
    $number = $number1/$number2;
    echo $number;
    echo '<br>';
    //剰余算
    $number = $number1%$number2;
    echo $number;
    echo '<br>'; -->

<!-- 5. if文の利用 -->

    <!-- $i=time();

    if ($i%2==0) {
        echo '偶数です';
    }else {       
        echo '奇数です';
    } -->



<!-- 6. for文の基礎 
1以上10以下の数字をfor文を使って出力しなさい 出力内容
1 2 3 4 5 6 7 8 9 10 -->
    

    <!-- for($i=1;$i<=10;$i++){
      echo $i;
    } -->

<!-- 7. for文の基礎2
6の続き、 35以上46未満の数字をfor文を使って出力しなさい
出力内容
35 36 37 38 39 40 41 42 43 44 45 -->

<!-- for($i=35;$i<=45;$i++){
    echo $i;
   } -->


<!-- 8. for文と条件式の組み合わせ2
7の続き、 100未満の自然数の内、3の倍数の数字のみを出力しなさい 
出力内容
3 6 9 12 15 18 21 24 27 30 33 36 39 42 45 48 51 54 57 60 63 66 69 72 75 78 81 84
87 90 93 96 99 -->


    <!-- for($i=3;$i<100;$i+=3){

      echo $i;
    } -->


<!-- 9. for文を使用した計算
100未満の自然数の内、「3または7の倍数」の数値は何個あるか 個数を出力しなさい 
出力内容
43個 -->
<!-- 3 6 9 12 15 18 21 24 27 
7 14 21 28 35 42 49 56 63 -->
 

<!-- $count = 0;
for($i=1; $i<=100; $i++){
    if($i % 3 === 0 || $i % 7 === 0){
        $count++;
    }
}
echo $count.PHP_EOL; -->


<!-- 10. for文を使用した計算2 
9の続き、 100未満の自然数の内、「3または7の倍数」の5番目に大きい数を出力しなさい 出力 内容) 
91 

$count = 0;
for($i=100; $i>=1; $i--){
    if($i % 3 === 0 || $i % 7 === 0){
        $count++;
    }

// echo $count.PHP_EOL;
if ($count >= 5) {
        echo $i . PHP_EOL;
        break;
    }
} -->


<!-- 11. for文を使用した計算3 
10の続き、 100未満の自然数の内、「３または7の倍数」の合計値を出力しなさい 出力 内容)  -->
<!-- 2208  -->

<!-- 
$sum = 0;
for($i=1; $i<100; $i++){
    if($i % 3 === 0 || $i % 7 === 0){
     $sum += $i; 
    }
   
}
echo $sum; -->


<!-- 12. ループの終了 
1000から2000までの間で1の桁が7の数字の最初の数字を求めて出力しなさい for文を使用し出力しな さ い break文を使った場合、使わない場合とでそれぞれ作成すること 
出力内容
1007  -->

<!-- 1　break未使用 -->

<!-- $result = false;

for($i=1000; $i<=2000 && !$result;$i++){
     if($i % 10 == 7 )
   $result=$i;
 }   
 echo $result;
 echo PHP_EOL; -->


<!-- 2 break使用 -->


<!-- for($i=1000; $i<=2000; $i++){
  if($i % 10 === 7 ){
  echo $i;
  break;
  }
} -->


<!-- 13. switch文
5の続き、 switch文を利用し、次のように出力を行いなさい -->

    <!-- 5. if文の利用 

    $i=time();

    if ($i%2==0) {
        echo '偶数です';
    }else {       
        echo '奇数です';
    } -->




    <!-- 13 swich文
    $i=time();

    switch ($i%2==0) {
        case '偶数なら':
            // code...
            echo '偶数です';
            break;
        
        default:
            // code...
            echo '奇数です';
            break;
    } -->


<!--14. 図形の表示 -->
  <!--次の図形を再現しなさい -->
  <!--0 -->
  <!--00 -->
  <!--000 -->
  <!--echo "0"; -->
  <!--echo "00"; -->
  <!--echo "000"; -->
  <!--の様にする問題ではない。for文を一個以上使用すること-->


  <?php
    for($i=1;$i<4;$i++){
        for($n=0;$n<$i;$n++){
            echo '0';
        }
        echo PHP_EOL;
    }



?>




