<!doctype html>
<html lang="en">
  <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="assets/css/style.css">
 
 
     <title>Booking</title>

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
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="informasi.php">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Jadwal.php">Jadwal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="service.php">Booking</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a href="Login.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Login</a>
                </form>
            </div>
        </div>
    </nav>
</header>
<div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-push-5">
                    <div class="booking-cta">
                        <h1>Booking Stadion Unesa</h1>
                        <p>Mohon untuk menyewa stadion dengan bertanggung jawab , segala kerusaskan akan ditanggung penyewa dan akan dikenakan Denda! , serta gunakan jadwal mulai sewa dan selesai dengan teliti!.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-md-pull-7">
                    <div class="booking-form">
                        <form>
                            <div class="form-group">
                                <span class="form-label">Nama Penyewa</span>
                                <input class="form-control" type="text" placeholder="Enter a Name">
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Booking Mulai</span>
                                        <input class="form-control" type="date" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Booking Selesai</span>
                                        <input class="form-control" type="date" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Keperluan</span>
                                <input class="form-control" type="text" placeholder="Keperluan Menyewa Stadion?">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Asal</span>
                                <input class="form-control" type="text" placeholder="Asal Kamu">
                            </div>
                            <h1></h1>
                            <form class="d-flex">
                                <a href="booking sukses.html" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Booking Now</a>
                            </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Footer whatsapp pesta unesa  -->
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

        <!-- Bootstrap JS -->
        <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
</html>
