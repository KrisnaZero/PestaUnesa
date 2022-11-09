<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: Login.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}

	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">


	<title>Signup</title>

  </head>
  <body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="assets/images/signup.svg"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form action="" method="POST">
      
                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0">Sign Up</p>
                </div>
                <!-- name input -->
                <div class="form-outline mb-4">
                    <input type="username" name="username" class="form-control form-control-lg"
                      placeholder="Username" value="<?php echo $username; ?>" required />
                    <label class="form-label" for="username">Username</label>
                  </div>
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" name="email" class="form-control form-control-lg"
                      placeholder="Email" value="<?php echo $email; ?>" required />
                    <label class="form-label" for="email">Email</label>
                  </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                  <input type="password" name="password" class="form-control form-control-lg"
                    placeholder="Password" value="<?php echo $password; ?>" required />
                  <label class="form-label" for="password">Password</label>
                </div>
                <!-- confirm Password input -->
                <div class="form-outline mb-3">
                  <input type="password" name="cpassword" class="form-control form-control-lg"
                    placeholder="Confirm Password" value="<?php echo $cpassword; ?>" required />
                  <label class="form-label" for="password">Password</label>
                </div>
      
      
                <div class="text-center text-lg-start mt-4 pt-2">
                <button name="submit" type="button" class="btn btn-primary btn-block mb-4">Sign Up</button>
                  <p class="small fw-bold mt-2 pt-1 mb-0">Sudah mempunyai akun , silahkan <a href="Login.php"
                      class="link-danger">Login</a></p>
                </div>
      
              </form>
            </div>
          </div>
        </div>
      </section>
</html>
