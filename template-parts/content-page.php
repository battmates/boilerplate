<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package boilerplate
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php

		the_content();
		get_template_part( 'section-templates/section', 'flex-content' ); 
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
