<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) :  the_post(); ?>
        <section class="front__hero hero flx_rw test">
            <?php get_template_part("template/hero"); ?>
        </section>
        <?php if (have_rows('content')) : ?>
            <?php while (have_rows('content')) : the_row() ?>
                <?php if (get_row_layout() == "flex_benefit") : ?>
                    <section class="front__benefits benefits  flx_cln test">
                        <?php get_template_part("template/benefit"); ?>
                    </section>

                <?php elseif (get_row_layout() == "flex_offer") : ?>
                    <section class="front__offer offer test">
                        <?php get_template_part("template/offer"); ?>
                    </section>

                <?php elseif (get_row_layout() == "flex_order") : ?>
                    <section class="front__order order test">
                        <?php get_template_part("template/order"); ?>
                    </section>
                <?php elseif (get_row_layout() == "flex_reviews") : ?>
                    <section class="front__reviews reviews flx_cln test">
                        <?php get_template_part("template/reviews"); ?>
                    </section>
                <?php elseif (get_row_layout() == "flex_map") : ?>
                    <section class="front__map flx_rw test price">
                        <?php get_template_part("template/map"); ?>
                    </section>
                    <section class="front__footer__up flx_cln test">
                        <div class="front__footer__contact flx_rw">
                            <div class=""><?php get_template_part("template/contact/email-and-address"); ?></div>
                            <div class=""><?php get_template_part("template/contact/phone"); ?></div>
                        </div>
                    </section>
                <?php elseif (get_row_layout() == "flex_footer") : ?>
                    <section class="front__footer flx_rw test">
                        <?php get_template_part("template/contact/email-and-address"); ?>
                        <?php get_template_part("template/contact/phone"); ?>
                        <?php get_template_part("template/@copy"); ?>
                    </section>


                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    <?php endwhile; ?>

    <!-- test -->
    <?/*php if (have_rows('test')) : ?>
        <?php while (have_rows('test')) : ?>

        <?php endwhile; ?>
    <?php endif;*/ ?>
    <?php
    $specifications_group_id = 'group_65e18515e10d6'; // Replace with your group ID
    $specifications_fields = array();

    $fields = acf_get_fields($specifications_group_id);

    foreach ($fields as $field) {
        $field_value = get_field($field['content']);

        if ($field_value) {
            echo "no empty";
            //     // $specifications_fields[ $field['content'] ] = $field_value;
        }
    }
    // print_r($specifications_fields['flex_benefit']);
    ?>
    <?php ?>
    <?php ?>


    <!-- test -->


    <?php wp_reset_postdata(); ?>
<?php endif; ?>
<?php get_footer(); ?>