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
	<title>Administrator Dashboard | Multi User Login Template</title>

	<!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />

</head>
<body>
	<div class="container">
		<div class="row my-3">
			<div class="col-md-8 offset-md-2">
				<div class="card text-center">
				  <div class="card-header bg-success text-start text-light fw-light py-3">
				    <p class="fs-1 text-uppercase">Dashboard</p>
				    <div class="d-flex justify-content-between">
				    	<p>Hello, <span class="fw-normal"><?= $_SESSION['nama_lengkap']; ?></span> | Administrator</p>
					    <a href="settings.php" class="text-light align-items-center fs-5">
					    	<i class="fas fa-cog"></i>
					    </a>
				    </div>
				  </div>
				  <div class="card-body">
				    <h5 class="card-title">Special title treatment</h5>
				    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				    <a href="logout.php" class="btn btn-danger">Logout</a>
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