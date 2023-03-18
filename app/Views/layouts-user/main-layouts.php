<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Sistem Pakar - DBD (Demam Berdarah Dengue)</title>
    <link rel="stylesheet" href="/user-assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="/user-assets/css/style.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.ico') ?>">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


</head>
<body>
    <header>  
          <?= $this->include('/layouts-user/navbar') ?>
    </header>

    <div class="content">
    <?= $this->renderSection('content') ?>
    </div>

<script src="/user-assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>