<?= $this->extend('/layouts/main-layout') ?>

<?= $this->section('content') ?>
<div class="page-content">
   <div class="container-fluid">

      <!-- start page title -->
      <div class="row">
         <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
               <h4 class="mb-0">Aturan Diagnosa</h4>

               <div class="page-title-right">
                  <ol class="breadcrumb m-0">
                     <li class="breadcrumb-item active">
                        <span class="uil-home-alt me-2"></span>Dashboard &nbsp; / &nbsp; Data Diagnosa &nbsp; / &nbsp; Aturan Diagnosa
                     </li>
                  </ol>
               </div>

            </div>
         </div>
      </div>
      <!-- end page title -->

      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-body">
                  <div class="row">
                     <div class="col-12">
                        <div class="card">
                           <div class="card-header text-center">
                              <em class="lead" style="font-weight: 500 !important;">#1. Demam Dengue</em>
                           </div>
                           <div class="card-body">
                              <p><em class="lead" style="font-weight: 500 !important;">IF</em> &nbsp; Trombosit 100.000 per mikroliter darah</p>
                              <p><em class="lead" style="font-weight: 500 !important;">AND</em> &nbsp; Demam tinggi mendadak</p>
                              <p><em class="lead" style="font-weight: 500 !important;">AND</em> &nbsp; Nyeri kepala berat bagian dahi</p>
                              <p><em class="lead" style="font-weight: 500 !important;">AND</em> &nbsp; Nyeri sendi dan otot</p>
                              <p><em class="lead" style="font-weight: 500 !important;">AND</em> &nbsp; Mual</p>
                              <p><em class="lead" style="font-weight: 500 !important;">AND</em> &nbsp; Muntah</p>
                              <p><em class="lead" style="font-weight: 500 !important;">AND</em> &nbsp; Ruam (dada, perut, kaki, tangan)</p>
                              <p><em class="lead" style="font-weight: 500 !important;">THEN</em> &nbsp; <span class="lead text-danger" style="font-weight: 500 !important;">Demam Dengue</span></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="card">
                           <div class="card-header text-center">
                              <em class="lead" style="font-weight: 500 !important;">#2. Demam Berdarah Dengue (DBD)</em>
                           </div>
                           <div class="card-body">
                              <p><em class="lead" style="font-weight: 500 !important;">IF</em> &nbsp; Trombosit menurun hingga 40.000-100.000 per mikroliter darah</p>
                              <p><em class="lead" style="font-weight: 500 !important;">AND</em> &nbsp; Demam 2-7 hari</p>
                              <p><em class="lead" style="font-weight: 500 !important;">AND</em> &nbsp; Wajah cenderung memerah</p>
                              <p><em class="lead" style="font-weight: 500 !important;">AND</em> &nbsp; Tinja berwarna hitam atau mengeluarkan darah</p>
                              <p><em class="lead" style="font-weight: 500 !important;">AND</em> &nbsp; Mual</p>
                              <p><em class="lead" style="font-weight: 500 !important;">AND</em> &nbsp; Muntah</p>
                              <p><em class="lead" style="font-weight: 500 !important;">AND</em> &nbsp; Nyeri kepala</p>
                              <p><em class="lead" style="font-weight: 500 !important;">AND</em> &nbsp; Nyeri otot dan persendian</p>
                              <p><em class="lead" style="font-weight: 500 !important;">AND</em> &nbsp; Nyeri tulang</p>
                              <p><em class="lead" style="font-weight: 500 !important;">AND</em> &nbsp; Perut terasa kembung</p>
                              <p><em class="lead" style="font-weight: 500 !important;">AND</em> &nbsp; Mimisan</p>
                              <p><em class="lead" style="font-weight: 500 !important;">THEN</em> &nbsp; <span class="lead text-danger" style="font-weight: 500 !important;">Demam Berdarah Dengue</span></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="card">
                           <div class="card-header text-center">
                              <em class="lead" style="font-weight: 500 !important;">#3. Syok Syndrome Dengue</em>
                           </div>
                           <div class="card-body">
                              <p><em class="lead" style="font-weight: 500 !important;">IF</em> &nbsp; Demam mendadak turun</p>
                              <p><em class="lead" style="font-weight: 500 !important;">AND</em> &nbsp; Tubuh terasa dingin</p>
                              <p><em class="lead" style="font-weight: 500 !important;">AND</em> &nbsp; Nyeri perut atau ulu hati</p>
                              <p><em class="lead" style="font-weight: 500 !important;">AND</em> &nbsp; Wajah pucat</p>
                              <p><em class="lead" style="font-weight: 500 !important;">AND</em> &nbsp; Nadi melemah</p>
                              <p><em class="lead" style="font-weight: 500 !important;">AND</em> &nbsp; Hilang kesadaran</p>
                              <p><em class="lead" style="font-weight: 500 !important;">AND</em> &nbsp; Trombosit menurun dibawah 40.000 per mikroliter darah</p>
                              <p><em class="lead" style="font-weight: 500 !important;">AND</em> &nbsp; Pendarahan dari hidung dan anus</p>
                              <p><em class="lead" style="font-weight: 500 !important;">THEN</em> &nbsp; <span class="lead text-danger" style="font-weight: 500 !important;">Syok Syndrome Dengue</span></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div> <!-- end col -->
      </div> <!-- end row -->

   </div>
</div>
<?= $this->endSection() ?>