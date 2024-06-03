<?php
// 各要素を3倍にして新しい配列を作成する

$numbers = [12, 34, 56, 78, 90];

// ここに、各要素を3倍にして新しい配列を作成するコードを記述する
$numbers2=[];
for($i=0;$i<count($numbers);$i++){
    $numbers2[]=$numbers[$i]*3;
}

print_r($numbers2);
?>
