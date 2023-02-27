<?= $this->extend('/layouts/main-layout') ?>

<?= $this->section('content') ?>
<div class="page-content">
   <div class="container-fluid">

      <!-- start page title -->
      <div class="row">
         <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
               <h4 class="mb-0">Dashboard</h4>

               <div class="page-title-right">
                  <ol class="breadcrumb m-0">
                     <li class="breadcrumb-item active">
                        <span class="uil-sign-out-alt me-2"></span>Masuk &nbsp; / &nbsp; Dashboard
                     </li>
                  </ol>
               </div>

            </div>
         </div>
      </div>
      <!-- end page title -->

      <div class="row">
         <div class="col-md-6 col-xl-3">
            <div class="card">
               <div class="card-body">
                  <div class="float-end">
                     <h1><span class="uil-coronavirus text-primary"></span></h1>
                  </div>
                  <div>
                     <h4 class="mb-1 mt-1"><span data-plugin="counterup">198</span></h4>
                     <p class="text-muted mb-0">Jumlah Penyakit</p>
                  </div>
                  <p class="text-muted mt-3 mb-0 text-right"><span class="text-primary me-1"><i class="uil-coronavirus me-1"></i>detail data penyakit</span>
                  </p>
               </div>
            </div>
         </div> <!-- end col-->
         <div class="col-md-6 col-xl-3">
            <div class="card">
               <div class="card-body">
                  <div class="float-end">
                     <h1><span class="uil-coronavirus text-warning"></span></h1>
                  </div>
                  <div>
                     <h4 class="mb-1 mt-1"><span data-plugin="counterup">198</span></h4>
                     <p class="text-muted mb-0">Jumlah Gejala</p>
                  </div>
                  <p class="text-muted mt-3 mb-0 text-right"><span class="text-warning me-1"><i class="uil-coronavirus me-1"></i>detail data gejala</span>
                  </p>
               </div>
            </div>
         </div> <!-- end col-->
         <div class="col-md-6 col-xl-3">
            <div class="card">
               <div class="card-body">
                  <div class="float-end">
                     <h1><span class="uil-medical-square text-danger"></span></h1>
                  </div>
                  <div>
                     <h4 class="mb-1 mt-1"><span data-plugin="counterup">198</span></h4>
                     <p class="text-muted mb-0">Jumlah Pencegahan</p>
                  </div>
                  <p class="text-muted mt-3 mb-0 text-right"><span class="text-danger me-1"><i class="uil-medical-square me-1"></i>detail data pencegahan</span>
                  </p>
               </div>
            </div>
         </div> <!-- end col-->
         <div class="col-md-6 col-xl-3">
            <div class="card">
               <div class="card-body">
                  <div class="float-end">
                     <h1><span class="uil-medkit text-success"></span></h1>
                  </div>
                  <div>
                     <h4 class="mb-1 mt-1"><span data-plugin="counterup">198</span></h4>
                     <p class="text-muted mb-0">Jumlah Pengobatan</p>
                  </div>
                  <p class="text-muted mt-3 mb-0 text-right"><span class="text-success me-1"><i class="uil-medkit me-1"></i>detail data pengobatan</span>
                  </p>
               </div>
            </div>
         </div> <!-- end col-->
         <div class="col-md-6 col-xl-3">
            <div class="card">
               <div class="card-body">
                  <div class="float-end">
                     <h1><span class="uil-book text-primary"></span></h1>
                  </div>
                  <div>
                     <h4 class="mb-1 mt-1"><span data-plugin="counterup">198</span></h4>
                     <p class="text-muted mb-0">Basis Pengetahuan</p>
                  </div>
                  <p class="text-muted mt-3 mb-0 text-right"><span class="text-primary me-1"><i class="uil-book me-1"></i>detail basis pengetahuan</span>
                  </p>
               </div>
            </div>
         </div> <!-- end col-->
         <div class="col-md-6 col-xl-6">
            <div class="card">
               <div class="card-body">
                  <div class="float-end">
                     <h1><span class="uil-clipboard-notes text-info"></span></h1>
                  </div>
                  <div>
                     <h4 class="mb-1 mt-1"><span data-plugin="counterup">198</span></h4>
                     <p class="text-muted mb-0">Hasil Diagnosa</p>
                  </div>
                  <p class="text-muted mt-3 mb-0 text-right"><span class="text-info me-1"><i class="uil-clipboard-notes me-1"></i>detail hasil diagnosa</span>
                  </p>
               </div>
            </div>
         </div> <!-- end col-->
         <div class="col-md-6 col-xl-3">
            <div class="card">
               <div class="card-body">
                  <div class="float-end">
                     <h1><span class="uil-users-alt text-success"></span></h1>
                  </div>
                  <div>
                     <h4 class="mb-1 mt-1">
                        <span data-plugin="counterup"><?= $totalpengguna; ?></span>
                     </h4>
                     <p class="text-muted mb-0">Jumlah Pengguna</p>
                  </div>
                  <p class="text-muted mt-3 mb-0 text-right"><span class="text-success me-1"><i class="uil-users-alt me-1"></i>detail data pengguna</span>
                  </p>
               </div>
            </div>
         </div> <!-- end col-->
      </div> <!-- end row-->

   </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
<?= $this->endSection() ?>