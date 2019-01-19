<?php get_header(); ?>

<div id="innerpages">
 
    <div id="bc">
        <?php if(function_exists('bcn_display'))
        { bcn_display(); }?>
    </div>

    <div class="clearfix">
    <?php

	$args = array(
		'parent'         => 0,
		'hide_empty'     => 0,
		'exclude'        => 1,
		'number'         => '0',
		'taxonomy'       => 'category',
		'pad_counts'     => true 
	);  
	$catlist = get_categories($args);
	$curCat = false;
	$myCats = array(
		'konkurs' => 552,
		'meropriyatiya' => 46,
		'novinki' => 47,
		'novosti' => 392,
		'primenenie' => 475,
		'stati' => 474
	);
	foreach ($myCats as $cat=>$id) {
		if (strpos($_SERVER['REQUEST_URI'],'/'.$cat.'/')!==false) $curCat = $id;
	}
	$category = get_category(intval($curCat));

    ?>
<div id="logosmain">
<? if (strpos($_SERVER['REQUEST_URI'],'primenenie')===false) {?>
<div class="left">
    <div>
      <ul class="big-side-menu">
	<?php foreach ($catlist as $categories_item) {
if ($categories_item->cat_ID == 46 || $categories_item->cat_ID == 392)
		echo "<li ".($category->term_id == $categories_item->cat_ID?' class="active"':'')."><a href='".get_category_link( $categories_item->cat_ID )."'>" . $categories_item->cat_name . "</a></li>";  } 
	?>
      </ul>
    </div>
    </div>
	<div class="right">
<?}?>


<?php
foreach((get_the_category()) as $category) { 
   echo '<h1>'.$category->cat_name.'</h1>';
} 
?>

    <!-- // Index Content Area -->
	<div id="contentArea">
	<div class="news-list events">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<div class="news-item">
		<div class="img">
			<a href="<?php the_permalink() ?>">
				<?php the_post_thumbnail('thumbnail', array('class' => 'alignleft iborders size110', 'alt' => the_title_attribute('echo=0'))); ?>
			</a>
		</div>
		<div class="txt">
			<? if (strpos($_SERVER['REQUEST_URI'],'/novosti/')!==false) { ?><div class="date"><?php the_date("d.m.Y"); ?></div><? } ?>
			<a href="<?php the_permalink() ?>">
				<b><?php the_title(); ?></b>
				<?php echo mb_substr(strip_tags(get_the_content()),0,300); ?>
			</a>
		</div>
	</div>

<? /*?>
	
	<div class="itemC" id="post-<?php the_ID(); ?>">

      <?php if ( has_post_thumbnail() ) { ?>
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
             <?php the_post_thumbnail('thumbnail', array('class' => 'alignleft iborders size110', 'alt' => the_title_attribute('echo=0'))); ?>
           </a>
      <?php } ?>

	<h2 class="itemCtitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
     
    <div class="entryC">
      <p>
      <?php the_field('cshort'); wpe_excerpt('wpe_excerptlength_teaser', 'wpe_excerptmore'); ?> <a href="<?php the_permalink(); ?>">&raquo;</a>
      </p>
    </div>
	
	</div><!--//itemC-->*/ ?>
	
<?php endwhile; ?>
</div>
<div class="pagenavi"><?php if ( function_exists('wp_pagenavi') ) {wp_pagenavi(); } ?></div>
<?php else : ?>
		<div class="itemC">
			<h2>Ничего не найдено!</h2>
			<p>Извините, по Вашему запросу ничего не найдено. </p>
			<br>
			<a href="<?php echo home_url(); ?>">&laquo; Вернуться на главную</a>
		</div>
<?php endif; ?>

</div>
<!-- Index Content Area // -->
<? if (strpos($_SERVER['REQUEST_URI'],'primenenie')===false) {?>
</div>
<?}?>
</div>
</div>

<?php get_footer(); ?>