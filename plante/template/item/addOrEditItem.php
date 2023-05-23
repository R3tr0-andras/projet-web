<div class="flex center">
    <H1 class="colorWhite"> page de création</H1>
</div>
<div class="flex center">
    <form method="post" action="">
        <div class="">
            <label for="itemNom" class="">nom de la plante</label>
            <input type="text" placeholder="itemNom" class="form-control" id="itemNom" name="itemNom" value="<?php if (isset($jeux)) : ?><?= $_SESSION["jeuxenvente"]->jeuNom ?><?php endif ?>">
        </div>
        <div class="">
            <label for="itemPrix" class="">le prix</label>
            <input type="text" placeholder="itemPrix" class="form-control" id="itemPrix" name="itemPrix" value="">
        </div>
        <div class="">
            <label for="itemDesc" class="">description de l'article  </label>
            <input type="text" placeholder="itemDesc" class="form-control" id="itemDesc" name="itemDesc" value="">
        </div>
        <div class="">
            <label for="itemStock" class="">stock</label>
            <input type="text" placeholder="itemStock" class="form-control" id="itemStock" name="itemStock" value="">
        <div class="">
            <label for="image" class="">image source</label>
            <input type="text" placeholder="image" class="form-control" id="image" name="image" value="">
        </div>
        <div class="">
            <label for="slectSpecsol">besoin en soleil</label>
            <select name="specsol" id="specsol">

                <?php $sol ='☀️'; foreach ($specsols as $specsol) : ?>
                    <option value="<?= $specsol->specsolID ?>"><?= $sol , $specsol->specsolID?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="">
            <label for="selectSpecieau">besoin en eaux</label>
            <select name="specieau" id="specieau">

                <?php $goutte ='💧'; foreach ($specieaux as $specieau) : ?>
                    <option value="<?= $specieau->speciauID ?>"><?= $goutte , $specieau->speciauID?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            <label for="selectTag">tag</label>
            <select name="tag[]" id="tag" multiple required>

                <?php foreach ($tags as $tag) : ?>
                    <option value="<?= $tag->tagId ?>"><?= $tag->tagType ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            <button type="submit" name="btnEnvoi" class="" value="lol">créer</button>
    </form>
</div>