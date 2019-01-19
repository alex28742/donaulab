<?php get_header(); ?>
<div id="innerpages">
	<div id="bc">
	  <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
	</div>

    <div class="clearfix">

        <!-- // Content Area  -->
    	<div id="contentArea">

<h1><?php the_title(); ?></h1>

    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    	<?php the_content(); ?>
    	<?php endwhile; ?>
    	<?php endif; ?>

        </div>
        <!-- // Content Area  -->

        <!-- // SideBar Area  -->
        <!-- ?php get_sidebar(); ? -->
        <!-- SideBar Area //  -->

    </div>

<?php get_footer(); ?>