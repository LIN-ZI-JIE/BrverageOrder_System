<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>會員管理系統</title>
    <script type="text/javascript">
      function check_data()
      {
        if (document.myForm.account.value.length == 0)
          alert("帳號欄位不可以空白哦！");
        else if (document.myForm.password.value.length == 0)
          alert("密碼欄位不可以空白哦！");
        else 
          myForm.submit();
      }
    </script>
  </head>
  <body>
<style>
body {
  background-image: url('tea2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
    <h1><p align="center">南方の茶</p></h1>   
    <form action="checkpwd.php" method="post" name="myForm">
      <table width="40%" align="center">
        <tr> 
          <td align="center"> 
            <font color="#3333FF">帳號：</font> 
            <input name="account" type="text" size="15">
          </td>
        </tr>
        <tr> 
          <td align="center"> 
            <font color="#3333FF">密碼：</font> 
            <input name="password" type="password" size="15">
          </td>
        </tr>
        <tr>
          <td align="center"> 
            <input type="button" value="登入" onClick="check_data()">      　 
            <input type="reset" value="重填">
          </td>
        </tr>
      </table>
    </form>
    <p align="center">
      <a href="join.html">加入會員</a>　
      <a href="search_pwd.html">查詢密碼</a></p>
  </body>
</html>
<?php?>