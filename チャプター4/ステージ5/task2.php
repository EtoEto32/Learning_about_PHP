<?php
$array=array();
// 標準入力から1行取得し値があればループ
while($input=fgets(STDIN)){
    // 配列に$inputの値を追加
    $array[]=trim($input);
    //trim付けないと勝手に改行してしまう
    //phpの標準入力は勝手に改行コードがついてしまう
}
// 配列の値を出力
print_r($array);

?>
