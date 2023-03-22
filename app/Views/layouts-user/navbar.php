<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 fixed-top">
  <div class="container-fluid">
    <a href="" class="navbar-brand fw-bold"> SP - DBD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#btn">
      <i class="bx bx-menu"></i>
    </button>
    <div class="collapse navbar-collapse" id="btn">
      <ul class="navbar-nav ms-auto nav-pills">
        <li class="nav-item">
          <a href="/" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="/diagnosa" class="nav-link">Diagnosa</a>
        </li>
        <li class="nav-item">
          <a href="/info" class="nav-link">Info</a>
        </li>
        <li class="nav-item">
          <a href="/kontak" class="nav-link">Kontak</a>
        </li>
        <li class="nav-item">
          <a href="/tentang" class="nav-link">Tentang</a>
        </li>
        <?php if(logged_in()) : ?>
        <li class="nav-item dropdown username">         
            <a class="nav-link dropdown-toggle" href="/logout" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?= user()->username ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/edit">Ubah Password</a></li>
            <hr class="dropdown-divider">
            <li><a class="dropdown-item" href="/logout">Logout</a></li>
            <?php else :  ?>
        <a href="/login" class="nav-link cek">Login</a>
            <?php endif ;?>
        </li>
      </ul>
    </div>
  </div>
</nav>