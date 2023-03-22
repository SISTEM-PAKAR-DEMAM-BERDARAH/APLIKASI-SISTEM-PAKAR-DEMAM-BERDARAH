<?= $this->extend('/layouts-user/main-layouts') ?>

<?= $this->section('content') ?>
<!-- Content -->
<div class="container">
  <div class="row">
    <div class="col-md-12 mt-5">
      <form action="" method="get">
        <div class="card text-center mb-5 border-0 mt-5">
          <div class="card-header p-3 bg-transparent">
            <h1 class="text-center fw-bold">INPUT NILAI</h1>
            <h5 class="text-center">Pilihlah gejala</h5>
          </div>
          <div class="card-body">
            <table class="table text-center">
              <thead>
                <tr class="fw-bold">
                  <td>No</td>
                  <td>Kode</td>
                  <td>Nama Gejala</td>
                  <td>Nilai Keyakinan</td>
                </tr>
              </thead>

              <tbody>
                <?php
                $numbtable = 1;
                $getKode = $_GET['kode_gejala'];
                $getGejala = $_GET['nama_gejala'];
                for ($i = 0; $i < count($getKode); $i++) {
                ?>
                  <tr>
                    <td><?= $numbtable++ ?></td>
                    <td><?= $getKode[$i] ?></td>
                    <td><?= $getGejala[$i] ?></td>
                    <td>
                      <select class="form-select" name="nilai_keyakinan" required autofocus>
                        <option value="">- Pilih nilai keyakinan -</option>
                        <option value="0.2">Tidak Tahu</option>
                        <option value="0.4">Yakin</option>
                        <option value="0.6">Cukup Yakin</option>
                        <option value="0.8">Yakin</option>
                        <option value="1">Sangat Yakin</option>
                      </select>
                    </td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
          <div class="card-footer p-3 border-0 bg-transparent">
            <button class="btn btn-danger " type="submit">
              <a href="diagnosa3" class="text-decoration-none text-white">
                Diagnosa
              </a>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="footer fst-italic p-2">
  <p class="text-center mt-2"> 2023 © Novita Sari. Website Sistem Pakar DBD(Demam Berdarah Dengue).</p>
</div>
<!-- End Content -->

<?= $this->endSection() ?>