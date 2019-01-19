<div id="sidebar">
	<?php //if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>
<?
if (($post->ID==6116) or (is_category()) or (strpos($_SERVER['REQUEST_URI'], 'articles')===1)) {
//if (is_category()){
  $args = array(
	'parent'                   => 0,
	'hide_empty'               => 0,
  'exclude'                  => 1,
	'number'                   => '0',
	'taxonomy'                 => 'category',
	'pad_counts'               => true );  
$catlist = get_categories($args);
 
?>
<div class="searchBoxSide">
<ul id="subnav">
<?php foreach ($catlist as $categories_item) {
	echo "<li class='page_item'><a href='".get_category_link( $categories_item->cat_ID )."'>" . $categories_item->cat_name . "</a></li>";  } ?>
</ul>
</div>	
<?
//спецпредложения начало
?>  
 		 <div class="searchBox specialBoxNew" id="thisLast" style="padding-top: 0px !important; margin-top: 0px !important; border:0px !important;">
    
       <div id="specialOf">
	<h3>Специальные предложения</h3>
	
	<div class="specialNew">
		<ul>
					
					
					<?php
	$the_query = new WP_Query( array( 'post_type' => 'components', 'meta_key' => 'isspec', 'meta_value' => 'yes', 'post_count' => '2' ) );
	while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	
	<li><?php 
	if ( has_post_thumbnail() ) { ?> 
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
	   <?php the_post_thumbnail('thumbnail', array('class' => 'iborders', 'alt' => the_title_attribute('echo=0'))); ?>
	   </a>
	<?php } ?>
					
					<h4>
		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		<span><?= the_field('isspec_text') ?></span>
		<!--<span><?php the_field('cprice'); ?> .–</span>  <br />-->
		<?php //the_field('cshort'); ?>
		
		</li>
	
	
<?php endwhile;
wp_reset_postdata();
?></ul>
	
	</div>
		
	
	</div><!--//specOf-->
    
 		 </div><!-- //searchBox -->
<?
//спецпредложения конец 
?>  
  
<?
}
?>	
	<?php if ((is_page()) or (is_single())) : ?>
	
	
	<?php

if ($post->post_parent)	{
	$ancestors=get_post_ancestors($post->ID);
	$root=count($ancestors)-1;
	$parent = $ancestors[$root];
} else {
	$parent = $post->ID;
}

$children = wp_list_pages("title_li=&child_of=". $parent ."&echo=0");

if ($children) { ?>
<div class="searchBoxSide">
<h3><?php echo get_the_title($parent); ?></h3>

<ul id="subnav">
<?php echo $children; ?>
</ul>
</div>
<?php } ?>
<? 
if (strpos($_SERVER['REQUEST_URI'], 'articles') === false) {
?> 
 <?
$thid=get_queried_object_id();
?>
	<div id="events">
	<h3><a href="<?php echo get_category_link('392'); ?>">Новости</a></h3>

	<?php
$the_query = new WP_Query( 'cat=46,475,392,47,474&posts_per_page=5&orderby=date&order=DESC' );
while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<? if ($thid==get_the_ID()){
continue;
}?>
<div class="e-item">
	<?php 
if ( has_post_thumbnail() ) { ?> 
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   <?php the_post_thumbnail('thumbnail', array('class' => 'alignleft iborders size90')); ?>
   </a>
<?php } ?><h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
	<p><?php wpe_excerpt('wpe_excerptlength_news', 'wpe_excerptmore'); ?> <a href="<?php the_permalink(); ?>">&raquo;</a></p>
	</div><!-- //e-item -->

<?php endwhile;
wp_reset_postdata();
?>
		
	</div><!-- //events -->
	<?
}
?>
	
	<?php //Category News
	elseif (is_category() || in_category('46')) : ?>
<? 
if (strpos($_SERVER['REQUEST_URI'], 'article') === false) {
?>   
	<div id="events">
	<h3>Новинки</h3>
	<?php
$the_query = new WP_Query( array( 'post_type' => 'components', 'meta_key' => 'isnew', 'meta_value' => 'yes', 'post_count' => '5' ) );
while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<div class="e-item">
	<?php 
if ( has_post_thumbnail() ) { ?> 
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   <?php the_post_thumbnail('thumbnail', array('class' => 'alignleft iborders size90')); ?>
   </a>
<?php } ?><h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
	<p><?php the_field('cshort'); //wpe_excerpt('wpe_excerptlength_news', 'wpe_excerptmore'); ?> <a href="<?php the_permalink(); ?>">&raquo;</a></p>
	</div><!-- //e-item -->

<?php endwhile;
wp_reset_postdata();
?>
		
	</div><!-- //events -->
<?
}
?>
	<?php //Component single sidebar
	elseif (get_post_type() == 'components') : ?>
	
	<div id="sideSearchMenu">
	
	<div class="searchBoxSide">
		<a href="#" class="headings" id="heading1"></a>
		<ul id="toggleul1" style="<?php if(!is_tax('industries')) : ?>display:none;<?php endif; ?>">
		<?php wp_list_categories('taxonomy=industries&hide_empty=0&title_li='); ?>
		</ul>
		
		
		</div><!-- //searchBox -->
		
		
		<!--
		<div class="searchBoxSide">
		<a href="#" class="headings" id="heading2"></a>
		<ul id="toggleul2" style="<?php if(!is_tax('methods')) : ?>display:none;<?php endif; ?>">
		<?php wp_list_categories('taxonomy=methods&hide_empty=0&title_li='); ?>
		</ul>
		</div>

		-->
		
		<div class="searchBoxSide">
			<a href="#" class="headings" id="heading3"></a>
			<ul id="toggleul3" style="<?php if(!is_tax('manufacturer')) : ?>display:none;<?php endif; ?>">
			<?php //wp_list_categories('taxonomy=manufacturer&hide_empty=0&title_li='); ?>
			<?php 
				
				$categories = get_terms( 'manufacturer',
					           		array(
						            	'taxonomy' => 'manufacturer',
						            	'hide_empty' => 0,
						            	'parent' => 0, 					            	
						           	    'meta_query' => array( array(
										        'key'   => 'visibility',
										        'value' => array('hidden','private'),
										        'compare' => 'IN',
										    ) ) 

					            	)); 
					     
				$not_in = array();       	
				foreach($categories as $cat) {
					$not_in[] = $cat->term_id;
				}
				
				
				wp_list_categories(
					array( 'taxonomy' => 'manufacturer',
					'exclude'=> $not_in,
					'hide_empty' => 0,
					'title_li'=>'',
				/*	'meta_query' => array( array(
										        'key'   => 'visibility',
										        'value' => array('','public',false,true),
										        'compare' => 'IN',
										    ) )	*/
				)); ?>
			</ul>
		</div><!-- //searchBox -->
		
		<div class="searchBoxSide">
		<a href="#" class="headings" id="heading4"></a>
		<ul id="toggleul4" style="<?php if(!is_tax('keywords')) : ?>display:none;<?php endif; ?>">
		<?php wp_list_categories('taxonomy=keywords&hide_empty=0&title_li='); ?>
		</ul>
		</div><!-- //searchBox -->
	
	</div><!--//ssMenu-->
	 		 <div class="searchBox specialBoxNew" id="thisLast" style="padding-top: 0px !important; margin-top: 0px !important; border:0px !important;">
         
	<div id="specialOf">
	<h3>Специальные предложения</h3>			
		<div class="specialNew">
			<ul>
				
				
				<?php
$the_query = new WP_Query( array( 'post_type' => 'components', 'meta_key' => 'isspec', 'meta_value' => 'yes', 'post_count' => '5' ) );
while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<li><?php 
if ( has_post_thumbnail() ) { ?> 
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   <?php the_post_thumbnail('thumbnail', array('class' => 'iborders', 'alt' => the_title_attribute('echo=0'))); ?>
   </a>
<?php } ?>
				

			<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		<span><?= the_field('isspec_text') ?></span>
		<!--<span><?php the_field('cprice'); ?> .–</span>  <br />-->
		<?php //the_field('cshort'); ?>
	</li>

<?php endwhile;
wp_reset_postdata();
?>
				
				
				
				
				
				
			</ul>
			
		</div>
	
	</div><!--//specOf-->
 </div>   
	
	<? if(is_singular()): ?>
	<?php
			$terms = get_the_terms( $post->ID, 'manufacturer' );
									
			$current_id = $post->ID;
			if ( $terms && ! is_wp_error( $terms ) ) : 
				$draught_links = array();
			
				foreach ( $terms as $term ) {
					$draught_links[] = $term->slug;
				}
									
				$on_draught = join( ", ", $draught_links );
				$fruit = array_pop($draught_links);
			endif; ?>
			

			<?php query_posts(array ( 'post_type' => 'components', 
									'post__not_in' => array($current_id),
									'orderby' => 'rand',
									'tax_query' => array(
										array(
											'taxonomy' => 'manufacturer',
											'field' => 'slug',
											'terms' => $fruit
										)
									), 
									'showposts'=> 3, 
									'posts_per_page' => -1 )); ?>
	
			<? if(have_posts()) { ?>
			<br><br>
	<div id="additionalOf">
	<h3>Похожие товары</h3>
	
		
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="" style="text-align:center;">
			<?php 
			if ( has_post_thumbnail() ) { ?> 
			<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
			   echo '<a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" >'; ?>
			<?php  the_post_thumbnail('component-image', array('class' => 'aligncenter iborders', 'alt' => the_title_attribute('echo=0'))); ?>
			</a>
			<?php } else { ?>
			<a href="#"><img src="<?php bloginfo('template_url')?>/images/nophoto.png" alt="" class="alignleft iborders" style="display:block; margin:0 auto;width:190px;"/></a>
			<?php } ?>
			<a href="<? the_permalink(); ?>"><? the_title(); ?></a>
			</div>
			<br>
					<?php endwhile; ?>


	
			<? } ?>
			<? 
				wp_reset_query(); ?>	
					
	
	</div><!--//additionalOf-->
	<? endif; ?>
	
	
	<?php endif; ?>
	
	
	
	<?php //endif; ?>
</div>
