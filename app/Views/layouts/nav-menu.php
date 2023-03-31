<div class="container-fluid">
   <div class="topnav">
      <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
         <div class="collapse navbar-collapse" id="topnav-menu-content">
            <ul class="navbar-nav mx-auto">
               <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('/dashboard') ?>">
                     <i class="uil-home-alt me-2"></i> Dashboard
                  </a>
               </li>

               <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('/data-pengguna') ?>">
                     <i class="uil-users-alt me-2"></i> Data Pengguna
                  </a>
               </li>

               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button">
                     <i class="uil-coronavirus me-2"></i>Data Penyakit <div class="arrow-down"></div>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="topnav-pages">
                     <a href="<?= base_url('/data-gejala') ?>" class="dropdown-item">Jenis Gejala</a>
                     <a href="<?= base_url('/data-penyakit') ?>" class="dropdown-item">Jenis Penyakit</a>
                  </div>
               </li>

               <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('/basis-pengetahuan') ?>">
                     <i class="uil-book-alt me-2"></i> Nilai Keyakinan
                  </a>
               </li>

               <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('/data-solusi') ?>">
                     <i class="uil-shield-plus me-2"></i> Solusi Pengobatan
                  </a>
               </li>

               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button">
                     <i class="uil-clipboard-notes me-2"></i>Data Diagnosa <div class="arrow-down"></div>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="topnav-pages">
                     <a href="<?= base_url('/rules-base') ?>" class="dropdown-item">Aturan Diagnosa</a>
                     <a href="<?= base_url('/data-diagnosa') ?>" class="dropdown-item">Hasil Diagnosa</a>
                     <a href="<?= base_url('/diagnosa') ?>" class="dropdown-item">Halaman Diagnosa</a>
                  </div>
               </li>
            </ul>
         </div>
      </nav>
   </div>
</div>