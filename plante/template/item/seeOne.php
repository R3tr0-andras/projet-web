<div class="cop">
    <section class="container marg">
      <div class="wrapper">
        <img decoding="async" id="mainPhoto" name="" src="image\plante2.jpg" />
        <div class="caption-wrapper">
          <div id="caption"></div>
          <div class="country">  <?= $item->itemNom ?></div>
        </div>
      </div>
      <img src="<?= $item->itemphoto ?>" alt="photo de <?= $item -> itemDesc ?>">
    </section>
    <div class="desc cap padd">
      <section class="container">
        <div class="ndesc">
          <img src="image\pro.jpg" alt="image de profil" style="height: 70px;">  
          <h1><?= $item->userPseudo ?></h1>
        </div>
        <p class="ndesc">Description </br>
        <?=$item-> itemDesc?>
</p>
      </section>
    </div>
  </div>