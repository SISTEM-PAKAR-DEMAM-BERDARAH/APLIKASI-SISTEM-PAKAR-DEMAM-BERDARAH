<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SP-DBD | Home</title>
    <link rel="stylesheet" href="user-assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="user-assets/css/style.css">
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
              <a href="/home" class="btn btn-danger nav-link px-4 active">Home</a>
            </li>
            <li class="nav-item">
              <a href="/diagnosa" class="nav-link">Diagnosa</a>
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
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Username
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="Edit.html">Ubah Password</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="index.html">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
  </nav>
      <!-- End Navbar -->
<div class="home">
<div class="container">
    <div class="row ">
        <div class="col-6 mt-5">
          <h1 class="fw-bold mb-3">SELAMAT DATANG</h1>
          <h5 class="mt-1">SISTEM PAKAR DIAGNOSA GEJALA DEMAM BERDARAH DENGUE</h5>
          <p>Sistem ini dapat mendiagnosa gejala demam berdarah anda. Semua data pada sistem ini berdasarkan dari seorang pakar.</p>
          <button class="btn btn-danger ">
            <a href="diagnosa.html" class="text-decoration-none text-white">Memulai Diagnosa ➞</a>
          </button>
        </div>
        <div class="col-6">
           <img src="images/doctor-with-medical-service-icons_24877-51508.jpg" alt="">
        </div>
    </div>
</div>
</div>

<footer class="fixed-bottom bg-dark col-12 mt-5">
  <p class="text-center"> Copyright 2023, Sistem Pakar DBD.</p>
</footer>
<script src="user-assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>