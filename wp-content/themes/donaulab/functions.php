<?php

wp_enqueue_style( 'slick', get_template_directory_uri().'/css/slick.css', null, null );
wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', null, null, true );



if (strpos($_SERVER['REQUEST_URI'], 'articles')===1){
if ( ! function_exists( 'wp_add_page_number' ) )
{
    function wp_add_page_number( $s )
    {
        global $page;
        $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
        ! empty ( $page ) && 1 < $page && $paged = $page;
        $paged > 1 && $s .= ' - ' . sprintf( __( 'Страница - %s' ), $paged );
        return $s;
    }
    add_filter( 'wpseo_metadesc', 'wp_add_page_number', 100, 1 );
}
}
$content_width = 580;
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
			'name' => 'Sidebar',
			'id' => 'sidebar',
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h2 class="widgettitle">',
			'after_title' => '</h2>',
	));
}


function jquery_reset_06232013() {
    wp_deregister_script( 'jquery' );
    wp_register_script(
        $handle    = 'jquery',
        $src       = '/js/jquery.js',
        $deps      = array(),
        $ver       = '1.10.2',
        $in_footer = true
    );
    wp_enqueue_script( $handle );
}
add_action( 'init', 'jquery_reset_06232013', 999 );


function custom_rewrite_basic() {
  add_rewrite_rule('manufacturer/([^/]+)/page/?([0-9]{1,})/?', 'index.php?manufacturer=$matches[1]&paged=$matches[2]', 'top');

}
add_action('generate_rewrite_rules', 'custom_rewrite_basic');

add_theme_support( 'menus' );
add_theme_support( 'automatic-feed-links' );
paginate_comments_links();
add_custom_background();
wp_enqueue_script( 'comment-reply' );
register_nav_menus( array(
	'primary' => __( 'Primary Navigation', 'build' ),
	'secondary' => __( 'Secondary Navigation', 'build' ),
) );


add_filter('redirect_canonical','pif_disable_redirect_canonical');
add_filter('widget_text', 'do_shortcode');
add_filter( 'wpcf7_form_elements', 'do_shortcode' );

function pif_disable_redirect_canonical($redirect_url) {
	if (is_singular()) $redirect_url = false;
	return $redirect_url;
}

//Paste this into your template where you want the menu to go:

//wp_nav_menu(array('container_class' => 'menu-header', 'menu_id' => 'menu-navigation', 'theme_location' => 'primary'));

function wpe_excerptlength_news($length) {
    return 25;
}

function wpe_excerptlength_teaser($length) {
    return 35;
}
function wpe_excerptlength_index($length) {
    return 160;
}
function wpe_excerptmore($more) {
    return '...';
}

function wpe_excerpt($length_callback='', $more_callback='') {
    global $post;
    if(function_exists($length_callback)){
        add_filter('excerpt_length', $length_callback);
    }
    if(function_exists($more_callback)){
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = ''.$output.'';
    echo $output;
}

if ( function_exists( 'add_theme_support' ) ) {
add_theme_support( 'post-thumbnails' );
// additional image sizes
// delete the next line if you do not need additional image sizes
add_image_size( 'component-image', 190, 9999 ); //300 pixels wide (and unlimited height)
add_image_size( 'component-image-30px', 190, 30 ); //300 pixels wide (and unlimited height)
add_image_size( 'journal-small', 260, 170);
}



remove_action( 'wp_version_check', 'wp_version_check' );
remove_action( 'admin_init', '_maybe_update_core' );
add_filter( 'pre_transient_update_core', create_function( '$a', "return null;"));
add_filter( 'pre_site_transient_update_core', create_function( '$a', "return null;"));
wp_clear_scheduled_hook( 'wp_version_check' );
remove_action( 'load-plugins.php', 'wp_update_plugins' );
remove_action( 'load-update.php', 'wp_update_plugins' );
remove_action( 'load-update-core.php', 'wp_update_plugins' );
//add_action('wp_head', 'do_feeds');
remove_action( 'admin_init', '_maybe_update_plugins' );
remove_action( 'wp_update_plugins', 'wp_update_plugins' );
add_filter( 'pre_transient_update_plugins', create_function( '$a', "return null;" ) );
add_filter( 'pre_site_transient_update_plugins', create_function( '$a', "return null;" ) );
wp_clear_scheduled_hook( 'wp_update_plugins' );
remove_action( 'load-themes.php', 'wp_update_themes' );
remove_action( 'load-update.php', 'wp_update_themes' );
remove_action( 'load-update-core.php', 'wp_update_themes' );
remove_action( 'admin_init', '_maybe_update_themes' );
remove_action( 'wp_update_themes', 'wp_update_themes' );
add_filter( 'pre_transient_update_themes', create_function( '$a', "return null;" ) );
add_filter( 'pre_site_transient_update_themes', create_function( '$a', "return null;" ) );
wp_clear_scheduled_hook( 'wp_update_themes' );

function wpsf_orderby( $query ) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
 // do conditional checks here and return on false.?

//    if ( is_category('uncategorized') ) {
	$term =	$query;
  //echo $query;
	//print_r($term);
	//	die();
	if(isset($term->is_tax) && $term->is_tax) {

		remove_action( 'pre_get_posts', __FUNCTION__ );
		add_filter( 'posts_orderby', function() { return ' post_title ASC'; } );
	}
//	}
}

//add_action( 'pre_get_posts', 'wpsf_orderby' );

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
      show_admin_bar(false);
    }
}

function register_page_sidebar(){
	register_sidebar( array(
		'name' => sprintf(__('Сайдбар страницы'), $i ),
		'id' => "page-sidebar",
		'description' => '',
		'class' => '',
		'before_widget' => '',
		'after_widget' => "",
		'before_title' => '',
		'after_title' => "",
	) );
}
add_action( 'widgets_init', 'register_page_sidebar' );


function page_widget($args) {
   extract($args);
   echo $before_widget;

   echo $before_title . 'Мой уникальный виджет' . $after_title;
   ?>

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



	<div id="events">
	<h3><a href="<?php echo get_category_link('46'); ?>">События</a></h3>
	<?php
$the_query = new WP_Query( 'cat=46&post_count=2' );
while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

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

	 <?php
   echo $after_widget;
}

wp_register_sidebar_widget(
	'your_widget_1',        // ID виджета
	'Виджет для страницы',           // Заголовок виджета
	'page_widget',  // Функция обратного вызова
	array(                  // Настройки
		'description' => 'Виджет для страниц (например "все новости" или "Сервис")'
	)
);

function _remove_script_version( $src ){
            $parts = explode( '?', $src );
            return $parts[0];
        }
        add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
        add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );

if (strpos($_SERVER['REQUEST_URI'], 'articles')===1){
add_theme_support( 'title-tag' );
  add_filter('document_title_parts', function( $parts ){
    $parts['title']=$parts['site']." - ".$parts['title'];
	if( isset($parts['site']) ) unset($parts['site']);
	return $parts;
});

}

/* Отключаем админ панель для всех, кроме администраторов. */
if (!current_user_can('administrator')):
  show_admin_bar(true);
endif;

add_action( 'wp_footer', 'mycustom_wp_footer' );

function mycustom_wp_footer() {

?>
  <script type="text/javascript">
    window.onload = function() {
document.addEventListener( 'wpcf7mailsent', function( event ) {
    if ( '10524' == event.detail.contactFormId ) {
        yaCounter31050146.reachGoal('consult');
        console.log('zapros_success'); ga('send', 'event', 'form', 'sent', 'zapros_success'); yaCounter31050146.reachGoal('zapros');
        console.log('zapros_submit'); ga('send', 'event', 'button', 'click', 'zapros_submit'); yaCounter31050146.reachGoal('zapros_submit');
    }
}, false );

document.addEventListener( 'wpcf7mailsent', function( event ) {
    if ( '109' == event.detail.contactFormId ) {
        yaCounter31050146.reachGoal('consult');
        console.log('zapros_success'); ga('send', 'event', 'form', 'sent', 'zapros_success'); yaCounter31050146.reachGoal('zapros');
        console.log('zapros_submit'); ga('send', 'event', 'button', 'click', 'zapros_submit'); yaCounter31050146.reachGoal('zapros_submit');
    }
}, false );

}
</script>
<?php
}


add_action('init', 'cptui_register_my_cpt_nashi_proekty');
function cptui_register_my_cpt_nashi_proekty() {
register_post_type('nashi-proekty', array(
'label' => 'nashi-proekty',
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => true,
'rewrite' => array('slug' => 'o-kompanii/nashi-proekty', 'with_front' => true),
'query_var' => true,
'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
'labels' => array (
  'name' => 'nashi-proekty',
  'singular_name' => '',
  'menu_name' => 'o-kompanii/nashi-proekty/',
  'add_new' => 'Add nashi-proekty',
  'add_new_item' => 'Add New nashi-proekty',
  'edit' => 'Edit',
  'edit_item' => 'Edit nashi-proekty',
  'new_item' => 'New nashi-proekty',
  'view' => 'View nashi-proekty',
  'view_item' => 'View nashi-proekty',
  'search_items' => 'Search nashi-proekty',
  'not_found' => 'No nashi-proekty Found',
  'not_found_in_trash' => 'No nashi-proekty Found in Trash',
  'parent' => 'Parent nashi-proekty',
)
) ); }


?>
