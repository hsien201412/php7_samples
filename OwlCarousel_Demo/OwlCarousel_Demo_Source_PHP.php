<!DOCTYPE html>
<html>
<?php
	header("Content-Type: text/html; charset=utf-8");
    include("connMysqlObj.php");
    $sql_query = "SELECT image_name FROM image WHERE images_id >= 10";
    $result = $db_link->query($sql_query);
?>
<head>
    <meta charset="utf-8">
    <title>OWL</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap-theme.min.css">
    <style>
        /* .wrapper {
            width: 100%;
            height: auto;
            overflow: hidden;
        } */

        .item {
             margin: 10px;
        }

    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="owl-carousel owl-theme">
            <?php
                while($row_result=$result->fetch_row()){
                    foreach($row_result as $value){                        
                        echo '<div class="item"><img class="img-fluid" src="img/'.$value.'.jpg"></div>';
                    }                    
                }
            ?>            
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://cdn.staticfile.org/jquery/1.8.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Owl Stylesheets&js -->
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <script src="assets/vendors/jquery.min.js"></script>
    <script src="assets/owlcarousel/owl.carousel.js"></script>

    <script>
        $('.owl-carousel').owlCarousel({
            responsive: true,
            autoplayHoverPause:true, // 滑鼠經過時暫停
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 1000,
            //nav: true, //導航
            //navText: ["上一頁", "下一頁"], // 導航文字

            responsive: {
                0: {
                    items: 1
                },
                300: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>

</body>

</html>
