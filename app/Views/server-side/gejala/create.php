<?= $this->extend('/layouts/main-layout') ?>

<?= $this->section('content') ?>
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Gejala</h4>
                        <p class="card-title-desc">Form Input Gejala</p>
                        <form class="custom-validation" action="/data-gejala/insert" method="post">
                            <?= csrf_field() ?>
                            <div class="mb-3">
                                <label for="kode_gejala" class="form-label">Kode Gejala</label></label>
                                <input type="text" class="form-control bg-light" id="kode_gejala" name="kode_gejala" value="<?= $autocode ?>" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="nama_gejala" class="form-label">Nama Gejala</label>
                                <div>
                                    <input type="text" class="form-control <?= (validation_show_error('nama_gejala')) ? 'is-invalid' : '' ?>" id="nama_gejala" name="nama_gejala" placeholder="Demam Berdarah" autofocus />
                                    <div class="invalid-feedback">
                                        <?= validation_show_error('nama_gejala') ?>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                        Tambah
                                    </button>
                                    <a href="/data-gejala" class="btn btn-secondary waves-effect">
                                        Kembali
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
    <?= $this->endSection() ?>