<nav>
  <div class="navbar">
    <div class="container nav-container">
      <input class="checkbox" type="checkbox" name="" id="menu-toggle" />
      <div class="hamburger-lines">
        <span class="line line1"></span>
        <span class="line line2"></span>
        <span class="line line3"></span>
      </div>
      <div class="logo">
        <a href="/"><img src="image\logo.png" alt="Logo" style="width: 64px; height: 64px;"></a>
      </div>
      <!--
        <div class="search-bar">
        <form action="template\item\recherche.php" method="GET">
            <input type="text" name="search" placeholder="Rechercher" />
            <button type="submit">Go</button>
        </form>
      </div>
      -->
      <div class="menu-items">
        <li>
          <?php if (isset($_SESSION['user'])): ?>
            <a href="profil">Page profil</a>
          <?php endif ?>
        </li>
        <li>
          <?php if (isset($_SESSION['user'])): ?>
            <a href="deconnexion">Deconnexion</a>
          <?php else: ?>
            <a href="connexion">Connexion</a>
          <?php endif ?>
        </li>
        <li>
          <?php if (isset($_SESSION['user'])): ?>
            <a href="/ajouterplante">ajouter plante</a>
          <?php endif ?>
        </li>
        <li>
          <?php if (isset($_SESSION['user'])): ?>
            <a href="/mesplante" class="colorWhite link"> mes jeux</a>
          <?php endif ?>
        </li>
      </div>
    </div>
  </div>
</nav>
<script src="nav.js"></script>