<?php
// ドットで文字を出力しよう
$letter_A = array(
    array(0, 0, 1, 1, 0, 0),
    array(0, 1, 0, 0, 1, 0),
    array(1, 0, 0, 0, 0, 1),
    array(1, 1, 1, 1, 1, 1),
    array(1, 0, 0, 0, 0, 1),
    array(1, 0, 0, 0, 0, 1),
);
// ここに、ドットを表示するコードを記述する
foreach ($letter_A as $line){
    foreach ($line as $data){
        if($data==1){
            echo "@";
        }else{
            echo " ";
        }
    }
    echo "\n";
}

?>
