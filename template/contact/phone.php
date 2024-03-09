<div class="list">
    <?php if (have_rows('contact', 'option')) : ?>
        <ul>
            <?php while (have_rows('contact', 'option')) : the_row(); ?>
                <?php $tel = get_sub_field('tel_number'); ?>
                <?php if ($tel) : ?>
                    <li class="icon-call"> <a href="tel:<?= $tel;?>"> <?= $tel;?> </a> </li>
                <?php endif; ?>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
</div>