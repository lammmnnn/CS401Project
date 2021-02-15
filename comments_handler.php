<?php
  echo "<pre>" . print_r($_POST,1) . "</pre>";

  file_put_contents("posted_comments.txt",
   $_POST['name'] . "|" . $_POST['comment'] . "\n", FILE_APPEND | LOCK_EX);

  header('Location: comments.php');
  exit;
