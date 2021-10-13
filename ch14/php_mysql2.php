<?php 
	header("Content-Type: text/html; charset=utf-8");
	$db_link = @mysqli_connect("localhost", "root", "");//@隠藏錯誤訊息以不破壞畫面的美觀
	if (!$db_link) {
		die("資料連結失敗");
	}else{
		echo "資料連結成功";
	}
?>