<?php
    $a=12345.45;
    $b="12345";
    $typeA=justifyType(gettype($a));//呼叫函數justifyType
    $typeB=justifyType(gettype($b));    
    echo "變數a的資料型態為:{$typeA}、內容為:{$a}<br>";
    echo "變數b的資料型態為:{$typeB}、內容為:{$b}<br>";
    if($a!==$b){
        echo "變數a及變數b不完全相等";
    }else{
        echo "變數a及變數b全等";
    }
    function justifyType($typeA){
        switch ($typeA){
            case "Integer":
                echo "整數";
                return $typeA;//回傳 $typeA的值到呼叫函數且指定到左側變數中
                break;
            case "double":
                echo "浮點數";
                return $typeA;//回傳 $typeA的值到呼叫函數且指定到左側變數中
                break;
            case "boolean":
                echo "布林值";
                return $typeA;//回傳 $typeA的值到呼叫函數且指定到左側變數中
                break;
            case "string":
                echo "字串";
                return $typeA;//回傳 $typeA的值到呼叫函數且指定到左側變數中
                break;
            case "array":
                echo "陣列";
                return $typeA;//回傳 $typeA的值到呼叫函數且指定到左側變數中
                break;
            case "object":
                echo "物件";
                return $typeA;//回傳 $typeA的值到呼叫函數且指定到左側變數中
                break;        
            case "NULL":
                echo "NULL";
                return $typeA;//回傳 $typeA的值到呼叫函數且指定到左側變數中
                break;
            case "unknown type":                
                echo "未知型態";
                return $typeA;//回傳 $typeA的值到呼叫函數且指定到左側變數中
                break;
            default:
                echo "資料型態有誤";        
        }
    }
?>