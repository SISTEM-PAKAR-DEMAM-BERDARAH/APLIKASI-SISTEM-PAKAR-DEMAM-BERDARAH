<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 fixed-top">
  <div class="container-fluid">
    <a href="" class="navbar-brand fw-bold"> SP - DBD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#btn">
      <i class="bx bx-menu"></i>
    </button>
    <div class="collapse navbar-collapse" id="btn">
      <ul class="navbar-nav ms-auto nav-pills">
        <li class="nav-item">
          <a href="<?= base_url('/') ?>" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('/diagnosa') ?>" class="nav-link">Diagnosa</a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('/info') ?>" class="nav-link">Info</a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('/kontak') ?>" class="nav-link">Kontak</a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('/tentang') ?>" class="nav-link">Tentang</a>
        </li>
        <?php if (logged_in()) : ?>
          <li class="nav-item dropdown username">
            <a class="nav-link dropdown-toggle" href="<?= base_url('/logout') ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?= user()->username ?>
            </a>
            <?php if (in_groups('admin')) : ?>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?= base_url('/dashboard') ?>">Dashboard</a></li>
                <hr class="dropdown-divider">
                <li><a class="dropdown-item" href="<?= base_url('/ubah-password') ?>">Ubah Password</a></li>
                <hr class="dropdown-divider">
                <li><a class="dropdown-item" href="<?= base_url('/logout') ?>">Logout</a></li>
              <?php endif; ?>
              <?php if (in_groups('user')) : ?>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?= base_url('/data-diagnosa-user') ?>">Data Diagnosa</a></li>
                  <hr class="dropdown-divider">
                  <li><a class="dropdown-item" href="<?= base_url('/ubah-password') ?>">Ubah Password</a></li>
                  <hr class="dropdown-divider">
                  <li><a class="dropdown-item" href="<?= base_url('/logout') ?>">Logout</a></li>
                <?php endif; ?>

              <?php else :  ?>
                <a href="<?= base_url('/login') ?>" class="nav-link cek">Login</a>
              <?php endif; ?>
          </li>
      </ul>
    </div>
  </div>
</nav>