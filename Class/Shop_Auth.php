<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  class SH_Auth
  {
    /* Set Connection String Global */
    global $conn;
    public function __construct($conn)
    {
      $this->conn = $conn;
    }
    public function HandleLogin($name, $code)
    {
      /* Set $conn to Database connection Access */
      $conn = $this->conn;
      /*  */
    }
  }
?>
