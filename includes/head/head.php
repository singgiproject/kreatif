<?php
include("data-head.php");
?>

<head>
  <title><?= $title; ?></title>
  <!-- meta -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="keywords" content="<?= $keywords; ?>">
  <meta name="description" content="<?= $description; ?>">
  <meta name="author" content="<?= $author; ?>">
  <meta name="robots" content="<?= $robots; ?>" />
  <meta name="revisit-after" content="<?= $revisitAfter; ?>">
  <meta name="MSSmartTagsPreventParsing" content="<?= $MSSmartTagsPreventParsing; ?>">
  <meta NAME="Distribution" CONTENT="<?= $Distribution; ?>">
  <meta NAME="Rating" CONTENT="<?= $Rating; ?>">
  <meta name="theme-color" content="<?= $themeColor; ?>">

  <!-- Open Graph data -->
  <meta property="og:title" content="<?= $ogTitle; ?>">
  <meta property="og:type" content="<?= $ogType; ?>">
  <meta property="og:description" content="<?= $ogDescription; ?>">
  <meta property="og:locale" content="<?= $ogLocale; ?>">
  <meta property="og:url" content="<?= $ogUrl; ?>">
  <meta property="og:site_name" content="<?= $ogSiteName; ?>">
  <meta property="og:admins" content="<?= $ogAdmins; ?>" />

  <!-- dublin core -->
  <meta name="DC.title" content="<?= $DCTitle; ?>">
  <meta name="DC.identifier" content="<?= $DCIdentifier; ?>">
  <meta name="DC.description" content="<?= $DCDescription; ?>">
  <meta name="DC.subject" content="<?= $DCSubject; ?>">
  <meta name="DC.language" scheme="ISO639-1" content="id">

  <!-- Favicons -->
  <link href="<?= $icon; ?>" rel="icon">
  <link href="<?= $icon; ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="<?= $url; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= $url; ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= $url; ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= $url; ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= $url; ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= $url; ?>assets/css/style.css?id=v<?= time(); ?>" rel="stylesheet">

  <!-- Fontawesome -->
  <link href="<?= $url; ?>assets/fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="<?= $url; ?>assets/fontawesome/css/brands.css" rel="stylesheet">
  <link href="<?= $url; ?>assets/fontawesome/css/solid.css" rel="stylesheet">

</head>