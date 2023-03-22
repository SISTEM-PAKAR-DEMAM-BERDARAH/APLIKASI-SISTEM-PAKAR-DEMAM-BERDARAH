<?= $this->extend('/layouts/main-layout') ?>

<?= $this->section('content') ?>
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update Gejala</h4>
                        <p class="card-title-desc">Form Update Gejala</p>
                        <form class="custom-validation" action="/data-gejala/update/<?= $gejala['kode_gejala'] ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="mb-3">
                                <label for="nama_gejala" class="form-label">Nama Gejala</label>
                                <input type="text" class="form-control <?= (validation_show_error('nama_gejala')) ? 'is-invalid' : '' ?>" id="nama_gejala" name="nama_gejala" value="<?= old('nama_gejala', $gejala['nama_gejala']); ?>" />
                                <div class="invalid-feedback">
                                    <?= validation_show_error('nama_gejala') ?>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                        Update
                                    </button>
                                    <a href="/data-gejala" class="btn btn-secondary waves-effect d-inline">
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