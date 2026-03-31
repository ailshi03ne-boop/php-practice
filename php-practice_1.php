<?php
// Q1 変数と文字列

$name = '「桑原」';
echo '私の名前は' . $name . 'です';


// Q2 四則演算

$num =5*4;
echo $num."\n";
echo $num/2;



// Q3 日付操作

echo "現在時刻は".date("Y年m月d日 h時i分s秒");


// Q4 条件分岐-1 if文

$device = "mac";

if ($device == "windows") {
  echo "使用OSは、windowsです。";
} else {
  if ($device == "mac") {
    echo "使用OSは、macです。";
  } else {
    echo "どちらでもありません。";
  }
}


// Q5 条件分岐-2 三項演算子

$age = 20;
$message = ($age < 18) ? '未成年です。' : '成人です。';

echo $message;


// Q6 配列

$arr = ['東京都', '埼玉県' , '神奈川県', '栃木県', '千葉県' , '群馬県' , '茨城県'];

echo $arr[3].'と'. $arr[4].'は関東地方の都道府県です。';


// Q7 連想配列-1

$prefectures = ['東京都' => '新宿区','神奈川県' => '横浜市','千葉県' => '千葉市','埼玉県' => 'さいたま市','栃木県' => '宇都宮市','群馬県' => '前橋市','茨城県' => '水戸市'];

echo $prefectures['東京都']."\n";
echo $prefectures['神奈川県']."\n";
echo $prefectures['千葉県']."\n";
echo $prefectures['埼玉県']."\n";
echo $prefectures['栃木県']."\n";
echo $prefectures['群馬県']."\n";
echo $prefectures['茨城県'];


// Q8 連想配列-2

$prefectures = ['東京都' => '新宿区','神奈川県' => '横浜市','千葉県' => '千葉市','埼玉県' => 'さいたま市','栃木県' => '宇都宮市','群馬県' => '前橋市','茨城県' => '水戸市'];

$pref = '埼玉県';

if ($pref === '埼玉県') {
    echo $pref . 'の県庁所在地は' . $prefectures[$pref] . 'です。';
}


// Q9 連想配列-3

$prefectures = [
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県" => "千葉市",
    "埼玉県" => "さいたま市",
    "茨城県" => "水戸市",
    "栃木県" => "宇都宮市",
    "群馬県" => "前橋市",
    "大阪府" => "大阪市",
    "愛知県" => "名古屋市"
];

foreach ($prefectures as $pref => $capital) {

    if ($pref == "東京都") {
        echo $pref . "の県庁所在地は、" . $capital . "です。\n";
    } else {
        if ($pref == "神奈川県") {
            echo $pref . "の県庁所在地は、" . $capital . "です。\n";
        } else {
            if ($pref == "千葉県") {
                echo $pref . "の県庁所在地は、" . $capital . "です。\n";
            } else {
                if ($pref == "埼玉県") {
                    echo $pref . "の県庁所在地は、" . $capital . "です。\n";
                } else {
                    if ($pref == "茨城県") {
                        echo $pref . "の県庁所在地は、" . $capital . "です。\n";
                    } else {
                        if ($pref == "栃木県") {
                            echo $pref . "の県庁所在地は、" . $capital . "です。\n";
                        } else {
                            if ($pref == "群馬県") {
                                echo $pref . "の県庁所在地は、" . $capital . "です。\n";
                            } else {
                                echo $pref . "は関東地方ではありません。\n";
                            }
                        }
                    }
                }
            }
        }
    }

}



// Q10 関数-1

function hello($name) {
    return  $name.'さん、こんにちは。';
}

echo hello('衛宮')."\n";
echo hello('遠坂');


// Q11 関数-2

function calcTaxInPrice($price) {
     return  $price*1.1;
}

$price = 1000;
$taxInPrice = calcTaxInPrice($price);

echo $price.'の円の商品の税込価格は'.$taxInPrice.'円です。';


// Q12 関数とif文

function distinguishNum($num) {
    if($num %2 !== 0) {
         return $num.'は奇数です。';
   } else {
         return $num.'は偶数です。';
  }
}

echo distinguishNum(11)."\n";
echo distinguishNum(24);


// Q13 関数とswitch文

function evaluateGrade($rank) {

 switch ($rank) {
     case 'A':
     case 'B':
        return '合格です。';
        break;

     case 'C':
        return '合格ですが追加課題があります。';
        break;

     case 'D':
        return '不合格です。';
        break;

     default:
        return '判定不明です。講師に問い合わせてください。';
        break;
    }
}

echo evaluateGrade('A')."\n";
echo evaluateGrade('E');
?>