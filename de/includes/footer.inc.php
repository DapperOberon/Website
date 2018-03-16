<div class="footer-container">
  <footer>
    <!-- Change to static 2018 later -->
    <div class="footer-group">
      <address>
        <h4>Kontaktinformation </h4>
        <p>email: <a href="mailto:cameron@camerontsmith.tk">cameron@camerontsmith.tk</a></p>
        <p>instagram: <a href="https://instagram.com/camerosmit">instagram.com/camerosmit</a></p>
        <p>astrobin: <a href="http://astrobin.com/users/ShadowCamero">astrobin.com/users/ShadowCamero</a></p>
      </address>
      <div class='locale'>
        <h4><i class="fas fa-language fa-lg"></i> Sprache</h4>
        <select id='locale' onchange="changeLocale()">
          <option id="deutsch" value="de">Deutsch</option>
          <option id="english" value="en">English</option>
        </select>
      </div>
    </div>
    <p class="copyright">Copyright &copy;
      <?php
        $year = date("Y");
        if($year > 2018){
          echo "2018 - " . date("Y");
        }
        else {
          echo date("Y");
        }
      ?>
      Cameron Smith. Alle Rechte vorbehalten. Erstellt in Atom.
    </p>
  </footer>
</div>
<script type="text/javascript" src="http://localhost/camerontsmith.tk/scripts/locale.js"></script>
