<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cameron Smith</title>
    <?php include 'http://localhost/camerontsmith.tk/includes/head.inc.php'; ?>
  <body>
    <?php
      include ('../../database/db-config.php');

      $id = $_GET['id'];
      // Ensure ID is safe

      $sql = "SELECT * FROM astro_gallery_de WHERE id = $id";
      $result = $db->query($sql);

      if (!$result) {
          trigger_error('Invalid query: ' . $db->error);
      }

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $imageURL = 'http://localhost/camerontsmith.tk/images/astro-gallery/'. $row['imageURL'];
            $title = $row['title'];
            $description = $row['description'];
            $telescope_lens = $row['telescope-lens'];
            $camera = $row['camera'];
            $mount = $row['mount'];
            $software = $row['software'];
            $accessory = $row['accessory'];
            $resolution = $row['resolution'];
            $date = $row['date'];
            $lights = $row['lights'];
            $darks = $row['darks'];
            $flats = $row['flats'];
            $bias = $row['bias'];
        }
      } else {
          echo "0 results";
      }

      $db->close();
    ?>


    <!-- Content goes here -->
    <?php include '../includes/header.inc.php'; ?>

    <main class="page gallery-file">

      <figure>
        <img src="<?php echo $imageURL; ?>" />
        <figcaption>
          <h1><?php echo $title; ?></h1>
        </figcaption>
      </figure>
      <div class="gallery-file-content">
        <aside class="gallery-file-details">
          <div class="gallery-file-details-holder">
            <h3>Einzelheiten</h3>
            <ul>
              <li><span class="bold">Abbildungsfernrohr oder Objektiv:</span> <?php echo $telescope_lens; ?></li>
              <li><span class="bold">Bildgebende Kamera:</span> <?php echo $camera; ?></li>
              <li><span class="bold">Montieren:</span> <?php echo $mount; ?></li>
              <li><span class="bold">Software:</span> <?php echo $software; ?></li>
              <li><span class="bold">Zubehörteil:</span> <?php echo $accessory; ?></li>
              <li><span class="bold">Auflösung:</span> <?php echo $resolution; ?></li>
              <li><span class="bold">Datum:</span> <?php echo $date; ?></li>
              <li><span class="bold">Beleuchtung:</span> <?php echo $lights; ?></li>
              <li><span class="bold">Dunkelheit:</span> <?php echo $darks; ?></li>
              <li><span class="bold">Wohnungen:</span> <?php echo $flats; ?></li>
              <li><span class="bold">Vorspannen:</span> <?php echo $bias; ?></li>
            </ul>
          </div>

        </aside>
        <div class="gallery-file-description">
          <h3>Beschreibung</h3>
          <p><?php echo $description; ?></p>
        </div>
        <div id="disqus_thread" class="disqus"></div>
        <script>

          /**
          *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
          *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
          /*
          var disqus_config = function () {
          this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
          this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
          };
          */
          (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://camerontsmith.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
          })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

      </div>
    </main>

    <?php include '../includes/footer.inc.php'; ?>

  </body>
</html>
