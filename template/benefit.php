<?php $title = get_sub_field('title');  ?>
<?php $blocks = 'block_benefit';  ?>

<?php if ($title) : ?>
    <div class="benefits__title">
        <h2><?= $title; ?></h2>
    </div>
<?php endif; ?>
<div class="benefits__way way flx_rw">
    <?php if ($blocks) : ?>
        <?php while (have_rows($blocks)) : the_row(); ?>
            <?php $block_text = get_sub_field("txt"); ?>
            <?php $block_icon = get_sub_field("icon"); ?>
            <div class="way__list flx_cln">
                <div class="way__list__icon">
                    <img src="<?= $block_icon; ?>" alt="<?= $title; ?>">
                </div>
                <div class="way__list__text">
                    <p><?= $block_text; ?> </p>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<div class="way__list__triangle">
    <svg viewBox="0 0 264 45" xmlns="http://www.w3.org/2000/svg">
        <path d="M132 43.5L263.5 0.5H132H0.5L132 43.5Z" />
    </svg>
</div>