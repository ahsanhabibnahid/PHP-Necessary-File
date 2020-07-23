<?php session_start(); ?>

<?php
	$con = mysqli_connect("localhost","root","","session_db");
?>


<?php
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "select * from session_table where email='$email' and password='$password' and name='$name' ";
		$result = mysqli_query($con,$sql);

		if ($email==''&&$password=="" && $name=='') {
			echo "please input first";	
		}
		else {
			if (mysqli_num_rows($result) > 0) {
			$_SESSION['name'] = $name;
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
		?>
		
		<script>
			window.location = "profile.php";
		</script>

		<?php
			}
		else {
			echo "you are not valid user!!";
		}
		}
		

	}
?>

<form action="" method="POST">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Submit"></td>
		</tr>
	</table>
</form>