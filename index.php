<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Login Page | Multi User Login Template</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="assets/dist/css/signin.css" rel="stylesheet">

  </head>
  <body class="text-center">
    
    <main class="form-signin">
      <form action="login.php" method="post">
        <img class="mb-4" src="assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Login</h1>
        <label for="inputUsername" class="visually-hidden">Username</label>
        <input type="text" id="inputUsername" name="username" class="form-control mb-2" placeholder="Username" required autofocus>
        <label for="inputPassword" class="visually-hidden">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control mb-2" placeholder="Password" required>
        <select name="login-as" class="form-control">
          <option value="Student">Student</option>
          <option value="Teacher">Teacher</option>
          <option value="Administrator">Administrator</option>
        </select>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" name="" type="submit">Log in</button>
        <p class="mt-5 mb-3 text-muted">&copy; <?= date('Y'); ?>, Jonathan Basuki.</p>
      </form>
    </main>


    
  </body>
</html>
