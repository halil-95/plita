<div class="list">
    <ul>
        <?php $adreses = ["adress", "adress2"]; ?>
        <?php foreach ($adreses as $adress) : $val = get_field($adress, "options"); ?>
            <?php if ($val) : ?>
                <li class="icon-map"><?= $val; ?></li>
            <?php endif; ?>
        <?php endforeach; ?>
        <?php $emails = ["email", "email2"]; ?>
        <?php foreach ($emails as $email) : $val = get_field($email, "options"); ?>
            <?php if ($val) : ?>
                <li class="icon-mail"><a href="mailto:<?= $val; ?>"> <?= $val; ?></a></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</div>