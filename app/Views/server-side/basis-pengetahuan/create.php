<?= $this->extend('layouts/main-layout') ?>

<?= $this->section('content') ?>
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Pengetahuan</h4>
                        <p class="card-title-desc">Form Input Gejala</p>
                        <form class="custom-validation" action="/basis-pengetahuan/insert" method="post">
                            <?= csrf_field() ?>
                            <div class="mb-3">
                                <label for="kode_pengetahuan" class="form-label">Kode Basis Pengetahuan</label>
                                <input type="text" class="form-control bg-light" id="kode_pengetahuan" name="kode_pengetahuan" value="<?= $autocode; ?>" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="nama_penyakit" class="form-label">Penyakit</label>
                                <select class="form-control <?= (validation_show_error('kode_penyakit')) ? 'is-invalid' : '' ?> select2" name="kode_penyakit">
                                    <option value="">Select</option>
                                    <?php foreach ($penyakit as $penyakit) : ?>
                                        <option value="<?= $penyakit['kode_penyakit'] ?>"><?= $penyakit['nama_penyakit'] ?></option>
                                    <?php endforeach ?>
                                </select>
                                <div class="invalid-feedback">
                                    <?= validation_show_error('kode_penyakit') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="nama_gejala" class="form-label">Gejala</label>
                                <select class="form-control <?= (validation_show_error('kode_gejala')) ? 'is-invalid' : '' ?> select2" name="kode_gejala">
                                    <option value="">Select</option>
                                    <?php foreach ($gejala as $gejala) : ?>
                                        <option value="<?= $gejala['kode_gejala'] ?>"><?= $gejala['nama_gejala'] ?></option>
                                    <?php endforeach ?>
                                </select>
                                <div class="invalid-feedback">
                                    <?= validation_show_error('kode_gejala') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="pakar" class="form-label">CF Pakar</label>
                                <select class="form-control <?= (validation_show_error('cf_pakar')) ? 'is-invalid' : '' ?> select2" name="cf_pakar">
                                    <option value="">Select</option>
                                    <option value="0.2">Tidak Tahu (0.2)</option>
                                    <option value="0.4">Sedikit Yakin (0.4)</option>
                                    <option value="0.6">Cukup Yakin (0.6)</option>
                                    <option value="0.8">Yakin (0.8)</option>
                                    <option value="1">Sangat Yakin (1)</option>
                                </select>
                                <div class="invalid-feedback">
                                    <?= validation_show_error('cf_pakar') ?>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                    Tambah
                                </button>
                                <a href="/basis-pengetahuan" class="btn btn-secondary waves-effect">
                                    Kembali
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>