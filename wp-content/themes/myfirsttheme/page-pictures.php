<?php get_header(); ?>
		<?php
		if( have_posts() ){
			while( have_posts() ){
				the_post();
		?>
        <div class="container mt-2">
            <?php the_content(); ?>
        </div>
		<?php
			}
		}
		?>
<?php get_footer(); ?>
