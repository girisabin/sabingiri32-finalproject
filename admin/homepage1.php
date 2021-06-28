<?php
	session_start();
	//**require_once('../../../Users/hp/C:/xampp/htdocs/city guide/dbconfig/config.php');
	//phpinfo();**/
?>
<?php 
$con = mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
mysqli_select_db ($con,'cityguidedb');
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="css/style1.css">
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
<body style="background-color:#bdc3c7">
	<center><div id="main-wrapper">
		<center>
        <h2>Admin Page</h2>
		<h3>Welcome 
		<?php
		echo $_SESSION['username'];
        ?></h3>
        <?php echo '<img class="avatar" src="'.$_SESSION["imglink"].'">';?>
        </center>
       
		
		<form class="myform" action="homepage1.php" method="post">
            <input name="logout" type="submit" id="logout_btn" value="Log Out" /><br>
		</form>      
        <?php
        if(isset($_POST['logout']))
		{
		session_destroy();
		header('location:index1.php');
		}
		?>
	</div>
		</center>
	
		<center><form class="myform" action="homepage1.php" method="post" enctype="multipart/form-data">
	<div id="main-wrapper">
	<center>
		<h3><a href="commentsofusers.php">Reviews of users</a></h3>
    	<h2>Add information of places</h2>
		<h3>Choose place image below</h3>
        <img id="uploadPreview" src="images/avatar.jpg" class="avatar" /><br />
        <input type="file" id="imglink" name="imglink" accept=".jpg,.jpeg,.png" onchange="PreviewImage();" />
    </center>
    
        <label><b> Place name:</b></label><br />
        <input name="placename" type="text" class="inputvalues" placeholder="Type place name" required /><br />
		<label><b>Conform Place name:</b></label><br />
        <input name="cplacename" type="text" class="inputvalues" placeholder="Type place name" required /><br />
    	<label><b> Description:</b></label><br />
        <input name="description" type="text" class="inputvalues" placeholder="Type place description"   required /><br />
        
       
        <input name="submit_btn" type="submit" id="signup_btn" value="Conform To Add" /><br />
        <a href="index1.php"><input type="button" id="back_btn" value="Back" /></a>
   </form>
			</center>
	<?php
   if(isset($_POST['submit_btn']))
   {
	   /*echo '<script type="text/javascript"> alert("Sign Up button Clicked")</script>';*/
	   
	   $placename=$_POST['placename'];   
       $description=$_POST['description'];
	   
	   $cplacename=$_POST['cplacename'];
	   
	   $img_name = $_FILES['imglink']['name'];
	   $img_size =$_FILES['imglink']['size'];
	   $img_tmp =$_FILES['imglink']['tmp_name'];
	   
	   $directory = 'uploads/';
	   $target_file = $directory.$img_name;
	   
	   if($placename==$cplacename)
	   {
		   $query= "select * from places WHERE placename='$placename'";
		   $query_run= mysqli_query($con,$query);
		   
		   if(mysqli_num_rows($query_run)>0)
		   {
			   echo'<script type="text/javascript"> alert("place name already exist..Try another place name")</script>';
			   
		   }
           else if(file_exists($target_file))
		   {
			   echo '<script type="text/javascript"> alert("Image file already exists.. Try another image file") </script>';
	       }
		   else if($img_size>2097152)
		   {
				echo '<script type="text/javascript"> alert("Image file size larger than 2 MB.. Try another image file") </script>';
		   }
		   else
		   {
			   move_uploaded_file($img_tmp,$target_file); 
			   $query = "insert into places values('','$placename','$cplacename','$description','$target_file')";
			   $query_run =mysqli_query($con,$query);
			   
			   if($query_run)
			   {
				   echo'<script type="text/javascript"> alert("Information added successfully!!")</script>';  
			   }
			   else
			   {
				   echo'<script type="text/javascript"> alert("Error!!!")</script>';
			   }
			   
		   }
		   
	   }
	   else
	   {
		   echo'<script type="text/javascript"> alert("placename  and confirm placename does not match!")</script>';
		   
	   }
   }
	  
   ?>
</body>
</html>