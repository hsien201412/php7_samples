<?php 
require_once("connMysql.php");
//預設每頁筆數
$pageRow_records = 5;//設定每頁顯示5筆資料
//預設目前所在頁數
$num_pages = 1;//一開始設定在第一頁
//若已經有翻頁，將頁數更新
if (isset($_GET['page'])) {//網址列傳遞過來參數page則執行下列程式
  $num_pages = $_GET['page'];//將從網址列參數所得的值指定到$num_page
}
//本頁開始記錄筆數 = (頁數-1)*每頁記錄筆數
/*設定一頁顯示5筆資料，若第一頁，則顯示資料編號0、1、2、3、4
，若在第二頁，則顯示資料編號5、6、7、8、9
所以代表了第N頁資料顯示的資料編號開頭為(N-1)*每頁資料筆數
*/
$startRow_records = ($num_pages -1) * $pageRow_records;
//未加限制顯示筆數的SQL敘述句
$query_RecBoard = "SELECT * FROM board WHERE boardshow='Y' ORDER BY boardtime DESC ";
//加上限制顯示筆數的SQL敘述句，由本頁開始記錄筆數開始，每頁顯示預設筆數
$query_limit_RecBoard = $query_RecBoard." LIMIT {$startRow_records}, {$pageRow_records}";
/*
LIMIT為指定編號開始抓取N數資料
參考資料 https://dotblogs.com.tw/invercent914/2014/04/03/144599
*/
//以加上限制顯示筆數的SQL敘述句查詢資料到 $RecBoard 中
$RecBoard = $db_link->query($query_limit_RecBoard);
//指行SQL指令的結果放到$RecBoard
//以未加上限制顯示筆數的SQL敘述句查詢資料到 $all_RecBoard 中
$all_RecBoard = $db_link->query($query_RecBoard);
//指行SQL指令的結果放到$all_RecBoard
//計算總筆數
$total_records = $all_RecBoard->num_rows;
//計算總頁數=(總筆數/每頁筆數)後無條件進位。
$total_pages = ceil($total_records/$pageRow_records);
//ceil無條件進位
?>
<html>
<head>
<title>訪客留言版</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#ffffff">
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table align="left" border="0" cellpadding="0" cellspacing="0" width="700">
        <tr>
          <td><img name="board_r1_c1" src="images/board_r1_c1.jpg" width="465" height="36" border="0" alt=""></td>
          <td><a href="index.php"><img name="board_r1_c5" src="images/read.jpg" width="110" height="36" border="0" alt="瀏覽留言"></a></td>
          <td><a href="post.php"><img name="board_r1_c7" src="images/post.jpg" width="110" height="36" border="0" alt="我要留言"></a></td>
          <td width="15"><img name="board_r1_c8" src="images/board_r1_c8.jpg" width="15" height="36" border="0" alt=""></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><img name="board_r2_c1" src="images/board_r2_c1.jpg" width="700" height="28" border="0" alt=""></td>
  </tr>
  <tr>
    <td background="images/board_r3_c1.jpg"><div id="mainRegion">
        <?php	while($row_RecBoard=$RecBoard->fetch_assoc()){ ?>
        <table width="90%" border="0" align="center" cellpadding="4" cellspacing="0">
          <tr valign="top">
            <td width="60" align="center" class="underline">
              <?php if($row_RecBoard["boardsex"]=="男"){;?>
              <img src="images/male.gif" alt="我是男生" width="49" height="49">
              <?php }else{?>
              <img src="images/female.gif" alt="我是女生" width="49" height="49">
              <?php }?>
              <br>
              <span class="postname"><?php echo $row_RecBoard["boardname"];?></span>
            </td>
            <td class="underline">
            	  <span class="smalltext">[<?php echo $row_RecBoard["boardid"];?>]</span>
            	  <span class="heading"> <?php echo $row_RecBoard["boardsubject"];?></span>
            	  <p><?php echo nl2br($row_RecBoard["boardcontent"]);?></p>
            	  <p align="right" class="smalltext">
            	  <?php echo $row_RecBoard["boardtime"];?>
            	  <?php if($row_RecBoard["boardmail"]!=""){?>
            	  <a href="mailto:<?php echo $row_RecBoard["boardmail"];?>"><img src="images/email-a.png" alt="電子郵件" width="16" height="16" border="0" align="absmiddle"></a>
            	  <?php }?>
            	  <?php if($row_RecBoard["boardweb"]!=""){?>
            	  <a href="<?php echo $row_RecBoard["boardweb"];?>"><img src="images/home-a.png" alt="個人網站" width="16" height="16" border="0" align="absmiddle"></a>
            	  <?php }?>
            	  </p>
              </td>
          </tr>          
        </table>
        <?php }?>
        <table width="90%" border="0" align="center" cellpadding="4" cellspacing="0">
          <tr>
            <td valign="middle"><p>資料筆數：<?php echo $total_records;?></p></td>
            <td align="right"><p>
                <?php if ($num_pages > 1) { // 若不是第一頁則顯示 ?>
                <a href="?page=1">第一頁</a> | <a href="?page=<?php echo $num_pages-1;?>">上一頁</a> |
                <?php }?>
                <?php if ($num_pages < $total_pages) { // 若不是最後一頁則顯示 ?>
                <a href="?page=<?php echo $num_pages+1;?>">下一頁</a> | <a href="?page=<?php echo $total_pages;?>">最末頁</a>
                <?php }?>
              </p></td>              
          </tr>
          <tr>
            <td colspan="2" align="right" valign="middle">
            頁數：
  	  <?php
  	  for($i=1;$i<=$total_pages;$i++){
  	  	  if($i==$num_pages){//如果$i的值等於目前所在頁數即不做超連結
  	  	  	  echo $i." ";
  	  	  }else{
  	  	      echo "<a href='index.php?page=".$i."'>{$i}</a>";
              //echo "<a href=\"index.php?page={$i}\">{$i}</a> ";
  	  	  }
  	  }
  	  ?>
            </td>
          </tr>
        </table>
      </div></td>
  </tr>
  <tr>
    <td><table align="left" border="0" cellpadding="0" cellspacing="0" width="700">
        <tr>
          <td width="15"><img name="board_r4_c1" src="images/board_r4_c1.jpg" width="15" height="31" border="0" alt=""></td>
          <td background="images/botbg.jpg"><a href="login.php"><img name="board_r4_c2" src="images/login.jpg" width="77" height="31" border="0" alt="登入管理"></a></td>
          <td align="right" valign="top" background="images/botbg.jpg" class="trademark">© 2016 eHappy Studio All Rights Reserved. </td>
          <td width="15"><img name="board_r4_c8" src="images/board_r4_c8.jpg" width="15" height="31" border="0" alt=""></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>
<?php
$db_link->close();
?>