<?php
// 標準入力からデータを取得、、空の行をスキップ　file関数で標準入力を読み込む
$input = file('php://stdin', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
// 連想配列を初期化
$items = [];
// 入力データを解析して連想配列に格納
foreach ($input as $line) {// 入力データを1行ずつ処理
    list($name, $attack) = explode(',', $line);// カンマで分割
    $items[$name] = $attack;// 連想配列に格納
}

// 攻撃力の値を数値として取り出し、降順にソート
uasort($items, function($a, $b) {
    return (int)str_replace('攻撃力:', '', $b) - (int)str_replace('攻撃力:', '', $a);// 攻撃力の値を数値として取り出し、降順にソート
    // 降順にソートするため、比較関数の戻り値が正の場合は、$aと$bの順番を入れ替える
    //"攻撃力:"を削除して数値に変換し、比較
});

// 連想配列を出力
print_r($items);
?>
