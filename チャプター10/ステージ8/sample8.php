<?php
function test_exception($date){
    echo "2\n";
    try{
        echo "3\n";
        return new DateTime($date);
        echo "4\n";
    }catch(Exception $e){
        echo "5\n";
        throw $e;//明示的に呼び出し元にスローしている。
    }
    echo "6\n";
}
try{
    $dateTime=test_exception("199x-01-01");
    echo "7\n";
}catch(Exception $e){
    echo "8\n";//呼び出し先から呼ばれた！
}
echo "9\n";
?>
