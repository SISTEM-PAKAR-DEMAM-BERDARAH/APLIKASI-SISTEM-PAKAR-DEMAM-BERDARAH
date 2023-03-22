<?= $this->extend('/layouts-user/main-layouts') ?>

<?= $this->section('content') ?>

<div class="tentang"> 
    <div class="container">
       <div class="row">
            <div class="col-md-6 mt-5  ">
                <h1 class="fw-bold">Sistem Pakar</h1>
                <p align="justify" style="text-indent: 10%;"> Sistem pakar adalah sebuah program komputer yang dirancang untuk mengambil keputusan seperti keputusan yangdiambil oleh seorang pakar, dimana sistem pakar menggunakan pengetahuan (Knowledge), fakta dan teknik berfikir dalam menyelesaikan masalah-masalah yang biasanya janya dapat diselesaikan oleh seorang pakar dari bidang yang bersangkutan (Wijaya, 2007 dalam Hayadi & Rukun, 2016).</p>

                <h5>Apa tujuan Sistem pakar ini?</h5>
                <p>Membantu pengguna dalam mengidentifikasi gejala demam berdarah dengue  berdasarkan gejala yang ada</p>
            </div>
            <div class="col-md-6 mt-5">
                <div class="row">     
                    <div class="col-5 card mx-auto mb-5 mt-4">
                            <img src="user-assets/images/mudah-removebg-preview.png" alt=""   >
                        <h4 class="text-center fw-bold">Mudah Digunakan</h4>
                        <p align="justify">Sistem Pakar ini mudah digunakan dimanapun dan Kapanpun dengan perangkat laptop atau Handphone yang terhubung dengan internet</p>
                    </div>
                    <div class="col-5 card mx-auto mb-5 mt-4">
                    <img src="user-assets/images/verifikasipakar.png" alt=""  >
                        <h4 class="text-center fw-bold">Terverifikasi Pakar</h4>
                        <p align="justify">Semua data yang ada di sistem pakar DBD ini, telah terverifikasi oleh pakar di Klinik Rahayu Medika</p>
                    </div>
                    <div class="col-5 card mx-auto mb-5 mt-4">
                    <img src="user-assets/images/informatif.png" alt="" >
                        <h4 class="text-center fw-bold">Informatif</h4>
                        <p align="justify">Sistem pakar ini juga memberikan informasi berupa detail penyakit, ciri-ciri nyamuk penyebab DBD dan cara Pencegahan DBD</p>
                    </div>
                    <div class="col-5 card mx-auto mb-5 mt-4">
                    <img src="user-assets/images/diagnosacepat.png" alt="">
                        <h4 class="text-center fw-bold">Diagnosa Cepat</h4>
                        <p align="justify">Sistem Pakar ini cepat dan efisien dalam pengambilan keputusan diagnosa gejala Demam Berdarah Dengue. Akan tetapi Sistem Pakar ini tidak berarti menggantikan kedudukan seorang Pakar atau Dokter itu sendiri.</p>
                    </div>
                </div>
            </div>
       </div>
    </div>
</div>



<?= $this->endSection() ?>