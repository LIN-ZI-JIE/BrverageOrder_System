<?php
  //檢查 cookie 中的 passed 變數是否等於 TRUE
  $passed = $_COOKIE["passed"];
	
  /*  如果 cookie 中的 passed 變數不等於 TRUE
      表示尚未登入網站，將使用者導向首頁 index.html	*/
  if ($passed != "TRUE")
  {
    header("location:index.php");
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
  background-image: url('tea.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
   <div id='logo'><img class='' src="Logo.jpg" alt="logo" width="50" height="50" text-align:"center"> </div> <h1 ><marquee direction="right" height="50" scrollamount="5" behavior="alternate">南方の茶</marquee></h1>
	
    <p align="center">
      <a href="profile.php">會員資料設定</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="add_data.php">選購飲料</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="logout.php">登出網站</a>
    </p>
  </body>
</html>