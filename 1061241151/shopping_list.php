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
<script>
function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}

function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='shopping_list.php?delete_id='+id;
 }
}
</script>
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
			<form action="print.php">
				<table align="center" border="1">
					<tr>	
						<th colspan="9"><a href="add_data.php">返回購物</a></th>
					</tr>					
					<tr>
						
						<th>Order_Item</th>
						<th>Order_Count</th>	
						<th>Tea_Suger</th>	
						<th>Tea_Ices</th>
						<th>Tea_Price</th>
						<th colspan="2">Operations</th>			
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
						<td><a href="javascript:edt_id('<?php echo $row[0]; ?>')">修改</a></td>						
						<td><a href="javascript:delete_id('<?php echo $row[0]; ?>')">刪除</a></td>
        </tr>
					 </tr>
					 <?php
						}
					 
					 ?>
					 <th colspan="9" align="right">總計:<?php echo $sum; ?>$</th>
				</table>
				<button type="submit">列印明細</button>
			</div>
		</div>		
	</center>
</body>
	