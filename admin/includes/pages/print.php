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

// Check Empty Data POST
if (!isset($_POST["id"])) {
  $pageStudentRaports = $url . "admin/dashboard/student-raports";
  header("Location:$pageStudentRaports");
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Print</title>

  <!-- PRINT CSS -->
  <link rel="stylesheet" href="<?= $url; ?>admin/assets/css/print.css?v=<?= time(); ?>" class="css">
</head>

<body>

  <?php if ($_GET["print"] === "raports-print") : ?>
    <!-- ======= Print ======= -->
    <?php include("../templates/raports-print.php"); ?>
    <!-- End Print -->
  <?php endif; ?>

  <?php include("../templates/javascripts.php"); ?>

</body>

</html>