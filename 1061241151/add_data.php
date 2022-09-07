<?php
  //檢查 cookie 中的 passed 變數是否等於 TRUE
  $passed = $_COOKIE["passed"];
	
  /*  如果 cookie 中的 passed 變數不等於 TRUE
      表示尚未登入網站，將使用者導向首頁 shopping_list.html	*/
  if ($passed != "TRUE")
  {
    header("location:first.html");
    exit();
  }
?>
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{

		 $Count=$_POST["OrderCount"];
		 $Item=$_POST["OrderItem"];
			
		 // variables for input data
		foreach($Item as $Value);//Sloving the error for the condition for array to string conversion
       // variables for input data for using the method as foreach
      
		switch($_POST["Suger"])
      {
        case "0":
          $Suger_Level = "無糖";
          break;
        case "3":
          $Suger_Level = "3分甜";
          break;
        case "5":
          $Suger_Level = "5分甜";
          break;
        case "8":
          $Suger_Level = "8分甜";
          break;
        case "10":
          $Suger_Level = "10分甜";
      }
	  switch($_POST["Ice"])
      {
        case "0":
          $Ice_Level = "去冰";
          break;
        case "3":
          $Ice_Level = "微冰";
          break;
        case "5":
          $Ice_Level = "少冰";
          break;
        case "8":
          $Ice_Level = "正常冰";
          break;
        case "10":
          $Ice_Level = "多冰";
      }	
	  
	  
	  
	  $Price=$Count*10;
	  if($Price>=100)
	  {
		$Price=$Price*0.8;   
	  }
	  
	  // variables for input data for using the method for switch
		// sql query for inserting data into database
	
        $sql_query = "INSERT INTO users(Order_Item,Order_Count,Tea_Suger,Tea_Ice,Tea_Price) VALUES('$Value','$Count','$Suger_Level','$Ice_Level','$Price')";
		mysqli_query($link,$sql_query);
				
		// sql query for inserting data into database
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/ >
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
<title>1061241151林子捷</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style2.css" type="text/css" />
</head>
<body>
<style>
body {
  background-image: url('tea4.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
<div class="dropdown">
      <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">
        目錄
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="tea_story.html">茶の故事</a>
		<a class="dropdown-item" href="sample.html">茶の產品</a>
        <a class="dropdown-item" href="shopping_list.php">購物車</a>
        
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="profile.php">個人資料設定</a>
		<a class="dropdown-item" href="main.php">回首頁</a>
        <a class="dropdown-item" href="logout.php">登出</a>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<center>
	<div id="header">
		<div id="content">
			<p><h2><b>南方の茶</b></h2></p>
			<p><h3><b>飲料每杯一律10$，消費滿100$打八折優惠</b></h3></p>
		</div>
	</div>
<!--Label part-->	
	
	<div id="body">
		<div id="content">
			<form method="post" name="add_form">
				<table align="center">
					<tr>
						<td align="center"><a href="shopping_list.php">購物車</a></td>
					</tr>										
					<tr>
						<td>訂購項目:<br>
							<select name="OrderItem[]" size="5" multiple >
							<option value="金萱茶">金萱茶
							<option value="錫蘭紅茶" selected>錫蘭紅茶
							<option value="冬瓜茶">冬瓜茶
							<option value="高山茶">高山茶
							<option value="鐵觀音奶茶" >鐵觀音奶茶
							<option value="文山青茶">文山青茶
							<option value="四季春茶">四季春茶
							<option value="烏龍綠茶" >烏龍綠茶
							<option value="梅子綠茶">梅子綠茶
							<option value="檸檬紅茶">檸檬紅茶
						</select></td>
					</tr>
					<tr>
						<td>訂購數量：<input type="text" name="OrderCount" size="3" required></td>
					</tr>
					<tr>
						<td><div>
							<p>甜度：</p>
								<input type="radio" name="Suger" value="0">無
								<input type="radio" name="Suger" value="3" >3分甜
								<input type="radio" name="Suger" value="5">5分甜
								<input type="radio" name="Suger" value="8">8分甜
								<input type="radio" name="Suger" value="10" required>10分甜<br>
						</div></td>
					</tr>	
					<tr>
						<td><div>
							<p>冰量：</p>
							<input type="radio" name="Ice" value="0">去冰
							<input type="radio" name="Ice" value="3">微冰
							<input type="radio" name="Ice" value="5" required>少冰
							<input type="radio" name="Ice" value="8">正常冰
							<input type="radio" name="Ice" value="10">多冰<br>
						</div></td>
					</tr>	
					<tr>
					<td>
						<button type="submit" name="btn-save" ><strong>送出</strong></button>
						<button type="reset" name="btn-reset"><strong>重新輸入</strong></button>
					</td>
					</tr>

				</table>			
			</form><table align="center">
			
		</div>
	</div>
	</center>
</body>
</html>

      
	  
	  
	  
	  
		
	 
