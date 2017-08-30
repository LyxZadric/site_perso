<div class="fact">
  <div id="fact7" class="fact_text">
      <p>Je déteste la purée</p>
  </div>
  <div id="fact8" class="fact_text">
      <p>...</p>
  </div>
</div>
</main>

<!-- FOOTER CONTAINER -->
<footer>
<div class="container-footer">
<!-- CONTACT ------>
<div class="container-contact" id="contact">

  <h2>Contact</h2>

  <p> Intéréssé par mon profil, envie d'en savoir plus et de me rencontrer ? <br>
  C'est par ici ! </p>

  <a href="#" id="mail">Me contacter !</a>


    <div class="form" id="form">

      <!-- affiche les erreurs de soumission de formulaire -->
      <?php if(isset($_SESSION['errors'])): ?>
        <div class="alert">
          <?= implode('<br>', $_SESSION['errors']);?>
        </div>
      <?php unset($_SESSION['errors']); endif;?>
      <!-- affiche le succes de l'envoi du mail-->
      <?php if(isset($_SESSION['success'])): ?>
        <div class="alert">
          Votre e-mail à bien été envoyé
        </div>
      <?php unset($_SESSION['success']); endif;?>

      <form action="contact.php" method="post">
        <input type="text" name="nom" placeholder="Nom" autocomplete="off"
          value="<?= isset($_SESSION['inputs']['nom']) ? $_SESSION['inputs']['nom'] : ''?>">
        <input type="text" name="mail" placeholder="E-mail" autocomplete="off"
          value="<?= isset($_SESSION['inputs']['mail']) ? $_SESSION['inputs']['mail'] : ''?>">
        <input type="text" name="sujet" placeholder="Sujet" autocomplete="off"
          value="<?= isset($_SESSION['inputs']['sujet']) ? $_SESSION['inputs']['sujet'] : ''?>">

        <textarea name="message" rows="8" cols="80" placeholder="Message">
          <?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''?>
          </textarea>
        <input type="submit" name="submit" value="Envoyer" id="submit">
      </form>
    </div>
  <p>06 21 76 12 67 <br><br><br>
  175 Rue de Belle Epine - 35510 Cesson Sévigné</p>

  <div class="reseaux_sociaux">
    <a href="https://twitter.com/de_boodhoo"><img src="elements/twitter.png" alt="twitter"></a>
    <a href="https://www.linkedin.com/in/deborah-boodhoo/"><img src="elements/linkedin.png" alt="linkedin"></a>
    <a href="https://github.com/LyxZadric"><img src="elements/Git-hub.png" alt="git-hub"></a>
    <a href="https://codepen.io/LyxZadric/"><img src="elements/Codepen.png" alt="code pen"></a>
  </div>

</div>

<!-- FOOTER ------>
<div class="footer">
  <div class="container-footer">
    <div class="container">
    <p>Copyright 2017 - BOODHOO Déborah <br>
    Développement Web | Web Design</p>

    <a href="#"><img src="elements/logo_min.png" alt="logo"></a>

    <div class="reseaux_sociaux">
      <a href="https://twitter.com/de_boodhoo"><img src="elements/twitter.png" alt="twitter"></a>
      <a href="https://www.linkedin.com/in/deborah-boodhoo/"><img src="elements/linkedin.png" alt="linkedin"></a>
      <a href="https://github.com/LyxZadric"><img src="elements/Git-hub.png" alt="git-hub"></a>
      <a href="https://codepen.io/LyxZadric/"><img src="elements/Codepen.png" alt="code pen"></a>
    </div>
    </div>
  </div>
</div>
</div>
</footer>

</body>
<!-- jquery -->
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<!-- slick -->
<script type="text/javascript" src="slick/slick/slick.min.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>
</html>
<?php
  unset($_SESSION['inputs']);
  unset($_SESSION['success']);
  unset($_SESSION['errors']);
 ?>
