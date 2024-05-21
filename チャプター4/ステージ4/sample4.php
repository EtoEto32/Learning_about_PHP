<?php
//データを取得する
$input=trim(fgets(STDIN));
//値が空でなければループして値を取得し続ける
while($input){//これだけでいい
    $array[]=$input;
    $input=trim(fgets(STDIN));
}
print_r($array);

?>
