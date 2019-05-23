<?php
    session_start();
    if($_GET['token'] === md5(session_id())){
      session_destroy();
      header('Location:login.php');
      exit();
    }
