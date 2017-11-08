<?php
  include_once 'Shop_Controller.php';
  class SH_Spam //extends AnotherClass
  {
    /* Set Connection String Global */
    public $conn, $userID;
    /* Construct */
    public function __construct($conn, $userID)
    {
      $this->conn = $conn;
      $this->userID = $userID;
    }
    public function main()
    {

    }
    private function ActiveSalesDate()
    {
      $conn = $this->conn;
      $userID = $this->userID;
      /* Algorithm To check Last your sales was Active */
      $getActiveSales = "SELECT * FROM sh_spam WHERE userID='$userID'";
      $res = mysqli_query($conn, $getActiveSales);
      if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_array($res);
        $JD = $row['sh_joinedDate'];
        $QD = $row['sh_queriedDate'];
        $spam_mode = $row['sh_spaMode'];
      }
      $userSpamData = array(
        'joinedDate' => $JD,
        'queriedDate' => $QD,
        'mode' => $spam_mode
      );
      return $userSpamData;
    }
    private function checkDurability()
    {
      /* Get Array User Spam data */
      $userSpamData = $this->ActiveSalesDate();
      /* Split the Array in Chunks */

      /* Calculate If Durability is Over 5 Month */
    }
    private function markAsSpam()
    {
      /* Mark as Business as Spam */
    }
  }
?>
