<?php if ($_GET["pages"] === "welcome") : ?>
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50  align-items-center justify-content-center load-welcome">
    <svg xmlns="http://www.w3.org/2000/svg" class="loading-animation" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto;/* background: rgb(241, 242, 243); */display: block;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
      <rect fill="#0094de" x="15" y="15" width="30" height="30" rx="3" ry="3">
        <animate attributeName="x" dur="2s" repeatCount="indefinite" keyTimes="0;0.083;0.25;0.333;0.5;0.583;0.75;0.833;1" values="15;55;55;55;55;15;15;15;15" begin="-1.8333333333333333s"></animate>
        <animate attributeName="y" dur="2s" repeatCount="indefinite" keyTimes="0;0.083;0.25;0.333;0.5;0.583;0.75;0.833;1" values="15;55;55;55;55;15;15;15;15" begin="-1.3333333333333333s"></animate>
      </rect>
      <rect fill="#fff500" x="15" y="15" width="30" height="30" rx="3" ry="3">
        <animate attributeName="x" dur="2s" repeatCount="indefinite" keyTimes="0;0.083;0.25;0.333;0.5;0.583;0.75;0.833;1" values="15;55;55;55;55;15;15;15;15" begin="-1.1666666666666667s"></animate>
        <animate attributeName="y" dur="2s" repeatCount="indefinite" keyTimes="0;0.083;0.25;0.333;0.5;0.583;0.75;0.833;1" values="15;55;55;55;55;15;15;15;15" begin="-0.6666666666666666s"></animate>
      </rect>
      <rect fill="#000000" x="15" y="15" width="30" height="30" rx="3" ry="3">
        <animate attributeName="x" dur="2s" repeatCount="indefinite" keyTimes="0;0.083;0.25;0.333;0.5;0.583;0.75;0.833;1" values="15;55;55;55;55;15;15;15;15" begin="-0.5s"></animate>
        <animate attributeName="y" dur="2s" repeatCount="indefinite" keyTimes="0;0.083;0.25;0.333;0.5;0.583;0.75;0.833;1" values="15;55;55;55;55;15;15;15;15" begin="0s"></animate>
      </rect>
    </svg>
    <p>Dashboard - <?= $title; ?></p>
  </div>
  <!-- Spinner End -->
<?php endif; ?>


<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Dashboard - Hai <?= $rowSession["first_name"]; ?>! Kamu menggunakan UI Aplikasi versi 2.0.0 (Terbaru)</h4>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="card card-stats card-round">
            <div class="card-body ">
              <div class="row align-items-center">
                <div class="col-icon">
                  <div class="icon-big text-center icon-primary bubble-shadow-small">
                    <i class="fas fa-users"></i>
                  </div>
                </div>
                <div class="col col-stats ml-3 ml-sm-0">
                  <div class="numbers">
                    <p class="card-category">Siswa</p>
                    <h4 class="card-title">
                      <?php if ($rowSession["level"] === "superadmin") : ?>
                        <?php echo $resultStudents["countStudents"]; ?>
                      <?php endif; ?>

                      <?php if ($rowSession["level"] === "class_a") : ?>
                        <?php echo $resultStudentsA["countStudentsA"]; ?>
                      <?php endif; ?>

                      <?php if ($rowSession["level"] === "class_b") : ?>
                        <?php echo $resultStudentsB["countStudentsB"]; ?>
                      <?php endif; ?>
                    </h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="card card-stats card-round">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-icon">
                  <div class="icon-big text-center icon-info bubble-shadow-small">
                    <i class="bi bi-filetype-pdf"></i>
                  </div>
                </div>
                <div class="col col-stats ml-3 ml-sm-0">
                  <div class="numbers">
                    <p class="card-category">Laporan Siswa</p>
                    <h4 class="card-title">
                      <?php if ($rowSession["level"] === "superadmin") : ?>
                        <?php echo $resultStudentRaports["countStudentRaports"]; ?>
                      <?php endif; ?>

                      <?php if ($rowSession["level"] === "class_a") : ?>
                        <?= $resultStudentRaportsA["countStudentRaportsA"]; ?>
                      <?php endif; ?>

                      <?php if ($rowSession["level"] === "class_b") : ?>
                        <?= $resultStudentRaportsB["countStudentRaportsB"]; ?>
                      <?php endif; ?>
                    </h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php if ($rowSession["level"] === $levelSuperAdmin) : ?>
          <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-icon">
                    <div class="icon-big text-center icon-success bubble-shadow-small">
                      <i class="bi bi-person"></i>
                    </div>
                  </div>
                  <div class="col col-stats ml-3 ml-sm-0">
                    <div class="numbers">
                      <p class="card-category">Akun</p>
                      <h4 class="card-title"><?php echo $resultAccount["countAccount"]; ?></h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>

        <?php if ($rowSession["level"] === $levelSuperAdmin) : ?>
          <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-icon">
                    <div class="icon-big text-center icon-secondary bubble-shadow-small">
                      <i class="bi bi-eye"></i>
                    </div>
                  </div>
                  <div class="col col-stats ml-3 ml-sm-0">
                    <div class="numbers">
                      <p class="card-category">Pengunjung Website</p>
                      <h4 class="card-title"><?php echo $resultVisitor["countVisitor"]; ?></h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>

      </div>

      <?php if ($rowSession["level"] === $levelSuperAdmin) : ?>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <h4>Data Pengunjung Website</h4>
                <div class="table-responsive">
                  <table id="add-row" class="display table table-striped table-hover">
                    <thead class="bg-primary">
                      <tr>
                        <th class="text-white">Alamat IP</th>
                        <th class="text-white">Waktu Akses</th>
                        <th style="width: 10%" class="text-white">Lokasi</th>
                      </tr>
                    </thead>
                    <tfoot class="bg-primary">
                      <tr>
                        <th class="text-white">Alamat IP</th>
                        <th class="text-white">Waktu Akses</th>
                        <th class="text-white">Lokasi</th>
                      </tr>
                    </tfoot>
                    <tbody>

                      <?php foreach ($visitor as $row) : ?>
                        <tr>
                          <td><?= $row["ip_visitor"]; ?></td>
                          <td><?= time_ago($row["date"]); ?></td>
                          <td>
                            <div class="form-button-action">
                              <a href="https://whatismyipaddress.com/ip/<?= $row["ip_visitor"]; ?>" class="badge btn bg-info" target="_BLANK"><i class="bi bi-geo-alt"></i> Lokasi</a>
                            </div>
                          </td>
                        </tr>
                      <?php endforeach; ?>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

    </div>

    <?php if ($rowSession["level"] === $levelSuperAdmin) : ?>
      <!-- Custom template | don't include it in your project! -->
      <div class="custom-template">
        <div class="title">Pengaturan Tampilan</div>
        <div class="custom-content">
          <div class="switcher">
            <div class="switch-block">
              <h4>Topbar</h4>
              <div class="btnSwitch">
                <button type="button" class="changeMainHeaderColor" data-color="blue"></button>
                <button type="button" class="selected changeMainHeaderColor" data-color="purple"></button>
                <button type="button" class="changeMainHeaderColor" data-color="light-blue"></button>
                <button type="button" class="changeMainHeaderColor" data-color="green"></button>
                <button type="button" class="changeMainHeaderColor" data-color="orange"></button>
                <button type="button" class="changeMainHeaderColor" data-color="red"></button>
              </div>
            </div>
            <div class="switch-block">
              <h4>Background</h4>
              <div class="btnSwitch">
                <button type="button" class="changeBackgroundColor" data-color="bg2"></button>
                <button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
                <button type="button" class="changeBackgroundColor" data-color="bg3"></button>
              </div>
            </div>
          </div>
        </div>
        <div class="custom-toggle">
          <i class="bi bi-gear"></i>
        </div>
      </div>
      <!-- End Custom template -->
    <?php endif; ?>

  </div>