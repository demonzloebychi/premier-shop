<?php

// Template Name: Основная страница


get_header(); ?>



<?php the_title(); ?>


<?php
// Получаем категории продуктов
$args = array(
    'taxonomy'   => 'product_cat',
    'hide_empty' => true,
    'orderby'    => 'count', // Сортируем по количеству товаров
    'order'      => 'DESC',   // В порядке убывания
    'number'     => 6,        // Ограничиваем до 6 категорий
    'parent'     => 0, 
);

$popular_categories = get_terms($args);

if ($popular_categories) {
    echo '<h2>Популярные категории</h2>';

    echo '<div class="product-categories">';
    
    foreach ($popular_categories as $category) {
        $term_link = get_term_link($category);
        echo '<div class="category-item" ';
        echo '<a href="' . esc_url($term_link) . '">' . esc_html($category->name) . '</a>';
        echo '</div>';
    }
    
    echo '</div>'; // Закрываем div для списка категорий

} else {
}
?>











<?php
get_footer();?>
