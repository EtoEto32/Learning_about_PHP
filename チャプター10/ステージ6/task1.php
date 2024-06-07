<?php
// 意図的に例外を発生させてみよう

echo "start\n";
try {
    throw new RangeException("意図的なRangeException");
} catch(RangeException $e) {
    fputs(STDERR, "例外発生：" .$e->getMessage() . "\n");
} finally {
    echo "end\n";
}
?>