<?php
  define('BASEPATH', TRUE);
  define('ENVIRONMENT', 'development');
  include_once 'config/constants.php';
  include_once 'config/database.php';
  $db_host = $db['default']['hostname'];
  $username = $db['default']['username'];
  $password = $db['default']['password'];
  $db_name = $db['default']['database'];
  $conn = mysqli_connect($db_host, $username, $password);
  mysqli_select_db($conn, $db_name);
?>
