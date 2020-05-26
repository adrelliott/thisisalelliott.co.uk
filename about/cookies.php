<?php include('../partials/header.php'); ?>

<body id="page-top">

  <?php include('../partials/nav-empty.php'); ?>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="home">
      <div class="w-100">
        <?php
          $output = file_get_contents('../../policies/cookies' . '.php');

          // Replace the placeholders
          echo str_replace("|*SITE_URL*|", "ThisIsAlElliott.co.uk", $output);
        ?>
      </div>
    </section>

    <hr class="m-0 mb-3">

    <?php include('../partials/copyright-and-links.php'); ?>

  </div>
<?php include('../partials/footer.php');