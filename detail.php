<?php
	session_start();
	//**require_once('../../../Users/hp/C:/xampp/htdocs/city guide/dbconfig/config.php');
	//phpinfo();**/
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("imglink").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };
</script>
</head>

<body>
	<h3>if you want search this place in a map</h3>
	<a href="location/index2.php">click here</a>
</body>
</html>

<?php 
$con = mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
mysqli_select_db ($con,'cityguidedb');
?>
<?php

if(isset($_GET['id']) && $_GET['id']>0 &&isset($_GET['t']) && $_GET['t']!='') {
	$id=mysqli_real_escape_string($con,$_GET['id']);
	$t=mysqli_real_escape_string($con,$_GET['t']);
	if($t=="places"){
		$table="places";
		$sql="select id,placename,description,image from places where id='$id'";
	}
	else{
		header('location:homepage.php');
		die();
	}
	$res=mysqli_query($con,$sql);
	if(mysqli_num_rows($res)>0){
	foreach($res as $row){
		?>
			<h2><?php echo $row['placename']; ?></h2>
            <p><?php echo '<img class="avatar" width="300px" height="300px" src="'.$row["image"].'">';?></p>
			<p><?php echo $row['description']; ?></p>
			<a href="homepage.php">Back</a>
       <?php
	}
	}
	else{
		header('location:homepage.php');
		die();
	}
}
?>