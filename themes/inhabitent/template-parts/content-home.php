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

<section class='shop-stuff container'>
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

<section class='journals container'>
	<h2>Inhabitent Journal</h2>
	<ul>
		<?php
			$blog_posts = get_posts(array(
				'post_type' => 'post',
				'posts_per_page' => 3,
				'order' => 'DESC',
			));
			foreach ($blog_posts as $post) : setup_postdata($post); ?>
			<li>
				<div class='thumbnail-wrapper'>
					<?php if (has_post_thumbnail()) :
						the_post_thumbnail('large');
						endif; ?>
				</div>
				<div class='post-info-wrapper'>
					<span class='entry-meta'>
						<?php red_starter_posted_on('d F Y'); ?> / 
						<?php comments_number('0 Comments', '1 Comment', '% Comments'); ?>
					</span>
					<h3 class='entry-title'>
					<a href="<?php echo esc_url(get_permalink()); ?>">
						<?php the_title(); ?>
					</a>
					</h3>
				</div>
				<a href="<?php echo esc_url(get_permalink()); ?>">
				Read Entry
				</a>
			</li>
			<?php
			endforeach; wp_reset_postdata(); ?>
	</ul>
</section>