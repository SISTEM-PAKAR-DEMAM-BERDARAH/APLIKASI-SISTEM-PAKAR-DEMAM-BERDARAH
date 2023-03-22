<?= $this->extend('/layouts-user/main-layouts') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row">
    <div class="col-md-12 mt-5 mb-5">
      <form action="input-nilai-diagnosa" method="get">
        <div class="card text-center mb-5 border-0 mt-5 ">
          <div class="card-header p-3">
            <h1 class="text-center fw-bold">DIAGNOSA</h1>
            <h5 class="text-center">Pilihlah gejala sesuai yang anda rasakan !</h5>
          </div>
          <div class="card-body">
            <table class="table text-center">
              <thead>
              <tr class="fw-bold">
                  <td>No</td>
                  <td>Nama Gejala</td>
                  <td>Pilih Gejala</td>
              </tr>
              </thead>
              <tbody>
              <?php $number = 1;
                  foreach ($datagejala as $calldata) : ?>
                      <tr>
                        <td><?= $number++; ?></td>
                        <td><?= $calldata['nama_gejala']; ?></td>                   
                        <td>
                          <input type="checkbox" value="<?= $calldata['kode_gejala'];?>" name="gejala[]" id="">
                        </td>
                      </tr>
                  <?php endforeach ?>
              </tbody>
            </table>
          </div>
          <div class="card-footer p-3 border-0 bg-transparent">
            <button class="btn btn-danger float-end" type="submit">
              <a class="text-decoration-none text-white">  
                Next ➜
              </a> 
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="footer fst-italic p-2 mt-5">
  <p class="text-center mt-2"> 2023 © Novita Sari. Website Sistem Pakar DBD(Demam Berdarah Dengue).</p>
</div>
<?= $this->endSection() ?>