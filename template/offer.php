<?php // определение всех состовляющих на переменный из flex ACF;
$title = get_sub_field("title");
$text = get_sub_field("txt");
$img = get_sub_field("img");
$repeter_block = 'text' /*перемнный для повторителя*/ ?>

<?php if ($title) : ?>
    <div class="offer__title">
        <h2><?= $title ?></h2>
    </div>
<?php endif; ?>

<div class="offer__block block">

    <?php if ($text) : ?>
        <div class="block__list">
            <div class="block__list_left">
                <img src="<?= $img; ?>" alt="">
            </div>
            <div class="block__list_right">
                <div> <?= $text; ?> </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if (have_rows($repeter_block)) : ?>
        <?php while (have_rows($repeter_block)) : the_row(); ?>
            <?php $sub_text = get_sub_field("txt"); ?>
            <?php $sub_img = get_sub_field("image"); ?>

            <div class="block__list" >
                <div class="block__list_left left_bottom">
                    <?php echo $sub_text; ?>
                </div>
                <div class="block__list_right">
                   <img src=" <?php echo $sub_img; ?>" alt="">
                </div>
            </div>

        <?php endwhile; ?>
    <?php endif;?>

</div>