<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>NEWS</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <section class="news__wrapper">
  <?php
    include "read-news.php";
  ?>
  <?php
  echo '<a href="/news.php">Все новости>></a>';
  ?>
  </section>
</body>
</html>
