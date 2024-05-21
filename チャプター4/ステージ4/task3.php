<?php
//配列の初期化
$array=array();
// 標準入力から1行データを取得
$input = trim(fgets(STDIN));
// $inputの値が空で無ければループする
while($input){
    // 配列に$inputの値を追加
    $array[] = $input;
    // 標準入力から1行データを取得
    $input = trim(fgets(STDIN));
}
$array_count=count($array);
$target=0;
for($i=0;$i<=$array_count-1;$i++){
    if($array[$i]=="勇者"){
        $target++;
    }
}
echo $target;
?>
