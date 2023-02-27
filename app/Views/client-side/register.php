<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SP-DBD | Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top navbar-sp">
      <div class="container-fluid">
      <a href="" class="navbar-brand item"> SP - DBD</a>
      <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto cek">
            <li class="nav-item ">
              <a href="/index.html" class="btn btn-danger nav-link px-4">Login</a>
            </li>
            <li class="nav-item">
              <a href="/home.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="/diagnosa.html" class="nav-link">Diagnosa</a>
            </li>
            <li class="nav-item">
              <a href="/info.html" class="nav-link">Info</a>
            </li> 
            <li class="nav-item">
              <a href="/contact.html" class="nav-link">Contact</a>
            </li>
            <li class="nav-item">
              <a href="/tentang.html" class="nav-link">Tentang</a>
            </li>
          </ul>
        </div>
      </div>
  </nav>
      <!-- End Navbar -->
  <div class="register">
    <div class="container">
        <div class="row">
            <h2 class="text-center tex"><strong>DAFTAR</strong></h2>
            <p class="text-center">Masukan Data Diri Anda !</p>
            <form>
                  <div class="mb-4">
                      <input class="form-control" type="email" placeholder="nama Lengkap">
                  </div>
                  <div class="mb-4 ">
                      <input class="form-control" type="text" placeholder="Username">
                  </div>
                  <div class="mb-4 ">
                    <input class="form-control" type="password" placeholder="Password">
                 </div>
                  <div class="mb-4 ">
                  <input class="form-control" type="password" placeholder="Ulangi Password">
                  </div>
                <div class="mb-4 ">
                  <input class="form-control" type="text" placeholder="Alamat">
                 </div>
                <div class="d-grid gap-2 col-3 mx-auto">
                  <button class="btn btn-danger" type="button">Daftar</button>
                  </div>
              </form>   
        </div>
    </div>
</div>

<footer class="fixed-bottom bg-dark col-12 mt-5">
  <p class="text-center"> Copyright 2023, Sistem Pakar DBD.</p>
</footer>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>