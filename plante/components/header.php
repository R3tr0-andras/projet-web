<nav>
    <div>
        <a href="/"><img src="image\logo.png" alt="Logo" style="width: 64px; height: 64px;"></a>
    </div>
    <ul class="menu">
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
    </ul>
</nav>