<?php 
$con = mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
mysqli_select_db ($con,'cityguidedb');
$query="select * from comments";
$result=mysqli_query($con,$query);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<table align="center" border="1px" style="width: 1000px" line-height="50px";>
		<tr>
			<th colspan="4"><h2>User comments records</h2></th>
			
		</tr>
		<tr>
		<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Comments</th>
		</tr>
		<?php
			while($row=mysqli_fetch_assoc($result)){
				?>
				<tr>
					<td><?php echo "<p>".$row['id']."</p>"; ?></td>
					<td><?php echo "<p>".$row['name']."</p>"; ?></td>
					<td><?php echo "<p>".$row['email']."</p>"; ?></td>
					<td><?php echo "<p>".$row['comment']."</p>"; ?></td>
				</tr>
		<?php
			}
	?>
	</table>
	
</body>
</html>