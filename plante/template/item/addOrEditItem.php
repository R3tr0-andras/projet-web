<form method="post"> 
    <h1 class="colorWhite">Page de création</h1>
    <div>
        <label for="itemNom">Nom de la plante</label>
        <input type="text" placeholder="itemNom" id="itemNom" name="itemNom" value="<?php if (isset($jeux)) : ?><?= $_SESSION["jeuxenvente"]->jeuNom ?><?php endif ?>">
    </div>
    <div>
        <label for="itemPrix">Le prix</label>
        <input type="text" placeholder="itemPrix" id="itemPrix" name="itemPrix" value="">
    </div>
    <div>
        <label for="itemDesc">Description de l'article</label>
        <input type="text" placeholder="itemDesc" id="itemDesc" name="itemDesc" value="">
    </div>
    <div>
        <label for="itemStock">Stock</label>
        <input type="text" placeholder="itemStock" id="itemStock" name="itemStock" value="">
    </div>
    <div>
        <label for="image">Image source</label>
        <input type="text" placeholder="image" id="image" name="image" value="">
    </div>
    <div>
        <label for="selectSpecsol">Besoin en soleil</label>
        <select name="specsol" id="specsol">
            <?php $sol ='☀️'; foreach ($specsols as $specsol) : ?>
                <option value="<?= $specsol->specsolID ?>"><?= $sol , $specsol->specsolID?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div>
        <label for="selectSpecieau">Besoin en eaux</label>
        <select name="specieau" id="specieau">
            <?php $goutte ='💧'; foreach ($specieaux as $specieau) : ?>
                <option value="<?= $specieau->speciauID ?>"><?= $goutte , $specieau->speciauID?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div>
        <label for="selectTag">Tag</label>
        <select name="tag[]" id="tag" multiple required>
            <?php foreach ($tags as $tag) : ?>
                <option value="<?= $tag->tagId ?>"><?= $tag->tagType ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <button type="submit" name="btnEnvoi" value="lol">Créer</button>
</form>