<?= $this->extend('/layouts/main-layout') ?>

<?= $this->section('content') ?>
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Penyakit</h4>
                        <p class="card-title-desc">Form Input Penyakit</p>

                        <form class="custom-validation" action="/data-penyakit/insert" method="post" enctype="multipart/form-data">
                            <?= csrf_field() ?>
                            <div class="mb-3">
                                <label for="kode_penyakit" class="form-label">Kode Penyakit</label></label>
                                <input type="text" class="form-control bg-light" id="kode_penyakit" name="kode_penyakit" value="<?= $autocode ?>" required />
                            </div>
                            <div class="mb-3">
                                <label for="nama_penyakit" class="form-label">Nama Penyakit</label>
                                <div>
                                    <input type="text" class="form-control <?= (validation_show_error('nama_penyakit')) ? 'is-invalid' : '' ?>" id="nama_penyakit" name="nama_penyakit" placeholder="Demam Berdarah" autofocus />
                                    <div class="invalid-feedback">
                                        <?= validation_show_error('nama_penyakit') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar</label>
                                <div>
                                    <input type="file" class="form-control <?= (validation_show_error('gambar')) ? 'is-invalid' : '' ?>" id="gambar" name="gambar" />
                                    <div class="invalid-feedback">
                                        <?= validation_show_error('gambar') ?>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                        Tambah
                                    </button>
                                    <a href="/data-penyakit" class="btn btn-secondary waves-effect">
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