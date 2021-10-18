<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>顯示隠藏密碼</title>
</head>
<body>
    <form action="" method="get" accept-charset="utf-8">
        <input type="password" name="passwd" id="passwd">
        <input type="button" name="btn1" id="btn1" value="顯示">
    </form>
    <script type="text/javascript">
        $("#btn1").on("mouseover",function(){
            if($("#passwd").attr("type")=="text"){
               $("#passwd").attr("type","passwd")
               $("#btn1").attr("value","顯示")
            }else if($("#btn1").on("mouseout",function(){
                $("#passwd").attr("type","text")
                $("#btn1").attr("value","隠藏")
            }))
        })
    </script>


</body>
</html>