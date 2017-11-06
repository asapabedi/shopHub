<?php
  session_start();
  include_once 'app/conn.php';
  include_once 'app/constants.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> ShopHub Software - Grow your Online Business </title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL . "asset/img/shophub-bag.png" ?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL . "asset/plugin/semantic/semantic.css" ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . "asset/css/structure.css" ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . "asset/css/online.css" ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . "asset/css/pace.css" ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . "asset/css/w3.css" ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . "asset/css/ui.css" ?>">
    <script src="<?php echo BASE_URL . "asset/js/jquery.min.js" ?>"></script>
  </head>
  <body>
    <header>
      <div class="__headerPad">
        <div class="w3-col s12 m2">
          <img src="<?php echo BASE_URL . "asset/img/shophub-bag.png" ?>" alt="ShopHub Logo" class="__logo">
        </div>
        <div class="w3-col s12 m6 __menuUrl">
          <a href="#"> Ways to Sell </a>
          <a href="#"> Pricing </a>
          <a href="#"> Blogs </a>
          <a href="#"> Resources </a>
        </div>
        <div class="w3-col s12 m4 __menuUrl">
          <a href="#"> Help Center </a>
          <a href="#"> Log in </a>
          <button type="submit" class="__btn-Sm"> Get Started </button>
        </div>
      </div>
    </header>

    <section class="__banner w3-padding-48">
      <div class="__bannerOverview w3-center">
        <h2> ShopHub platform was made for you. </h2>
        <p> Whether you sell online, on social media, in store, or out of the trunk of your car, ShopHub has you covered. </p>
        <form class="__form" action="" method="post">
          <input type="email" name="name" placeholder="Enter your email address">
          <button type="submit" class="__btn-Md"> Get Started </button>
          <p class="__smnote">Try ShopHub free for 14 days. No risk, and no credit card required.</p>
        </form>
      </div>
    </section>

    <section class="__carousel" style="background-image: url('<?php echo BASE_URL . "asset/img/banner.jpg" ?>')">

    </section>

    <!-- Script Languages -->
    <script src="<?php echo BASE_URL . "asset/js/landing.ja" ?>"></script>
    <script src="<?php echo BASE_URL . "asset/js/pace.min.js" ?>"></script>
    <script src="<?php echo BASE_URL . "asset/js/online.min.js" ?>"></script>
    <script src="<?php echo BASE_URL . "asset/plugin/semantic/semantic.min.js" ?>"></script>
  </body>
</html>
