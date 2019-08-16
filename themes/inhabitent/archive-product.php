<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header('product'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class='container'>
                <header class='page-header'>
                    <h1 class='page-title'>Shop Stuff</h1>
                    <ul class='product-type'>
                        <?php
                            $terms = get_terms(array(
                                'taxonomy' => 'product-type',
                            ));
                            if ($terms) :
                                foreach($terms as $term) : ?>
                                <li>
                                    <a href="<?php echo esc_url(get_term_link($term)); ?>">
                                        <?php echo $term->name; ?>
                                    </a>
                                </li>
                            <?php
                            endforeach;
                        endif; ?>
                    </ul>
                </header>
                <div class='product-grid'>
                    <?php 
                        $product_posts = get_posts(array(
				            'post_type' => 'product',
                            'posts_per_page' => '16',
                            'order' => 'ASC',
			            )); ?>
                    <?php foreach($product_posts as $post) : setup_postdata($post); ?>
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
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
