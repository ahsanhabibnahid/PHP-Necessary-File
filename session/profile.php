<?php
	session_start();
?>

<?php
	if (isset($_SESSION['email']) && $_SESSION['password'] && $_SESSION['name']) {
		echo "Welcome your profile page";

	}

?>
<a href="logout.php">logout</a>