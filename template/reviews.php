<?php
$title = get_sub_field("title");
$img = 'img';
?>
<?php if ($title) : ?>
    <div class="reviews__title">
        <h2>
            <?= $title; ?>
        </h2>
    </div>
<?php endif; ?>

<div class="reviews__doc flx_rw">
    <?php if (have_rows($img)) : ?>
        <?php while (have_rows($img)) : the_row(); ?>
            <?php $sub_img = get_sub_field("image"); ?>
            <div class="reviews__doc_img">
                <img src="<?= $sub_img; ?>" alt="">
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>