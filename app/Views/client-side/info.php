<?= $this->extend('/layouts-user/main-layouts') ?>

<?= $this->section('content') ?>

<div class="info">
    <h1 class="text-center fw-bold ">INFORMASI</h1>

<section>
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-7 col-md-7 mt-5  col-lg-9 col-xl-9">
                <h3>Ciri – ciri nyamuk Aedes Aegypti</h3>
                <ul>
                    <li>Berwarna hitam dengan belang putih. Saat sudah banyak menghisap darah, bagian perut nyamuk ini menjadi berwarna merah penuh berisi darah.</li>
                    <li>Di dalam rumah, nyamuk ini banyak ditemukan berkembang biak di tempat penampungan air, misalnya bak mandi</li>
                    <li>Nyamuk juga dapat bersembunyi di sudut rumah yang minim cahaya, seperti kolong tempat tidur atau di balik lemari.</li>
                    <li>Nyamuk mengigit manusia di pagi hari (sekitar 2 jam setelah matahari terbit) dan sore hari (beberapa jam sebelum matahari terbenam).</li>
                    <li>Nyamuk sering hinggap di pakaian yang tergantung di kamar</li>
                </ul>
            </div>
            <div class="col-5  col-sm-5 col-md-5  col-lg-3 col-xl-3">
            <img src="user-assets/images/nyamuk.png" alt="Gambar Nyamuk Aedes Aegypti" class="mx-auto mt-4" width="100%">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-5  col-sm-5 col-md-4  col-lg-4 col-xl-3">
                <img src="user-assets/images/nyamuk2.png" alt="Ilustrasi Pencegahan DBD" class="mx-auto mt-4" width="100%">
            </div>
            <div class="col-7  col-sm-7 col-md-8  col-lg-8 col-xl-9">
                <h3 class="text-center fw-bold">Cara Pencegahan</h3>
                <p>Cara tepat untuk mencegah perkembangan nyamuk Aedes Aegypti adalah dengan menerapkan 3M Plus. dan 3M yang dimaksud yaitu :</p>
                <div class="row">
                    <div class="card col-9 mb-4 col-sm-8 col-md-7  col-lg-7  col-xl-3 mx-auto">
                        <img src="user-assets/images/menutup.png" alt="Menutup" class="rounded-circle mx-auto p-2" width="160px">
                        <p  align="justify" >Menutup rapat tempat penyimpanan air</p>
                    </div>
                    <div class="card col-9 mb-4 col-sm-8 col-md-7  col-lg-7 col-xl-3 mx-auto">
                        <img src="user-assets/images/menguras.png" alt="Menguras" class="rounded-circle mx-auto p-2" width="160px">
                        <p  align="justify">Menguras tempat air secara rutin, setidaknya seminggu sekali</p>
                    </div>
                    <div class="card col-9 mb-4 col-sm-8 col-md-7  col-lg-7 col-xl-3 mx-auto">
                        <img src="user-assets/images/mengubur.png" alt="Mengubur atau Mendaur Ulang" class="rounded-circle mx-auto" width="200px">
                        <p  align="justify" >Mengubur atau mendaur ulang barang bekas yang dapat menyebabkan air menggenang</p>
                    </div>
                </div>
            </div>  
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5">
                <p>Sedangkan, Plus merupakan tindakan pencegahan tambahan guna mencegah
penyebaran virus melalui nyamuk ini. Langkah pencegahan tersebut antara lain:</p>
            </div>   
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-5">
                <ul>
                    <li>Melakukan Fogging</li>
                    <li>Memasang kawat anti nyamuk di jendela dan pintu rumah</li>
                    <li>Menyebarkan bubuk larvasida di tempat penampungan air</li>
                    <li>Menanam tanaman pengusir nyamuk</li>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-7">
                <ul>
                    <li>Menggunakan kelambu saat tidur</li>
                    <li>Memelihara ikan pemakan jentik nyamuk</li>
                    <li>Menggunakan losion antinyamuk atau menggunakan obat nyamuk dalam bentuk semprot, obat nyamuk bakar, dan elektrik</li>
                    <li>Bergotong royong membersihkan lingkungan</li>
                </ul>
            </div>     
        </div>
    </div>   
</section>

<section>
    <div class="container">
        <h3 class="text-center fw-bold">Detail Penyakit</h3>      
        <div class="row">
            <div class="col-8 col-md-6 col-lg-4 col-xl-3 mb-5 mt-4 mx-auto ">
                <div class="card p-4 text-center">
                    <img src="user-assets/images/dd.png" alt="Ilustrasi Demam Dengue" class="rounded-circle mx-auto" width="120px">
                        <p>
                            <button class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#dd" aria-expanded="false" aria-controls="dd"> Demam Dengue </button>
                        </p>
                        <div class="collapse" id="dd">
                            <p  align="justify" > 
                                 <span class="fw-bold fst-italic"> Demam Dengue </span>merupakan akibat paling ringan yang ditimbulkan virus dengue. Gejalanya cenderung ringan dan tanpa ada tanda-tanda pendarahan seperti demam, nyeri kepala, mual dan juga ruam di sekujur tubuh.
                            </p>
                        </div>
                </div>
            </div>

            <div class="col-8 col-md-6 col-lg-4 col-xl-3 mb-5 mt-4 mx-auto">
                <div class="card p-4 text-center">
                    <img src="user-assets/images/dbd.png" alt="Ilustrasi Demam Berdarah Dengue" class="rounded-circle mx-auto" width="120px">
                        <p>
                            <button class="btn btn-primary justify-content-center  mx-auto mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#dbd" aria-expanded="false" aria-controls="dbd"> Demam Berdarah Dengue </button>
                        </p>
                    <div class="collapse" id="dbd">
                        <p  align="justify" >
                           <span class="fw-bold fst-italic"> Demam Berdarah Dengue (DBD) </span> merupakan akibat sedang dengan gejala berat yang memiliki tanda-tanda pendarahan seperti mimisan atau tinja yang berwarna merah.Pada fase ini, trombosit mengalami penurunan hingga 40.000 – 100.000 per mikroliter darah. Dengan trombosit normal biasanya 150.000 per mikroliter darah.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-8 col-sm-9 col-md-6 col-lg-4 col-xl-3 mb-5 mt-4 mx-auto">
                <div class="card p-4">
                    <img src="user-assets/images/ssd.png" alt="Ilustrasi Syok Syndrome Dengue" class="rounded-circle mx-auto" width="120px">
                        <p class="text-center">
                            <button class="btn btn-primary mx-auto mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#ssd" aria-expanded="false" aria-controls="ssd"> Syok Syndrome Dengue </button>
                        </p>
                    <div class="collapse" id="ssd">
                    <p align="justify" >
                     <span class="fw-bold fst-italic"> Syok Syndrome Dengue (SSD) </span>merupakan keadaan yang paling parah yang disebabkan oleh virus dengue. Keadaan ini dapat mengakibatkan syok dan pasien akan mengalami fase komplikasi. Jika tidak segera ditangani, maka komplikasi ini akan mengakibatkan syok yang berisiko kematian. Ciri utamanya adalah trombosit menurun hingga dibawah 40.000 per mikroliter darah. Serta merasakan nyeri ulu hati dan kehilangan kesadaran.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="footer fst-italic p-2">
    <p class="text-center mt-2"> 2023 © Novita Sari. Website Sistem Pakar DBD(Demam Berdarah Dengue).</p>
</div>
<?= $this->endSection() ?>