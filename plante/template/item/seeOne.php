<div class="container">
  <div class="text-container">
    <h1><?= $item->itemNom ?></h1>
    <br>
    <div>
      <p>Prix: <?= $item->itemPrix ?> € / unité</p>
      <br>
      <p><?= $item->itemDesc ?></p>
    </div>
    <br>
    <button class="itembutton colorwhite">Acheter</button>
  </div>
  <div>
    <img src="<?= $item->itemphoto ?>" alt="photo de <?= $item->itemDesc ?>" style="width: 500px; height: 700px; border-radius: 32px;">
  </div>
</div>
<div class="comment-container">
  <!-- Zone des commentaires -->
</div>
<div class="comment-container">
  <h2>Commentaires</h2>

  <!-- Affichage des commentaires existants -->
  <?php foreach ($comments as $comment) : ?>
    <div class="comment">
      <p><strong><?= $comment->author ?></strong></p>
      <p><?= $comment->content ?></p>
    </div>
  <?php endforeach; ?>

  <!-- Formulaire d'ajout de commentaire -->
  <h3>Ajouter un commentaire</h3>
  <form action="/addComment" method="POST">
    <input type="hidden" name="itemId" value="<?= $item->itemId ?>">
    <div>
      <label for="author">Nom:</label>
      <input type="text" name="author" id="author" required>
    </div>
    <div>
      <label for="content">Commentaire:</label>
      <textarea name="content" id="content" rows="4" required></textarea>
    </div>
    <button type="submit">Ajouter</button>
  </form>
</div>