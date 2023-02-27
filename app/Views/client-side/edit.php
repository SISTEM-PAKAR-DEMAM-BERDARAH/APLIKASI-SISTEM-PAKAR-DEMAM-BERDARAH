<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SP-DBD | Edit</title>
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
  <div class="login">
    <div class="container">
        <div class="row ">
            <h2 class="text-center fw-bold">Ubah Password</h2>
            <p class="text-center">Masukkan Password Lama dan Password baru</p>
            <form>
                <div class="mb-4 col-8 mx-auto">
                    <input class="form-control" type="password" placeholder="Masukkan assword Lama">
                </div>
                <div class="mb-4 col-8 mx-auto">
                    <input class="form-control" type="password" placeholder="Password Baru">
                </div>
                <div class="mb-4 col-8 mx-auto">
                    <input class="form-control" type="password" placeholder="Ulangi Password Baru">
                </div>
                <div class="d-grid gap-2 col-3 mx-auto">
                    <button class="btn btn-danger" type="button">Edit</button>
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