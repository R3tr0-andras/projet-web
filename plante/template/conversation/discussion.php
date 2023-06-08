<div>
    <div class="">
        <form method="post" action="">
        <div class="">
        <h2>votre discussion</h2>
        <?php if (!empty($messages)) : ?>
            <?php foreach ($messages as $message) : ?>
                <p><?= $message->messageText ?></p>
            <?php endforeach ?>
        <?php else : ?>
            <p>Aucun message trouvé.</p>
        <?php endif ?>
    </div>
            <input type="message" id="message" name="message" value="">
            <button type="submit" name="btnEnvoi" class="">envoyer</button>
        </form>
    </div>
</div>