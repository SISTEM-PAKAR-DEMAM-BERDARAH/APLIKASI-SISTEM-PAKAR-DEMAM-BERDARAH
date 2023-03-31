<?= $this->extend('/layouts/main-layout') ?>

<?= $this->section('content') ?>
<div class="page-content">
   <div class="container-fluid">

      <!-- start page title -->
      <div class="row">
         <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
               <h4 class="mb-0">Data Hasil Diagnosa</h4>

               <div class="page-title-right">
                  <ol class="breadcrumb m-0">
                     <li class="breadcrumb-item active">
                        <span class="uil-home-alt me-2"></span>Dashboard &nbsp; / &nbsp; Data Diagnosa &nbsp; / &nbsp; Hasil Diagnosa
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
                  <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                     <thead>
                        <tr>
                           <th>#No</th>
                           <th>Nama Pengguna</th>
                           <th>Tanggal Diagnosa</th>
                           <th>Gejala</th>
                           <th>Penyakit</th>
                           <th>Pengobatan</th>
                           <th>Presentase Kepastian</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php $number = 1;
                        foreach ($datadiagnosa as $diagnosa) :
                        ?>
                           <tr>
                              <td><?= $number++ ?></td>
                              <td><?= $diagnosa['email'] ?></td>
                              <td><?= $diagnosa['tanggal_diagnosa'] ?></td>
                              <td>
                                 <ul><?= $diagnosa['gejala'] ?></ul>
                              </td>
                              <td><?= $diagnosa['nama_penyakit'] ?></td>
                              <td><?= $diagnosa['detail_solusi'] ?></td>
                              <td><?= $diagnosa['cf_hasil'] ?>%</td>
                           </tr>
                        <?php
                        endforeach;
                        ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div> <!-- end col -->
      </div> <!-- end row -->

   </div>
</div>
<?= $this->endSection() ?>