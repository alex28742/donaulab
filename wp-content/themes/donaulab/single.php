<?php get_header(); ?>
<div id="innerpages">
	<div id="bc">
    <?php if(function_exists('bcn_display'))
    { bcn_display(); }?>
	</div>

    <div class="clearfix">
	<div id="contentArea">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    		<h1><?php the_title(); ?></h1>

    		<div class="entryC">
    			<?php the_content(); ?>
    		</div>

    	<?php endwhile; ?>
    	<?php endif; ?>

    </div>
    </div>

<?php get_footer(); ?>