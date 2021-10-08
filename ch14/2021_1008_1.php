<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>陣列函數</title>
</head>
<body>
    <?php
        //數字索引
        $a=array("第一個値","第二個値","第三個値");
        for ($i=0;$i<count($a);$i++){
            echo $i."=>".$a[$i]."<br>";
        }
        echo "<br>";
        //文字索引
        $b=array("Banana"=>"香蕉","Apple"=>"蘋果","Watermelon"=>"西瓜");
        foreach($b as $eFruit=>$cFruit){
            echo "{$cFruit}的英文為({$eFruit})<br>";
        }
        echo "<br>";        
    ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>