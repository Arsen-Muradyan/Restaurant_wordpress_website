<?php get_header(); ?>

<div class="site-content clearfix">
	<div class="main-column">

		<?php
		if( have_posts() ){
			while( have_posts() ){
				the_post();
		?>
		<div class="news-cards">
			<h3 class="font-weight-normal lobster-box"><?php the_title(); ?></h3><br>
            <?php the_post_thumbnail(); ?>
			<br><br>
            <?php the_content(); ?>
        </div>
		<?php
			}
		}
		?>
	</div>
</div>

<?php get_footer(); ?>
