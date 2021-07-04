<!-- 1. 配列の宣言
配列は複数の型、値を格納することができるデータ型である。 
整数(int)型3個の配列、1,2,3 という要素を格納した配列を宣言しなさい。 
宣言方法は2パターンある。 宣言のちそれぞれに代入する配列の用意の仕方と
代入までまとめて行う書き方で用意する仕方にて配列を用意しなさい -->

パターン１

1. 配列の宣言 
$array = array(1,2,3);

// //2. 配列への値の追加 
$array[] = 4; 
$array[] = 5; 
var_dump($array);

3. 配列の長さの確認 
echo count($array); 

4. 配列の利用1 
echo $array[0];

5. 配列の利用2 
foreach ($array as $value) {
  echo($value);
  echo "\n";
}




<!--パターン２-->

echo "\n";
//1. 配列の宣言 
$array[]=1;
$array[]=2;
$array[]=3;

//2. 配列への値の追加 
$array[]=4;

//3. 配列の長さの確認 
echo count($array); 

//4. 配列の利用1 
echo $array[0];

//5. 配列の利用2 
//5. 配列の利用2 
foreach ($array as $value) {
  echo($value);
  echo "\n";
}




<?php
//6. functionの基礎 
$number3 = [1,2,3,4,5];

foreach ($number3 as $number4){
    echo $number4;
    echo "\n";
}


//7. functionの基礎2 
function isValueDifferenceEvenNumber($minuend,$subtrahend){
    $ValueDifferenceEvenNumber=$minuend-$subtrahend;
    
    if ($ValueDifferenceEvenNumber<0){
        echo '結果が0以下になりました。';
        return;
    }elseif ($ValueDifferenceEvenNumber%2===0) {
        echo 'bool(true)';
        return; // code...
    }else{
        echo 'bool(false)';
        return; // code...
    }
    echo '計算結果は' .$ValueDifferenceEvenNumber. 'です。'; 
}
isValueDifferenceEvenNumber(4,3);
 echo "\n";


//8. functionの基礎3 
   //7の続き、 次の表を確認し、functionを作成しなさい 
   //$number3 を実引数として呼び出し、 結果を出力しなさい
   //出力内容(25)

function getSquareValue ($multiplier){
    if($multiplier = 5) 
    return $multiplier**2;
}
echo getSquareValue($number3);
echo "\n";


//9. functionの基礎4 
    //8の続き、 次の表を確認し、functionを作成しなさい 
    //$boolValueを実引数として呼び出し、 結果を出力しなさい 
    //出力内容 bool(false)

$boolValue = false;
function getInvertedBooleanValue($boolValue){
    // $InvertedBooleanValue=$boolValue;
    // return $boolValue;
    if($boolValue === true){
        return 'false'; 
    }else{
        return 'true';
    }
}
echo getInvertedBooleanValue($boolValue);
echo "\n";


//10. functionの基礎5 9の続き、
    //関数 outputTextSpecifiedCount 第一引数で指定した回数分、第二引数の文字列を出 力する
$number4=3;
$text2='ああああ';

function outputTextSpecifiedCount ($specifiedCount,$text2) {
    if($specifiedCount<=0 || $specifiedCount>10){
        return '範囲外の入力値です';
    }else{
        for ($i=0;$i<$specifiedCount;$i++){
            echo $text2."\n";
        }
    }
}
echo outputTextSpecifiedCount($number4,$text2);

?>