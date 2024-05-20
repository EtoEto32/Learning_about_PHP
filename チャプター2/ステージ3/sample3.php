<?php
// 比較演算子
// == > < >== <== !=
$hour=13;
if($hour < 12){
    // 条件式が成り立ったときの処理
    echo "午前中";
}elseif($hour==12){
    echo "正午";
}elseif($hour>12){
    echo "午後";
}
?>
