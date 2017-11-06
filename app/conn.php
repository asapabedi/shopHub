<?php
  /* Grant Permission to App Core Files */
  include_once 'access.php';
  /* Define All Complex and Usuable Constants */
  include_once 'constants.php';
  /* Contains Arrays of Database informations */
  include_once 'database.php';
  /* Splitting Database Array to Needed Values */
  $db_host = $db['default']['hostname'];
  $username = $db['default']['username'];
  $password = $db['default']['password'];
  $db_name = $db['default']['database'];
  /* Connection Method */
  $conn = new mysqli($db_host, $username, $password, $db_name);
  /* Test for Connection */
  /*
  echo $res = ($conn) ? "Connected" : "Failed";
  */
?>
