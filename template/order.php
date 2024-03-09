<?php
$title = get_sub_field("title");
$text = get_sub_field("txt");
?>
<?php if ($title) : ?>
    <div class="order__title">
        <h2><?= $title; ?></h2>
    </div>
<?php endif; ?>

<?php if ($title) : ?>
    <div class="order__subscribe">
        <p><?= $text; ?></p>
    </div>
<?php endif; ?>