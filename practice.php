<?php
echo 'hello php!';

//PHP/Laravel 02
//1.
$a = 3;
$b = 7;
echo $a + $b;
//10と出力

//2.
$array = ["1月", "2月", "3月", "4月", "5月" ,"6月" ,"7月" ,"8月"
,"9月" ,"10月" ,"11月" , "12月"];
echo $array[7];
//8月と出力

//3.
$hello = "Hello,";
$name = "hasegawa";
$world = "s World!";
echo $hello.$name.$world;
//Hello,hasegawas World!と出力

//4.
$tech_boost = "tech";
$tech_boost .= " boost!";
echo $tech_boost;
//tech boostと出力

//5.
$calender2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];
  echo $calender2018["December"];
  //変数名のはじめが数字同じはNG。12月を表示する。
  
//PHP/Laravel 03課題

//1.
$name = "hasegawa";
// もし $height が 150 未満の数値なら、 ifのあとの { } の中のコードが実行される
// それ以外なら、 else のあとの　｛ ｝ の中のコードが実行される

if ($name == "hasegawa") {
  echo "私は あなたの名前 です。";//if文で $name があなたの名前だったら
} else {//それ以外なら
  echo "あなたの名前ではありません。";
}

//=> 私は あなたの名前 ですと表示。

//2.
$total = 0;
echo $total;
//=> 0 と表示される。

// $iが0から始まり、$iが100以下の間繰り返し処理を行う。
for ($i = 0; $i <= 1000; $i++) {
  $total += $i;
}
echo $total;
//=> 5005000と表示される。

//3.
$fruits = array("apple", "grape", "banana","peache","lemon");
// $fruits から一つずつ要素を取り出して、$fruit に代入される

foreach($fruits as $fruit){
  echo "順番は" . $fruit;
  echo "\n"; //\n改行
}

//=> 順番に果物が出力

// 4. 解答不可！！！！
//for文の始めの値を定義する
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){ //<=$end100以下

  //5で割り切れたら{}内を実行する
  if($i % 5 == 0){ //==左辺右辺が等しい場合。%は余り
    echo $i;
  }
}

//PHP/Laravel 04
//1.
$value = 2;
echo $value * 2;

//2.
function f($a, $b){ //関数f作成、仮引数に$a, $b
  $sum = $a + $b;
  return $sum; //returnで戻り値。戻り値「$sum」を変数「$result」に格納しています。これで戻り値が利用できるようになりました。
 //処理したい内容
}
$result = f(5, 3);

echo $result; //echoで変数「$result」を出力

//3.
//array_product使うことで配列変数の各要素の積を返す	
$varArray = array( 1, 3, 5, 7, 9 );
echo array_product( $varArray );
//945と出力

//4.不明！！！！！
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_numbers = $arr[0];
 foreach($max_numbers as $max_number){
 //どうしたらいいかわからない・・・・
 }

 return $max_number;
 }
 
//5.
//◎strip_tags関数(ビルトイン関数)はHTMLタグやPHPタグを取り除く
$str = "<h1>strip_tags関数はHTMLタグやPHP</h1>"
  . "<p>タグ取り除く</p>";
echo strip_tags($str) ."\n";

//◎array_push(ビルトイン関数)1つ以上の要素を配列の最後に追加したい場合にはを使用
$fruits = ['apple', 'orange'];
 
//array_pushを使用して要素を追加する
array_push($fruits, 'banana', 'pineapple');
 
print_r($fruits);

//◎array_mergeビルトイン関数,配列の要素の最後にひとつまたは複数の配列を結合するときは使用します。
//配列を作成NO1：一次元配列
$array1 = [1, 2, "test"];
$array2 = [10, 20, "test2"];
$array3 = [100, 200];
 
//配列を結合する
$array = array_merge($array1, $array2, $array3);
 
print_r($array);

//配列を作成NO2：連想配列
$fruits1 = [
            0=>'apple',
            1=>'orange',
            2=>'melon'
          ];
 
$fruits2 = [
            0=>'strawberry',
            1=>'cherry'
           ];
 
//配列をマージする
$fruits_merge = array_merge($fruits1, $fruits2);
 
print_r($fruits_merge);


//◎dateビルトイン関数,の場合、現在のUnixタイムスタンプを表示(日付・時刻を書式化する)
// 以下の2つは同じ動作をします。
// date("Y/m/d", time());
// date("Y/m/d");
// echo time();
echo '現在のUnixタイムスタンプは：'.time();


//◎mktimeビルトイン関数,指定した日時のタイムスタンプを取得、2017/8/1の日付を指定しています。
$timestamp = mktime(0, 0, 0, 8, 1, 2017);
echo $timestamp;

// date()ビルトイン関数で日時を出力。タイムゾーンの設定をすること。Y：年、m：月、d：日、H：時間、i：分、s：秒、.(ドット)：文字列連結、\n：改行。
date_default_timezone_set('Asia/Tokyo');

echo date("Y/m/d H:i:s") . "\n";


?>
