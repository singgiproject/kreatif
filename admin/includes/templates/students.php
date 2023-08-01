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

      <?php if ($_GET["pages"] === "students" or $_GET["pages"] === "students-add-success" or $_GET["pages"] === "students-edit-success" or $_GET["pages"] === "students-deleted-success") : ?>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <?php if ($rowSession["level"] === $levelSuperAdmin) : ?>
                <div class="card-header">
                  <div class="d-flex align-items-center">
                    <h4 class="card-title">Tambah Data <?= $pageTitle; ?></h4>
                    <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#modalAddDataStudents">
                      <i class="fa fa-plus"></i>
                      Tambah Data <?= $pageTitle; ?>
                    </button>
                  </div>
                </div>
              <?php endif; ?>
              <div class="card-body">

                <!-- Table Data -->
                <div class="table-responsive">
                  <table id="add-row" class="display table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <?php if ($rowSession["level"] === $levelSuperAdmin) : ?>
                          <th style="width: 10%">Opsi</th>
                        <?php endif; ?>
                        <th>Kelas</th>
                        <th>Nama Lengkap</th>
                        <th>Nama Panggilan</th>
                        <th>NISN/NIS</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Tgl Lahir</th>
                        <th>Agama</th>
                        <th>Anak ke</th>
                        <th>Nama Ayah</th>
                        <th>Nama Ibu</th>
                        <th>No. Hp</th>
                        <th>Pekerjaan Ayah</th>
                        <th>Pekerjaan Ibu</th>
                        <th>Alamat Lengkap</th>
                      </tr>
                    </thead>
                    <tfoot>


                      <tr>
                        <th>#</th>
                        <?php if ($rowSession["level"] === $levelSuperAdmin) : ?>
                          <th>Opsi</th>
                        <?php endif; ?>
                        <th>Kelas</th>
                        <th>Nama Lengkap</th>
                        <th>Nama Panggilan</th>
                        <th>NISN/NIS</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Tgl Lahir</th>
                        <th>Agama</th>
                        <th>Anak ke</th>
                        <th>Nama Ayah</th>
                        <th>Nama Ibu</th>
                        <th>No. Hp</th>
                        <th>Pekerjaan Ayah</th>
                        <th>Pekerjaan Ibu</th>
                        <th>Alamat Lengkap</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <?php $noTable = 1; ?>
                      <?php foreach ($students as $rowStudents) : ?>
                        <?php if ($rowSession["level"] === $rowStudents["id_class"] or $rowSession["level"] === $levelSuperAdmin) : ?>
                          <tr>
                            <td><?= $noTable; ?></td>
                            <?php if ($rowSession["level"] === $levelSuperAdmin) : ?>
                              <td>
                                <div class="form-button-action">
                                  <a href="#" class="badge p-2 btn btn-link btn-primary btn-lg text-white mb-1" title="Ubah" data-toggle="modal" data-target="#modalEditDataStudents<?= $rowStudents["id"]; ?>" data-toggle="tooltip" title="Ubah">
                                    <i class="bi bi-pencil-square fs-6"></i>
                                  </a>
                                  <a href="#" class="badge p-2 btn btn-link btn-danger text-white" data-toggle="modal" data-target="#modalDeleteDataStudents<?= $rowStudents["id"]; ?>" title="Hapus" data-toggle="tooltip" title="Hapus"><i class="bi bi-trash fs-6"></i></a>
                                </div>
                              </td>
                            <?php endif; ?>
                            <td>
                              <?php if ($rowStudents["id_class"] === "class_a") : ?>
                                A
                              <?php endif; ?>
                              <?php if ($rowStudents["id_class"] === "class_b") : ?>
                                B
                              <?php endif; ?>
                            </td>
                            <td><?= $rowStudents["nama_lengkap"]; ?></td>
                            <td><?= $rowStudents["nama_panggilan"]; ?></td>
                            <td><?= $rowStudents["nisn"]; ?>/<?= $rowStudents["nis"]; ?></td>
                            <td><?= $rowStudents["jenis_kelamin"]; ?></td>
                            <td><?= $rowStudents["tempat_lahir"]; ?>, <?= date_id($rowStudents["tgl_lahir"]); ?></td>
                            <td><?= $rowStudents["agama"]; ?></td>
                            <td><?= $rowStudents["anak_ke"]; ?></td>
                            <td><?= $rowStudents["nama_ayah"]; ?></td>
                            <td><?= $rowStudents["nama_ibu"]; ?></td>
                            <td><?= $rowStudents["no_hp"]; ?></td>
                            <td><?= $rowStudents["pekerjaan_ayah"]; ?></td>
                            <td><?= $rowStudents["pekerjaan_ibu"]; ?></td>
                            <td>
                              <?= $rowStudents["nama_jln"]; ?>,
                              <?= $rowStudents["kecamatan"]; ?>,
                              <?= $rowStudents["kabupaten"]; ?>,
                              <?= $rowStudents["provinsi"]; ?>,
                              <?= $rowStudents["kode_post"]; ?>
                            </td>

                          </tr>
                          <?php $noTable++; ?>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>

                <?php if ($rowSession["level"] === $levelSuperAdmin) : ?>

                  <!-- === MODAL ADD STUDENTS=== -->
                  <div class="modal fade" id="modalAddDataStudents" tabindex="-1" role="dialog" aria-hidden="true">
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
                              <div class="col-md-12 mb-2" hidden>
                                <input type="text" hidden name="date_send" value="<?= $dateEncode; ?>">
                                <input type="text" hidden name="id_siswa" value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode("student_" . $resultStudents["countStudents"] + 1))))))))); ?>">
                              </div>

                              <div class="col-md-12 mb-2">
                                <label for="id_class" class="form-label">Kelas</label>
                                <select name="id_class" id="id_class" class="form-control" required>
                                  <option value="">--- Pilih ---</option>
                                  <option value="class_a">A</option>
                                  <option value="class_b">B</option>
                                </select>
                                <div class="invalid-feedback">
                                  Harap Pilih Kelas
                                </div>
                              </div>

                              <div class="col-md-12 mb-2">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" required placeholder="Nama Lengkap">
                                <div class="invalid-feedback">
                                  Harap Masukan Nama Lengkap
                                </div>
                              </div>

                              <div class="col-md-12 mb-2">
                                <label for="nama_panggilan" class="form-label">Nama Panggilan</label>
                                <input type="text" class="form-control" name="nama_panggilan" id="nama_panggilan" required placeholder="Masukan Nama Panggilan">
                                <div class="invalid-feedback">
                                  Harap Masukan Nama Panggilan
                                </div>
                              </div>

                              <div class="col-md-12 mb-2">
                                <label for="nisn" class="form-label">NISN</label>
                                <input type="text" class="form-control" name="nisn" id="nisn" placeholder="Masukan NISN" maxlength="10">
                                <div class="invalid-feedback">
                                  Harap Masukan NISN
                                </div>
                              </div>

                              <div class="col-md-12 mb-2">
                                <label for="nis" class="form-label">NIS</label>
                                <input type="text" class="form-control" name="nis" id="nis" placeholder="Masukan NIS">
                                <div class="invalid-feedback">
                                  Harap Masukan NIS
                                </div>
                              </div>

                              <div class="col-md-12 mb-2">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-Laki" id="man_patient" required>
                                  <label class="form-check-label" for="man_patient">
                                    Laki-Laki
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" id="woman_patient" required>
                                  <label class="form-check-label" for="woman_patient">
                                    Perempuan
                                  </label>
                                  <div class="invalid-feedback">
                                    Harap berikan jenis kelamin
                                  </div>
                                </div>
                              </div>


                              <div class="col-md-12 mb-2">
                                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" required placeholder="Masukan Tempat Lahir">
                                <div class="invalid-feedback">
                                  Harap Masukan Tempat Lahir
                                </div>
                              </div>

                              <div class="col-md-12 mb-2">
                                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" required placeholder="Masukan Tanggal Lahir">
                                <div class="invalid-feedback">
                                  Harap Masukan Tanggal Lahir
                                </div>
                              </div>

                              <div class="col-md-12 mb-2">
                                <label for="agama" class="form-label">Agama</label>
                                <select name="agama" id="agama" class="form-control" required>
                                  <option value="">--- Pilih ---</option>
                                  <option value="Islam">Islam</option>
                                  <option value="Kristen">Kristen</option>
                                  <option value="Katolik">Katolik</option>
                                  <option value="Hindu">Hindu</option>
                                  <option value="Budha">Budha</option>
                                  <option value="Konghucu">Konghucu</option>
                                </select>
                                <div class="invalid-feedback">
                                  Harap Pilih Agama
                                </div>
                              </div>

                              <div class="col-md-12 mb-2">
                                <label for="anak_ke" class="form-label">Anak Ke</label>
                                <select name="anak_ke" id="anak_ke" class="form-control" required>
                                  <option value="">--- Pilih ---</option>
                                  <option value="I (Satu)">1</option>
                                  <option value="II (Dua)">2</option>
                                  <option value="III (Tiga)">3</option>
                                  <option value="IV (Empat)">4</option>
                                  <option value="V (Lima)">5</option>
                                  <option value="VI (Enam)">6</option>
                                  <option value="VII (Tujuh)">7</option>
                                  <option value="VIII (Delapan)">8</option>
                                  <option value="X (Sembilan)">9</option>
                                  <option value="XI (Sepuluh)">10</option>
                                </select>
                                <div class="invalid-feedback">
                                  Harap Anak Ke Berapa..
                                </div>
                              </div>

                              <div class="col-md-12 mb-2">
                                <label for="nama_ayah" class="form-label">Nama Ayah</label>
                                <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" required placeholder="Masukan Nama Ayah">
                                <div class="invalid-feedback">
                                  Harap Masukan Nama Ayah
                                </div>
                              </div>

                              <div class="col-md-12 mb-2">
                                <label for="nama_ibu" class="form-label">Nama Ibu</label>
                                <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" required placeholder="Masukan Nama Ibu">
                                <div class="invalid-feedback">
                                  Harap Masukan Nama Ibu
                                </div>
                              </div>

                              <div class="col-md-12 mb-2">
                                <label for="no_hp" class="form-label">Nomor HP</label>
                                <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Nomor HP" minlength="8" maxlength="15">
                                <div class="invalid-feedback">
                                  Harap Masukan Nomor HP
                                </div>
                              </div>

                              <div class="col-md-12 mb-2">
                                <label for="pekerjaan_ayah" class="form-label">Pekerjaan Ayah</label>
                                <input type="text" class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" required placeholder="Masukan Pekerjaan Ayah">
                                <div class="invalid-feedback">
                                  Harap Masukan Pekerjaan Ayah
                                </div>
                              </div>

                              <div class="col-md-12 mb-2">
                                <label for="pekerjaan_ibu" class="form-label">Pekerjaan Ibu</label>
                                <input type="text" class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" required placeholder="Masukan Pekerjaan Ibu">
                                <div class="invalid-feedback">
                                  Harap Masukan Pekerjaan Ibu
                                </div>
                              </div>

                              <div class="col-md-12 mb-2">
                                <label for="provinsi" class="form-label">Provinsi</label>
                                <select name="provinsi" id="provinsi" class="form-control" required>
                                  <option value="">Pilih Provinsi</option>
                                </select>
                                <div class="invalid-feedback">
                                  Harap Masukan Provinsi
                                </div>
                              </div>

                              <div class="col-md-12 mb-2">
                                <label for="kota" class="form-label">Kabupaten</label>
                                <select name="kabupaten" id="kota" class="form-control">
                                  <option>Pilih Kabupaten/Kota</option>
                                </select>
                                <div class="invalid-feedback">
                                  Harap Masukan Kabupaten
                                </div>
                              </div>

                              <div class="col-md-12 mb-2">
                                <label for="kecamatan" class="form-label">Kecamatan</label>
                                <select name="kecamatan" id="kecamatan" class="form-control">
                                  <option>Pilih Kecamatan</option>
                                </select>
                                <div class="invalid-feedback">
                                  Harap Masukan Kecamatan
                                </div>
                              </div>

                              <div class="col-md-12 mb-2">
                                <label for="kelurahan" class="form-label">Desa/Kelurahan</label>
                                <select name="desa" id="kelurahan" class="form-control">
                                  <option>Pilih Desa/Kelurahan</option>
                                </select>
                                <div class="invalid-feedback">
                                  Harap Masukan Nama Jalan
                                </div>
                              </div>

                              <div class="col-md-12 mb-2">
                                <label for="nama_jln" class="form-label">Nama Jalan</label>
                                <input type="text" class="form-control" name="nama_jln" id="nama_jln" required placeholder="Masukan Nama Jalan">
                                <div class="invalid-feedback">
                                  Harap Masukan Nama Jalan
                                </div>
                              </div>

                              <div class="col-md-12 mb-2">
                                <label for="kode_post" class="form-label">Kode Pos</label>
                                <input type="text" class="form-control" name="kode_post" id="kode_post" placeholder="Masukan Kode Pos">
                                <div class="invalid-feedback">
                                  Harap Masukan Kode Pos
                                </div>
                              </div>

                              <div class="col-12">
                                <button class="btn bg-success text-white" type="submit" name="add_students"><i class="bi bi-save"></i> Simpan</button>
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
                  <!-- === end MODAL ADD STUDENTS=== -->
                <?php endif; ?>



              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

    </div>
  </div>

</div>

<?php if ($rowSession["level"] === $levelSuperAdmin) : ?>
  <?php foreach ($students as $rowStudents) : ?>
    <section>
      <!-- === MODAL EDIT STUDENTS=== -->
      <div class="modal fade" id="modalEditDataStudents<?= $rowStudents["id"]; ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <input type="text" hidden name="id" value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($rowStudents["id"]))))))))); ?>">
                    <input type="text" hidden name="id_siswa" value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($rowStudents["id_siswa"]))))))))); ?>">
                    <input type="text" hidden name="date_send" value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($rowStudents["date_send"]))))))))); ?>">
                  </div>

                  <div class="col-md-12 mb-2">
                    <label for="id_class" class="form-label">Kelas</label>
                    <select name="id_class" id="id_class" class="form-control" required>
                      <option value="">--- Pilih ---</option>
                      <option value="class_a" <?php if ($rowStudents["id_class"] === "class_a") : ?> selected <?php endif; ?>>A</option>
                      <option value="class_b" <?php if ($rowStudents["id_class"] === "class_b") : ?> selected <?php endif; ?>>B</option>
                    </select>
                    <div class="invalid-feedback">
                      Harap Pilih Kelas
                    </div>
                  </div>

                  <div class="col-md-12 mb-2">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" required placeholder="Nama Lengkap" value="<?= $rowStudents["nama_lengkap"]; ?>">
                    <div class="invalid-feedback">
                      Harap Masukan Nama Lengkap
                    </div>
                  </div>

                  <div class="col-md-12 mb-2">
                    <label for="nama_panggilan" class="form-label">Nama Panggilan</label>
                    <input type="text" class="form-control" name="nama_panggilan" id="nama_panggilan" required placeholder="Masukan Nama Panggilan" value="<?= $rowStudents["nama_panggilan"] ?>">
                    <div class="invalid-feedback">
                      Harap Masukan Nama Panggilan
                    </div>
                  </div>

                  <div class="col-md-12 mb-2">
                    <label for="nisn" class="form-label">NISN</label>
                    <input type="text" class="form-control" name="nisn" id="nisn" placeholder="Masukan NISN" maxlength="10" value="<?= $rowStudents["nisn"] ?>">
                    <div class="invalid-feedback">
                      Harap Masukan NISN
                    </div>
                  </div>

                  <div class="col-md-12 mb-2">
                    <label for="nis" class="form-label">NIS</label>
                    <input type="text" class="form-control" name="nis" id="nis" placeholder="Masukan NIS" value="<?= $rowStudents["nis"] ?>">
                    <div class="invalid-feedback">
                      <div class="invalid-feedback">
                        Harap Masukan NIS
                      </div>
                    </div>

                    <div class="col-md-12 mb-2">
                      <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-Laki" id="man_students" required <?php if ($rowStudents["jenis_kelamin"] === "Laki-Laki") : ?>checked<?php endif; ?>>
                        <label class="form-check-label" for="man_students">
                          Laki-Laki
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" id="woman_students" required <?php if ($rowStudents["jenis_kelamin"] === "Perempuan") : ?>checked<?php endif; ?>>
                        <label class="form-check-label" for="woman_students">
                          Perempuan
                        </label>
                        <div class="invalid-feedback">
                          Harap berikan jenis kelamin
                        </div>
                      </div>
                    </div>


                    <div class="col-md-12 mb-2">
                      <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                      <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" required placeholder="Masukan Tempat Lahir" value="<?= $rowStudents["tempat_lahir"] ?>">
                      <div class="invalid-feedback">
                        Harap Masukan Tempat Lahir
                      </div>
                    </div>

                    <div class="col-md-12 mb-2">
                      <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                      <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" required placeholder="Masukan Tanggal Lahir" value="<?= $rowStudents["tgl_lahir"] ?>">
                      <div class="invalid-feedback">
                        Harap Masukan Tanggal Lahir
                      </div>
                    </div>

                    <div class="col-md-12 mb-2">
                      <label for="agama" class="form-label">Agama</label>
                      <select name="agama" id="agama" class="form-control" required>
                        <option value="">--- Pilih ---</option>
                        <option value="Islam" <?php if ($rowStudents["agama"] === "Islam") : ?> selected <?php endif; ?>>Islam
                        </option>
                        <option value="Kristen" <?php if ($rowStudents["agama"] === "Kristen") : ?> selected <?php endif; ?>>Kristen
                        </option>
                        <option value="Katolik" <?php if ($rowStudents["agama"] === "Katolik") : ?> selected <?php endif; ?>>Katolik
                        </option>
                        <option value="Hindu" <?php if ($rowStudents["agama"] === "Hindu") : ?> selected <?php endif; ?>>Hindu
                        </option>
                        <option value="Budha" <?php if ($rowStudents["agama"] === "Budha") : ?> selected <?php endif; ?>>Budha
                        </option>
                        <option value="Konghucu" <?php if ($rowStudents["agama"] === "Konghucu") : ?> selected <?php endif; ?>>Konghucu
                        </option>
                      </select>
                      <div class="invalid-feedback">
                        Harap Pilih Agama
                      </div>
                    </div>

                    <div class="col-md-12 mb-2">
                      <label for="anak_ke" class="form-label">Anak Ke</label>
                      <select name="anak_ke" id="anak_ke" class="form-control" required>
                        <option value="">--- Pilih ---</option>
                        <option value="I (Satu)" <?php if ($rowStudents["anak_ke"] === "I (Satu)") : ?> selected <?php endif; ?>>1
                        </option>
                        <option value="II (Dua)" <?php if ($rowStudents["anak_ke"] === "II (Dua)") : ?> selected <?php endif; ?>>2

                        </option>
                        <option value="III (Tiga)" <?php if ($rowStudents["anak_ke"] === "III (Tiga)") : ?> selected <?php endif; ?>>3

                        </option>
                        <option value="IV (Empat)" <?php if ($rowStudents["anak_ke"] === "IV (Empat)") : ?> selected <?php endif; ?>>4

                        </option>
                        <option value="V (Lima)" <?php if ($rowStudents["anak_ke"] === "V (Lima)") : ?> selected <?php endif; ?>>5

                        </option>
                        <option value="VI (Enam)" <?php if ($rowStudents["anak_ke"] === "VI (Enam)") : ?> selected <?php endif; ?>>6

                        </option>
                        <option value="VII (Tujuh)" <?php if ($rowStudents["anak_ke"] === "VII (Tujuh)") : ?> selected <?php endif; ?>>7

                        </option>
                        <option value="VIII (Delapan)" <?php if ($rowStudents["anak_ke"] === "VIII (Delapan)") : ?> selected <?php endif; ?>>8

                        </option>
                        <option value="X (Sembilan)" <?php if ($rowStudents["anak_ke"] === "X (Sembilan)") : ?> selected <?php endif; ?>>9

                        </option>
                        <option value="XI (Sepuluh)" <?php if ($rowStudents["anak_ke"] === "XI (Sepuluh)") : ?> selected <?php endif; ?>>10</option>
                      </select>
                      <div class="invalid-feedback">
                        Harap Anak Ke Berapa..
                      </div>
                    </div>

                    <div class="col-md-12 mb-2">
                      <label for="nama_ayah" class="form-label">Nama Ayah</label>
                      <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" required placeholder="Masukan Nama Ayah" value="<?= $rowStudents["nama_ayah"] ?>">
                      <div class="invalid-feedback">
                        Harap Masukan Nama Ayah
                      </div>
                    </div>

                    <div class="col-md-12 mb-2">
                      <label for="nama_ibu" class="form-label">Nama Ibu</label>
                      <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" required placeholder="Masukan Nama Ibu" value="<?= $rowStudents["nama_ibu"] ?>">
                      <div class="invalid-feedback">
                        Harap Masukan Nama Ibu
                      </div>
                    </div>

                    <div class="col-md-12 mb-2">
                      <label for="no_hp" class="form-label">Nomor HP</label>
                      <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Nomor HP" minlength="8" maxlength="15" value="<?= $rowStudents["no_hp"] ?>">
                      <div class="invalid-feedback">
                        Harap Masukan Nomor HP
                      </div>
                    </div>

                    <div class="col-md-12 mb-2">
                      <label for="pekerjaan_ayah" class="form-label">Pekerjaan Ayah</label>
                      <input type="text" class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" required placeholder="Masukan Pekerjaan Ayah" value="<?= $rowStudents["pekerjaan_ayah"] ?>">
                      <div class="invalid-feedback">
                        Harap Masukan Pekerjaan Ayah
                      </div>
                    </div>

                    <div class="col-md-12 mb-2">
                      <label for="pekerjaan_ibu" class="form-label">Pekerjaan Ibu</label>
                      <input type="text" class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" required placeholder="Masukan Pekerjaan Ibu" value="<?= $rowStudents["pekerjaan_ibu"] ?>">
                      <div class="invalid-feedback">
                        Harap Masukan Pekerjaan Ibu
                      </div>
                    </div>

                    <div class="col-md-12 mb-2">
                      <label for="provinsi" class="form-label">Provinsi | <strong><?= $rowStudents["provinsi"]; ?></strong></label>
                      <select name="provinsi" id="provinsi<?= $rowStudents["id"]; ?>" class="form-control">
                        <option value="<?= $rowStudents["provinsi"]; ?>"><?= $rowStudents["provinsi"]; ?></option>
                        <option>Pilih Provinsi</option>
                      </select>
                      <div class="invalid-feedback">
                        Harap Masukan Provinsi
                      </div>
                    </div>

                    <div class="col-md-12 mb-2">
                      <label for="kota" class="form-label">Kabupaten | <strong><?= $rowStudents["kabupaten"]; ?></strong></label>
                      <select name="kabupaten" id="kota<?= $rowStudents["id"]; ?>" class="form-control">
                        <option>Pilih Kabupaten/Kota</option>
                      </select>
                      <div class="invalid-feedback">
                        Harap Masukan Kabupaten
                      </div>
                    </div>

                    <div class="col-md-12 mb-2">
                      <label for="kecamatan" class="form-label">Kecamatan | <strong><?= $rowStudents["kecamatan"]; ?></strong></label>
                      <select name="kecamatan" id="kecamatan<?= $rowStudents["id"]; ?>" class="form-control">
                        <option>Pilih Kecamatan</option>
                      </select>
                      <div class="invalid-feedback">
                        Harap Masukan Kecamatan
                      </div>
                    </div>

                    <div class="col-md-12 mb-2">
                      <label for="kelurahan" class="form-label">Desa/Kelurahan | <strong><?= $rowStudents["desa"]; ?></strong></label>
                      <select name="desa" id="kelurahan<?= $rowStudents["id"]; ?>" class="form-control">
                        <option>Pilih Desa/Kelurahan</option>
                      </select>
                      <div class="invalid-feedback">
                        Harap Masukan Nama Jalan
                      </div>
                    </div>

                    <div class="col-md-12 mb-2">
                      <label for="nama_jln" class="form-label">Nama Jalan</label>
                      <input type="text" class="form-control" name="nama_jln" id="nama_jln" required placeholder="Masukan Nama Jalan" value="<?= $rowStudents["nama_jln"] ?>">
                      <div class="invalid-feedback">
                        Harap Masukan Nama Jalan
                      </div>
                    </div>


                    <div class="col-md-12 mb-2">
                      <label for="kode_post" class="form-label">Kode Pos</label>
                      <input type="text" class="form-control" name="kode_post" id="kode_post" placeholder="Masukan Kode Pos" value="<?= $rowStudents["kode_post"] ?>">
                      <div class="invalid-feedback">
                        Harap Masukan Kode Pos
                      </div>
                    </div>

                    <div class="col-12">
                      <button class="btn bg-purple-1 text-white" type="submit" name="update_students"><i class="bi bi-save"></i> Simpan</button>
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

      <!-- Address Edit -->
      <script>
        fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/provinces.json`)
          .then(response => response.json())
          .then(provinces => {
            var data = provinces;
            var tampung = '<option>Pilih Provinsi</option>';
            data.forEach(element => {
              tampung += `<option data-reg="${element.id}" value="${element.name}">${element.name}</option>`;
            });
            document.getElementById('provinsi<?= $rowStudents["id"]; ?>').innerHTML = tampung;
          });

        const selectProvinsiEdit<?= $rowStudents["id"]; ?> = document.getElementById('provinsi<?= $rowStudents["id"]; ?>');

        // Provinsi -> Kabupaten
        selectProvinsiEdit<?= $rowStudents["id"]; ?>.addEventListener('change', (e) => {
          var provinsi = e.target.options[e.target.selectedIndex].dataset.reg;
          fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/regencies/${provinsi}.json`)
            .then(response => response.json())
            .then(regencies => {
              var data = regencies;
              var tampung = '<option>Pilih Kabupaten/Kota</option>';
              data.forEach(element => {
                tampung += `<option data-dist="${element.id}" value="${element.name}">${element.name}</option>`;
              });
              document.getElementById('kota<?= $rowStudents["id"]; ?>').innerHTML = tampung;
            });
        });

        const selectKotaEdit<?= $rowStudents["id"]; ?> = document.getElementById('kota<?= $rowStudents["id"]; ?>');
        // Kabupaten -> Kecamatan
        selectKotaEdit<?= $rowStudents["id"]; ?>.addEventListener('change', (e) => {
          var kota = e.target.options[e.target.selectedIndex].dataset.dist;
          fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/districts/${kota}.json`)
            .then(response => response.json())
            .then(districts => {
              var data = districts;
              var tampung = '<option>Pilih Kecamatan</option>';
              data.forEach(element => {
                tampung += `<option data-vill="${element.id}" value="${element.name}">${element.name}</option>`;
              });
              document.getElementById('kecamatan<?= $rowStudents["id"]; ?>').innerHTML = tampung;
            });
        });

        const selectKecamatanEdit<?= $rowStudents["id"]; ?> = document.getElementById('kecamatan<?= $rowStudents["id"]; ?>');
        // Kecamatan -> Kelurahan/Desa
        selectKecamatanEdit<?= $rowStudents["id"]; ?>.addEventListener('change', (e) => {
          var kecamatan = e.target.options[e.target.selectedIndex].dataset.vill;
          fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/villages/${kecamatan}.json`)
            .then(response => response.json())
            .then(villages => {
              var data = villages;
              var tampung = '<option>Pilih Desa/Kelurahan</option>';
              data.forEach(element => {
                tampung += `<option  value="${element.name}">${element.name}</option>`;
              });
              document.getElementById('kelurahan<?= $rowStudents["id"]; ?>').innerHTML = tampung;
            });
        });
      </script>
      <!-- === end MODAL EDIT STUDENTS=== -->
    </section>
  <?php endforeach; ?>
<?php endif; ?>

<?php if ($rowSession["level"] === $levelSuperAdmin) : ?>
  <?php foreach ($students as $rowStudents) : ?>
    <section>
      <!-- MODAL DELETE STUDENTS-->
      <div class="modal fade" id="modalDeleteDataStudents<?= $rowStudents["id"]; ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
                <input type="text" name="id" hidden value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($rowStudents["id"]))))))))); ?>">
                <button type="submit" name="del_students" class="btn btn-danger">Hapus</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end MODAL DELETE STUDENTS-->
  <?php endforeach; ?>
<?php endif; ?>


<?php if ($rowSession["level"] === $levelSuperAdmin) : ?>
  <!-- === CONDITION DATA STUDENTS=== -->
  <?php if (isset($_POST["add_students"])) : ?>
    <?php if (addStudents($_POST) > 0) : ?>
      <script>
        document.location.href = '<?= $url; ?>admin/dashboard/students-add-success';
      </script>
    <?php endif; ?>
  <?php endif; ?>

  <?php if (isset($_POST["update_students"])) : ?>
    <?php if (updateStudents($_POST) > 0) : ?>
      <script>
        document.location.href = '<?= $url; ?>admin/dashboard/students-edit-success';
      </script>
    <?php endif; ?>
  <?php endif; ?>

  <?php if (isset($_POST["del_students"])) : ?>
    <?php if (deleteStudents(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($_POST["id"]))))))))))) : ?>
      <script>
        document.location.href = '<?= $url; ?>admin/dashboard/students-deleted-success';
      </script>
    <?php endif; ?>
  <?php endif; ?>
<?php endif; ?>