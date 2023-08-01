<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <h4 class="page-title">User Profile</h4>
      <div class="row">
        <div class="col-md-8">
          <div class="card card-with-nav">
            <div class="card-header">
              <div class="row row-nav-line">
                <ul class="nav nav-tabs nav-line nav-color-secondary" role="tablist">
                  <li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#home" role="tab" aria-selected="true">Profil</a> </li>
                  <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#security" role="tab" aria-selected="false">Keamanan</a> </li>
                </ul>
              </div>
            </div>
            <div class="card-body">

              <!-- Tabs All -->
              <div class="tab-content">

                <!-- Tab Home -->
                <div role="tabpanel" class="tab-pane in active" id="home">
                  <form action="" class="row g-3 needs-validation" method="post" enctype="multipart/form-data" novalidate>
                    <input type="text" hidden name="id" value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($rowSession["id"]))))))))); ?>">
                    <input type="text" hidden name="old_file" value="<?= $rowSession["gambar"]; ?>">
                    <div class="row mt-3">
                      <div class="col-md-6">
                        <div class="form-group form-group-default">
                          <label>Nama Depan</label>
                          <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Nama Depan" value="<?= $rowSession["first_name"]; ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group form-group-default">
                          <label>Nama Belakang</label>
                          <input type="text" class="form-control" name="last_name" placeholder="Nama Belakang" value="<?= $rowSession["last_name"]; ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-md-12">
                        <div class="form-group form-group-default">
                          <label>Nama Pengguna</label>
                          <input type="text" class="form-control" id="username" name="username" value="<?= $rowSession["username"]; ?>" placeholder="Nama Pengguna">
                        </div>
                      </div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-md-12">
                        <div class="form-group form-group-default">
                          <label>Ganti Profil</label>
                          <input type="file" class="form-control" id="gambar" name="gambar" value="<?= $rowSession["username"]; ?>">
                        </div>
                        <small>
                          Format File : <strong>jpg, jpeg, png</strong> dengan ukuran Maks : <strong>1 MB</strong>
                        </small>
                      </div>
                    </div>
                    <div class="text-right mt-3 mb-3">
                      <button class="btn btn-success bi bi-save-fill" type="submit" name="edit_profile"> Simpan</button>
                    </div>
                  </form>
                </div>
                <!-- end Tab Home -->

                <!-- Tab Security -->
                <div role="tabpanel" class="tab-pane fade" id="security">
                  <form action="" class="row g-3 needs-validation" method="post" enctype="multipart/form-data" novalidate>
                    <input type="text" hidden name="id" value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($rowSession["id"]))))))))); ?>">
                    <div class="row mt-3">
                      <div class="col-md-12">
                        <div class="form-group form-group-default">
                          <label>Password Lama</label>
                          <input type="password" class="form-control" name="password_old" id="password_old" placeholder="Password Lama">
                        </div>
                      </div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-md-12">
                        <div class="form-group form-group-default">
                          <label>Password Baru</label>
                          <input type="password" class="form-control" name="password" id="password" placeholder="Password Baru">
                        </div>
                      </div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-md-12">
                        <div class="form-group form-group-default">
                          <label>Konfirmasi Password Baru</label>
                          <input type="password" class="form-control" name="password2" id="password2" placeholder="Konfirmasi Password Baru">
                        </div>
                      </div>
                    </div>
                    <div class="text-right mt-3 mb-3">
                      <button class="btn btn-success bi bi-save-fill" type="submit" name="edit_password"> Simpan</button>
                    </div>
                  </form>
                </div>
                <!-- end Tab Security -->

              </div>

            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-profile card-secondary">
            <div class="card-header" style="background-image: url('../assets/img/blogpost.jpg')">
              <div class="profile-picture">
                <div class="avatar avatar-xl">
                  <img src="<?= $url; ?>assets/img/users/<?= $rowSession["gambar"]; ?>" alt="..." class="avatar-img rounded-circle">
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="user-profile text-center">
                <div class="name"><?= $rowSession["first_name"]; ?> <?= $rowSession["last_name"]; ?></div>
                <div class="job">
                  <?php if ($levelSuperAdmin === $rowSession["level"]) : ?>
                    Super Admin
                  <?php endif; ?>
                  <?php if ($levelClassA === $rowSession["level"]) : ?>
                    Kelas A
                  <?php endif; ?>
                  <?php if ($levelClassB === $rowSession["level"]) : ?>
                    Kelas B
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<!-- === CONDITION DATA === -->
<?php if (isset($_POST["edit_profile"])) : ?>
  <?php if (editProfile($_POST) > 0) : ?>
    <script>
      alert('Profil Berhasil Diubah');
      document.location.href = '';
    </script>
  <?php endif; ?>
<?php endif; ?>

<?php if (isset($_POST["edit_password"])) : ?>
  <?php if ($rowSession["password2"] !== $_POST["password_old"]) : ?>
    <script>
      alert('Kata sandi saat ini tidak sesuai!');
      document.location.href = '';
    </script>
  <?php endif; ?>
  <?php if ($rowSession["password2"] === $_POST["password_old"]) : ?>
    <?php if (editPassword($_POST) > 0) : ?>
      <script>
        alert('Kata Sandi Berhasil Diubah');
        document.location.href = '';
      </script>
    <?php endif; ?>
  <?php endif; ?>
<?php endif; ?>