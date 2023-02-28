<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SP-DBD | Diagnosa</title>
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
              <a href="/home" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="/diagnosa" class="btn btn-danger nav-link px-4 active">Diagnosa</a>
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
                <li><a class="dropdown-item" href="#">Data Diri</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="index.html">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
  </nav>
      <!-- End Navbar -->

      <div class="container mt-5">
        <div class="row mt-5">
            <h1 class="text-center fw-bold">DIAGNOSA</h1>
            <h5 class="text-center">Pilihlah gejala sesuai yang anda rasakan !</h5>
            <div class="col-12">
                <div class="scrollable">
                    <table class="table text-center mt-5">
                     <thead>
                      <tr class="fw-bold">
                          <td>No</td>
                          <td>Nama Gejala</td>
                          <td>Pilih Gejala</td>
                      </tr>
                      </thead>
                      <tbody>
                      <tr class="fw-bold">
                        <td>1</td>
                        <td>Lemas memberat dan gelisah</td>
                      <td>
                        <input type="checkbox">
                      </td>
                      </tr>
                      <tr class="fw-bold">
                        <td>2</td>
                        <td>Penurunan kesadaran</td>
                      <td>
                        <input type="checkbox">
                      </td>
                      </tr>
                      <tr class="fw-bold">
                        <td>3</td>
                        <td>Hipotensi (tekanan darah rendah atau semakin turun)</td>
                      <td>
                        <input type="checkbox" >
                      </td>
                      </tr>
                      <tr class="fw-bold">
                        <td>4</td>
                        <td>Kedua tangan dan kaki terasa dingin</td>
                      <td>
                        <input type="checkbox">
                      </td>
                      </tr>
                      <tr class="fw-bold">
                        <td>5</td>
                        <td>Nyeri perut hebat</td>
                      <td>
                        <input type="checkbox">
                      </td>
                      </tr>
                      <tr class="fw-bold">
                        <td>6</td>
                        <td>Muntah terus menerus atau muntah hitam</td>
                      <td>
                        <input type="checkbox">
                      </td>
                      </tr>
                      <tr class="fw-bold">
                        <td>7</td>
                        <td>Kesulitan bernapas</td>
                      <td>
                        <input type="checkbox">
                      </td>
                      </tr>
                      <tr class="fw-bold">
                        <td>8</td>
                        <td>Pendarahan</td>
                      <td>
                        <input type="checkbox">
                      </td>
                      </tr>
                      <tr class="fw-bold">
                        <td>9</td>
                        <td>Hasil foto rontgen menunjukkan adanya penumpukan cairan di paru</td>
                      <td>
                        <input type="checkbox">
                      </td>
                      </tr>
                        </tbody>
                    </table>
                   
                </div>
               
            </div>
            <button class="col-md-1 ms-md-auto btn btn-danger mt-5">Next</button>
        </div>
      </div>
   

<footer class="fixed-bottom bg-dark col-12 mt-5">
  <p class="text-center"> Copyright 2023, Sistem Pakar DBD.</p>
</footer>
<script src="user-assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>