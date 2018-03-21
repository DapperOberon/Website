<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cameron Smith</title>
    <?php include 'http://localhost/camerontsmith.tk/includes/head.inc.php'; ?>
  </head>
  <body>
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
