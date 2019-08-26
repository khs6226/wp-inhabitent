<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class='container'>
                <header class='page-header'>
                    <h1 class='page-title'>
                        <?php echo single_term_title(); ?>
                    </h1>
                    <div class='product-type-description'>
                        <?php echo the_archive_description(); ?>
                    </div>
                </header>
                <?php if(have_posts()) : ?>
                    <div class='product-grid'>
                    <?php foreach($posts as $post) : setup_postdata($post); ?>
                    <div class='product-grid-item'>
                        <div class='thumbnail-wrapper'>
                            <a href="<?php echo esc_url(get_permalink()); ?>">
                                <img src="<?php echo CFS() -> get('product_image'); ?>" alt="">
                            </a>
                        </div>
                        <div class='product-info'>
                            <?php the_title('<h2 class="entry-title"></h2>'); ?>
                        <span class='price'>
                            <?php echo CFS() -> get('price'); ?>
                        </span>
                        </div>
                    </div>
                    <?php endforeach;
                    wp_reset_postdata(); ?>
                    </div>
                <?php endif; ?>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
