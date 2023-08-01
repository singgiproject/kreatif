<?php
error_reporting(1);
// =======================================
// CHECK ACTIVE MENU SIDEBAR
// =======================================

// MENU ACTIVE HOME
if ($_GET["pages"] === "home" or $_GET["pages"] === "welcome") {
  $homeActive1 = "active";
}

// MENU ACTIVE STUDENTS
if (
  $_GET["pages"] === "students" or
  $_GET["pages"] === "students-add-success" or
  $_GET["pages"] === "students-edit-success" or
  $_GET["pages"] === "students-deleted-success" or
  $_GET["pages"] === "student-raports" or
  $_GET["pages"] === "student-raports-add-success" or
  $_GET["pages"] === "student-raports-edit-success" or
  $_GET["pages"] === "student-raports-deleted-success"
) {
  $studentsActive = "active";
}

if (
  $_GET["pages"] === "students" or
  $_GET["pages"] === "students-add-success" or
  $_GET["pages"] === "students-edit-success" or
  $_GET["pages"] === "students-deleted-success"
) {
  $studentsDataActive = "active-sidebar-list";
}

if (
  $_GET["pages"] === "student-raports" or
  $_GET["pages"] === "student-raports-add-success" or
  $_GET["pages"] === "student-raports-edit-success" or
  $_GET["pages"] === "student-raports-deleted-success"
) {
  $medicalRecordsActive = "active-sidebar-list";
}

// MENU ACTIVE TEACHER
if (
  $_GET["pages"] === "teacher" or
  $_GET["pages"] === "teacher-add-success" or
  $_GET["pages"] === "teacher-edit-success" or
  $_GET["pages"] === "teacher-deleted-success"
) {
  $teacherActive = "active";
}


// MENU ACTIVE ACCOUNT
if (
  $_GET["pages"] === "profile"
) {
  $AccountActive = "active";
}

?>
<!-- Sidebar -->
<div class="sidebar">

  <div class="sidebar-background"></div>
  <div class="sidebar-wrapper scrollbar-inner">
    <div class="sidebar-content">
      <div class="user">
        <div class="avatar-sm float-left mr-2">
          <img src="<?= $url; ?>assets/img/users/<?= $rowSession["gambar"]; ?>" alt="..." class="avatar-img rounded-circle">
        </div>
        <div class="info">
          <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
            <span>
              <?= $rowSession["first_name"]; ?> <?= $rowSession["last_name"]; ?>
              <span class="user-level">
                <?php if ($levelSuperAdmin === $rowSession["level"]) : ?>
                  Super Admin
                <?php endif; ?>

                <?php if ($levelClassA === $rowSession["level"]) : ?>
                  Kelas A
                <?php endif; ?>

                <?php if ($levelClassB === $rowSession["level"]) : ?>
                  Kelas B
                <?php endif; ?>
              </span>
              <span class="caret"></span>
            </span>
          </a>
          <div class="clearfix"></div>

          <div class="collapse in" id="collapseExample">
            <ul class="nav">
              <li>
                <a href="profile">
                  <span class="link-collapse">Profil Saya</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <ul class="nav">
        <li class="nav-item <?= $homeActive1; ?>">
          <a href="home">
            <i class="fas fa-home"></i>
            <p>Dashboard</p>
            <?php if ($rowSession["level"] === $levelSuperAdmin) : ?>
              <span class="badge badge-count bg-info">5</span>
            <?php endif; ?>
            <?php if ($rowSession["level"] !== $levelSuperAdmin) : ?>
              <span class="badge badge-count bg-info">2</span>
            <?php endif; ?>
          </a>
        </li>
        <li class="nav-section">
          <span class="sidebar-mini-icon">
            <i class="fa fa-ellipsis-h"></i>
          </span>
        </li>
        <li class="nav-item <?= $studentsActive; ?>">
          <a data-toggle="collapse" href="#students">
            <i class="fas fa-users"></i>
            <p>Siswa</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="students">
            <ul class="nav nav-collapse">
              <li>
                <a href="students">
                  <span class="sub-item">Data Siswa</span>
                </a>
              </li>

              <li>
                <a href="student-raports">
                  <span class="sub-item">Laporan Siswa</span>
                </a>
              </li>

            </ul>
          </div>
        </li>
        <?php if ($rowSession["level"] === $levelSuperAdmin) : ?>
          <li class="nav-item <?= $teacherActive; ?>">
            <a data-toggle="collapse" href="#teacher">
              <i class="fas fa-users"></i>
              <p>Guru</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="teacher">
              <ul class="nav nav-collapse">
                <li>
                  <a href="teacher">
                    <span class="sub-item">Data Guru</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        <?php endif; ?>
        <li class="nav-section">
          <span class="sidebar-mini-icon">
            <i class="fa fa-ellipsis-h"></i>
          </span>
          <h4 class="text-section">Sistem</h4>
        </li>
        <li class="nav-item <?= $AccountActive; ?>">
          <a href="profile">
            <i class="fas fa-gear"></i>
            <p>Pengaturan Akun</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" data-toggle="modal" data-target="#modalLogout">
            <i class="fas fa-sign-out-alt"></i>
            <p>Keluar</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- End Sidebar -->