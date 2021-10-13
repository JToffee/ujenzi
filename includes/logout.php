<?php
  require 'config.php';
  unset($_SESSION['login']);
  session_destroy();
  header("Location: ../pages/index.php");
 ?>
