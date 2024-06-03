<?php
// ドットで文字を出力しよう
$letters =
array(
    array(
        array(0, 0, 1, 1, 0, 0),
        array(0, 1, 0, 0, 1, 0),
        array(1, 0, 0, 0, 0, 1),
        array(1, 1, 1, 1, 1, 1),
        array(1, 0, 0, 0, 0, 1),
        array(1, 0, 0, 0, 0, 1),
    ),
    array(
        array(1, 1, 1, 1, 1, 0),
        array(1, 0, 0, 0, 0, 1),
        array(1, 1, 1, 1, 1, 0),
        array(1, 0, 0, 0, 0, 1),
        array(1, 0, 0, 0, 0, 1),
        array(1, 1, 1, 1, 1, 0),
    ),
    array(
        array(0, 1, 1, 1, 1, 0),
        array(1, 0, 0, 0, 0, 1),
        array(1, 0, 0, 0, 0, 0),
        array(1, 0, 0, 0, 0, 0),
        array(1, 0, 0, 0, 0, 1),
        array(0, 1, 1, 1, 1, 0),
    ),
);

// ここに、ドットを表示するコードを記述する
foreach ($letters as $letters) {
    foreach ($letters as $line) {
        foreach ($line as $dot){
            if ($dot == 1) {
                echo "@";
            }else {
                echo " ";
            }
        }
        echo "\n";
    }
    echo "\n";
}
?>
