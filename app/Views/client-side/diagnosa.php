<?= $this->extend('/layouts-user/main-layouts') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row">
    <div class="col-md-12 mt-5">
      <form action="input-nilai-diagnosa" method="get">
        <div class="card text-center mb-5 border-0 mt-5 ">
          <div class="card-header p-3">
            <h1 class="text-center fw-bold">DIAGNOSA</h1>
            <h5 class="text-center">Pilihlah gejala sesuai yang anda rasakan !</h5>
          </div>
          <form action="input-nilai-diagnosa" method="get">
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
                  <?php
                  $numbtable = 1;
                  foreach ($basisgejala as $basisgejala) {
                    echo "
                        <tr>
                          <td>" . $numbtable++ . "</td>
                          <td>$basisgejala[nama_gejala]</td>
                          <td>
                            <input type='checkbox' value='$basisgejala[kode_gejala]' name='kode_gejala[]' id='$basisgejala[kode_gejala]'>
                            <input type='checkbox' value='$basisgejala[nama_gejala]' name='nama_gejala[]' id='$basisgejala[nama_gejala]' hidden>
                          </td>
                        </tr>
                      ";
                  ?>
                    <script>
                      document.getElementById("<?= $basisgejala['kode_gejala'] ?>").addEventListener('change', function() {
                        if (this.checked) {
                          document.getElementById("<?= $basisgejala['nama_gejala'] ?>").setAttribute('checked', 'checked');
                          document.querySelector('.btn-danger').removeAttribute('disabled');
                        } else {
                          document.getElementById("<?= $basisgejala['nama_gejala'] ?>").removeAttribute('checked');
                          document.querySelector('.btn-danger').setAttribute('disabled', '');
                        }
                      });
                    </script>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <div class="card-footer p-3 border-0 bg-transparent">
              <button class="btn btn-danger float-end" type="submit" disabled>
                <a class="text-decoration-none text-white">
                  Next ➜
                </a>
              </button>
            </div>
          </form>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="footer fst-italic p-2">
  <p class="text-center mt-2"> 2023 © Novita Sari. Website Sistem Pakar DBD(Demam Berdarah Dengue).</p>
</div>
<?= $this->endSection() ?>