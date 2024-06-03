<?php
// 標準入力から、2次元配列を読み込む
/*
標準入力のデータ
0,0,1,1,0,0
0,1,0,0,1,0
1,0,0,0,0,1
1,1,1,1,1,1
1,0,0,0,0,1
1,0,0,0,0,1
*/

for ($i = 0; $i < 6; $i++) {
    // ここに、読み込んだデータを","で分割し、配列に追加するコードを記述する
    $letter_A[]=explode(",",trim(fgets(STDIN)));
}


foreach ($letter_A as $row) {
    foreach ($row as $column) {
        if ($column == 1) {
            echo "@";
        }
        else {
            echo " ";
        }
    }
    echo "\n";

}

?>
