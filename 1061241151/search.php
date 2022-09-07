<?php
  require_once("dbtools.inc.php");
  header("Content-type: text/html; charset=utf-8");
  
  //取得表單資料
  $account = $_POST["account"]; 
  
  $show_method = $_POST["show_method"]; 

  //建立資料連接
  $link = create_connection();
			
  //檢查查詢的帳號是否存在
  $sql = "SELECT name, password FROM member WHERE 
          account = '$account'";
  $result = execute_sql($link, "db_1061241151", $sql);

  //如果帳號不存在
  if (mysqli_num_rows($result) == 0)
  {
    //顯示訊息告知使用者，查詢的帳號並不存在
    echo "<script type='text/javascript'>
            alert('您所查詢的資料不存在，請檢查是否輸入錯誤。');
            history.back();
          </script>";
  }
  else  //如果帳號存在
  {
    $row = mysqli_fetch_object($result);
    $name = $row->name;
    $password = $row->password;
    $message = "
      <!doctype html>
      <html>
        <head>
          <title></title>
          <meta charset='utf-8'>
        </head>
        <body>
	  <style>
body {
  background-image: url('tea6.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
          $name 您好，您的帳號資料如下：<br><br>
          　　帳號：$account<br>
          　　密碼：$password<br><br>
            <a href='index.php'>按此登入本站</a>
          </body>
      </html>
    ";
	
    if ($show_method == "網頁顯示")
    {
      echo $message;   //顯示訊息告知使用者帳號密碼
    }
    
  }

  //釋放 $result 佔用的記憶體
  mysqli_free_result($result);
		
  //關閉資料連接	
  mysqli_close($link);
?>