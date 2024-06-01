<?php
$array = array();
// 値が空でなければループして値を取得し続ける
while ($input = fgets(STDIN)) {
    // trimしてから"/"で分割
    $parts = explode(",", trim($input));
    // 分割した結果を配列に追加
    $array = array_merge($array, $parts);
}
rsort($array);
print_r($array);
?>
