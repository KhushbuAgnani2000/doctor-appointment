<?php
session_start();
include"header.php";
?>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12" style="background-color:yellow">
			<center>
				<?php
if(isset($_SESSION["EMAIL"])) {
?>
Welcome <?php echo $_SESSION["EMAIL"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.</a>
<?php
}else
	{
	header("Location:PaitentLogin.php");
}
?>

			</center>	
		</div>
	</div>
	<br>
	<br>
	<div class="container" style="background-color: ">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<center>
			<form method="post" action="">
				<table class="table table-dark" style="margin-top:20px;">
					
					<tr>
						<td>ENTER NEW PASSWORD::
						
						<input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password Here">
						</td>
					</tr>
					<tr>
					<td>CONFROM PASSWORD::
							<input type="password" class="form-control" name="conformpassword" id="confrompassword" placeholder="Enter Your Conform Password Here">
						</td>
					</tr>	
					
				</table>
				<input type="submit" value="submit" name="submit" class="btn btn-primary">
			
			</center>	
		</div>
	</div>
	 
</div>
<?php
if(isset($_POST["submit"]))
{	
	if ($_POST["password"] === $_POST["conformpassword"])
	{
	$newpassword=$_POST['password'];
	$email1=$_SESSION['EMAIL'];
	$qry="update paitent set password='$newpassword' where email='$email1'";
	$result=mysqli_query($link,$qry);
	header("location:PaitentLogin.php");
	}
	else
	{
		echo"PASSWORD NOT MATCH";
	}
}
mysqli_close($link);
?>
</form>
</br>
</br>
</br>
</br>
</body>
</html>
<?php include"footer.php";?>
