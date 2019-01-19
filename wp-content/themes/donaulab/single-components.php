<?php if($_GET['media']=="print") {
  include (TEMPLATEPATH.'/header_print.php');
} else { get_header(); } ?>
<div id="innerpages">
  <div id="bc">
    <?php if(function_exists('bcn_display'))
    { bcn_display(); }?>
  </div>



  <div class="clearfix">
   <div id="contentArea">

    <div id="logosmain" class="clearfix">

      <?php get_template_part('categories'); ?>

      <!-- // Catalog Unit -->
      <div class="right">


        <script type="text/javascript">

          jQuery(document).ready(function($){
           jQuery('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows:false,
            fade: true,
            asNavFor: '.slider-nav',
            dots:false

          });
           jQuery('.slider-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            centerMode: true,
            focusOnSelect: true,
            arrows: true,
            autoplay: false,
            vertical: true,
            prevArrow: $('.prevs'),
            nextArrow: $('.nexts'),

            responsive: [
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 3,
              }
            }
            ]

          });



         });
       </script>



       <style type="text/css">

       @media (max-width: 1030px) {
        .slider_col, .button_col {
          width: 100% !important;
        }
        .button_col div {
          display: inline-block;
        }
        .button_col {
          text-align: center !important;
        }
      }

      @media (max-width: 600px) {
        .slider_main_img {
          height: 300px !important;
        }
        .button_col {
          height: auto !important;
        }
        .slider-nav-col {
          width: 22% !important;
          margin-top: 35px !important;
        }
        .button_col {
          text-align: center !important;
        }

      }

      .slider_col {
        width: 75%;
        display: inline-block;
        font-size: 0px;
      }
      .button_col {
        vertical-align: top;
        text-align: right;
        width: 25%;
        display: inline-block;
        font-size: 0px;
        height: 200px;
        font-size: 14px !important;
      }
      .slider-for {
        background-color: #F6F6F6;
        width: 70%;
        margin-right: 20px;
        display: inline-block;
      }
      .slider-nav {
        overflow: hidden;
      }
      .slider-nav-col {
        position: relative;
        float: none;
        vertical-align: top;
        margin-top: 46px;
        width: 15%;
        display: inline-block;
      }
      .slider-nav img {
        max-height: 100px;
      }
      .slick-prev, .slick-next {
        background-color: red;
        z-index: 111;
      }
      .slider-nav img {
        margin: auto;
      }
      .slick-slide img {
        width: 100%;
        height: auto;
      }
      .slick-initialized .slick-slide {
        vertical-align: middle;
        display: inline-block;
        float: none;
      }
      .scroll_x {
        max-width: 100% !important;
      }
      .nexts {
        left: 50%;
        transform: translate(-50%);
        background-image: none;
        z-index: 111;
        position: absolute;
        margin: 0;
        background-image: none;
        width: 60px;
        height: 30px;
        border-top: solid 30px #ddd;
        border-left: solid 30px transparent;
        border-right: solid 30px transparent;
        z-index: 111;
        position: absolute;
        bottom: -10px;
        margin: 0;
      }
      .prevs {
        left: 50%;
        transform: translate(-50%);
        background-image: none;
        z-index: 111;
        position: absolute;
        margin: 0;
        background-image: none;
        width: 60px;
        height: 30px;
        border-bottom: solid 30px #ddd;
        border-left: solid 30px transparent;
        border-right: solid 30px transparent;
        z-index: 111;
        position: absolute;
        top: -40px;
        margin: 0;
      }
      .slider_main_img {
        background-size: cover;
        background-repeat: no-repeat;
        height: 400px;
        background-position: 50% 50%;
        -webkit-print-color-adjust: exact;
      }
      .slick-current {
        position: relative;
      }
      .slider-nav .slick-current div:before{
        position: absolute;
        content: '';
        background-color: rgba(0, 107, 183, 0.2);
        width: 100%;
        height: 100%;
        left: 0;
        top:0;
      }
      .slider-nav .slick-slide {
        margin: 5px 0px;
      }
      .slider_nav_img {
       background-size: cover;
       background-repeat: no-repeat;
       height: 65px;
       border:1px solid #ddd;
     }
     .slick-list {
      padding: 0 !important;

    }
    .slider_and_button_main_col {
     width: 100%;
     font-size: 0px;
     padding: 0 0 0 20px;
   }
 </style>





 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <h1 style="padding-left: 20px; display:block;"><?php the_title(); ?></h1>   





  <div class="slider_and_button_main_col">

    <div class="slider_col">


<?php  //add me in

//Fields

//slider_portfolio = Gallery Field

$images = get_field('slider_portfolio');

if( $images ): ?>

      <div class="slider-for">

        <?php foreach( $images as $image ): ?>
          <div class="slick-container">

            <a href="<?php echo $image['url']; ?>" rel="lightbox">

              <div class="slider_main_img" style="background-image: url(<?php echo $image['url']; ?>);"></div>

            </a>
          </div>
        <?php endforeach; ?>
      </div>


      <div class="slider-nav-col">

        <div class="prevs">1</div>
        <div class="nexts">2</div>

        <div class="slider-nav">
          <?php foreach( $images as $image ): ?>
            <div>

              <div class="slider_nav_img" style="background-image: url(<?php echo $image['url']; ?>);"></div>



            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <?php else: ?>


      <!-- // Gallery -->
      <div class="unit-img">

<div class="img">
      <?php
            if ( has_post_thumbnail() ) { ?>
            <?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
               echo '<a href="' . $large_image_url[0] . '" rel="lightbox" title="' . the_title_attribute('echo=0') . '" >'; ?>
            <?php  the_post_thumbnail('component-image', array('alt' => the_title_attribute('echo=0'))); ?>
            </a>
            <?php } else { ?>
            <a href="#"><img src="<?php bloginfo('template_url')?>/images/nophoto.png" alt=""></a>
        <?php } ?>
</div>

<div>

</div>

    </div>
      <!-- Gallery // -->

      <?php endif; ?>

    </div>

    <div class="button_col">

      <div class="sendNow">
        <a href="#fancyboxID-1" onclick="console.log('zakazat_oborudovanie_click'); ga('send', 'event', 'button', 'click', 'zakazat_oborudovanie_click'); yaCounter31050146.reachGoal('zakazat_oborudovanie_click')" class="fancybox-inline">Заказать оборудование</a>
      </div>

      <div class="print_button">
        <a target="_blank" href="<?php the_permalink(); ?>?media=print" rel="nofollow" class="bttn_brdr bttn_print">Версия для печати</a>
      </div>
    </div>
  </div>






















<div class="cat-unit" id="post-<?php the_ID(); ?>">



  <!-- // Description -->
  <div class="unit-description">



    <div style="display:none" class="fancybox-hidden">
      <div id="fancyboxID-1" class="hentry" >
        <?php echo do_shortcode( '[contact-form-7 id="10524" title="ЗАКАЗАТЬ ОБОРУДОВАНИЕ"]' ); ?>
      </div>
    </div>

    <div class="cTab" id="cTab3">
      <div class="tabsData">
        <ul><?php echo get_the_term_list( $post->ID, 'methods', '<li>', ',</li><li>', '</li>' ); ?></ul>
      </div>
    </div>

    <!-- // Unit Tabbed  -->
    <div class="unit_tabbed">

      <ul class="tabs clearfix">
        <li class="selected"><a href="#view_01">описание</a></li>
        <li class=""><a href="#view_02">характеристики</a></li>
        <li class=""><a href="#view_03">видео</a></li>
        <li class=""><a href="#view_04">загрузки</a></li>
      </ul>

      <div class="panel-container">

       <!-- // Tab 1 -->
       <div id="view_01">
         <?php the_field('cdesc'); ?>
       </div>

       <!-- // Tab 2 -->
       <div id="view_02">
         <div class="scroll_x">
           <?php the_field('ctech'); ?>
         </div>
       </div>

       <!-- // Tab 3 -->
       <div id="view_03">
         <?php if(get_post_meta($post->ID, "cmov", true)) { ?>
           <div itemscope itemtype="http://schema.org/VideoObject">
            <h2><?php if(get_field('название_видео')) { the_field('название_видео'); } ?></h2>
            <p><?php the_field('cmov'); ?></p>
            <div itemprop="description"><?php if(get_field('описание_видео')) { the_field('описание_видео'); } ?></div>
          </div>
        <?php } ?>
      </div>

      <!-- // Tab 4 -->
      <div id="view_04">
        <?php if(get_field('загрузки') != '') { ?>
          <div class="titleDown">
            <? function pippin_get_image_id($image_url) {
              global $wpdb;
              $attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $image_url ));
              return $attachment[0];
            } ?>
            <?php
            $qwe = explode('<a', get_field('загрузки'));
            $pl = 1;
            while ($qwe[$pl] != '') {
              echo '<p><a download'.$qwe[$pl].'</p>';
              echo '<table class="tbDownload">';
              echo '<tr><td class="tdDownload"><a class="cpdf"'.$lp[0].'"></a></td>';
              $lp = explode('">', $qwe[$pl]);
              $spl = explode('="', $lp[0]);
//print_r($spl);
              $postid = pippin_get_image_id( $spl[1] );
              if(!$postid) {
                $nspl = explode('" ', $spl[1]);
                $postid = pippin_get_image_id( $nspl[0] );
              }
              $post = get_post($postid);
//echo $postid;
              echo '<td class="opisanie">'.$post->post_content.'</td></tr>';
              echo '</table>';
              $pl++;
            }
            wp_reset_query();
            ?>
          </div>
        <?php } ?>
      </div>
      <!-- Tab 4 // -->

    </div>

  </div>
  <!-- Unit Tabbed // -->

</div>

<?php endwhile; ?>
<?php endif; ?>

</div>


<div style="clear:both;"></div>
<?php get_template_part('slider_connected_tovar'); ?>

</div>
<!-- // Catalog Unit -->


<script src="<?php bloginfo('template_url'); ?>/js/tabbed/tabcontent.js"></script>

</div>
</div>
</div>
</div> <!--//content-->

<?/*php get_template_part('journal_slider_new'); */?>

<?php if($_GET['media']=="print") {
  include (TEMPLATEPATH.'/footer_print.php');
} else { get_footer(); } ?>
