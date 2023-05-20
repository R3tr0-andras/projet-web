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
