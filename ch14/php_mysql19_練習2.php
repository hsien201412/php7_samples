<?php 
	header("Content-Type: text/html; charset=utf-8");
	include("connMysqlObj.php");	
	$sex = "M";$idMax=8;$idMin=2;	
	if ($stmt = $db_link->prepare("SELECT cID, cName, cEmail, cPhone FROM students WHERE (cSex = ? AND cId <= ? AND cID >= ?)")) {
		$stmt->bind_param("sii",$sex, $idMax, $idMin);//綁定參數		
	    $stmt->execute();//執行預備語法
	    $stmt->bind_result($col1, $col2, $col3, $col4);//綁定結果
	    while ($stmt->fetch()) {
	        echo "座號：{$col1}<br>姓名：{$col2}<br>電子郵件：{$col3}<br>電話：{$col4}<hr>";
	    }
	    $stmt->close();
	}
	$db_link->close();
?>