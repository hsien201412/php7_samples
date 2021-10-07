<?php
    /*
    範例一:
    $a=12345;
    $b="12345";
     if($a==$b){
        echo $a-$b;
        echo "<br>變數a:{$a}等於變數b:{$b}";
    }
    */
    
    /*
    範例二:
    $a=12345;
    $b="12345";
    if($a===$b){
        echo $a-$b;
        echo "<br>變數a:{$a}等於變數b:{$b}";
    }else{
        echo "因為資料型態不同<br>所以變數a:{$a}等於變數b:{$b}";
    }
    */
    
    /*範例三:
    $a=12345;
    $b="12345";
    //echo gettype($a);取變數的資料型態
    $typeA=gettype($a);
    $typeB=gettype($b);
    echo "變數a的資料型態為:{$typeA}，內容為:{$a}<br>";
    echo "變數a的資料型態為:{$typeB}，內容為:{$b}<br>";
    if(($typeA==$typeB) && ($a==$b)){
        echo "變數a及變數b全等";
    }else{
        echo "變數a及變數b不完全相等";
    }
    */
    //範例四:
    $a=12345;
    $b="12345";
    $typeA=gettype($a);
    $typeB=gettype($b);
    //echo "變數a的資料型態為:{$typeA}，內容為:{$a}<br>";
    //echo "變數a的資料型態為:{$typeB}，內容為:{$b}<br>";
    if($a!==$b){//$a!==$b代表資料型態或內容中有最少一個是不同的
        echo "變數a及變數b不完全相等";
    }else{
        echo "變數a及變數b全等";
    }
?>