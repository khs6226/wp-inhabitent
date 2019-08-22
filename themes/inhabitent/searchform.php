<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<button type='button' class="toggle" aria-hidden="true">
			<i class="fa fa-search"></i>
		</button>
		<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		<label class='search-label'>
			<input type="search" class="search-field" placeholder="Type and hit enter..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
	</fieldset>
</form>
