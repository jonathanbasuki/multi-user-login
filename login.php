<?php 

include('config.php');

// Encrypt user password
$pwd = md5($_POST['password']);
$username = mysqli_escape_string($connect, $_POST['username']);
$password = mysqli_escape_string($connect, $pwd);
$login_as = mysqli_escape_string($connect, $_POST['login-as']);

// Check user in database
$user = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username' AND login_as = '$login_as'");
$user_valid = mysqli_fetch_array($user);

if ($user_valid) {
	// Check user password in database
	if ($password == $user_valid['password']) {
		session_start();
		$_SESSION['username'] = $user_valid['username'];
		$_SESSION['nama_lengkap'] = $user_valid['nama_lengkap'];
		$_SESSION['login_as'] = $user_valid['login_as'];

		// Check user login as..
		if ($login_as == 'Administrator') {
			header('Location: home-admin.php');
		} else if ($login_as == 'Teacher') {
			header('Location: home-teacher.php');
		} elseif ($login_as == 'Student') {
			header('Location: home-student.php');
		}
	} else {
		echo "<script>
		alert('Invalid username or password!');
		document.location = 'index.php';
	</script>";
	}
} else {
	echo "<script>
		alert('Invalid username or password!');
		document.location = 'index.php';
	</script>";
}

 ?>