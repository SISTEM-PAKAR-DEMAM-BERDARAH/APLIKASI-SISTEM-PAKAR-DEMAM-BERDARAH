<?= $this->extend('/layouts-user/main-layouts') ?>

<?= $this->section('content') ?>

<div class="home">
<div class="container">
    <div class="row">
        <div class="col-6 mt-5">
          <h1 class="fw-bold mb-3">SELAMAT DATANG</h1>
          <h5 class="mt-1">SISTEM PAKAR DIAGNOSA GEJALA DEMAM BERDARAH DENGUE</h5>
          <p>Sistem ini dapat mendiagnosa gejala demam berdarah anda. Semua data pada sistem ini berdasarkan dari seorang pakar.</p>
          <button class="btn btn-danger ">
            <a href="diagnosa" class="text-decoration-none text-white">Memulai Diagnosa ➜</a>
          </button>
        </div>
        <div class="col-6 mt-3">
           <img src="/user-assets/images/doctor.png" alt="Assets-Doctor">
        </div>
    </div>
</div>
</div>
<div class="footer fst-italic p-2 fixed-bottom">
  <p class="text-center mt-2"> 2023 © Novita Sari. Website Sistem Pakar DBD(Demam Berdarah Dengue).</p>
</div>

<?= $this->endSection() ?>