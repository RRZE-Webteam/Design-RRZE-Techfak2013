<?php

get_header(); ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<div class="post-entry">
                    <?php
                    $id = $post->ID;

		    echo FAU_Standort_Shortcodes::fau_standort_page($id);
                    the_content();
			?>
            </div>
        </div>
    <?php endwhile;
get_footer();
