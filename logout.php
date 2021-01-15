<?php 

session_start();

unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['nama_lengkap']);
unset($_SESSION['login_as']);

session_destroy();

echo "<script>
		alert('You are logout successfully!');
		document.location = 'index.php';
	</script>";

 ?>