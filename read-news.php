<?php
if(isset($_GET['page'])){
  $page_id = $_GET['page']; //some_value
}
$db = mysqli_connect("localhost", "root", "",'news') or die("Не получилось подсоединиться к MySQL серверу!");

$result = mysqli_query($db,"SELECT * FROM `news` WHERE id = $page_id ");
$row = mysqli_fetch_assoc($result);
printf("<h1>%s</h1>
<hr class='news__hr-dotted'>
<p class='news__text-news'>%s</p>
<hr class='news__hr-dotted'>",
$row["title"], $row["content"]);
?>


