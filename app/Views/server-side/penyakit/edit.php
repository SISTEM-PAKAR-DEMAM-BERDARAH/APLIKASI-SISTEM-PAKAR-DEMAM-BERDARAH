<?= $this->extend('/layouts/main-layout') ?>

<?= $this->section('content') ?>
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update Penyakit</h4>
                        <p class="card-title-desc">Form Update Penyakit</p>

                        <form class="custom-validation" action="/data-penyakit/update/<?= $penyakit['kode_penyakit'] ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="mb-3">
                                <label for="nama_penyakit" class="form-label">Nama Penyakit</label>
                                <input type="text" class="form-control <?= (validation_show_error('nama_penyakit')) ? 'is-invalid' : '' ?>" id="nama_penyakit" name="nama_penyakit" value="<?= old('nama_penyakit', $penyakit['nama_penyakit']); ?>" />
                                <div class="invalid-feedback">
                                    <?= validation_show_error('nama_penyakit') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar</label>
                                <input type="text" class="form-control <?= (validation_show_error('gambar')) ? 'is-invalid' : '' ?>" id="gambar" name="gambar" value="<?= old('gambar', $penyakit['gambar']); ?>" />
                                <div class="invalid-feedback">
                                    <?= validation_show_error('gambar') ?>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                        Update
                                    </button>
                                    <a href="/data-penyakit" class="btn btn-secondary waves-effect d-inline">
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