<?= $this->extend('/layouts/main-layout') ?>

<?= $this->section('content') ?>
<div class="page-content">
   <div class="container-fluid">

      <!-- start page title -->
      <div class="row">
         <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
               <h4 class="mb-0">Data Basis Pengetahuan</h4>

               <div class="page-title-right">
                  <ol class="breadcrumb m-0">
                     <li class="breadcrumb-item active">
                        <span class="uil-home-alt me-2"></span>Dashboard &nbsp; / &nbsp; Data Basis Pengetahuan
                     </li>
                  </ol>
               </div>

            </div>
         </div>
      </div>
      <!-- end page title -->
      <a href="/basis-pengetahuan/create" class="btn btn-primary waves-effect waves-light me-1 mb-3">
         Tambah Pengetahuan
      </a>
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-body">
                  <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                     <thead>
                        <tr>
                           <th>#No</th>
                           <th>Kode Basis Pengetahuan</th>
                           <th>Nama Penyakit</th>
                           <th>Gejala</th>
                           <th>Nilai Pakar</th>
                           <th>Lain-lain</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php $number = 1;
                        foreach ($datapengetahuan as $calldata) : ?>
                           <tr>
                              <td><?= $number++; ?></td>
                              <td><?= $calldata['kode_pengetahuan']; ?></td>
                              <td><?= $calldata['nama_penyakit']; ?></td>
                              <td><?= $calldata['nama_gejala']; ?></td>
                              <td><strong><?= $calldata['cf_pakar']; ?></strong></td>
                              <td>
                                 <a href="/basis-pengetahuan/edit/<?= $calldata['kode_pengetahuan'] ?>" class="btn btn-info btn-sm" title="Edit data ini">
                                    <span class="uil-edit"></span>
                                 </a>
                                 <form action="/basis-pengetahuan/<?= $calldata['kode_pengetahuan']; ?>" method="post" class="d-inline">
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