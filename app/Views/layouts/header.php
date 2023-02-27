<div class="navbar-header">
   <div class="d-flex">
      <!-- LOGO -->
      <a href="/">
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
            <span class="badge bg-danger rounded-pill">4</span>
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
                  <div class="d-flex align-items-start">
                     <div class="flex-shrink-0 me-3">
                        <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                     </div>
                     <div class="flex-grow-1">
                        <h6 class="mb-1">Salena Layfield</h6>
                        <div class="font-size-12 text-muted">
                           <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                           <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="p-2 border-top">
               <div class="d-grid">
                  <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                     <i class="uil-arrow-circle-right me-1"></i> Selengkapnya...
                  </a>
               </div>
            </div>
         </div>
      </div>

      <div class="dropdown d-inline-block">
         <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-4.jpg" alt="Header Avatar">
            <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">Novita Sari</span>
            <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
         </button>
         <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <a class="dropdown-item" href="#"><i class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> <span class="align-middle">Profile</span></a>
            <a class="dropdown-item" href="#"><i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Logout</span></a>
            <a class="dropdown-item" href="#"><i class="uil uil-lock-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Ubah Password</span></a>
         </div>
      </div>
   </div>
</div>