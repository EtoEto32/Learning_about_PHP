<?php
// 模様を出力してみよう
$landMap = array_fill(0, 5, array_fill(0, 10, "."));


foreach ($landMap as $i => $row) {
    foreach ($row as $j => $column) {
        //図から見て偶数行かつ偶数列
        // $i, $jどちらも2で割り切れる場合は、「+」を出力
        // そうで無い場合は$columnを出力
        if($i%2==0 && $j%2==0){
            echo "+";
        }
        else{
            echo $column;
        }
    }
    echo "\n";
}
?>
