<?php 
	header("Content-Type: text/html; charset=utf-8");
	include("connMysql.php");
	$seldb = @mysqli_select_db($db_link, "class");
	if (!$seldb) die("資料庫選擇失敗！");
	$sql_query = "SELECT * FROM students";//查詢(搜尋)student資料表
	$result = mysqli_query($db_link, $sql_query);//取出資料	
	while($row_result=mysqli_fetch_row($result)){//一次取得一筆資料以陣列的型式集中
		foreach($row_result as $item=>$value){//取得的一筆資料索引放入$item，內容放於$value
			echo $item."=".$value."<br />";
		}
		echo "<hr />";
	}
?>