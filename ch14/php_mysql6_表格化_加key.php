<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Title</title>
</head>

<body>
    <?php 
	header("Content-Type: text/html; charset=utf-8");
	include("connMysql.php");
	$seldb = @mysqli_select_db($db_link, "class");
	if (!$seldb) die("資料庫選擇失敗！");
	$sql_query = "SELECT * FROM students";//查詢(搜尋)student資料表
	$result = mysqli_query($db_link, $sql_query);//取出資料	
	echo "<div class='col-8 offset-2'>";
	echo "<h3>全班共有:".mysqli_num_rows($result)."人</h3>";
		echo "<table class='table table-striped'>";
			echo "<thead>";
				echo "<th>編號</th>"."<th>姓名</th>"."<th>性別</th>"."<th>出生日期</th>"."<th>電子信箱</th>"."<th>聯絡電話</th>"."<th>住址</th>"."<th>身高</th>"."<th>體重</th>";
			echo "</thead>";
			$countSexM=0;//設定一計數男性人數的變數且預設為0
			while($row_result=mysqli_fetch_row($result)){//一次取得一筆資料以陣列的型式集中
				echo "<tr>";
				foreach($row_result as $key=>$value){//取得的一筆資料索引放入$item，內容放於$value
					echo "<td>({$key})".$value."</td>";
					if(($key==2) && ($value=='M')){
						$countSexM++;
						//$countSexM+=1;$countSexM = $countSexM + 1
					}
				}
				echo "</tr>";
			}
		echo "</table>";
		echo "<h3>全班共有:".mysqli_num_rows($result)."人</h3>";
		echo "<br/>男生有:{$countSexM}人、女生有:".(mysqli_num_rows($result)-$countSexM)."人";
	echo "</div>";
	?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>