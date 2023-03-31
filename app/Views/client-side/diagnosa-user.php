<?= $this->extend('/layouts-user/main-layouts') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5 mb-5">
            <div class="card  mb-5 border-0 mt-5 ">
                <div class="card-header p-3">
                    <h2 class="text-center fw-bold">HASIL DIAGNOSA USER</h2>
                </div>
                <div class="card-body">
                    <table class="table ">
                        <thead>
                            <tr class="fw-bold text-center">
                                <td>No</td>
                                <td>Tanggal Diagnosa</td>
                                <td>Gejala</td>
                                <td>Penyakit</td>
                                <td>Persentase</td>
                                <td>Solusi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($data as $diagnosa => $value) : ?>
                                <tr>
                                    <td style="width: 2%;" class="text-center"><?= $i++ ?></td>
                                    <td class="text-center" style="width: 17%;"><?= $value['tanggal_diagnosa'] ?></td>
                                    <td style="width: 29%;">
                                        <ul>
                                            <?= $value['gejala'] ?>
                                        </ul>
                                    </td>

                                    <td class="text-center" style="width: 15%;"><?= $value['cf_hasil'] ?>%</td>

                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer fst-italic p-2 fixed-bottom">
    <p class="text-center mt-2"> 2023 © Novita Sari. Website Sistem Pakar DBD(Demam Berdarah Dengue).</p>
</div>
<?= $this->endSection() ?>