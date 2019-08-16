<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header('journal'); ?>

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
                            'posts_per_page' => 99,
                            'order' => 'ASC',
			            )); ?>
                    <?php foreach($posts as $post) : setup_postdata($post); ?>
                    <!-- <article id="post-<?php the_ID(); ?>" <?php post_class('shop-product'); ?>> -->
                        <div class='thumbnail-wrapper'>
                            <a href="<?php echo esc_url(get_permalink()); ?>">
                                <?php if (has_post_thumbnail()) :
						            the_post_thumbnail('large');
                                    endif; ?>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
