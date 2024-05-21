<?php
// 標準入力から1行取得し値があればループ
$array=array();
$count_num=0;
while($input = fgets(STDIN)){
    // 改行文字を削除してから配列に$inputの値を追加
    $input = trim($input);
    if($input=="勇者"){
        $array[] = $input;
        $count_num++;
    }
}
print_r($count_num);
?>
