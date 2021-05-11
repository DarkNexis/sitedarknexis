<?php
  $bg = array('1.mp4', '2.mp4' ); // видосы

  $i = rand(0, count($bg)-1); // генерим
  $selectedBg = "$bg[$i]"; // выводим
?>