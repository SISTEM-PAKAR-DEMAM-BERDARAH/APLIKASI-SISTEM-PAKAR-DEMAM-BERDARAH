<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pakar - DBD (Demam Berdarah Dengue)</title>
    <link rel="stylesheet" href="/user-assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="/user-assets/css/style.css">
   <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.ico') ?>">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <div class="container">
      
          <div class="login">
            <h2 class="text-center fw-bold">Ubah Password</h2>
            <p class="text-center">Masukkan Username dan Password</p>
            <form>
            <div class=" mx-auto mb-4">
                    <input class="form-control" type="password" placeholder="Masukkan Password Lama"required autocomplete="off">
                </div>
                <div class=" mx-auto mb-4">
                    <input class="form-control" type="password" placeholder="Masukkan Password Baru" required autocomplete="off">
                </div>
                <div class=" mx-auto mb-4">
                    <input class="form-control" type="password" placeholder="Ulangi Password Baru" required autocomplete="off">
                </div>
                <div class="row ">          
                    <div class="d-grid text-center  col-6 mb-3 ">
                    <button class="btn btn-primary " type="button">
                        <a class="text-decoration-none text-white" href="/"> Kembali</a>
                    </button>
                </div>
                <div class="d-grid text-center col-6 mb-3 ">
                    <button class="btn btn-success" type="button">
                    <a class="text-decoration-none text-white" href=""> Ubah</a>
                    </button>
                </div>
                </div>

            </form>   
  
      </div>
    </div>

<script src="/user-assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>