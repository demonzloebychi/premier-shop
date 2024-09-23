<?php
get_header(); ?>




<a class='back-btn' href="../">Назад</a>

<div class="content-area">


	

<main class="site-main">


<?php
// Получаем текущую категорию
$current_term = get_queried_object();


// Выводим заголовок категории
if ($current_term) {
	echo '<h1>' . esc_html($current_term->name) . '</h1>';







	
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}
}
?>

</main>




<div class="chips">

<?php
	// Получаем подкатегории текущей категории
	$sub_args = array(
		'taxonomy'   => 'product_cat',
		'hide_empty' => true,
		'parent'     => $current_term->term_id,
	);

	$subcategories = get_terms($sub_args);

	if ($subcategories) {
		echo '<h3>Фильтр</h3>';
		echo '<ul class="subcategory-filter">';

		foreach ($subcategories as $subcategory) {
			$subcategory_link = get_term_link($subcategory);
			echo '<li> <a href="' . esc_url($subcategory_link) . '">' . esc_html($subcategory->name) . '</a></li>';
		}
		echo '</ul>'; // Закрываем div для подкатегорий
	} else {
		echo '<p></p>';
	}
	?>

</div>




 


</div>


<?php get_footer(); ?>