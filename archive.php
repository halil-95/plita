<?php
// Аргументы для запроса к базе данных
$args = array(
    'post_type' => 'page-content', // Тип записи: post
    'posts_per_page' => -1, // Количество записей на странице
    'orderby' => 'date', // Сортировка по дате
    'order' => 'DESC', // По убыванию (сначала новые записи)
);

// Создание нового объекта WP_Query с аргументами
$query = new WP_Query($args);

// Проверка, есть ли записи
if ($query->have_posts()) {
    // Цикл вывода записей
    while ($query->have_posts()) {
        $query->the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </header>
            <div class="entry-content">
                <?php the_excerpt(); ?>
            </div>
        </article>
        <?php
    }
    // Сброс данных о записи
    wp_reset_postdata();
} else {
    echo 'Записей не найдено.';
}
?>