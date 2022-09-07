<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE Order_Id=".$_GET['edit_id'];/*Edit the data*/
 $result_set=mysqli_query($link,$sql_query);//Result for changed data
 $fetched_row=mysqli_fetch_array($result_set);//Fetched data
 
}
if(isset($_POST['btn-update']))
{
 // variables for input data
		    	     
		 $Count=$_POST["OrderCount"];
		 $Item=$_POST["OrderItem"];
		 foreach($Item as $Value);
 //Sloving the error for the condition for array to string conversion
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
 // sql query for update data into database
 $sql_query = "UPDATE users SET Order_Item='$Value',Order_Count='$Count',Tea_Suger='$Suger_Level',Tea_Ice='$Ice_Level',Tea_Price='$Price' WHERE Order_Id=".$_GET['edit_id'];
 if(mysqli_query($link,$sql_query))
 {				
		// sql query for inserting data into database
 ?>
 <script>
  alert('Data Are Inserted Successfully ');
  window.location.href='shopping_list.php';

</script>
<?php
 }
 else
 {		
?>
<script>
  alert('error occured while inserting your data');
</script>
<?php
 }
} 
?>
<?php
if(isset($_POST['btn-cancel']))
{
 header("Location: shopping_list.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/ >
<title>1061241151林子捷</title>
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
	<center>

	<div id="header">
		<div id="content">
			<p><h2><b>南方の茶</b></h2></p>
			<p><h3><b>飲料每杯一律10$，消費滿100$打八折優惠</b></h3></p>
		</div>
	</div>
	
	
	<div id="body">
		<div id="content">
			<form method="post" name="edit_form">
				<table align="center">
					<tr>
						<td align="center"><a href="shopping_list.php">返回購物車</a></td>
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
						<td>訂購數量：<input type="text" name="OrderCount" size="3" required>(一次訂購上限為500杯)</td>
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
							<input type="radio" name="Ice" value="5">少冰
							<input type="radio" name="Ice" value="8">正常冰
							<input type="radio" name="Ice" value="10" required>多冰<br>
						</div></td>
					</tr>	
					<tr>
						<td>
							<button type="submit" name="btn-update"><strong>更新</strong></button>						
							<button type="submit" name="btn-cancel"><strong>取消</strong></button>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	</center>
</body>
</html>