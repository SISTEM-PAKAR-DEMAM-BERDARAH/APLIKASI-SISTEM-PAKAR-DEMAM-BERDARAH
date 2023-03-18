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
        <div class="row">
          <div class="login col-12">
            <h2 class="text-center fw-bold">LOGIN</h2>
            <p class="text-center">Masukkan Username dan Password</p>
            <form >
                <div class="col-5 mx-auto mb-4">
                    <input class="form-control" type="email" placeholder="Masukkan Username" required autocomplete="off">
                </div>
                <div class="col-5 mx-auto mb-4">
                    <input class="form-control" type="password" placeholder="Masukkan Password" required  autocomplete="off">
                </div>
                
                <div class="d-grid gap-2 col-3 mx-auto mb-3 ">
                    <button class="btn btn-danger fw-bold" type="button">LOGIN</button>
                  </div>
                <p class="text-center mt-2">Belum mempunyai akun ? <a href="register" class="text-decoration-none text-blue bg-transparent">Daftar</a></p>
              </form>   
        </div>
      </div>
    </div>

<script src="/user-assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>