<?php 
	header("Content-Type: text/html; charset=utf-8");
	include("connMysqlObj.php");
	$sql_query = "SELECT * FROM students";
	$result = $db_link->query($sql_query);	
	
	while($row_result=$result->fetch_assoc()){//fetch_assoc-->使用文字索引
		foreach($row_result as $item=>$value){
			echo $item."=".$value."<br>";
		}
		echo "<hr>";
	}
	
	$mysqli->close();
?>