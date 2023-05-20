<div class="page">
  <div class="contain">
    <p><?=$_SESSION['user']->userName ?></p>
    <p><?=$_SESSION['user']->userFname ?></p>
    <p><?=$_SESSION['user']->userPseudo ?></p>
    <p><?=$_SESSION['user']->userEmail ?></p>
    <p><?=$_SESSION['user']->userPassword ?></p>
    <div class="button-group">
      <a href="/modify"><button>modifier</button></a>
      <a href="/suppri"><button>supprimer</button></a>
    </div>
  </div>
</div>