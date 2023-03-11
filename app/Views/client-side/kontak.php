<?= $this->extend('/layouts-user/main-layouts') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="map text-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7903.359109408738!2d113.80789657389386!3d-7.928498477155253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6dcd5e994cba5%3A0x6e9f5452ef10f836!2sNangkaan%2C%20Kec.%20Bondowoso%2C%20Kabupaten%20Bondowoso%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1678545465452!5m2!1sid!2sid" width="600" height="300" style="border:0; " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
         </div>
        <div class="col-md-12">
            <h1 class="fw-bold mt-3 text-center">Kontak Kami</h1>
        </div>
        <div class="div">
            <ul class="text-center list-unstyled">
               <li class="lead mt-2"><i class="bi bi-instagram"> Instagram</i></li>
               <li class="lead mt-2"><i class="bi bi-whatsapp"> Whatsapp</i></li>
               <li class="lead mt-2"><i class="bi-telephone-plus-fill"> Telephone</i></li>
            </ul>
        </div>
    </div>
</div>

<div class="footer fst-italic p-2 fixed-bottom">
    <p class="text-center mt-2"> 2023 © Novita Sari. Website Sistem Pakar DBD(Demam Berdarah Dengue).</p>
<?= $this->endSection() ?>