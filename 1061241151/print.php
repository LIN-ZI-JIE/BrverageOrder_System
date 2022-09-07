<?php
include_once 'dbconfig.php';
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM users WHERE Order_Id=".$_GET['delete_id'];
 mysqli_query($link,$sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/ >
<title>1061241151林子捷</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
	<center>
	<div id="header">
		<div id="content">
			<label>南方の茶</label>
		</div>
	</div>
	
		<div id="body">
			<div id="content">
			<form action="add_data.php">
				<table align="center" border="1">
					<tr>	
						<th colspan="7">訂購明細</a></th>
					</tr>					
					<tr>
						
						<th>Order_Item</th>
						<th>Order_Count</th>	
						<th>Tea_Suger</th>	
						<th>Tea_Ices</th>
						<th>Tea_Price</th>
									
					</tr>
					 <?php
						$sql_query="SELECT * FROM users";
						$result_set=mysqli_query($link,$sql_query);
						$sum=0;
						while($row=mysqli_fetch_row($result_set))
						{
								$sum+=$row[5];
					 ?>
					 <tr>	
						<td><?php echo $row[1]; ?></td>
						<td><?php echo $row[2]; ?></td>
						<td><?php echo $row[3]; ?></td>
						<td><?php echo $row[4]; ?></td>
						<td><?php echo $row[5]; ?>$</td>												
        
					 </tr>
					 <?php
						}
					 
					 ?>
					 <th colspan="9" align="right">總計:<?php echo $sum;?>$</th>
				</table>
				<button type="submit">購物完成，歡迎再次購物</button>
			</form>	
			</div>
		</div>		
	</center>
</body>
	