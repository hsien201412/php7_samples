<?php 
	header("Content-Type: text/html; charset=utf-8");
	include("connMysqlPdo.php");
	
	$sex = "M";	$id = 5;
	$stmt = $db_link->prepare("SELECT * FROM students WHERE cSex = ? AND cID <= ?");//預備語法敘述
	if($stmt->execute(array($sex, $id))){//執行預備語法
		while($row=$stmt->fetch()){//fetch-->抓取資料、一次抓取一筆資料
			echo "座號：{$row['cID']}<br>姓名：{$row['cName']}<br>電子郵件：{$row['cEmail']}<br>電話：{$row['cPhone']}<hr>";
		}
	}
	//Pdo預備語法無綁定參數、綁定結果
?>