<?php

get_header(); ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<div class="post-entry person">
                    <?php
                    $id = $post->ID;

		    echo FAU_Person_Shortcodes::fau_person_page($id);
                    the_content();
			?>
			</div>
        </div>
    <?php endwhile;
get_footer();
