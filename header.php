<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/dist/css/style.min.css">
    <?php wp_head(); ?>
</head>

<body>
    <div class="bg_image">
 
        <img src=" <?php the_field('bg', "options"); ?>" alt="">
    </div>
    <header class="header test">
        <?php get_template_part("template/contact/contact"); ?>
    </header>