<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-http-equiv="x-us-compatible" content="ie=edge" />
    <title>Cameron Smith</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--<link rel="manifest" href="site.webmanifest" />-->
    <!--<link rel="apple-touch-icon" href="icon.png" />-->
    <link rel="icon" href="http://localhost/camerontsmith.tk/favicon.ico" />

    <link rel="stylesheet" href="http://localhost/camerontsmith.tk/css/reset.css" />
    <link rel="stylesheet" href="http://localhost/camerontsmith.tk/css/styles.css" />

    <!-- Third party resources -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
  </head>
  <body>
    <!--[if lte IE 9]
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    <script src="http://locahost/camerontsmith.tk/scripts/modernizr-custom.js"></script>




    <!-- Content goes here -->
    <?php include 'http://localhost/camerontsmith.tk/en/includes/header.inc.php'; ?>

    <main class="page">
      <div class="gallery">
        <?php

          include ('../../database/db-config.php');

          $sql = "SELECT id, imageThumbURL, title FROM astro_gallery_en";
          $result = $db->query($sql);

          if (!$result) {
              trigger_error('Invalid query: ' . $db->error);
          }

          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                $id = $row['id'];
                $imageThumbURL = 'http://localhost/camerontsmith.tk/images/astro-gallery/thumbs/' . $row['imageThumbURL'];
                $title = $row['title'];
          ?>
        <a href="http://localhost/camerontsmith.tk/en/astro-gallery/file.php?<?php echo 'id=' . $id; ?>">
          <figure>
            <img src="<?php echo $imageThumbURL; ?>" />
            <figcaption class="image-overlay">
              <p><?php echo $title; ?></p>
            </figcaption>
          </figure>
        </a>
      <?php }
        }

        $db->close();
      ?>
      </div>
    </main>

    <?php include 'http://localhost/camerontsmith.tk/en/includes/footer.inc.php'; ?>

  </body>
</html>
