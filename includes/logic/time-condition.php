<?php if (
  $_GET["time"] === "10:00" ||
  $_GET["time"] === "11:00"
) : ?>
  Pagi
<?php endif ?>

<?php if (
  $_GET["time"] === "12:00" ||
  $_GET["time"] === "13:00" ||
  $_GET["time"] === "14:00"
) : ?>
  Siang
<?php endif ?>

<?php if (
  $_GET["time"] === "15:00" ||
  $_GET["time"] === "16:00" ||
  $_GET["time"] === "17:00"
) : ?>
  Sore
<?php endif ?>

<?php if (
  $_GET["time"] === "18:00" ||
  $_GET["time"] === "19:00" ||
  $_GET["time"] === "20:00" ||
  $_GET["time"] === "21:00" ||
  $_GET["time"] === "22:00"
) : ?>
  Malam
<?php endif ?>