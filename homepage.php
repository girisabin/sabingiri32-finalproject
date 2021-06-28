<?php
	session_start();
	//**require_once('../../../Users/hp/C:/xampp/htdocs/city guide/dbconfig/config.php');
	//phpinfo();**/
?>
<?php 
$con = mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
mysqli_select_db ($con,'cityguidedb');
$query="select * from comments";
$result=mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="css/style1.css">
</head>
<body style="background-color:#bdc3c7">
	<div id="main-wrapper">
		<center>
        <h2>Home Page</h2>
		<h3>Welcome 
		</h3>
    
        </center>
       
		
		<form class="myform" action="homepage.php" method="post">
            <input name="logout" type="submit" id="logout_btn" value="Log Out" /><br>
		</form>      
        <?php
        if(isset($_POST['logout']))
		{
		session_destroy();
		header('location:index.php');
		}
		?>
	</div>
	<div class="">
		<center>
	<form action="homepage.php" method="post">
	<label><h2>search the place you want to</h2></label>
		<input type="text" name="str">
		<input type="submit" name="submit">
	</form>
			</center>
	</div>
</body>
</html>

<?php 
$con = mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
mysqli_select_db ($con,'cityguidedb');
if(isset($_POST['submit'])){
	 $str=mysqli_real_escape_string($con,$_POST['str']);
	 $sql="select id,placename,description,image,'places' from places where placename like '%$str%' or description like '%$str%'";
	$res=mysqli_query($con,$sql);
	if(mysqli_num_rows($res)>0){
		while($row=mysqli_fetch_assoc($res)){
			
			echo "<a href='detail.php?id=".$row['id']."&t=".$row['places']."'>".$row['placename']."</a> "; 
			echo("</br>"); 
		}
	}
	

		
}
?>