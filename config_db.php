<?php
  
  $connect = mysqli_connect('localhost', 'root', '', 'users');

  if( !$connect ){
    echo 'Проблема с подключением к базе...';
    die;
  }
?>