<?php
// finally節を使ってみよう

function test_exception($date) {
    try {
        return new DateTime($date);
    } catch (Exception $e) {
        throw $e;
    }finally{
        echo "DateTimeオブジェクトを生成しました\n";
    }
}

echo "start\n";
try {
    $dateTime = test_exception("199x-01-01");
} catch (Exception $e) {
    echo "不正な日付です\n";
} finally {
    echo "end\n";
}
?>
