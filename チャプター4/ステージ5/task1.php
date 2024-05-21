<?php
$array=array();
// 値が空でなければループして値を取得し続ける
while($input = fgets(STDIN)){
    $array[] = trim($input);
}
print_r($array);
?>
