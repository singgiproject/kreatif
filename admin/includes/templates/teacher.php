<?php if ($rowSession["level"] !== $levelSuperAdmin) : ?>
  <script>
    document.location.href = '<?= $url; ?>admin/dashboard/home';
  </script>
<?php endif; ?>

<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title"><?= $pageTitle; ?></h4>
        <ul class="breadcrumbs">
          <li class="nav-home">
            <a href="<?= $url; ?>admin/dashboard/home">
              <i class="bi bi-house"></i>
            </a>
          </li>
          <li class="separator">
            <i class="bi bi-chevron-right"></i>
          </li>
          <li class="nav-item">
            <a>Siswa</a>
          </li>
          <li class="separator">
            <i class="bi bi-chevron-right"></i>
          </li>
          <li class="nav-item">
            <a href="#"><?= $pageTitle; ?></a>
          </li>
        </ul>
      </div>

      <?php if ($_GET["pages"] === "teacher" or $_GET["pages"] === "teacher-add-success" or $_GET["pages"] === "teacher-edit-success" or $_GET["pages"] === "teacher-deleted-success") : ?>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="d-flex align-items-center">
                  <h4 class="card-title">Tambah Data <?= $pageTitle; ?></h4>
                  <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#modalAddDataTeacher">
                    <i class="fa fa-plus"></i>
                    Tambah Data <?= $pageTitle; ?>
                  </button>
                </div>
              </div>
              <div class="card-body">

                <!-- Table Data -->
                <div class="table-responsive">
                  <table id="add-row" class="display table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th style="width: 10%">Opsi</th>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Level</th>
                      </tr>
                    </thead>
                    <tfoot>


                      <tr>
                        <th>#</th>
                        <th>Opsi</th>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Level</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <?php $noTable = 1; ?>
                      <?php foreach ($teacher as $rowTeacher) : ?>
                        <?php if ($rowTeacher["level"] !== $levelSuperAdmin) : ?>
                          <tr>
                            <td><?= $noTable; ?></td>
                            <td>
                              <div class="form-button-action">
                                <a href="#" class="badge p-2 btn btn-link btn-primary btn-lg text-white mb-1" title="Ubah" data-toggle="modal" data-target="#modalEditDataTeacher<?= $rowTeacher["id"]; ?>" data-toggle="tooltip" title="Ubah">
                                  <i class="bi bi-pencil-square fs-6"></i>
                                </a>
                                <a href="#" class="badge p-2 btn btn-link btn-danger text-white" data-toggle="modal" data-target="#modalDeleteDataTeacher<?= $rowTeacher["id"]; ?>" title="Hapus" data-toggle="tooltip" title="Hapus"><i class="bi bi-trash fs-6"></i></a>
                              </div>
                            </td>
                            <td><img src="<?= $url; ?>assets/img/users/<?= $rowTeacher["gambar"]; ?>" alt="" width="50"></td>
                            <td><?= $rowTeacher["first_name"]; ?> <?= $rowTeacher["last_name"]; ?></td>
                            <td><?= $rowTeacher["username"]; ?></td>
                            <td>
                              <button type="button" class="btn btn-primary btn-xs" id="alert_show_password<?= $rowTeacher["id"]; ?>"> Lihat Password</button>
                            </td>
                            <td>
                              <?php if ($rowTeacher["level"] === $levelClassA) : ?>
                                Guru Kelas A
                              <?php endif; ?>
                              <?php if ($rowTeacher["level"] === $levelClassB) : ?>
                                Guru Kelas B
                              <?php endif; ?>
                            </td>
                            </td>
                          </tr>
                          <?php $noTable++; ?>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>

                <!-- === MODAL ADD TEACHER=== -->
                <div class="modal fade" id="modalAddDataTeacher" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header no-bd">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data <?= $pageTitle; ?></h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="d-grid gap-2 col-12 mx-auto">
                          <form action="" class="row g-3 needs-validation" method="post" enctype="multipart/form-data" novalidate>
                            <div class="col-md-12 mb-2">
                              <label for="first_name" class="form-label">Nama Depan</label>
                              <input type="text" class="form-control" name="first_name" id="first_name" required placeholder="Nama Depan">
                              <div class="invalid-feedback">
                                Harap Masukan Nama Depan
                              </div>
                            </div>

                            <div class="col-md-12 mb-2">
                              <label for="last_name" class="form-label">Nama Belakang</label>
                              <input type="text" class="form-control" name="last_name" id="last_name" required placeholder="Nama Depan">
                              <div class="invalid-feedback">
                                Harap Masukan Nama Belakang
                              </div>
                            </div>

                            <div class="col-md-12 mb-2">
                              <label for="username" class="form-label">Username</label>
                              <input type="text" class="form-control" name="username" id="username" required placeholder="Username">
                              <div class="invalid-feedback">
                                Harap Masukan Username
                              </div>
                            </div>

                            <div class="col-md-12 mb-2">
                              <label for="password" class="form-label">Password</label>
                              <input type="password" class="form-control" name="password" id="password" required placeholder="Password">
                              <div class="invalid-feedback">
                                Harap Masukan Password
                              </div>
                            </div>

                            <div class="col-md-12 mb-2">
                              <label for="password2" class="form-label">Konfirmasi Password</label>
                              <input type="password" class="form-control" name="password2" id="password2" required placeholder="Password">
                              <div class="invalid-feedback">
                                Harap Masukan Konfirmasi Password
                              </div>
                            </div>

                            <div class="col-md-12 mb-2">
                              <label for="level" class="form-label">Level</label>
                              <select name="level" id="level" class="form-control" required>
                                <option value="">--- Pilih ---</option>
                                <option value="class_a">Guru Kelas A</option>
                                <option value="class_b">Guru Kelas B</option>
                              </select>
                              <div class="invalid-feedback">
                                Harap Pilih Level
                              </div>
                            </div>

                            <div class="col-md-12 mb-2">
                              <label for="gambar" class="form-label">Foto Profil</label>
                              <input type="file" class="form-control" name="gambar" id="gambar" required accept="image/*">
                              <small>Format File : <strong>jpg, jpeg, png</strong> Ukuran File : <strong>5 MB</strong></small>
                            </div>

                            <div class="col-12">
                              <button class="btn bg-success text-white" type="submit" name="add_teacher"><i class="bi bi-save"></i> Simpan</button>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- === end MODAL ADD TEACHER=== -->



              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

    </div>
  </div>

</div>


<?php foreach ($teacher as $rowTeacher) : ?>
  <section>
    <!-- === MODAL EDIT TEACHER=== -->
    <div class="modal fade" id="modalEditDataTeacher<?= $rowTeacher["id"]; ?>" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header no-bd">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Data <?= $pageTitle; ?></h1>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="d-grid gap-2 col-12 mx-auto">
              <form action="" class="row g-3 needs-validation" method="post" enctype="multipart/form-data" novalidate>
                <div class="col-md-12 mb-2" hidden>
                  <input type="text" hidden name="id" value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($rowTeacher["id"]))))))))); ?>">
                  <input type="text" hidden name="old_file" value="<?= $rowTeacher["gambar"]; ?>">
                </div>

                <div class="col-md-12 mb-2">
                  <label for="first_name" class="form-label">Nama Depan</label>
                  <input type="text" class="form-control" name="first_name" id="first_name" required placeholder="Nama Depan" value="<?= $rowTeacher["first_name"]; ?>">
                  <div class="invalid-feedback">
                    Harap Masukan Nama Depan
                  </div>
                </div>

                <div class="col-md-12 mb-2">
                  <label for="last_name" class="form-label">Nama Belakang</label>
                  <input type="text" class="form-control" name="last_name" id="last_name" required placeholder="Nama Depan" value="<?= $rowTeacher["last_name"]; ?>">
                  <div class="invalid-feedback">
                    Harap Masukan Nama Belakang
                  </div>
                </div>

                <div class="col-md-12 mb-2">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" name="username" id="username" required placeholder="Username" value="<?= $rowTeacher["username"]; ?>">
                  <div class="invalid-feedback">
                    Harap Masukan Username
                  </div>
                </div>

                <div class="col-md-12 mb-2">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" id="password" required placeholder="Password" value="<?= $rowTeacher["password2"]; ?>">
                  <div class="invalid-feedback">
                    Harap Masukan Password
                  </div>
                </div>

                <div class="col-md-12 mb-2">
                  <label for="password2" class="form-label">Konfirmasi Password</label>
                  <input type="password" class="form-control" name="password2" id="password2" required placeholder="Password" value="<?= $rowTeacher["password2"]; ?>">
                  <div class="invalid-feedback">
                    Harap Masukan Konfirmasi Password
                  </div>
                </div>

                <div class="col-md-12 mb-2">
                  <label for="level" class="form-label">Level</label>
                  <select name="level" id="level" class="form-control" required>
                    <option value="<?= $rowTeacher["level"]; ?>">
                      <?php if ($rowTeacher["level"] === $levelClassA) : ?>
                        Guru Kelas A
                      <?php endif; ?>
                      <?php if ($rowTeacher["level"] === $levelClassB) : ?>
                        Guru Kelas B
                      <?php endif; ?>
                    </option>
                    <option value="class_a">Guru Kelas A</option>
                    <option value="class_b">Guru Kelas B</option>
                  </select>
                  <div class="invalid-feedback">
                    Harap Pilih Level
                  </div>
                </div>

                <div class="col-md-12 mb-2">
                  <label for="gambar" class="form-label">Foto Profil</label>
                  <br>
                  <img src="<?= $url; ?>assets/img/users/<?= $rowTeacher["gambar"]; ?>" alt="" width="50">
                  <br>
                  <input type="file" class="form-control" name="gambar" id="gambar" required accept="image/*">
                  <small>Format File : <strong>jpg, jpeg, png</strong> Ukuran File : <strong>5 MB</strong></small>
                </div>

                <div class="col-12">
                  <button class="btn bg-success text-white" type="submit" name="update_teacher"><i class="bi bi-save"></i> Simpan</button>
                </div>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
          </div>
        </div>
      </div>
    </div>

    <!-- === end MODAL EDIT STUDENTS=== -->
  </section>
<?php endforeach; ?>

<?php foreach ($teacher as $rowTeacher) : ?>
  <section>
    <!-- MODAL DELETE STUDENTS-->
    <div class="modal fade" id="modalDeleteDataTeacher<?= $rowTeacher["id"]; ?>" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header no-bd">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus?</h1>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Anda yakin ingin menghapus data ini?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
            <form action="" method="post">
              <input type="text" name="id" hidden value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($rowTeacher["id"]))))))))); ?>">
              <button type="submit" name="del_teacher" class="btn btn-danger">Hapus</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endforeach; ?>
<!-- end MODAL DELETE TEACHER-->


<!-- === CONDITION DATA TEACHER=== -->
<?php if (isset($_POST["add_teacher"])) : ?>
  <?php if (addTeacher($_POST) > 0) : ?>
    <script>
      document.location.href = '<?= $url; ?>admin/dashboard/teacher-add-success';
    </script>
  <?php endif; ?>
<?php endif; ?>

<?php if (isset($_POST["update_teacher"])) : ?>
  <?php if (updateTeacher($_POST) > 0) : ?>
    <script>
      document.location.href = '<?= $url; ?>admin/dashboard/teacher-edit-success';
    </script>
  <?php endif; ?>
<?php endif; ?>

<?php if (isset($_POST["del_teacher"])) : ?>
  <?php if (deleteTeacher(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($_POST["id"]))))))))))) : ?>
    <script>
      document.location.href = '<?= $url; ?>admin/dashboard/teacher-deleted-success';
    </script>
  <?php endif; ?>
<?php endif; ?>