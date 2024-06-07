<?php
echo "start\n";
try{
    $date=new DateTime("1990-01-01");
    echo $date->format("Y/m/d")."\n";
}catch(Exception $e){
    echo $e->getMessage()."\n";
}finally{
    echo "end\n";
}
?>
