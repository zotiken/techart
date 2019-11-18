<?php
  $news_count = mysqli_query($db ,"SELECT COUNT('id') AS 'news_numbers' FROM `news`");
  $news_count_result = mysqli_fetch_assoc($news_count);
  // echo   '<p> Всего статей' . $news_count_result['news_numbers'] . '</p>' ;
?>

<?php
mysqli_close($db);
?>
<?php
for ($i=0; $i < $news_count_result['news_numbers']/5 ; $i++) { 
    echo '<a class="news__page-link" href="news.php?offset=' . $i*5 . '">' .( $i+1 ). '</a>';
}
?>
