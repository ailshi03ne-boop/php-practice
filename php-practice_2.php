<?php
// Q1 tic-tac問題

$rules = [4 => "tic",5 => "tac"];

for ($i = 1; $i <= 100; $i++) {
    $matches = [];

    foreach ($rules as $num => $text) {
        if ($i % $num === 0) {
            $matches[] = $text;
        }
    }

    if (empty($matches)) {
        echo $i . "\n";
    } else {
        echo implode("-", $matches) . "\n";
    }
}

// Q2 多次元連想配列
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

var_dump($personalInfos);




echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です';





foreach ($personalInfos as $index => $person) {
    echo ($index + 1) . '番目の' 
        . $person['name'] . 'のメールアドレスは' 
        . $person['mail'] . 'で、電話番号は' 
        . $person['tel'] . "です。\n";
}




$ageList = [25, 30, 18];

$i = 0;

foreach ($personalInfos as &$person) {
    $person['age'] = $ageList[$i];
    $i++;
}

var_dump($personalInfos);

// Q3 オブジェクト-1

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$student = new Student(378, '東風谷');

echo '学籍番号' . $student->studentId . '番の生徒は' . $student->studentName . 'です。';

// Q4 オブジェクト-2

class Student {
    private $id;
    private $name;

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

    public function attend($lesson) {
        echo $this->name . "は" . $lesson . "の授業に参加しました。学籍番号：" . $this->id;
    }
}

$sanae = new Student(378, '東風谷');
$sanae->attend('PHP');

// Q5 定義済みクラス

$date = new DateTime('-1 month');
echo $date->format('Y-m-d');




$today = new DateTime();
$past = new DateTime('1992-04-25');

$diff = $today->diff($past);


echo 'あの日から' . $diff->days . '日経過しました。';
?>