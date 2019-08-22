<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-container">
					<div class="footer-grid">
						<div class="contact">
							<h3>Contact Info</h3>
							<p>
								<i class="fa fa-envelope"></i>
								<a href="mailto:info@inhabitent.com">info@inhabitent.com</a>
							</p>
							<p>
								<i class="fa fa-phone"></i>
								<a href="tel:7784567891">778-456-7891</a>
							</p>
							<p>
							<span>
								<i class="fa fa-facebook-square"></i>
							</span>
							<span>
								<i class="fa fa-twitter-square"></i>
							</span>
							<span>
								<i class="fa fa-google-plus-square"></i>
							</span>
							</p>
						</div>
					</div>
					<div class="footer-grid">
						<div class="business-hours">
							<h3>Business Hours</h3>
							<p>
								<span class="days">Monday-Friday: </span>
								"9am to 5pm"
							</p>
							<p>
								<span class="days">Saturday: </span>
								"10am to 2pm"
							</p>
							<p>
								<span class="days">Sunday: </span>
								"Closed"
							</p>
						</div>
					</div>
					<div class="footer-grid">
						<div class="footer-logo">
							<img src="<?= get_stylesheet_directory_uri().'/images/inhabitent-logo-text.svg'; ?>" alt="inhabitent logo">
						</div>
					</div>
				</div>
				<div class="site-info">
					<div class="copyright">Copyright &copy 2019 Inhabitent</div>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="wp-content/themes/inhabitent/build/js/main.min.js"></script>
	</body>
</html>
