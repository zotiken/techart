<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>NEWS</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="news">
  <section class="news__wrapper">
      <h1>Новости</h1>
        <hr class="news__hr-dotted">
        <?php
        include "allnews.php";
        ?>
        <hr class="news__hr-dotted">

        <!-- <a href="allnews.php">Все новости>></a> -->
                <?php
        include "page-link.php";
        ?>
      </section>
    </body>
</html>

