<?php get_header(); ?>

<div id="innerpages">
	
    <div id="bc">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
	</div>

    <div class="clearfix">
	<div id="contentArea">

    <h1>Оборудование</h1>
    
	<div id="logosmain" class="clearfix">

    <?php get_template_part('categories'); ?>

    <div class="right">

	<ul id="listmanufacturers">
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
		)
    );

	$not_in = array();       	
	foreach($categories as $cat) {
		$not_in[] = $cat->term_id;
	}
	//$categories=get_categories('taxonomy=manufacturer&hide_empty=0&depth=1&parent=0');
	$i = 0;
//	$categories = get_terms( 'manufacturer', 'taxonomy=manufacturer&hide_empty=0&parent=0' );

		$categories = get_terms( 'manufacturer',
			array(
	        	'taxonomy' => 'manufacturer',
	        	'hide_empty' => 0,
	        	'parent' => 0, 
	        	'exclude'=>$not_in,
	    	));
					            	
	  foreach($categories as $category) { 
	//	$slogos = $category->name;
	//	$slogos = str_replace(' ', '-', $slogos);
	//	$slogos = str_replace('(', '', $slogos);
	//	$slogos = str_replace(')', '', $slogos);
	
	$i++;
		
		$image = get_field('logo', $category);
		$slogos = $image['sizes']['component-image'];
		
		$sme = wp_list_categories('taxonomy=manufacturer&number=3&hide_empty=0&title_li=&depth=1&echo=0&child_of='.$category->term_id);
	    echo '
	    	<li class="'.$i.'">
             <div class="table-box">
	    		<div class="img">
                  <a href="' . get_term_link(intval($category->term_id), 'manufacturer') . '"><img src="'.$slogos.'" alt=""></a>
                </div>
                <div class="links">
    	    		<a href="' . get_term_link(intval($category->term_id), 'manufacturer') . '">' . $category->name.'</a>
    				<ul class="showhide6">'.$sme.'
    					<li><a class="showlink" href="' . get_term_link(intval($category->term_id), 'manufacturer') . '">Показать все »</a></li>
    				</ul>
                </div>
             </div>
			</li> ';} 
	?>
	  <?php //wp_list_categories('taxonomy=manufacturer&hide_empty=0&title_li=&depth=2'); ?>
	</ul>
    </div>

<script type="text/javascript">
$(document).ready(function() {
  $('#listmanufacturers > li').each(function(i) {
      $(this).attr('id', 'listid'+(i+1));
  });
})
</script>
	
	</div><!--//mainlogos-->
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php endwhile; ?>	
	
<?php else : ?>

	<?php if (is_search()) { ?>
		<div class="post single">
			<h2>Nothing found!</h2>
			<p>Sorry, but we couldn't find anything related to your query! Please try again using a different search keyword. </p>
			<hr />
			<a href=" <?php echo home_url(); ?>">&lt; Head back blog's main page</a>
		</div>
	<?php } ?>
	<?php endif; ?>

</div><!--//content-->

</div>
<?php get_footer(); ?>