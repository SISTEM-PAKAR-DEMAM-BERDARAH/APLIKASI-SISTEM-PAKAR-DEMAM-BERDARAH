<?= $this->extend('/layouts-user/main-layouts') ?>

<?= $this->section('content') ?>

<div class="info">
    <h1 class="text-center fw-bold ">INFORMASI</h1>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-9 mt-5">
                <h5>Ciri – ciri nyamuk aedes aegypty</h5>
                <ul>
                    <li>Berwarna hitam dengan belang putih. Saat sudah banyak menghisap darah, bagian perut nyamuk ini menjadi berwarna merah penuh berisi darah.</li>
                    <li>Di dalam rumah, nyamuk ini banyak ditemukan berkembang biak di tempat penampungan air, misalnya bak mandi</li>
                    <li>Nyamuk juga dapat bersembunyi di sudut rumah yang minim cahaya, seperti kolong tempat tidur atau di balik lemari.</li>
                    <li>Nyamuk mengigit manusia di pagi hari (sekitar 2 jam setelah matahari terbit) dan sore hari (beberapa jam sebelum matahari terbenam).</li>
                    <li>Nyamuk sering hinggap di pakaian yang tergantung di kamar</li>
                </ul>
            </div>
            <div class="col-md-3">
            <img src="user-assets/images/nyamuk.png" alt="" class="mx-auto">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="user-assets/images/nyamuk2.png" alt="">
            </div>
            <div class="col-md-9 mt-5">
                <h5 class="text-center fw-bold">Cara Pencegahan</h5>
                <p>Cara tepat untuk mencegah perkembangan nyamuk Aedes Aegypti adalah dengan menerapkan 3M Plus. dan 3M yang dimaksud yaitu :</p>
                <div class="pencegahan">
                    <div class="card col-md-2">
                        <img src="user-assets/images/menutup.png" alt="" class="rounded-circle">
                        <p>Menutup rapat tempat penyimpanan air</p>
                    </div>
                    <div class="card col-md-2">
                        <img src="user-assets/images/menguras.png" alt="" class="rounded-circle">
                        <p>Menguras tempat air secara rutin, setidaknya seminggu sekali</p>
                    </div>
                    <div class="card col-md-2">
                        <img src="user-assets/images/mengubur.png" alt="" class="rounded-circle">
                        <p>Mengubur atau mendaur ulang barang bekas yang dapat menyebabkan air menggenang</p>
                    </div>
                </div>
            </div>          
        </div>
    </div>   
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Sedangkan, Plus merupakan tindakan pencegahan tambahan guna mencegah penyebaran virus melalui nyamuk ini. Langkah pencegahan tersebut antara lain:</p>
            </div>
            <div class="card-body ">
                <div class="col-md-3 card p-5">
                    <img src="user-assets/images/fogging.png" alt="" class="border border-dark rounded-circle mb-3">
                    <p>Melakukan fogging </p>
                </div>
                <div class="col-md-3 card p-5">
                    <img src="user-assets/images/kawat.jpg" alt="" class="border border-dark rounded-circle mb-3">
                    <p>Memasang kawat anti nyamuk di jendela dan pintu rumah</p>
                </div>
                <div class="col-md-3 card p-5">
                    <img src="user-assets/images/bubuk.png" alt="" class="border border-dark rounded-circle mb-3">
                    <p>Menyebarkan bubuk larvasida di tempat penampungan air</p>
                </div>
                <div class="col-md-3 card p-5">
                    <img src="user-assets/images/kelambu.png" alt="" class="border border-dark rounded-circle mb-3">
                    <p>Menanam tanaman pengusir nyamuk</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>