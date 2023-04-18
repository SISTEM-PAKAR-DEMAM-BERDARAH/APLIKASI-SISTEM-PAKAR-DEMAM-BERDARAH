<div class="navbar-header">
   <div class="d-flex">
      <!-- LOGO -->
      <a href="<?= base_url('/dashboard') ?>">
         <h2 style="color: white; margin-right: 1em;" class="mt-3">ADMIN SP-DBD</h2>
      </a>

      <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
         <i class="fa fa-fw fa-bars"></i>
      </button>

      <!-- App Search-->
      <form class="app-search d-none d-lg-block">
         <div class="position-relative">
            <input type="text" class="form-control" placeholder="Search...">
            <span class="uil-search"></span>
         </div>
      </form>
   </div>

   <div class="d-flex">

      <div class="dropdown d-none d-lg-inline-block ms-1">
         <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
            <i class="uil-minus-path"></i>
         </button>
      </div>

      <div class="dropdown d-inline-block">
         <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="uil-bell"></i>
            <?php
               if ($notif) {
                  echo "
                     <span class='badge bg-danger rounded-pill text-danger'>.</span>
                  ";
               }
            ?>
         </button>
         <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
            <div class="p-3">
               <div class="row align-items-center">
                  <div class="col">
                     <h5 class="m-0 font-size-16"> Notifications </h5>
                  </div>
               </div>
            </div>
            <div data-simplebar style="max-height: 230px;">
               <a href="javascript:void(0);" class="text-reset notification-item">
                  <?php
                  foreach ($notif as $diagnosa) {
                  ?>
                     <div class="d-flex align-items-start">
                        <div class="flex-shrink-0 me-3">
                           <img src="<?= base_url('assets/images/users/avatar-4.jpg') ?>" class="rounded-circle avatar-xs" alt="user-pic">
                        </div>
                        <div class="flex-grow-1">
                           <h6 class="mb-1"><?= $diagnosa['username']; ?></h6>
                           <div class="font-size-12 text-muted">
                              <p class="mb-1">Baru saja melakukan diagnosa penyakit <strong><?= $diagnosa['nama_penyakit']; ?></strong></p>
                           </div>
                        </div>
                     </div>
                  <?php
                  }
                  ?>
               </a>
            </div>
            <div class="p-2 border-top">
               <div class="d-grid">
                  <a class="btn btn-sm btn-link font-size-14 text-center" href="/data-diagnosa">
                     <i class="uil-arrow-circle-right me-1"></i> Selengkapnya...
                  </a>
               </div>
            </div>
         </div>
      </div>

      <div class="dropdown d-inline-block">
         <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="rounded-circle header-profile-user" src="<?= base_url('assets/images/users/avatar-4.jpg') ?>" alt="Header Avatar">
            <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15"><?= user()->username;  ?></span>
            <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
         </button>
         <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <a class="dropdown-item" href="<?= base_url('/logout') ?>"><i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Logout</span></a>
         </div>
      </div>
   </div>
</div>