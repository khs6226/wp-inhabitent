<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.6833050880186!2d-123.1403568844297!3d49.26344827932922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673c79e1ac457%3A0x3aea6428fa30dc6a!2s1490+W+Broadway%2C+Vancouver%2C+BC+V6H+4E8!5e0!3m2!1sen!2sca!4v1565954472509!5m2!1sen!2sca" width="760" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		<?php the_content(); ?>
		<form class='email-form' method="post" action="">
			<p class='name'>
				<label>
					Name
					<span class='required'>*</span>
				</label>
				<input type="text" name='your-name' value='' size='40' aria-required='true'>
			</p>
			<p class='email'>
				<label>
					Email
					<span class='required'>*</span>
				</label>
				<input type="text" name='your-email' value='' size='40' aria-required='true'>
			</p>
			<p class='subject'>
				<label>
					Subject
					<span class='required'>*</span>
				</label>
				<input type="text" name='your-subject' value='' size='40' aria-required='true'>
			</p>
			<p class='message'>
				<label>
					Message
					<span class='required'>*</span>
				</label>
				<textarea name='your-message' cols='40' rows='10' aria-required='true'></textarea>
			</p>
			<p>
				<input type="submit" value='Submit'>
			</p>
		</form>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
