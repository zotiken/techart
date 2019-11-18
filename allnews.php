<?php
//script показа новостей
$db = mysqli_connect("localhost", "root", "",'news') or die("Не получилось подсоединиться к MySQL серверу!");
if ($db === false) {
  echo "неудалось";
  echo mysqli_connect_error();
  exit();
}
$offset = 0;
if(isset($_GET['offset'])){
  $offset = $_GET['offset']; //some_value
}
$result = mysqli_query($db,"SELECT *  FROM `news` ORDER BY `idate` DESC LIMIT 5 OFFSET $offset");
while ($row = mysqli_fetch_assoc($result)) {
    printf("<span class='news__date'>%s</span><a class='news__title-news' href='/view.php?page=%s'>%s</a><p class='news__text-news'>%s</p>",date('Y.m.d',$row['idate']),$row['id'], $row["title"], $row["announce"]);
}
mysqli_free_result($result);
?>
