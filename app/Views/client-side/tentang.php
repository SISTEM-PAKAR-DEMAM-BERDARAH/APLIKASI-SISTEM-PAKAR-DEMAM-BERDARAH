<?= $this->extend('/layouts-user/main-layouts') ?>

<?= $this->section('content') ?>

<div class="tentang"> 
    <div class="container">
       <div class="row">
            <div class="col-md-12 mt-5 col-12 col-sm-12 col-lg-12 col-xl-6">
                <h1 class="fw-bold">Sistem Pakar</h1>
                <p align="justify" style="text-indent: 10%;"> Sistem pakar adalah sebuah program komputer yang dirancang untuk mengambil keputusan seperti keputusan yangdiambil oleh seorang pakar, dimana sistem pakar menggunakan pengetahuan (Knowledge), fakta dan teknik berfikir dalam menyelesaikan masalah-masalah yang biasanya janya dapat diselesaikan oleh seorang pakar dari bidang yang bersangkutan (Wijaya, 2007 dalam Hayadi & Rukun, 2016).</p>

                <h5>Apa tujuan Sistem pakar ini?</h5>
                <p>Membantu pengguna dalam mengidentifikasi gejala demam berdarah dengue  berdasarkan gejala yang ada</p>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-xl-6 mt-5">
                <div class="row">     
                    <div class="col-5 col-md-5 col-xl-5 card mx-auto mb-5 mt-4">
                            <img src="user-assets/images/mudah.png" alt="Mudah Digunakan" style="width: 65%; margin-top: -35%;margin-left: -17%;">
                        <h5 class="text-center fw-bold">Mudah Digunakan</h5>
                        <p align="justify">Sistem Pakar ini mudah digunakan dimanapun dan Kapanpun dengan perangkat laptop atau Handphone yang terhubung dengan internet</p>
                    </div>
                    <div class="col-5 col-md-5 col-xl-5 card mx-auto mb-5 mt-4">
                    <img src="user-assets/images/verifikasipakar.png" alt="Terverifikasi Pakar"  style="width: 65%; margin-top: -35%; margin-left: -14%;">
                        <h5 class="text-center fw-bold">Terverifikasi Pakar</h5>
                        <p align="justify">Semua data yang ada di sistem pakar DBD ini, telah terverifikasi oleh pakar di Klinik Rahayu Medika</p>
                    </div>
                    <div class="col-5 col-md-5 col-xl-5 card mx-auto mb-5 mt-4">
                    <img src="user-assets/images/informatif.png" alt="Informatif"  style="width: 65%; margin-top: -35%; margin-left: -24%;">
                        <h5 class="text-center fw-bold">Informatif</h5>
                        <p align="justify">Sistem pakar ini juga memberikan informasi berupa detail penyakit, ciri-ciri nyamuk penyebab DBD dan cara Pencegahan DBD</p>
                    </div>
                    <div class="col-5 col-md-5 col-xl-5 card mx-auto mb-5 mt-4">
                    <img src="user-assets/images/diagnosacepat.png" alt="Diagnosa Cepat" style="width: 65%; margin-top: -35%; margin-left: -20%;">
                        <h5 class="text-center fw-bold">Diagnosa Cepat</h5>
                        <p align="justify">Sistem Pakar ini cepat dan efisien dalam pengambilan keputusan diagnosa gejala Demam Berdarah Dengue. Akan tetapi Sistem Pakar ini tidak berarti menggantikan kedudukan seorang Pakar atau Dokter itu sendiri.</p>
                    </div>
                </div>
            </div>
       </div>
    </div>
</div>

<div class="footer fst-italic p-2">
    <p class="text-center mt-2"> 2023 © Novita Sari. Website Sistem Pakar DBD(Demam Berdarah Dengue).</p>
</div>

<?= $this->endSection() ?>