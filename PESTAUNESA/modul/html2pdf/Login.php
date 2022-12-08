
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">


	<title>Login</title>

  </head>
  <body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="/PESTAUNESA/assets/images/Football Goal.svg"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form action="" method="POST">
                
      
                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0">Sign In</p>
                </div>
      
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="email" class="form-control form-control-lg"
                    placeholder="Email" value="<?html echo $email; ?>" required/>
                  <label class="form-label" for="email">Email</label>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                  <input type="password" id="password" class="form-control form-control-lg"
                    placeholder="Password" value="<?html echo $password; ?>" required/>
                  <label class="form-label" for="password">Password</label>
                </div>
      
                <div class="text-center text-lg-start mt-4 pt-2">
                <button name="submit" type="button" class="btn btn-primary btn-block mb-4">Login</button>
                  <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="signup.html"
                      class="link-danger">Register</a></p>
                </div>
      
              </form>
            </div>
          </div>
        </div>
    </section>
</html>
