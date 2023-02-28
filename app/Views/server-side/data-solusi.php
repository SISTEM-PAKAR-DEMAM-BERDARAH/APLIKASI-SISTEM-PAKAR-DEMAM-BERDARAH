<?= $this->extend('/layouts/main-layout') ?>

<?= $this->section('content') ?>
<div class="page-content">
   <div class="container-fluid">

      <!-- start page title -->
      <div class="row">
         <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
               <h4 class="mb-0">Data Pengobatan</h4>

               <div class="page-title-right">
                  <ol class="breadcrumb m-0">
                     <li class="breadcrumb-item active">
                        <span class="uil-home-alt me-2"></span>Dashboard &nbsp; / &nbsp; Solusi &nbsp; / &nbsp; Pengobatan
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
                           <th>Kode Solusi</th>
                           <th>Penyakit</th>
                           <th>Solusi</th>
                           <th>Lain-lain</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php $number = 1;
                        foreach ($datasolusi as $calldata) : ?>
                           <tr>
                              <td><?= $number++; ?></td>
                              <td><?= $calldata['kode_solusi']; ?></td>
                              <td><?= $calldata['detail_solusi']; ?></td>
                              <td><?= $calldata['nama_penyakit']; ?></td>
                              <td>
                                 <div class="btn-group" role="group">
                                    <button id="btnGroupVerticalDrop1" type="button" class="btn btn-dark btn-sm dropdown-toggle" data-bs-toggle="dropdown" -haspopup="true" aria-expanded="false">
                                       Opsi <i class="mdi mdi-chevron-down"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                       <a class="dropdown-item" href="#">Edit</a>
                                       <a class="dropdown-item" href="#">Hapus</a>
                                    </div>
                                 </div>
                              </td>
                           </tr>
                        <?php endforeach ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div> <!-- end col -->
      </div> <!-- end row -->

   </div>
</div>
<?= $this->endSection() ?>