<.html

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: Login.html");
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



	<title>HomePage</title>

  </head>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="Login.html">
                <h2 class="text-primary">PestaUnesa</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mob-navbar" aria-label="Toggle">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mob-navbar">
                <ul class="navbar-nav mb-2 mb-lg-0 mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="informasi.html">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Jadwal.html">Jadwal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="service.html">Booking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About Us</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a href="Login.html" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Login</a>
                </form>
            </div>
        </div>
    </nav>
</header>
<!-- End Header Section -->
	<!--BannerPESTAuNESA-->
	<section class="hero-banner bg-light py-5">
		<div class="container">
			<div class="row row align-items-center">
				<div class="col-lg-5 offset-lg-1 order-lg-1">
					<img src="assets/images/Football Goal.svg" class="img-fluid" alt="Web Development">
				</div>
				<div class="col-lg-6">
				
                <h1 class="mt-3">Welcome to Pesta Unesa!</h1>
					<p class="lead text-secondary my-5">PestaUnesa merupakan website manajemen stadion yang mengatur penyewaan dan penjadwalan stadion.</p>
					<a href="service.html" class="btn btn-outline-secondary btn-lg border">Booking Sekarang</a>
				</div>
			</div>
		</div>
	</section>
   <!-- Footer whatsapp PestaUnesa  -->
   <div class="bg-light pt-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="widget-title">
                    <h3 class="mb-4 fs-5 text-secondary text-uppercase">WhatsApp</h3>
                </div>
                <h4 class="text-success">089699912123</h4>
                <p class="text-secondary m-0 mt-3">Senin. - Kamis. <b>07.00 - 17:00</b></p>
                <p class="text-secondary">Juma,at. - Minggu. <b>13.00 - 22.00</b></p>
            </div>
        </div>
    </div>
</div>
	
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
