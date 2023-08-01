<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location:../../auth/login");
  exit;
}
// CONNECT FUNCTIONS
require('../../../funct/functions.php');

// SESSION USER LOGIN
if (isset($_SESSION["login"])) {

  $userSession = $_SESSION["username"];
  $resultSession = $conn->query("SELECT * FROM tb_users WHERE username = '$userSession' ");
  $rowSession = mysqli_fetch_assoc($resultSession);
  $idSession = $rowSession["id"];
}

// URL DASHBOARD CODE ACCESS
// $urlDashboardCodeAccess = "dashboard#code_access";

// CHECK EMPTY ACCOUNT
if (empty($rowSession["id"])) {
  header("Location:../../auth/logout");
  exit;
}

// === INCLUDES ===
include("../../../includes/account/level.php");
include("../../../includes/table/query.php");
include("../../../includes/visitor/counter.php");
include("../../../includes/count/counts.php");
include("../../../includes/logic/time-ago.php");
include("../../../includes/logic/shuffle.php");
include("../../../includes/head/data-head.php");
include("../../../includes/date/date-id.php");
include("../../../includes/date/date.php");

// Page Title
if ($_GET["pages"] === "home" or $_GET["pages"] === "welcome") {
  $pageTitle = "Dashboard";
}
if (
  $_GET["pages"] === "students" or
  $_GET["pages"] === "students-add-success" or
  $_GET["pages"] === "students-edit-success" or
  $_GET["pages"] === "students-deleted-success"
) {
  $pageTitle = "Data Siswa";
}
if (
  $_GET["pages"] === "student-raports" or
  $_GET["pages"] === "student-raports-add-success" or
  $_GET["pages"] === "student-raports-edit-success" or
  $_GET["pages"] === "student-raports-deleted-success" or
  $_GET["pages"] === "student-raports-print"
) {
  $pageTitle = "Laporan Siswa";
}
if ($_GET["pages"] === "profile") {
  $pageTitle = "Profil";
}
if (
  $_GET["pages"] === "teacher" or
  $_GET["pages"] === "teacher-add-success" or
  $_GET["pages"] === "teacher-edit-success" or
  $_GET["pages"] === "teacher-deleted-success"
) {
  $pageTitle = "Data Guru";
}
// Checked Url Manipulation
if (
  $_GET["pages"] !== "home" and
  $_GET["pages"] !== "welcome" and
  $_GET["pages"] !== "students" and
  $_GET["pages"] !== "students-add-success" and
  $_GET["pages"] !== "students-edit-success" and
  $_GET["pages"] !== "students-deleted-success" and
  $_GET["pages"] !== "student-raports" and
  $_GET["pages"] !== "student-raports-add-success" and
  $_GET["pages"] !== "student-raports-edit-success" and
  $_GET["pages"] !== "student-raports-deleted-success" and
  $_GET["pages"] !== "student-raports-print" and
  $_GET["pages"] !== "teacher" and
  $_GET["pages"] !== "teacher-add-success" and
  $_GET["pages"] !== "teacher-edit-success" and
  $_GET["pages"] !== "teacher-deleted-success" and
  $_GET["pages"] !== "profile"
) {
  header("Location:home");
  exit;
}


?>
<!DOCTYPE html>
<html lang="en">

<?php include("../../includes/templates/head.php"); ?>

<body>


  <div class="wrapper">

    <!-- ======= Header ======= -->
    <?php include("../templates/header.php"); ?>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php include("../templates/sidebar.php"); ?>
    <!-- End Sidebar-->

    <?php if ($_GET["pages"] === "home" or $_GET["pages"] === "welcome") : ?>
      <!-- ======= Dashboard ======= -->
      <?php include("../templates/dashboard.php"); ?>
      <!-- End Dashboard -->
    <?php endif; ?>

    <?php if (
      $_GET["pages"] === "students" or
      $_GET["pages"] === "students-add-success" or
      $_GET["pages"] === "students-edit-success" or
      $_GET["pages"] === "students-deleted-success"
    ) : ?>
      <!-- ======= students ======= -->
      <?php include("../templates/students.php"); ?>
      <!-- End students -->
    <?php endif; ?>

    <?php if (
      $_GET["pages"] === "student-raports" or
      $_GET["pages"] === "student-raports-add-success" or
      $_GET["pages"] === "student-raports-edit-success" or
      $_GET["pages"] === "student-raports-deleted-success"
    ) : ?>
      <!-- ======= Student Raports ======= -->
      <?php include("../templates/student-raports.php"); ?>
      <!-- End Student Raports -->
    <?php endif; ?>

    <?php if (
      $_GET["pages"] === "teacher" or
      $_GET["pages"] === "teacher-add-success" or
      $_GET["pages"] === "teacher-edit-success" or
      $_GET["pages"] === "teacher-deleted-success"
    ) : ?>
      <!-- ======= teacher ======= -->
      <?php include("../templates/teacher.php"); ?>
      <!-- End teacher -->
    <?php endif; ?>

    <?php if ($_GET["pages"] === "profile") : ?>
      <!-- ======= Profile ======= -->
      <?php include("../templates/profile.php"); ?>
      <!-- End Profile -->
    <?php endif; ?>

    <!-- ======= Footer ======= -->
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <?php include("../templates/modals.php"); ?>

    <?php include("../templates/javascripts.php"); ?>

  </div>

  <!-- Template Main JS File Loading Animation-->
  <script src="<?= $url; ?>assets/js/welcome-loading.js"></script>

</body>

</html>