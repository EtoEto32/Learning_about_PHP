<?php
// 標準入力から1行データを取得
$input = trim(fgets(STDIN));
// $inputの値が空で無ければループする
while($input){
    // 配列に$inputの値を追加
    $array[] = $input;
    // 標準入力から1行データを取得
    $input = trim(fgets(STDIN));
}
$count=count($array);
for($i=0;$i<=$count-1;$i++){
    echo $array[$i]."さん"."\n";
}
?>
