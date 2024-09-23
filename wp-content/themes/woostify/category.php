<?php

// Template Name: Категории страница


get_header(); ?>



<h1><?php the_title(); ?></h1>





<?php
$args = array(
    'taxonomy'   => 'product_cat',
    'hide_empty' => true,
    'parent'     => 0, // Получаем только категории первого уровня
);

$terms = get_terms($args);

if ($terms) {
    echo '<div class="product-categories">';
    foreach ($terms as $term) {
        $term_link = get_term_link($term);
        echo '<div class="category-item">';
        echo '<a href="' . esc_url($term_link) . '">' . esc_html($term->name) . '</a>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo 'Категории не найдены.';
}
?>











<?php
get_footer();?>
