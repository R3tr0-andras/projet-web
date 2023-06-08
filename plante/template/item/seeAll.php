<section>
    <div style="display: flex; flex-wrap: wrap;" class="justify-content-center">
        <?php foreach ($items as $item): ?>
            <div class="card ">
                <div class="card-content">
                    <div class="image">
                    <a href="voirItem?itemId=<?= $item->itemId ?>" class="colorwhite"><img src="<?= $item->itemphoto ?>"alt="photo de plante"></a>
                    </div>
                    <div class="text">
                        <h2>
                            <?= $item->itemNom ?>
                        </h2>
                        <br>
                        <p><span>
                                <?= $item->itemPrix ?>€ / unité
                            </span></p>
                        <br>
                        <br>
                        <button class="itembutton "><a href="voirItem?itemId=<?= $item->itemId ?>" class="colorwhite">Voir le produit</a></button>
                        <div class="">
                            <?php if ($uri == "/mesplante"): ?>
                                <!--<h3><a href="deletePlante?PlanteId=<?= $item->itemId ?>" class="link colorBlack">Modifier</a></h3> -->
                                <h3><a href="deletePlante?PlanteId=<?= $item->itemId ?>" class="link colorBlack">Supprimer</a></h3>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>