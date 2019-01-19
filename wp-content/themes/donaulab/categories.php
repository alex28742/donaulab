



 
<div class="left">
<div>
<div class="title"><a href="/keywords/">Оборудование по типу</a></div>
</div>
<div>
<div class="title"><a href="/industries/">Оборудование по отраслям</a></div>
</div>

<div>
<div class="title">Оборудование по производителям</div>
<ul>
<? 
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
	
	$i = 0;
	$categories = get_terms( 'manufacturer',
			array(
	        	'taxonomy' => 'manufacturer',
	        	'hide_empty' => 0,
	        	'parent' => 0, 
	        	'exclude'=>$not_in,
	    	));
					     
		$cur = get_queried_object();
		$prnts = get_ancestors( $cur->term_id, 'category' );
		
	  foreach($categories as $category) {
 ?>
  <li <?=($cur->term_id == $category->term_id || in_array($cur->parent,$prnts)?' class="active"':'')?>>
	<a class="show_brand" href="<?=get_term_link(intval($category->term_id), 'manufacturer')?>"><?=$category->name?></a>
    <div class="hidden_brand" style="<?=($cur->term_id != $category->term_id && !in_array($category->term_id,$prnts)?'display: none;':'')?>">
      <ul>
		<?=wp_list_categories('taxonomy=manufacturer&hide_empty=0&title_li=&child_of='.$category->term_id)?>
<? //number=3& //depth=1&echo=0&?>
      </ul>
    </div>
  </li>
<?}?>
</ul>
</div>
</div>
<style type="text/css">
.show_brand {text-decoration:none;}
/*.hidden_brand {display:none;}*/
/*.hidden_brand.show {display:block !important;}*/
</style>
<script type="text/javascript">
/*$('.cat-item.current-cat').parent().parent().addClass('show');*/
</script>