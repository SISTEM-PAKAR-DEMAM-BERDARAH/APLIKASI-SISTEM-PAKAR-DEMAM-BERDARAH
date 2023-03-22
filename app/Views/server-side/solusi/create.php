<?= $this->extend('layouts/main-layout') ?>

<?= $this->section('content') ?>
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Solusi</h4>
                        <p class="card-title-desc">Form Input Solusi</p>
                        <form class="custom-validation" action="/data-solusi/insert" method="post">
                            <?= csrf_field() ?>
                            <div class="mb-3">
                                <label for="kode_solusi" class="form-label">Kode Solusi</label>
                                <input type="text" class="form-control bg-light" id="kode_solusi" name="kode_solusi" value="<?= $autocode; ?>" readonly />
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
                                <label for="detail_solusi" class="form-label">Detail Solusi</label>
                                <div>
                                    <textarea class="form-control <?= (validation_show_error('detail_solusi')) ? 'is-invalid' : '' ?>" id="detail_solusi" name="detail_solusi" rows="5"> </textarea>
                                    <div class="invalid-feedback">
                                        <?= validation_show_error('detail_solusi') ?>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                    Tambah
                                </button>
                                <a href="/data-solusi" class="btn btn-secondary waves-effect">
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