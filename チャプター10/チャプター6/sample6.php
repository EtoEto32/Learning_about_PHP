<?php
echo "start\n";
try {
    throw new RangeException("意図的な例外");//例外クラスじゃないと投げられない。
    echo "例外を投げた後\n";
} catch (RangeException $e) {
    echo "例外発生：" . $e->getMessage() . "\n";
} finally {
    echo "end\n";
}
?>
