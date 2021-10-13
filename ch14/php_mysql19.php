﻿<?php 
	header("Content-Type: text/html; charset=utf-8");
	include("connMysqlObj.php");
	$sex = "M";	$id = 5;//自訂定義的變數	
	if ($stmt = $db_link->prepare("SELECT cID, cName, cEmail, cPhone FROM students WHERE cSex = ? AND cID <= ?")) {//預備語法敘述
		$stmt->bind_param("si", $sex, $id);//綁定參數
	    $stmt->execute();//執行預備語法
	    $stmt->bind_result($col1, $col2, $col3, $col4);//綁定結果
		//while($row_result=mysqli_fetch_row($result)){-->mysqli的寫法、一次抓取一筆資料
		//while($row_result = $result->fetch_row()){mysqli Object的寫法、一次抓取一筆資料
	    while ($stmt->fetch()) {//這是mysqli Object中使用prepare statements預備語法的寫法、一次抓取一筆資料
	        echo "座號：{$col1}<br>姓名：{$col2}<br>電子郵件：{$col3}<br>電話：{$col4}<hr>";
	    }
	    $stmt->close();//關閉預備語法
	}
	$db_link->close();//關閉伺服器與資料庫連線
?>