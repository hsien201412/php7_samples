<?php 
	header("Content-Type: text/html; charset=utf-8");
	include("connMysqlObj.php");
	$sql_query = "SELECT * FROM students";
	$result = $db_link->query($sql_query);	
	$type=3;//MYSQLI_ASSOC=1、MYSQLI_NUM=2、MYSQLI_BOTH=3
	while($row_result=$result->fetch_array($type)){//-->數字索引、文字索引都有
		foreach($row_result as $item=>$value){
			echo $item."=".$value."<br>";
		}
		echo "<hr>";
	}
	
	$db_link->close();
?>