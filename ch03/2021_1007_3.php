<?php
    $a=12345.45;
    $b ="12345";
    $typeA = gettype($a);    
    switch ($typeA){
        case "Integer":
            echo "整數";
            break;
        case "double":
            echo "浮點數";
            break;
        case "boolean":
            echo "布林值";
            break;
        case "string":
            echo "字串";
            break;
        case "array":
            echo "陣列";
            break;
        case "object":
            echo "物件";
            break;        
        case "NULL":
            echo "NULL";
            break;
        case "unknown type":
            echo "未知型態";
            break;
        default:
            echo "資料型態有誤";        
    }
    echo "變數a的資料型態為:{$typeA}、內容為:{$a}<br>";
?>