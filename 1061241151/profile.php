<?php
  //檢查 cookie 中的 passed 變數是否等於 TRUE
  $passed = $_COOKIE["passed"];
	
  /*  如果 cookie 中的 passed 變數不等於 TRUE
      表示尚未登入網站，將使用者導向首頁 index.html	*/
  if ($passed != "TRUE")
  {
    header("location:index.html");
    exit();
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>會員管理</title>
    <meta charset="utf-8">
  </head>
  <body>
     <style>
body {
  background-image: url('tea3.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size:100% 100%;
}
</style>
    <h1><p align="center">南方の茶</p></h1>
    <p align="center">
      <a href="modify.php">修改會員資料</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="delete.php">刪除會員資料</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="main.php">回首頁</a>
    </p>
  </body>
</html>