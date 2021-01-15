<?php 

include('config.php');

// Get username
$username = $_POST['username'];

// Encrypt password
$old_password = md5($_POST['old-password']);

$querySelect = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username' AND password = '$old_password'");
$data = mysqli_fetch_array($querySelect);

// Check if old password match
if ($data) {
	$new_password = $_POST['new-password'];
	$confirm_password = $_POST['confirm-password'];

	// Check if new password and confirm password match
	if ($new_password == $confirm_password) {
		// Encrypt new password
		$password_match = md5($confirm_password);
		$queryUpdate = mysqli_query($connect, "UPDATE users SET password = '$password_match' WHERE id = '$data[id]' ");

		if ($queryUpdate) {
			echo "<script>
				alert('Password changed successfully! Please login again.');
				document.location = 'logout.php';
			</script>";
		}
	} else {
		echo "<script>
			alert('Password Tidak Sesuai!');
			document.location = 'settings.php';
		</script>";
	}
} else {
	echo "<script>
		alert('Invalid password!');
		document.location = 'settings.php';
	</script>";
}

 ?>