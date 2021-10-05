<?php
	define('eHappy',"文淵閣工作室");
	const eHappyUrl = "http://www.e-happy.com.tw";
	echo "您好，歡迎光臨".eHappy."的網站<br>";
	echo "網址為：<a href='".eHappyUrl."'>文淵閣工作室</a>";
	/*超連結的html
	語法:<a href='連結網址'>連結名稱</a>
	<a href='a.php'>a網頁</a>
	<a href='http://www.slime.com.tw'>史萊姆第一個家</a>
	echo "網址為：<a href='>".eHappyUrl."'>文淵閣工作室</a>";
	拆解為:
	1.網址為:<a href='
	2.eHappyUrl-->常數
	3.'>文淵閣工作室</a>
	*/
?>