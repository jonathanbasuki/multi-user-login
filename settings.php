<?php 

session_start();

if (empty($_SESSION['username']) or empty($_SESSION['login_as'])) {
	echo "<script>
		alert('You need to login before continuing!');
		document.location = 'index.php';
	</script>";
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Settings | Multi User Login Template</title>

	<!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	<div class="container">
		<div class="row my-3">
			<div class="col-md-8 offset-md-2">
				<div class="card text-center">
				  <div class="card-header bg-secondary text-start text-light fw-light py-3">
				    <p class="fs-1 text-uppercase">Settings</p>
				    <p><span class="fw-normal"><?= $_SESSION['nama_lengkap']; ?></span> | <?= $_SESSION['login_as'] ?></p>
				  </div>
				  <div class="card-body">
				    <div class="card text-start">
					  <div class="card-header bg-danger text-light">
					    Danger Zone
					  </div>
					  <div class="card-body">
					    <h5 class="card-title">Change Password</h5>
					    <form action="change-password.php" method="post">
					      <input type="hidden" name="username" class="form-control" id="username" value="<?= $_SESSION['username']; ?>">
						  <div class="mb-3">
						    <label for="old-password" class="form-label">Current Password</label>
						    <input type="password" name="old-password" class="form-control" id="old-password" required>
						  </div>
						  <div class="mb-3">
						    <label for="new-password" class="form-label">New Password</label>
						    <input type="password" name="new-password" class="form-control" id="new-password" required>
						  </div>
						  <div class="mb-3">
						    <label for="confirm-password" class="form-label">Confirm Password</label>
						    <input type="password" name="confirm-password" class="form-control" id="confirm-password" required>
						  </div>
						  <button type="submit" class="btn btn-warning">Save</button>
						  <button type="reset" class="btn btn-danger">Cancel</button>
						</form>
					  </div>
					</div>
				  </div>
				  <div class="card-footer text-muted">
				    &copy; <?= date('Y'); ?>, Jonathan Basuki.
				  </div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>