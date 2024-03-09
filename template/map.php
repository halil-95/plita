<?php
$title = get_sub_field('title');
$price_list = 'block_benefit';
?>

<?php
$count = 0;
$locations = get_field('block_benefit');
if (is_array($locations)) {
    $count = count($locations);
}
?>
<?php if (have_rows($price_list)) : $var = 0; ?>
    <?php while (have_rows($price_list)) : the_row();
        $icon = get_sub_field('icon');
        $text = get_sub_field('txt');
        $button = get_sub_field('button');
        $var++; ?>
        <div class="price__block">
            <div class="price__block__content content">
                <div class="content__img"><img src="<?= $icon; ?>" alt="some text"></div>
                <div class="content__title"> <?= $text; ?> </div>
                <div class="content__button"><button><?= $button; ?></button></div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>