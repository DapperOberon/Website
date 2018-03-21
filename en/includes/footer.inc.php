<div class="footer-container">
  <footer>
    <!-- Change to static 2018 later -->
    <div class="footer-group">
      <address>
        <h4><i class="fas fa-info-circle"></i> Contact Info</h4>
        <p>email: <a href="mailto:cameron@camerontsmith.tk">cameron@camerontsmith.tk</a></p>
        <p>instagram: <a href="https://instagram.com/camerosmit">instagram.com/camerosmit</a></p>
        <p>astrobin: <a href="http://astrobin.com/users/ShadowCamero">astrobin.com/users/ShadowCamero</a></p>
      </address>
      <div class='locale'>
        <h4><i class="fas fa-language fa-lg"></i> Language</h4>
        <div class="select-styled">
          <select id='locale' onchange="changeLocale()">
            <option id="deutsch" value="de">Deutsch</option>
            <option id="english" value="en">English</option>
          </select>
        </div>

      </div>
    </div>
    <p class="copyright">Copyright <i class="fas fa-copyright"></i>
      <?php
        $year = date("Y");
        if($year > 2018){
          echo "2018 - " . date("Y");
        }
        else {
          echo date("Y");
        }
      ?>
      Cameron Smith. All Rights Reserved. Created in Atom.
    </p>
  </footer>
</div>

<script type="text/javascript" src="http://localhost/camerontsmith.tk/scripts/locale.js"></script>
