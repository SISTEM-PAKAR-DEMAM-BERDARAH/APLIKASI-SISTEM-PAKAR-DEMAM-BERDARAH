<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SP-DBD | Diagnosa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">
</head>
<body class="diagnosa3">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top navbar-sp">
      <div class="container-fluid">
      <a href="" class="navbar-brand item"> SP - DBD</a>
      <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto cek">
            <li class="nav-item ">
              <a href="/home.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="/diagnosa.html" class="btn btn-danger nav-link px-4 active">Diagnosa</a>
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
            <div class="col-12">
                <div class="scrollable">
                    <table class="table text-center mt-5">
                     <thead>
                      <tr class="fw-bold">
                          <td>No</td>
                          <td>Kode</td>
                          <td>Pilihan Gejala</td>
                          <td>Nilai Keyakinan Gejala</td>
                      </tr>
                      </thead>
                      <tbody>
                      <tr class="fw-bold">
                        <td>1</td>
                        <td>G01</td>
                        <td>Lemas memberat dan gelisah</td>
                      <td>
                        <select class="form-select-sm keyakinan text-center">
                          <option selected>Tentukan</option>
                          <option value="0.2">Tidak Tahu</option>
                          <option value="0.4">Tidak Yakin</option>
                          <option value="0.6">Cukup Yakin</option>
                          <option value="0.8">Yakin</option>
                          <option value="1.0">Sangat Yakin</option>
                        </select>
                      </td>
                      </tr>
                      <tr class="fw-bold">
                        <td>2</td>
                        <td>G01</td>
                        <td>Penurunan kesadaran</td>
                        <td>
                          <select class="form-select-sm keyakinan text-center">
                            <option selected>Tentukan</option>
                            <option value="0.2">Tidak Tahu</option>
                            <option value="0.4">Tidak Yakin</option>
                            <option value="0.6">Cukup Yakin</option>
                            <option value="0.8">Yakin</option>
                            <option value="1.0">Sangat Yakin</option>
                          </select>
                          </td>
                      </tr>
                      <tr class="fw-bold">
                        <td>3</td>
                        <td>G01</td>
                        <td>Hipotensi (tekanan darah rendah atau semakin turun)</td>
                        <td>
                          <select class="form-select-sm keyakinan text-center">
                            <option selected>Tentukan</option>
                            <option value="0.2">Tidak Tahu</option>
                            <option value="0.4">Tidak Yakin</option>
                            <option value="0.6">Cukup Yakin</option>
                            <option value="0.8">Yakin</option>
                            <option value="1.0">Sangat Yakin</option>
                          </select>
                          </td>
                      </tr>
                      <tr class="fw-bold">
                        <td>4</td>
                        <td>G01</td>
                        <td>Kedua tangan dan kaki terasa dingin</td>
                        <td>
                          <select class="form-select-sm keyakinan text-center">
                            <option selected>Tentukan</option>
                            <option value="0.2">Tidak Tahu</option>
                            <option value="0.4">Tidak Yakin</option>
                            <option value="0.6">Cukup Yakin</option>
                            <option value="0.8">Yakin</option>
                            <option value="1.0">Sangat Yakin</option>
                          </select>
                          </td>
                      </tr>
                      <tr class="fw-bold">
                        <td>5</td>
                        <td>G01</td>
                        <td>Nyeri perut hebat</td>
                        <td>
                          <select class="form-select-sm keyakinan text-center">
                            <option selected>Tentukan</option>
                            <option value="0.2">Tidak Tahu</option>
                            <option value="0.4">Tidak Yakin</option>
                            <option value="0.6">Cukup Yakin</option>
                            <option value="0.8">Yakin</option>
                            <option value="1.0">Sangat Yakin</option>
                          </select>
                          </td>
                      </tr>
                      <tr class="fw-bold">
                        <td>6</td>
                        <td>G01</td>
                        <td>Muntah terus menerus atau muntah hitam</td>
                        <td>
                          <select class="form-select-sm keyakinan text-center">
                            <option selected>Tentukan</option>
                            <option value="0.2">Tidak Tahu</option>
                            <option value="0.4">Tidak Yakin</option>
                            <option value="0.6">Cukup Yakin</option>
                            <option value="0.8">Yakin</option>
                            <option value="1.0">Sangat Yakin</option>
                          </select>
                          </td>
                      </tr>
                      <tr class="fw-bold">
                        <td>7</td>
                        <td>G01</td>
                        <td>Kesulitan bernapas</td>
                        <td>
                          <select class="form-select-sm keyakinan text-center">
                            <option selected>Tentukan</option>
                            <option value="0.2">Tidak Tahu</option>
                            <option value="0.4">Tidak Yakin</option>
                            <option value="0.6">Cukup Yakin</option>
                            <option value="0.8">Yakin</option>
                            <option value="1.0">Sangat Yakin</option>
                          </select>
                          </td>
                      </tr>
                      <tr class="fw-bold">
                        <td>8</td>
                        <td>G01</td>
                        <td>Pendarahan</td>
                        <td>
                          <select class="form-select-sm keyakinan text-center">
                            <option selected>Tentukan</option>
                            <option value="0.2">Tidak Tahu</option>
                            <option value="0.4">Tidak Yakin</option>
                            <option value="0.6">Cukup Yakin</option>
                            <option value="0.8">Yakin</option>
                            <option value="1.0">Sangat Yakin</option>
                          </select>
                          </td>
                      </tr>
                      <tr class="fw-bold">
                        <td>9</td>
                        <td>G01</td>
                        <td>Hasil foto rontgen menunjukkan adanya penumpukan cairan di paru</td>
                        <td>
                          <select class="form-select-sm keyakinan text-center">
                            <option selected>Tentukan</option>
                            <option value="0.2">Tidak Tahu</option>
                            <option value="0.4">Tidak Yakin</option>
                            <option value="0.6">Cukup Yakin</option>
                            <option value="0.8">Yakin</option>
                            <option value="1.0">Sangat Yakin</option>
                          </select>
                          </td>
                      </tr>    
                        </tbody>
                    </table>   
                </div>
               
            </div>
        </div>
            <div class="container text-center">
            <div class="row mt-5 justify-content-center">
                <div class="col-4 fw-bold text-center">
                <p>Diagnosa Penyakit :</p>
                <p >xxxxx</p>
                <p>Nilai CF :</p>
                <p>XXXX</p>
                <br>
                <p>(XX%)</p>
                </div>
                <div class="col-2 fw-bold text-center">
                    <img src="images/2.png" class="rounded float-start" alt="">
                </div>
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-12 fw-bold text-center">
                <p>Pengobatan : Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
    </div>
        </div>
        </div>


<footer class="fixed-bottom bg-dark col-12 mt-5">
  <p class="text-center"> Copyright 2023, Sistem Pakar DBD.</p>
</footer>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>