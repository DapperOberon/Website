<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cameron Smith</title>
    <?php include 'http://localhost/camerontsmith.tk/includes/head.inc.php'; ?>
  </head>
  <body>
    <?php
      include ('../../database/db-config.php');

      $id = $_GET['id'];
      // Ensure ID is safe

      $sql = "SELECT * FROM gallery_en WHERE id = $id";
      $result = $db->query($sql);

      if (!$result) {
          trigger_error('Invalid query: ' . $db->error);
      }

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $imageURL = 'http://localhost/camerontsmith.tk/images/gallery/'. $row['imageURL'];
            $title = $row['title'];
            $description = $row['description'];
            $date = $row['date'];
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
            <h3>Details</h3>
            <ul>
              <li><span class="bold">Date:</span> <?php echo $date; ?></li>
            </ul>
          </div>

        </aside>
        <div class="gallery-file-description">
          <h3>Description</h3>
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
