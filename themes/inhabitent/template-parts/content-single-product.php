<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class='product-img'>
	<img src="<?php echo CFS() -> get('product_image'); ?>" alt="">	
</div>
<div class='product-content-wrapper'>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<p class='price'><?php echo CFS() -> get('price'); ?></p>
		<?php the_content(); ?>
		<div class='social-btn'>
			<button><i class="fa fa-facebook" aria-hidden="true"></i>Like</button>
			<button><i class="fa fa-twitter" aria-hidden="true"></i>Tweet</button>
			<button><i class="fa fa-pinterest" aria-hidden="true"></i>Pin</button>
		</div>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	
</article><!-- #post-## -->
