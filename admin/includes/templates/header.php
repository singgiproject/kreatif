<div class="main-header" data-background-color="blue">
  <!-- Logo Header -->
  <div class="logo-header">

    <a href="<?= $url; ?>admin/" class="logo">
      <img src="<?= $logo; ?>?up=<?= time(); ?>" alt="navbar brand" class="navbar-brand" width="50">
    </a>
    <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
        <i class="fa fa-bars"></i>
      </span>
    </button>
    <button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
    <div class="navbar-minimize">
      <button class="btn btn-minimize btn-rounded">
        <i class="fa fa-bars"></i>
      </button>
    </div>
  </div>
  <!-- End Logo Header -->

  <!-- Navbar Header -->
  <nav class="navbar navbar-header navbar-expand-lg">

    <div class="container-fluid">
      <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
        <li class="nav-item dropdown hidden-caret">
          <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
            <div class="avatar-sm">
              <img src="<?= $url; ?>assets/img/users/<?= $rowSession["gambar"]; ?>" alt="..." class="avatar-img rounded-circle">
            </div>
          </a>
          <ul class="dropdown-menu dropdown-user animated fadeIn">
            <li>
              <div class="user-box">
                <div class="avatar-lg"><img src="<?= $url; ?>assets/img/users/<?= $rowSession["gambar"]; ?>" alt="image profile" class="avatar-img rounded"></div>
                <div class="u-text">
                  <h4><?= $rowSession["first_name"]; ?> <?= $rowSession["last_name"]; ?></h4>
                  <p class="text-muted">
                    <?php if ($levelSuperAdmin === $rowSession["level"]) : ?>
                      Super Admin
                    <?php endif; ?>

                    <?php if ($levelClassA === $rowSession["level"]) : ?>
                      Kelas A
                    <?php endif; ?>

                    <?php if ($levelClassB === $rowSession["level"]) : ?>
                      Kelas B
                    <?php endif; ?>
                  </p>
                </div>
              </div>
            </li>
            <li>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="profile">Profil Saya</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalLogout">Keluar</a>
            </li>
          </ul>
        </li>

      </ul>
    </div>
  </nav>
  <!-- End Navbar -->
</div>