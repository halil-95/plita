<div class="hero__left">
    <?php the_content(); ?>
</div>
<div class="hero__right ">
    <?php echo do_shortcode('[contact-form-7 id="dc351b6" title="ОТПРАВИТЬ ЗАЯВКУ И ПОЛУЧИТЬ СКИДКУ"]'); ?>
</div>



<?php
if (have_rows( "content" )) {
        while (have_rows( 'content' )) { the_row();
            if( get_row_layout() == "flex_benefit" ){
                $title = get_sub_field("title");
                $benefit_icon = get_sub_field('block_benefit');
                if($title){
                }

            }
    }
}

?>