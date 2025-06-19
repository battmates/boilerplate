<?php
/**
 * Flexible Content (ACF 'page builder')
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Check value exists.
if( have_rows('flexible_elements') ):

    // Loop through rows.
    while ( have_rows('flexible_elements') ) : the_row();

        if( get_row_layout() == 'example_module' ): ?>

        	<section class="example-class">

        		<?php 
                // Do magic here
                ?>

        	</section>

        <?php elseif( get_row_layout() == 'example_module_2' ): ?>

            <section class="example-class-2">
                
                <?php 
                // More magic here
                ?>

            </section>

        <?php // Next section here ?>

        <?php endif; // end of flexible content  

    // End loop.
    endwhile;

// No value.
else :
    // Do nothing.
endif;