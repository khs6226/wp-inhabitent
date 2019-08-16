<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<!-- <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> -->
<section class='hero-home'>
	<img src="wp-content/themes/inhabitent/images/inhabitent-logo-full.svg" alt="inhabitent full logo">
</section>

<section class='shop-stuff'>
	<h2>Shop Stuff</h2>
	<div class='products'>
		<?php
			$products_terms = get_terms( array(
				'taxonomy' => 'product-type',
				'hide_empty' => false,
			));

			foreach($products_terms as $term) { ?>
				<div class='products-wrapper'>
					<img src="<?php echo get_template_directory_uri()."/images/".$term->slug.".svg"; ?>" alt="">
					<p><?php echo $term->description ?></p>
					<p>
						<a href="<?php echo esc_url(get_term_link($term)); ?>"><?php echo $term->name." Stuff"; ?></a>
					</p>
				</div>	
		<?php }
		?>
	</div>
</section>

<section class='journals'>
	<h2>Inhabitent Journal</h2>
	
</section>