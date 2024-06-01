<?php
// 標準入力から値をループで取得
while($input = trim(fgets(STDIN))){
	// カンマで分割
	$key_value = explode(",", $input);
	$key = $key_value[0];
	$value = $key_value[1];
	// 連想配列として$itemに代入
	$result[$key] = $value;
}
// ここから下に記述
// 得点が高い順番に並び替え、print_rで出力後、
// 勇者が何位なのか数字で出力してみましょう。
arsort($result);
$count=0;
print_r($result);
foreach ($result as $key =>$value){
    $count+=1;
    if($key=="勇者"){
        echo $count;
    }
}
?>
