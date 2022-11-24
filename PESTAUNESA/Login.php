<?php
session_start();

$_SESSION['KCFINDER']=array();
$_SESSION['KCFINDER']['disabled'] = false;
$_SESSION['KCFINDER']['uploadURL'] = "/bkk/Images/";
$_SESSION['KCFINDER']['uploadDir'] = "";


include("pestaunesa/config.php");
if (!empty($_SESSION['usernamepesan']) && !empty($_SESSION['namapesan'])){
	echo "<script type=text/javascript>  
alert('Anda Sudah Login :) , Silahkan Logout terlebih dahulu');  
window.location = 'index.php';  
</script>";
	//header('Location:index.php');
}

if(!empty($_POST['submit'])){

  $perintah_query=mysql_query("SELECT * FROM pelanggan WHERE username= '$_POST[username]' AND password= md5('$_POST[password]')");
    if ($hasil_cek=mysql_num_rows($perintah_query))
    {
    //SUKSESS
    $datauser=mysql_fetch_array($perintah_query);
    $_SESSION['usernamepengunjung']=$_POST['username'];
    $_SESSION['passpengunjung']=$_POST['password'];
    $_SESSION['namapengunjung']=$datauser['nama'];
  //	echo $_SESSION[level];
    
    header("Location: index.php"); 
    }	else
    {
    //GAGAL LOGIN
    header("Location: Login.php?err=yes");
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
                  <label for="">Username:</label>
					        <input type="username" id="" name="username" value="" placeholder="Username" class="login username-field" required />
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                <label for="password">Password:</label>
					        <input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field" required/>
                  
                </div>
      
                <div class="text-center text-lg-start mt-4 pt-2">
                <input type="submit" name="submit" class="button btn btn-success btn-large"/>
                  <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="signup.php"
                      class="link-danger">Register</a></p>
                </div>
      
              </form>
            </div>
          </div>
        </div>
    </section>
</html>
