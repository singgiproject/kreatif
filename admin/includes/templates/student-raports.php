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

      <?php if ($_GET["pages"] === "student-raports" or $_GET["pages"] === "student-raports-add-success" or $_GET["pages"] === "student-raports-edit-success" or $_GET["pages"] === "student-raports-deleted-success") : ?>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="d-flex align-items-center">
                  <h4 class="card-title">Tambah Data <?= $pageTitle; ?></h4>
                  <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#modalAddStudentRaport">
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
                        <th style="width: 10%">Opsi</th>
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
                      <?php foreach ($studentRaports as $rowStudentRaports) : ?>
                        <?php foreach ($students as $rowStudents) : ?>
                          <?php if ($rowSession["level"] === $rowStudents["id_class"] or $rowSession["level"] === $levelSuperAdmin) : ?>
                            <?php if ($rowStudentRaports["id_siswa"] === $rowStudents["id_siswa"]) : ?>
                              <tr>
                                <th scope="row"><a href="#"><?= $noTable; ?></a></th>

                                <td>
                                  <a href="#" class="badge p-2 btn <?php if ($rowStudentRaports["semester"] === "I") : ?> bg-primary bg-gradient text-light <?php endif; ?> <?php if ($rowStudentRaports["semester"] === "II") : ?> bg-info bg-gradient text-dark <?php endif; ?>" title="Ubah" data-toggle="modal" data-target="#modalEditStudentRaport<?= $rowStudentRaports["id"]; ?>" title="Ubah"><i class="bi bi-pencil-square fs-6"></i> SEMESTER <?= $rowStudentRaports["semester"]; ?></a>

                                  <form action="<?= $url; ?>admin/print/raports-print" method="post">
                                    <input type="text" hidden name="id" value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($rowStudentRaports["id"]))))))))); ?>">
                                    <button type="submit" name="print" class="dropdown-item badge p-2 mt-1 btn<?php if ($rowStudentRaports["semester"] === "I") : ?> bg-primary bg-gradient text-light <?php endif; ?> <?php if ($rowStudentRaports["semester"] === "II") : ?> bg-info bg-gradient text-dark <?php endif; ?>" title="Print" href="#">
                                      <i class="bi bi-printer fs-6"></i> SEMESTER <?= $rowStudentRaports["semester"]; ?>
                                    </button>
                                  </form>

                                  <a href="#" class="badge p-2 mt-1 btn  bg-danger text-light bg-gradient" title="Hapus" data-toggle="modal" data-target="#modalDeleteStudentRaport<?= $rowStudentRaports["id"]; ?>"><i class="bi bi-trash fs-6"></i> SEMESTER <?= $rowStudentRaports["semester"]; ?></a>

                                  <!-- Example single danger button -->
                                </td>

                                <td>
                                  <?php if ($rowStudents["id_class"] === "class_a" or $rowSession["level"] === $levelSuperAdmin) : ?>
                                    A
                                  <?php endif; ?>
                                  <?php if ($rowStudents["id_class"] === "class_b" or $rowSession["level"] === $levelSuperAdmin) : ?>
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
                          <?php endif; ?>
                        <?php endforeach; ?>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>

                <!-- === MODAL ADD RAPORT STUDENTS=== -->
                <div class="modal fade" id="modalAddStudentRaport" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
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
                            </div>

                            <div class="row">
                              <div class="col-md-6 mb-2">
                                <label for="id_siswa" class="form-label">Siswa</label>
                                <select name="id_siswa" id="id_siswa" class="form-control" required>
                                  <option value="">---Pilih---</option>
                                  <?php foreach ($students as $rowStudents) : ?>
                                    <?php if ($rowSession["level"] === $rowStudents["id_class"] or $rowSession["level"] === $levelSuperAdmin) : ?>
                                      <option value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($rowStudents["id_siswa"]))))))))); ?>">
                                        <?= $rowStudents["nama_lengkap"]; ?>
                                      </option>
                                    <?php endif; ?>
                                  <?php endforeach; ?>
                                </select>
                                <div class="invalid-feedback">
                                  Harap Pilih Siswa
                                </div>
                              </div>

                              <div class="col-md-6 mb-2">
                                <label for="id_class" class="form-label">Kelas</label>
                                <select name="id_class" id="id_class" class="form-control" required>
                                  <?php if ($rowSession["level"] === "class_a" or $rowSession["level"] === $levelSuperAdmin) : ?>
                                    <option value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode("class_a"))))))))); ?>">A</option>
                                  <?php endif; ?>

                                  <?php if ($rowSession["level"] === "class_b" or $rowSession["level"] === $levelSuperAdmin) : ?>
                                    <option value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode("class_b"))))))))); ?>">B</option>
                                  <?php endif; ?>

                                </select>
                                <div class="invalid-feedback">
                                  Harap Pilih Kelas
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-6 mb-2">
                                <label for="semester" class="form-label">Semester</label>
                                <select name="semester" id="semester" class="form-control" required>
                                  <option value="">--- Pilih ---</option>
                                  <option value="I">1</option>
                                  <option value="II">2</option>
                                </select>
                                <div class="invalid-feedback">
                                  Harap Pilih Semester
                                </div>
                              </div>

                              <div class="col-md-6 mb-2">
                                <label for="tahun_pelajaran" class="form-label">Tahun Pelajaran</label>
                                <select name="tahun_pelajaran" id="tahun_pelajaran" class="form-control" required>
                                  <option value="<?= date("Y") - 1; ?> / <?= date("Y"); ?>">
                                    <?= date("Y") - 1; ?> / <?= date("Y"); ?>
                                  </option>
                                </select>
                                <div class="invalid-feedback">
                                  Harap Pilih Tahun Pelajaran
                                </div>
                              </div>
                            </div>

                            <hr>
                            <h5>
                              <center><strong>Nilai Capaian Kompetensi Bidang Perkembangan</strong></center>
                            </h5>

                            <div class="row mt-3">
                              <div class="col-md-4 mb-2">
                                <label for="nilai_agama" class="form-label">Perkembangan Nilai Agama Dan Moral</label>
                                <input type="number" class="form-control" name="nilai_agama" id="nilai_agama" placeholder="0-100" maxlength="6" required>
                                <div class="invalid-feedback">
                                  Harap Masukan Perkembangan Nilai Agama Dan Moral
                                </div>
                              </div>

                              <div class="col-md-4 mb-2">
                                <label for="nilai_motorik" class="form-label">Perkembangan Motorik</label>
                                <input type="number" class="form-control" name="nilai_motorik" id="nilai_motorik" placeholder="0-100" maxlength="6" required>
                                <div class="invalid-feedback">
                                  Harap Masukan Perkembangan Motorik
                                </div>
                              </div>

                              <div class="col-md-4 mb-2">
                                <label for="nilai_kognitif" class="form-label">Perkembangan Kognitif</label>
                                <input type="number" class="form-control" name="nilai_kognitif" id="nilai_kognitif" placeholder="0-100" maxlength="6" required>
                                <div class="invalid-feedback">
                                  Harap Masukan Perkembangan Kognitif
                                </div>
                              </div>
                            </div>

                            <div class="row mt-3">
                              <div class="col-md-4 mb-2">
                                <label for="nilai_bahasa" class="form-label">Perkembangan Bahasa</label>
                                <input type="number" class="form-control" name="nilai_bahasa" id="nilai_bahasa" placeholder="0-100" maxlength="6" required>
                                <div class="invalid-feedback">
                                  Harap Masukan Perkembangan Bahasa
                                </div>
                              </div>

                              <div class="col-md-4 mb-2">
                                <label for="nilai_sosial_emosional" class="form-label">Perkembangan Sosial - Emosional</label>
                                <input type="number" class="form-control" name="nilai_sosial_emosional" id="nilai_sosial_emosional" placeholder="0-100" maxlength="6" required>
                                <div class="invalid-feedback">
                                  Harap Masukan Perkembangan Sosial - Emosional
                                </div>
                              </div>

                              <div class="col-md-4 mb-2">
                                <label for="nilai_seni" class="form-label">Perkembangan Seni</label>
                                <input type="number" class="form-control" name="nilai_seni" id="nilai_seni" placeholder="0-100" maxlength="6" required>
                                <div class="invalid-feedback">
                                  Harap Masukan Perkembangan Seni
                                </div>
                              </div>
                            </div>

                            <hr>
                            <h5>
                              <center><strong>Dalam Bidang Perkembangan</strong></center>
                            </h5>

                            <div class="row mt-3">
                              <div class="col-md-4 mb-2">
                                <label for="" class="form-label">Perkembangan Nilai Agama Dan Moral</label>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_agama" id="dalam_bid_perkembangan_nilai_agama_sb" value="SB" required>
                                  <label class="form-check-label" for="dalam_bid_perkembangan_nilai_agama_sb">
                                    Sangat Baik
                                  </label>
                                </div>

                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_agama" id="dalam_bid_perkembangan_nilai_agama_b" value="B" required>
                                  <label class="form-check-label" for="dalam_bid_perkembangan_nilai_agama_b">
                                    Baik
                                  </label>
                                </div>

                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_agama" id="dalam_bid_perkembangan_nilai_agama_c" value="C" required>
                                  <label class="form-check-label" for="dalam_bid_perkembangan_nilai_agama_c">
                                    Cukup
                                  </label>
                                </div>

                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_agama" id="dalam_bid_perkembangan_nilai_agama_k" value="K" required>
                                  <label class="form-check-label" for="dalam_bid_perkembangan_nilai_agama_k">
                                    Kurang
                                  </label>
                                </div>
                              </div>

                              <div class="col-md-4 mb-2">
                                <label for="" class="form-label">Perkembangan Motorik</label>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_motorik" id="dalam_bid_perkembangan_nilai_motorik_sb" value="SB" required>
                                  <label class="form-check-label" for="dalam_bid_perkembangan_nilai_motorik_sb">
                                    Sangat Baik
                                  </label>
                                </div>

                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_motorik" id="dalam_bid_perkembangan_nilai_motorik_b" value="B" required>
                                  <label class="form-check-label" for="dalam_bid_perkembangan_nilai_motorik_b">
                                    Baik
                                  </label>
                                </div>

                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_motorik" id="dalam_bid_perkembangan_nilai_motorik_c" value="C" required>
                                  <label class="form-check-label" for="dalam_bid_perkembangan_nilai_motorik_c">
                                    Cukup
                                  </label>
                                </div>

                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_motorik" id="dalam_bid_perkembangan_nilai_motorik_k" value="K" required>
                                  <label class="form-check-label" for="dalam_bid_perkembangan_nilai_motorik_k">
                                    Kurang
                                  </label>
                                </div>
                              </div>

                              <div class="col-md-4 mb-2">
                                <label for="" class="form-label">Perkembangan Kognitif</label>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_kognitif" id="dalam_bid_perkembangan_nilai_kognitif_sb" value="SB" required>
                                  <label class="form-check-label" for="dalam_bid_perkembangan_nilai_kognitif_sb">
                                    Sangat Baik
                                  </label>
                                </div>

                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_kognitif" id="dalam_bid_perkembangan_nilai_kognitif_b" value="B" required>
                                  <label class="form-check-label" for="dalam_bid_perkembangan_nilai_kognitif_b">
                                    Baik
                                  </label>
                                </div>

                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_kognitif" id="dalam_bid_perkembangan_nilai_kognitif_c" value="C" required>
                                  <label class="form-check-label" for="dalam_bid_perkembangan_nilai_kognitif_c">
                                    Cukup
                                  </label>
                                </div>

                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_kognitif" id="dalam_bid_perkembangan_nilai_kognitif_k" value="K" required>
                                  <label class="form-check-label" for="dalam_bid_perkembangan_nilai_kognitif_k">
                                    Kurang
                                  </label>
                                </div>
                              </div>
                            </div>


                            <div class="row mt-3">
                              <div class="col-md-4 mb-2">
                                <label for="" class="form-label">Perkembangan Bahasa</label>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_bahasa" id="dalam_bid_perkembangan_nilai_bahasa_sb" value="SB" required>
                                  <label class="form-check-label" for="dalam_bid_perkembangan_nilai_bahasa_sb">
                                    Sangat Baik
                                  </label>
                                </div>

                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_bahasa" id="dalam_bid_perkembangan_nilai_bahasa_b" value="B" required>
                                  <label class="form-check-label" for="dalam_bid_perkembangan_nilai_bahasa_b">
                                    Baik
                                  </label>
                                </div>

                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_bahasa" id="dalam_bid_perkembangan_nilai_bahasa_c" value="C" required>
                                  <label class="form-check-label" for="dalam_bid_perkembangan_nilai_bahasa_c">
                                    Cukup
                                  </label>
                                </div>

                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_bahasa" id="dalam_bid_perkembangan_nilai_bahasa_k" value="K" required>
                                  <label class="form-check-label" for="dalam_bid_perkembangan_nilai_bahasa_k">
                                    Kurang
                                  </label>
                                </div>
                              </div>

                              <div class="col-md-4 mb-2">
                                <label for="" class="form-label">Perkembangan Sosial - Emosional</label>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_sosial_emosional" id="dalam_bid_perkembangan_nilai_sosial_emosional_sb" value="SB" required>
                                  <label class="form-check-label" for="dalam_bid_perkembangan_nilai_sosial_emosional_sb">
                                    Sangat Baik
                                  </label>
                                </div>

                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_sosial_emosional" id="dalam_bid_perkembangan_nilai_sosial_emosional_b" value="B" required>
                                  <label class="form-check-label" for="dalam_bid_perkembangan_nilai_sosial_emosional_b">
                                    Baik
                                  </label>
                                </div>

                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_sosial_emosional" id="dalam_bid_perkembangan_nilai_sosial_emosional_c" value="C" required>
                                  <label class="form-check-label" for="dalam_bid_perkembangan_nilai_sosial_emosional_c">
                                    Cukup
                                  </label>
                                </div>

                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_sosial_emosional" id="dalam_bid_perkembangan_nilai_sosial_emosional_k" value="K" required>
                                  <label class="form-check-label" for="dalam_bid_perkembangan_nilai_sosial_emosional_k">
                                    Kurang
                                  </label>
                                </div>
                              </div>

                              <div class="col-md-4 mb-2">
                                <label for="" class="form-label">Perkembangan Seni</label>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_seni" id="dalam_bid_perkembangan_nilai_seni_sb" value="SB" required>
                                  <label class="form-check-label" for="dalam_bid_perkembangan_nilai_seni_sb">
                                    Sangat Baik
                                  </label>
                                </div>

                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_seni" id="dalam_bid_perkembangan_nilai_seni_b" value="B" required>
                                  <label class="form-check-label" for="dalam_bid_perkembangan_nilai_seni_b">
                                    Baik
                                  </label>
                                </div>

                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_seni" id="dalam_bid_perkembangan_nilai_seni_c" value="C" required>
                                  <label class="form-check-label" for="dalam_bid_perkembangan_nilai_seni_c">
                                    Cukup
                                  </label>
                                </div>

                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_seni" id="dalam_bid_perkembangan_nilai_seni_k" value="K" required>
                                  <label class="form-check-label" for="dalam_bid_perkembangan_nilai_seni_k">
                                    Kurang
                                  </label>
                                </div>
                              </div>
                            </div>

                            <hr>
                            <h5>
                              <center><strong>Antar Bidang Perkembangan</strong></center>
                            </h5>

                            <div class="row mt-3">
                              <div class="col-md-12 mb-2">
                                <label for="antar_bid_perkembangan_description" class="form-label">Deskripsi</label>
                                <textarea name="antar_bid_perkembangan_description" id="antar_bid_perkembangan_description" class="form-control"></textarea>
                                <div class="invalid-feedback">
                                  Harap Masukan Deskripsi
                                </div>
                              </div>
                            </div>

                            <hr>
                            <h5>
                              <center><strong>Tinggi dan Berat Badan</strong></center>
                            </h5>

                            <div class="row mt-3">
                              <div class="col-md-4 mb-2">
                                <label for="tinggi_badan" class="form-label">Tinggi Badan</label>
                                <input type="number" class="form-control" name="tinggi_badan" id="tinggi_badan" placeholder="0 Cm" maxlength="6">
                                <div class="invalid-feedback">
                                  Harap Masukan Tinggi Badan
                                </div>
                              </div>

                              <div class="col-md-4 mb-2">
                                <label for="berat_badan" class="form-label">Berat Badan</label>
                                <input type="number" class="form-control" name="berat_badan" id="berat_badan" placeholder="0 Kg" maxlength="6">
                                <div class="invalid-feedback">
                                  Harap Masukan Berat Badan
                                </div>
                              </div>

                              <div class="col-md-4 mb-2">
                                <label for="lingkar_kepala" class="form-label">Lingkar Kepala</label>
                                <input type="number" class="form-control" name="lingkar_kepala" id="lingkar_kepala" placeholder="0 Cm" maxlength="6">
                                <div class="invalid-feedback">
                                  Harap Lingkar Kepala
                                </div>
                              </div>
                            </div>


                            <hr>
                            <h5>
                              <center><strong>Kondisi Kesehatan</strong></center>
                            </h5>

                            <div class="row mt-3">
                              <div class="col-md-4 mb-2">
                                <label for="" class="form-label">Pendengaran</label>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="pendengaran" id="pendengaran_k" value="K" required>
                                  <label class="form-check-label" for="pendengaran_k">
                                    K (Kurang)
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="pendengaran" id="pendengaran_b" value="B" required>
                                  <label class="form-check-label" for="pendengaran_b">
                                    B (Baik)
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="pendengaran" id="pendengaran_c" value="C" required>
                                  <label class="form-check-label" for="pendengaran_c">
                                    C (Cukup)
                                  </label>
                                  <div class="invalid-feedback">
                                    Harap Masukan Data Pendengaran
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-4 mb-2">
                                <label for="" class="form-label">Penglihatan</label>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="penglihatan" id="penglihatan_k" value="K" required>
                                  <label class="form-check-label" for="penglihatan_k">
                                    K (Kurang)
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="penglihatan" id="penglihatan_b" value="B" required>
                                  <label class="form-check-label" for="penglihatan_b">
                                    B (Baik)
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="penglihatan" id="penglihatan_c" value="C" required>
                                  <label class="form-check-label" for="penglihatan_c">
                                    C (Cukup)
                                  </label>
                                  <div class="invalid-feedback">
                                    Harap Masukan Data Penglihatan
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-4 mb-2">
                                <label for="" class="form-label">Gigi</label>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="gigi" id="gigi_k" value="K" required>
                                  <label class="form-check-label" for="gigi_k">
                                    K (Kurang)
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="gigi" id="gigi_b" value="B" required>
                                  <label class="form-check-label" for="gigi_b">
                                    B (Baik)
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="gigi" id="gigi_c" value="C" required>
                                  <label class="form-check-label" for="gigi_c">
                                    C (Cukup)
                                  </label>
                                  <div class="invalid-feedback">
                                    Harap Masukan Data Gigi
                                  </div>
                                </div>
                              </div>
                            </div>

                            <hr>
                            <h5>
                              <center><strong>Kehadiran</strong></center>
                            </h5>

                            <div class="row">
                              <div class="col-md-4 mb-2">
                                <label for="sakit" class="form-label">Sakit</label>
                                <input type="text" class="form-control" name="sakit" id="sakit" placeholder="Masukan jumlah sakit">
                                <div class="invalid-feedback">
                                  Harap Masukan Jumlah Sakit
                                </div>
                              </div>

                              <div class="col-md-4 mb-2">
                                <label for="izin" class="form-label">Izin</label>
                                <input type="text" class="form-control" name="izin" id="izin" placeholder="Masukan jumlah Izin">
                                <div class="invalid-feedback">
                                  Harap Masukan Jumlah Izin
                                </div>
                              </div>

                              <div class="col-md-4 mb-2">
                                <label for="tanpa_keterangan" class="form-label">Tanpa Keterangan</label>
                                <input type="text" class="form-control" name="tanpa_keterangan" id="tanpa_keterangan" placeholder="Masukan jumlah Tanpa Keterangan">
                                <div class="invalid-feedback">
                                  Harap Masukan Jumlah Tanpa Keterangan
                                </div>
                              </div>
                            </div>

                            <div class="col-12">
                              <button class="btn bg-success text-white" type="submit" name="add_student_raports"><i class="bi bi-save"></i> Simpan</button>
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
                <!-- === end MODAL ADD RAPORT STUDENTS=== -->

              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

    </div>
  </div>

</div>


<!-- === MODAL EDIT RAPORT STUDENTS=== -->
<?php foreach ($studentRaports as $rowStudentRaports) : ?>
  <?php foreach ($students as $rowStudents) : ?>
    <?php if ($rowSession["level"] === $rowStudents["id_class"] or $rowSession["level"] === $levelSuperAdmin) : ?>
      <?php if ($rowStudentRaports["id_siswa"] === $rowStudents["id_siswa"]) : ?>
        <section>
          <div class="modal fade" id="modalEditStudentRaport<?= $rowStudentRaports["id"]; ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header no-bd">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Data <?= $pageTitle; ?> - <?= $rowStudents["nama_lengkap"]; ?> - <strong>Semester <?= $rowStudentRaports["semester"]; ?></strong></h1>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="d-grid gap-2 col-12 mx-auto">
                    <form action="" class="row g-3 needs-validation" method="post" enctype="multipart/form-data" novalidate>
                      <div class="col-md-12 mb-2" hidden>
                        <input type="text" hidden name="id" value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($rowStudentRaports["id"]))))))))); ?>">
                        <input type="text" hidden name="date_send" value="<?= $dateEncode; ?>">
                      </div>

                      <div class="row">
                        <div class="col-md-6 mb-2">
                          <label for="id_siswa" class="form-label">Siswa</label>
                          <select name="id_siswa" id="id_siswa" class="form-control" required>
                            <option value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($rowStudents["id_siswa"]))))))))); ?>">
                              <?= $rowStudents["nama_lengkap"]; ?>
                            </option>
                          </select>
                          <div class="invalid-feedback">
                            Harap Pilih Siswa
                          </div>
                        </div>

                        <div class="col-md-6 mb-2">
                          <label for="id_class" class="form-label">Kelas</label>
                          <select name="id_class" id="id_classs" class="form-control" required>
                            <?php if ($rowSession["level"] === "class_a" or $rowSession["level"] === $levelSuperAdmin) : ?>
                              <option value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode("class_a"))))))))); ?>">A</option>
                            <?php endif; ?>

                            <?php if ($rowSession["level"] === "class_b" or $rowSession["level"] === $levelSuperAdmin) : ?>
                              <option value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode("class_b"))))))))); ?>">B</option>
                            <?php endif; ?>

                          </select>
                          <div class="invalid-feedback">
                            Harap Pilih Kelas
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6 mb-2">
                          <label for="semester" class="form-label">Semester</label>
                          <select name="semester" id="semester" class="form-control" required>
                            <option value="<?= $rowStudentRaports["semester"]; ?>">
                              <?php if ($rowStudentRaports["semester"] === "I") : ?>
                                1
                              <?php endif; ?>
                              <?php if ($rowStudentRaports["semester"] === "II") : ?>
                                2
                              <?php endif; ?>
                            </option>
                            <option value="I">1</option>
                            <option value="II">2</option>
                          </select>
                          <div class="invalid-feedback">
                            Harap Pilih Semester
                          </div>
                        </div>

                        <div class="col-md-6 mb-2">
                          <label for="tahun_pelajaran" class="form-label">Tahun Pelajaran</label>
                          <select name="tahun_pelajaran" id="tahun_pelajaran" class="form-control" required>
                            <option value="<?= date("Y") - 1; ?> / <?= date("Y"); ?>">
                              <?= date("Y") - 1; ?> / <?= date("Y"); ?>
                            </option>
                          </select>
                          <div class="invalid-feedback">
                            Harap Pilih Tahun Pelajaran
                          </div>
                        </div>
                      </div>


                      <hr>
                      <h5>
                        <center><strong>Nilai Capaian Kompetensi Bidang Perkembangan</strong></center>
                      </h5>

                      <div class="row mt-3">
                        <div class="col-md-4 mb-2">
                          <label for="nilai_agama" class="form-label">Perkembangan Nilai Agama Dan Moral</label>
                          <input type="number" class="form-control" name="nilai_agama" id="nilai_agama" placeholder="0-100" maxlength="6" required value="<?= $rowStudentRaports["nilai_agama"]; ?>">
                          <div class="invalid-feedback">
                            Harap Masukan Perkembangan Nilai Agama Dan Moral
                          </div>
                        </div>

                        <div class="col-md-4 mb-2">
                          <label for="nilai_motorik" class="form-label">Perkembangan Motorik</label>
                          <input type="number" class="form-control" name="nilai_motorik" id="nilai_motorik" placeholder="0-100" maxlength="6" required value="<?= $rowStudentRaports["nilai_motorik"]; ?>">
                          <div class="invalid-feedback">
                            Harap Masukan Perkembangan Motorik
                          </div>
                        </div>

                        <div class="col-md-4 mb-2">
                          <label for="nilai_kognitif" class="form-label">Perkembangan Kognitif</label>
                          <input type="number" class="form-control" name="nilai_kognitif" id="nilai_kognitif" placeholder="0-100" maxlength="6" required value="<?= $rowStudentRaports["nilai_kognitif"]; ?>">
                          <div class="invalid-feedback">
                            Harap Masukan Perkembangan Kognitif
                          </div>
                        </div>
                      </div>

                      <div class="row mt-3">
                        <div class="col-md-4 mb-2">
                          <label for="nilai_bahasa" class="form-label">Perkembangan Bahasa</label>
                          <input type="number" class="form-control" name="nilai_bahasa" id="nilai_bahasa" placeholder="0-100" maxlength="6" required value="<?= $rowStudentRaports["nilai_bahasa"]; ?>">
                          <div class="invalid-feedback">
                            Harap Masukan Perkembangan Bahasa
                          </div>
                        </div>

                        <div class="col-md-4 mb-2">
                          <label for="nilai_sosial_emosional" class="form-label">Perkembangan Sosial - Emosional</label>
                          <input type="number" class="form-control" name="nilai_sosial_emosional" id="nilai_sosial_emosional" placeholder="0-100" maxlength="6" required value="<?= $rowStudentRaports["nilai_sosial_emosional"]; ?>">
                          <div class="invalid-feedback">
                            Harap Masukan Perkembangan Sosial - Emosional
                          </div>
                        </div>

                        <div class="col-md-4 mb-2">
                          <label for="nilai_seni" class="form-label">Perkembangan Seni</label>
                          <input type="number" class="form-control" name="nilai_seni" id="nilai_seni" placeholder="0-100" maxlength="6" required value="<?= $rowStudentRaports["nilai_seni"]; ?>">
                          <div class="invalid-feedback">
                            Harap Masukan Perkembangan Seni
                          </div>
                        </div>
                      </div>

                      <hr>
                      <h5>
                        <center><strong>Dalam Bidang Perkembangan</strong></center>
                      </h5>

                      <div class="row mt-3">
                        <div class="col-md-4 mb-2">
                          <label for="" class="form-label">Perkembangan Nilai Agama Dan Moral</label>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_agama" id="dalam_bid_perkembangan_nilai_agama_sb" value="SB" required <?php if ($rowStudentRaports["dalam_bid_perkembangan_nilai_agama"] === "SB") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="dalam_bid_perkembangan_nilai_agama_sb">
                              Sangat Baik
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_agama" id="dalam_bid_perkembangan_nilai_agama_b" value="B" required <?php if ($rowStudentRaports["dalam_bid_perkembangan_nilai_agama"] === "B") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="dalam_bid_perkembangan_nilai_agama_b">
                              Baik
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_agama" id="dalam_bid_perkembangan_nilai_agama_c" value="C" required <?php if ($rowStudentRaports["dalam_bid_perkembangan_nilai_agama"] === "C") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="dalam_bid_perkembangan_nilai_agama_c">
                              Cukup
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_agama" id="dalam_bid_perkembangan_nilai_agama_k" value="K" required <?php if ($rowStudentRaports["dalam_bid_perkembangan_nilai_agama"] === "K") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="dalam_bid_perkembangan_nilai_agama_k">
                              Kurang
                            </label>
                          </div>
                        </div>

                        <div class="col-md-4 mb-2">
                          <label for="" class="form-label">Perkembangan Motorik</label>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_motorik" id="dalam_bid_perkembangan_nilai_motorik_sb" value="SB" required <?php if ($rowStudentRaports["dalam_bid_perkembangan_nilai_motorik"] === "SB") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="dalam_bid_perkembangan_nilai_motorik_sb">
                              Sangat Baik
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_motorik" id="dalam_bid_perkembangan_nilai_motorik_b" value="B" required <?php if ($rowStudentRaports["dalam_bid_perkembangan_nilai_motorik"] === "B") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="dalam_bid_perkembangan_nilai_motorik_b">
                              Baik
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_motorik" id="dalam_bid_perkembangan_nilai_motorik_c" value="C" required <?php if ($rowStudentRaports["dalam_bid_perkembangan_nilai_motorik"] === "C") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="dalam_bid_perkembangan_nilai_motorik_c">
                              Cukup
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_motorik" id="dalam_bid_perkembangan_nilai_motorik_k" value="K" required <?php if ($rowStudentRaports["dalam_bid_perkembangan_nilai_motorik"] === "K") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="dalam_bid_perkembangan_nilai_motorik_k">
                              Kurang
                            </label>
                          </div>
                        </div>

                        <div class="col-md-4 mb-2">
                          <label for="" class="form-label">Perkembangan Kognitif</label>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_kognitif" id="dalam_bid_perkembangan_nilai_kognitif_sb" value="SB" required <?php if ($rowStudentRaports["dalam_bid_perkembangan_nilai_kognitif"] === "SB") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="dalam_bid_perkembangan_nilai_kognitif_sb">
                              Sangat Baik
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_kognitif" id="dalam_bid_perkembangan_nilai_kognitif_b" value="B" required <?php if ($rowStudentRaports["dalam_bid_perkembangan_nilai_kognitif"] === "B") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="dalam_bid_perkembangan_nilai_kognitif_b">
                              Baik
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_kognitif" id="dalam_bid_perkembangan_nilai_kognitif_c" value="C" required <?php if ($rowStudentRaports["dalam_bid_perkembangan_nilai_kognitif"] === "C") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="dalam_bid_perkembangan_nilai_kognitif_c">
                              Cukup
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_kognitif" id="dalam_bid_perkembangan_nilai_kognitif_k" value="K" required <?php if ($rowStudentRaports["dalam_bid_perkembangan_nilai_kognitif"] === "K") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="dalam_bid_perkembangan_nilai_kognitif_k">
                              Kurang
                            </label>
                          </div>
                        </div>
                      </div>


                      <div class="row mt-3">
                        <div class="col-md-4 mb-2">
                          <label for="" class="form-label">Perkembangan Bahasa</label>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_bahasa" id="dalam_bid_perkembangan_nilai_bahasa_sb" value="SB" required <?php if ($rowStudentRaports["dalam_bid_perkembangan_nilai_bahasa"] === "SB") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="dalam_bid_perkembangan_nilai_bahasa_sb">
                              Sangat Baik
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_bahasa" id="dalam_bid_perkembangan_nilai_bahasa_b" value="B" required <?php if ($rowStudentRaports["dalam_bid_perkembangan_nilai_bahasa"] === "B") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="dalam_bid_perkembangan_nilai_bahasa_b">
                              Baik
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_bahasa" id="dalam_bid_perkembangan_nilai_bahasa_c" value="C" required <?php if ($rowStudentRaports["dalam_bid_perkembangan_nilai_bahasa"] === "C") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="dalam_bid_perkembangan_nilai_bahasa_c">
                              Cukup
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_bahasa" id="dalam_bid_perkembangan_nilai_bahasa_k" value="K" required <?php if ($rowStudentRaports["dalam_bid_perkembangan_nilai_bahasa"] === "K") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="dalam_bid_perkembangan_nilai_bahasa_k">
                              Kurang
                            </label>
                          </div>
                        </div>

                        <div class="col-md-4 mb-2">
                          <label for="" class="form-label">Perkembangan Sosial - Emosional</label>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_sosial_emosional" id="dalam_bid_perkembangan_nilai_sosial_emosional_sb" value="SB" required <?php if ($rowStudentRaports["dalam_bid_perkembangan_nilai_sosial_emosional"] === "SB") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="dalam_bid_perkembangan_nilai_sosial_emosional_sb">
                              Sangat Baik
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_sosial_emosional" id="dalam_bid_perkembangan_nilai_sosial_emosional_b" value="B" required <?php if ($rowStudentRaports["dalam_bid_perkembangan_nilai_sosial_emosional"] === "B") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="dalam_bid_perkembangan_nilai_sosial_emosional_b">
                              Baik
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_sosial_emosional" id="dalam_bid_perkembangan_nilai_sosial_emosional_c" value="C" required <?php if ($rowStudentRaports["dalam_bid_perkembangan_nilai_sosial_emosional"] === "C") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="dalam_bid_perkembangan_nilai_sosial_emosional_c">
                              Cukup
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_sosial_emosional" id="dalam_bid_perkembangan_nilai_sosial_emosional_k" value="K" required <?php if ($rowStudentRaports["dalam_bid_perkembangan_nilai_sosial_emosional"] === "K") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="dalam_bid_perkembangan_nilai_sosial_emosional_k">
                              Kurang
                            </label>
                          </div>
                        </div>

                        <div class="col-md-4 mb-2">
                          <label for="" class="form-label">Perkembangan Seni</label>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_seni" id="dalam_bid_perkembangan_nilai_seni_sb" value="SB" required <?php if ($rowStudentRaports["dalam_bid_perkembangan_nilai_seni"] === "SB") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="dalam_bid_perkembangan_nilai_seni_sb">
                              Sangat Baik
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_seni" id="dalam_bid_perkembangan_nilai_seni_b" value="B" required <?php if ($rowStudentRaports["dalam_bid_perkembangan_nilai_seni"] === "B") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="dalam_bid_perkembangan_nilai_seni_b">
                              Baik
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_seni" id="dalam_bid_perkembangan_nilai_seni_c" value="C" required <?php if ($rowStudentRaports["dalam_bid_perkembangan_nilai_seni"] === "C") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="dalam_bid_perkembangan_nilai_seni_c">
                              Cukup
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="dalam_bid_perkembangan_nilai_seni" id="dalam_bid_perkembangan_nilai_seni_k" value="K" required <?php if ($rowStudentRaports["dalam_bid_perkembangan_nilai_seni"] === "K") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="dalam_bid_perkembangan_nilai_seni_k">
                              Kurang
                            </label>
                          </div>
                        </div>
                      </div>

                      <hr>
                      <h5>
                        <center><strong>Antar Bidang Perkembangan</strong></center>
                      </h5>

                      <div class="row mt-3">
                        <div class="col-md-12 mb-2">
                          <label for="antar_bid_perkembangan_description" class="form-label">Deskripsi</label>
                          <textarea name="antar_bid_perkembangan_description" id="antar_bid_perkembangan_description" class="form-control"><?= $rowStudentRaports["antar_bid_perkembangan_description"]; ?></textarea>
                          <div class="invalid-feedback">
                            Harap Masukan Deskripsi
                          </div>
                        </div>
                      </div>

                      <hr>
                      <h5>
                        <center><strong>Tinggi dan Berat Badan</strong></center>
                      </h5>

                      <div class="row mt-3">
                        <div class="col-md-4 mb-2">
                          <label for="tinggi_badan" class="form-label">Tinggi Badan</label>
                          <input type="number" class="form-control" name="tinggi_badan" id="tinggi_badan" placeholder="0 Cm" maxlength="6" value="<?= $rowStudentRaports["tinggi_badan"]; ?>">
                          <div class="invalid-feedback">
                            Harap Masukan Tinggi Badan
                          </div>
                        </div>

                        <div class="col-md-4 mb-2">
                          <label for="berat_badan" class="form-label">Berat Badan</label>
                          <input type="number" class="form-control" name="berat_badan" id="berat_badan" placeholder="0 Kg" maxlength="6" value="<?= $rowStudentRaports["berat_badan"]; ?>">
                          <div class="invalid-feedback">
                            Harap Masukan Berat Badan
                          </div>
                        </div>

                        <div class="col-md-4 mb-2">
                          <label for="lingkar_kepala" class="form-label">Lingkar Kepala</label>
                          <input type="number" class="form-control" name="lingkar_kepala" id="lingkar_kepala" placeholder="0 Cm" maxlength="6" value="<?= $rowStudentRaports["lingkar_kepala"]; ?>">
                          <div class="invalid-feedback">
                            Harap Lingkar Kepala
                          </div>
                        </div>
                      </div>


                      <hr>
                      <h5>
                        <center><strong>Kondisi Kesehatan</strong></center>
                      </h5>

                      <div class="row mt-3">
                        <div class="col-md-4 mb-2">
                          <label for="" class="form-label">Pendengaran</label>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="pendengaran" id="pendengaran_k" value="K" required <?php if ($rowStudentRaports["pendengaran"] === "K") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="pendengaran_k">
                              K (Kurang)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="pendengaran" id="pendengaran_b" value="B" required <?php if ($rowStudentRaports["pendengaran"] === "B") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="pendengaran_b">
                              B (Baik)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="pendengaran" id="pendengaran_c" value="C" required <?php if ($rowStudentRaports["pendengaran"] === "C") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="pendengaran_c">
                              C (Cukup)
                            </label>
                            <div class="invalid-feedback">
                              Harap Masukan Data Pendengaran
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4 mb-2">
                          <label for="" class="form-label">Penglihatan</label>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="penglihatan" id="penglihatan_k" value="K" required <?php if ($rowStudentRaports["penglihatan"] === "K") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="penglihatan_k">
                              K (Kurang)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="penglihatan" id="penglihatan_b" value="B" required <?php if ($rowStudentRaports["penglihatan"] === "B") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="penglihatan_b">
                              B (Baik)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="penglihatan" id="penglihatan_c" value="C" required <?php if ($rowStudentRaports["penglihatan"] === "C") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="penglihatan_c">
                              C (Cukup)
                            </label>
                            <div class="invalid-feedback">
                              Harap Masukan Data Penglihatan
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4 mb-2">
                          <label for="" class="form-label">Gigi</label>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="gigi" id="gigi_k" value="K" required <?php if ($rowStudentRaports["gigi"] === "K") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="gigi_k">
                              K (Kurang)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="gigi" id="gigi_b" value="B" required <?php if ($rowStudentRaports["gigi"] === "B") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="gigi_b">
                              B (Baik)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="gigi" id="gigi_c" value="C" required <?php if ($rowStudentRaports["gigi"] === "C") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="gigi_c">
                              C (Cukup)
                            </label>
                            <div class="invalid-feedback">
                              Harap Masukan Data Gigi
                            </div>
                          </div>
                        </div>
                      </div>

                      <hr>
                      <h5>
                        <center><strong>Kehadiran</strong></center>
                      </h5>

                      <div class="row">
                        <div class="col-md-4 mb-2">
                          <label for="sakit" class="form-label">Sakit</label>
                          <input type="text" class="form-control" name="sakit" id="sakit" placeholder="Masukan jumlah sakit" value="<?= $rowStudentRaports["sakit"]; ?>">
                          <div class="invalid-feedback">
                            Harap Masukan Jumlah Sakit
                          </div>
                        </div>

                        <div class="col-md-4 mb-2">
                          <label for="izin" class="form-label">Izin</label>
                          <input type="text" class="form-control" name="izin" id="izin" placeholder="Masukan jumlah Izin" value="<?= $rowStudentRaports["izin"]; ?>">
                          <div class="invalid-feedback">
                            Harap Masukan Jumlah Izin
                          </div>
                        </div>

                        <div class="col-md-4 mb-2">
                          <label for="tanpa_keterangan" class="form-label">Tanpa Keterangan</label>
                          <input type="text" class="form-control" name="tanpa_keterangan" id="tanpa_keterangan" placeholder="Masukan jumlah Tanpa Keterangan" value="<?= $rowStudentRaports["tanpa_keterangan"]; ?>">
                          <div class="invalid-feedback">
                            Harap Masukan Jumlah Tanpa Keterangan
                          </div>
                        </div>
                      </div>

                      <div class="col-12">
                        <button class="btn bg-success text-white" type="submit" name="edit_student_raports"><i class="bi bi-save"></i> Simpan</button>
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
      <?php endif; ?>
    <?php endif; ?>
  <?php endforeach; ?>
<?php endforeach; ?>
<!-- === end MODAL EDIT STUDENT RAPORTS=== -->

<!-- MODAL DELETE STUDENT RAPORTS -->
<?php foreach ($studentRaports as $rowStudentRaports) : ?>
  <?php foreach ($students as $rowStudents) : ?>
    <?php if ($rowSession["level"] === $rowStudents["id_class"] or $rowSession["level"] === $levelSuperAdmin) : ?>
      <?php if ($rowStudentRaports["id_siswa"] === $rowStudents["id_siswa"]) : ?>
        <section>
          <div class="modal fade" id="modalDeleteStudentRaport<?= $rowStudentRaports["id"]; ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header no-bd">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus?</h1>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Anda yakin ingin menghapus data
                  <strong><?= $rowStudents["nama_lengkap"]; ?></strong> untuk
                  <strong>Semester <?= $rowStudentRaports["semester"]; ?></strong> ?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-info" data-dismiss="modal">Batalkan</button>
                  <form action="" method="post">
                    <input type="text" name="id" hidden value="<?= $rowStudentRaports["id"]; ?>">
                    <button type="submit" name="del_student_raports" class="btn btn-danger">Hapus</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      <?php endif; ?>
    <?php endif; ?>
  <?php endforeach; ?>
<?php endforeach; ?>
<!-- end MODAL DELETE STUDENT RAPORTS -->




<!-- === CONDITION DATA STUDENT RAPORTS=== -->
<?php if (isset($_POST["add_student_raports"])) : ?>
  <?php if (addStudentRaports($_POST) > 0) : ?>
    <script>
      document.location.href = '<?= $url; ?>admin/dashboard/student-raports-add-success';
    </script>
  <?php endif; ?>
<?php endif; ?>

<?php if (isset($_POST["edit_student_raports"])) : ?>
  <?php if (editStudentRaports($_POST) > 0) : ?>
    <script>
      document.location.href = '<?= $url; ?>admin/dashboard/student-raports-edit-success';
    </script>
  <?php endif; ?>
<?php endif; ?>

<?php if (isset($_POST["del_student_raports"])) : ?>
  <?php if (deleteStudentRaports($_POST["id"])) : ?>
    <script>
      document.location.href = '<?= $url; ?>admin/dashboard/student-raports-deleted-success';
    </script>
  <?php endif; ?>
<?php endif; ?>