<?php
// この下に配列を作成
$arr = array(
    array(7,7,7,7),
    array(7,7,7,7),
    array(7,7,7,7),
);

foreach ($arr as $value) {
    foreach ($value as $val) {
        echo $val." ";
    }
    echo "\n";
}
?>
