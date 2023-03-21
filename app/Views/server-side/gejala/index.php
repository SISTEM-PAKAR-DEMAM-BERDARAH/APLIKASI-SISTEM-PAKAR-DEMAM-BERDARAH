<?= $this->extend('/layouts/main-layout') ?>

<?= $this->section('content') ?>
<div class="page-content">
   <div class="container-fluid">

      <!-- start page title -->
      <div class="row">
         <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
               <h4 class="mb-0">Data Gejala</h4>

               <div class="page-title-right">
                  <ol class="breadcrumb m-0">
                     <li class="breadcrumb-item active">
                        <span class="uil-home-alt me-2"></span>Dashboard &nbsp; / &nbsp; Data Penyakit &nbsp; / &nbsp; Gejala
                     </li>
                  </ol>
               </div>

            </div>
         </div>
      </div>
      <!-- end page title -->
      <a href="/data-gejala/create" class="btn btn-primary waves-effect waves-light me-1 mb-3">
         Tambah Jenis Gejala
      </a>
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-body">
                  <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                     <thead>
                        <tr>
                           <th>#No</th>
                           <th>Kode Gejala</th>
                           <th>Gejala</th>
                           <th>Lain-lain</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php $number = 1;
                        foreach ($datagejala as $calldata) : ?>
                           <tr>
                              <td><?= $number++; ?></td>
                              <td><?= $calldata['kode_gejala']; ?></td>
                              <td><?= $calldata['nama_gejala']; ?></td>
                              <td>
                                 <a href="/data-gejala/edit/<?= $calldata['kode_gejala'] ?>" class="btn btn-info btn-sm" title="Edit data ini">
                                    <span class="uil-edit"></span>
                                 </a>
                                 <form action="/data-gejala/<?= $calldata['kode_gejala']; ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')"><span class="uil-trash"></span></button>
                                 </form>
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