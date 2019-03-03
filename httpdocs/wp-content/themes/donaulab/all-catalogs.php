
<?php
/*
 * Template Name: all-catalogs
 */
?>

<?php wp_head(); ?>

<!DOCTYPE html>
<html lang="ru-RU" prefix="og: http://ogp.me/ns#">
<head profile="http://gmpg.org/xfn/11">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Dоnau Lаb Moscоw - Официальный сайт лабораторного оборудования в Москве</title>
  <link rel="shortcut icon" href="/images/favicon.ico">

  <meta name="description" content="Официальный сайт компании АО «Донау Лаб Москва». Российский представитель компании Donau Lab AG. Продажа лабораторного оборудования, комплексное оснащение лабораторий."/>
  <meta name="keywords" content="лабораторное оборудование, Донау Лаб, Donau Lab, официальный сайт"/>

<?/*
<link rel="stylesheet" type="text/css" href="/wp-content/themes/donaulab/style.css">
<link rel="stylesheet" type="text/css" href="/wp-content/themes/donaulab/reset.css">
<link rel="stylesheet" type="text/css" href="/wp-content/themes/donaulab/journal-styles.css">



*/?>
<link rel="stylesheet" id="rs-plugin-settings-css"  href="/wp-content/plugins/revslider/public/assets/css/settings.css" type="text/css" media="all">
<link rel="stylesheet" id="wp-pagenavi-css"  href="/wp-content/plugins/wp-pagenavi/pagenavi-css.css" type="text/css" media="all">
<link rel="stylesheet" id="fancybox-css"  href="/wp-content/plugins/easy-fancybox/fancybox/jquery.fancybox-1.3.7.css" type="text/css" media="screen">



<!-- <script type="text/javascript" src="/js/jquery.js"></script> -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<!-- <script
        src="http://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script> -->
        <!-- <script type="text/javascript" src="http://donaulab.ru/wp-content/themes/donaulab/js/jquery.easing.1.3.js"></script> -->
        <script type="text/javascript" src="http://donaulab.ru/js/jquery.js"></script>
        <script type="text/javascript" src="http://donaulab.ru/js/jquery.session.js"></script>

        <!-- <script src="/wp-content/themes/donaulab/js/dm-modal.js"></script> -->

        <link rel="stylesheet" href="/wp-content/themes/donaulab/css/catalogs.css">

        <!-- <script type="text/javascript" src="main.js"></script> -->
        <!-- <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script> -->
        <!-- <script src="//yastatic.net/share2/share.js"></script> -->
        <!-- Easy FancyBox 1.5.7 using FancyBox 1.3.7 - RavanH (http://status301.net/wordpress-plugins/easy-fancybox/) -->

        <!-- <script type='text/javascript' src='/wp-content/plugins/easy-fancybox/fancybox/jquery.fancybox-1.3.7.js'></script> -->
        <!-- <script type='text/javascript' src='/wp-content/plugins/easy-fancybox/jquery.easing.pack.js'></script> -->
        <!-- <script type='text/javascript' src='/wp-content/plugins/easy-fancybox/jquery.mousewheel.min.js'></script> -->







<?/*
<script type="text/javascript">
jQuery(document).on('ready post-load', easy_fancybox_handler );
</script>
  <script type="text/javascript">
    (function() {
      var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?'+cs+'(\\s+|$)');
      request = true;
      b[c] = b[c].replace( rcs, ' ' );
      b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;
    }());
  </script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

*/?>

</head>


<script type="text/javascript">

  function Animate2id(data,ease){ //the id to animate, the easing type
    $('.hide-node').hide();

    $('.file-hidden').each(function(){
      if($(this).data('prof') == ""+data+""){
        $(this).show('slow');
      }
    });


    // var animSpeed=2000; //set animation speed
    // var $container=$("#container"); //define the container to move
    // if(ease){ //check if ease variable is set
    //     var easeType=ease;
    // } else {
    //     var easeType="easeOutQuart"; //set default easing type
    // }
    // //do the animation
    // $container.stop().animate({"left": -($(id).position().left)}, animSpeed, easeType);

  }




</script>

<body class="home blog logged-in admin-bar no-customize-support">

  <div class="conteiner">

    <!-- // Seminar content -->
    <div class="seminar-content">

      <div class="sem_intro">
        <div class="sem_logo">
          <div><a href="http://donaulab.ru"  target="_blank"><img src="http://donaulab.ru/wp-content/themes/donaulab/img/logo-1.jpg" alt="" /></a></div>
        </div>
      </div>




      <div class="prew_text">
        <p>На этой странице Вы можете скачать каталоги в формате PDF, для более детального изучения нашей продукции.</p>
      </div>









      <div class="tabscontainer">

       <div class="tabs">
         <div class="tab selected first" id="tab_menu_1">
           <div class="link">Общие каталоги</div>
           <div class="arrow"></div>
         </div>
         <div class="tab" id="tab_menu_2">
           <div class="link">Каталоги по производителю</div>
           <div class="arrow"></div>
         </div>
         <div class="tab last" id="tab_menu_3">
           <div class="link">Каталоги по назначению</div>
           <div class="arrow"></div>
         </div>
       </div><!-- tabs -->




       <div class="curvedContainer">
        <div class="tabcontent" id="tab_content_1" style="display:block">
          <h1>Общие каталоги</h1>
          <div class="enum-file stacked">


           <?php $arg = array(
            'post_type'     => 'catalogs', /*<-- Enter name of Custom Post Type here*/
            'order'       => 'ASC',
            'orderby'     => 'menu_order',
            'posts_per_page'    => -1
          );
           $the_query = new WP_Query( $arg ); ?>



           <?php

           function rus2translit($text)
           {
           	// Русский алфавит
           	$rus_alphabet = array(
           		'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й',
           		'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф',
           		'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я',
           		'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й',
           		'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф',
           		'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я'
           	);

           	// Английская транслитерация
           	$rus_alphabet_translit = array(
           		'A', 'B', 'V', 'G', 'D', 'E', 'IO', 'ZH', 'Z', 'I', 'I',
           		'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F',
           		'H', 'C', 'CH', 'SH', 'SH', '`', 'Y', '`', 'E', 'IU', 'IA',
           		'a', 'b', 'v', 'g', 'd', 'e', 'io', 'zh', 'z', 'i', 'i',
           		'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f',
           		'h', 'c', 'ch', 'sh', 'sh', '`', 'y', '`', 'e', 'iu', 'ia'
           	);

           	$res = str_replace($rus_alphabet, $rus_alphabet_translit, $text);
            return substr($res, 0, 10);
           }

          //echo rus2translit("Аналитическое оборудование");

           ?>

           <?if ( $the_query->have_posts() ) : ?>
            <div id="post-type" class="post-type">

<pre><?// print_r($the_query);?></pre>

              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); $do_not_duplicate = $post->ID; ?><!-- BEGIN of Post -->

                <?php

                $file_url = get_field('file_url');
                $file_name = get_field('file_name');
                $catalog_target = get_field('catalog_target');
                $miniature_photo = get_field('miniature_photo');
                $true_false = get_field('true_false');

                if($true_false[0] !== 'yes') continue;
                $brand_name = get_field('brand_name');
                if($brand_name == 'buchi') { $noindex_a = "<noindex>"; $noindex_b = "</noindex>";} else {$noindex_a = ""; $noindex_b = "";}
                $url = wp_get_attachment_url( $file_url );
                $filesize = filesize( get_attached_file( $file_url ) );
                $filesize = size_format($filesize, 2);
                $path_info = pathinfo( get_attached_file( $file_url ) );
                ?>
<? if($miniature_photo == "") $miniature_photo = "http://donaulab.ru/wp-content/uploads/2019/01/noimage-48x68.jpg";?>

              <?=$noindex_a;?><div class="file-node" style="background:url(<?php echo $miniature_photo; ?>) no-repeat;">
                 <a class="file-label" href="<?php echo $url; ?>" data-href="<?php echo $url; ?>" title="<?php echo $file_name; ?>"><?php echo $file_name; ?></a>
                 <div class="file-spec">(<?php echo $path_info['extension']; ?>, <?php echo $filesize; ?>)</div>
               </div><?=$noindex_b;?>


             <?php endwhile; ?><!-- END of Post -->
           </div><!-- END of .post-type -->
         <?php endif; wp_reset_query(); ?>



         <!-- <div class="file-node" style="background:url(http://www.millab.ru/files/upload/khimiya.png) no-repeat;">
           <a class="file-label" href="http://donaulab.ru/wp-content/uploads/Rukovodstvo_po_ekspluatatsii_EUROSTAR_200_200_P4_control.pdf" title="Оборудование для химических и&nbsp;испытательных лабораторий">Оборудование для химических и&nbsp;испытательных лабораторий</a>
           <div class="file-spec">(PDF, 24.5 Mb)</div>
         </div> -->



       </div><!-- enum-file stacked -->

     </div><!-- tab_content_1 -->



     <div class="tabcontent" id="tab_content_2">
      <h1>Каталоги по производителю</h1>
      <div class="node-wrap">


<?if ( $the_query->have_posts() ) : ?>
<? $array_norepeat = [];?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); $do_not_duplicate = $post->ID; ?><!-- BEGIN of Post -->

  <?php
  $file_url = get_field('file_url');
  $file_name = get_field('file_name');
  $catalog_target = get_field('catalog_target');
  $brand_name = get_field('brand_name');
  $brand_img = get_field('brand_img');
  $miniature_photo = get_field('miniature_photo');
  $true_false = get_field('true_false');
  if($brand_name == 'buchi') { $noindex_a = "<noindex>"; $noindex_b = "</noindex>";} else {$noindex_a = ""; $noindex_b = "";}

  $url = wp_get_attachment_url( $file_url );
  $filesize = filesize( get_attached_file( $file_url ) );
  $filesize = size_format($filesize, 2);
  $path_info = pathinfo( get_attached_file( $file_url ) );
  ?>
  <? if($brand_img == "") $brand_img = "http://donaulab.ru/wp-content/uploads/2019/01/noimage-300x200.jpg";?>

  <? if (in_array($brand_name, $array_norepeat)) continue; ?>
  <? $array_norepeat[] = $brand_name;?>

  <?=$noindex_a;?><div class="producer-node" onClick="Animate2id('<?=rus2translit($brand_name);?>'); return false">
    <a href="#top_wrapper"><img class="" src="<?=$brand_img;?>" alt="<?=$brand_name;?>"></a>
  </div><?=$noindex_b;?>



<?php endwhile; ?><!-- END of Post -->
<?php endif; wp_reset_query(); ?>

        <div class="producer-node-bnt">
          <button class="btn-show-all" style="display: none;">Показать все Бренды</button>
        </div>

      </div><!-- node-wrap -->



      <div class="enum-file stacked" id="top_wrapper">

<?if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); $do_not_duplicate = $post->ID; ?><!-- BEGIN of Post -->

  <?php
  $file_url = get_field('file_url');
  $file_name = get_field('file_name');
  $catalog_target = get_field('catalog_target');
  $brand_name = get_field('brand_name');
  $brand_img = get_field('brand_img');
  $miniature_photo = get_field('miniature_photo');
  $true_false = get_field('true_false');
  if($brand_name == 'buchi') { $noindex_a = "<noindex>"; $noindex_b = "</noindex>";} else {$noindex_a = ""; $noindex_b = "";}
  $url = wp_get_attachment_url( $file_url );
  $filesize = filesize( get_attached_file( $file_url ) );
  $filesize = size_format($filesize, 2);
  $path_info = pathinfo( get_attached_file( $file_url ) );
  ?>

<? if($miniature_photo == "") $miniature_photo = "http://donaulab.ru/wp-content/uploads/2019/01/noimage-48x68.jpg";?>

  <?=$noindex_a;?><div class="file-node file-hidden hide-node" data-prof="<?=rus2translit($brand_name);?>" style="background:url(<?php echo $miniature_photo; ?>) no-repeat;">
     <a class="file-label" href="<?php echo $url; ?>" data-href="<?php echo $url; ?>" title="<?php echo $file_name; ?>"><?php echo $file_name; ?></a>
     <div class="file-spec">(<?php echo $path_info['extension']; ?>, <?php echo $filesize; ?>)</div>
   </div><?=$noindex_b;?>


<?php endwhile; ?><!-- END of Post -->
<?php endif; wp_reset_query(); ?>


      </div>

    </div><!-- tab_content_2 -->



    <div class="tabcontent" id="tab_content_3">
      <h1>Каталоги по назначению</h1>

      <?if ( $the_query->have_posts() ) : ?>
      <? $array_norepeat_menu = [];?>
      <div id="menu">
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); $do_not_duplicate = $post->ID; ?><!-- BEGIN of Post -->

        <?php
        $file_url = get_field('file_url');
        $file_name = get_field('file_name');
        $catalog_target = get_field('catalog_target');
        $brand_name = get_field('brand_name');
        $brand_img = get_field('brand_img');
        $miniature_photo = get_field('miniature_photo');
        $true_false = get_field('true_false');

        $url = wp_get_attachment_url( $file_url );
        $filesize = filesize( get_attached_file( $file_url ) );
        $filesize = size_format($filesize, 2);
        $path_info = pathinfo( get_attached_file( $file_url ) );
        ?>

        <? if (in_array($catalog_target, $array_norepeat_menu)) continue; ?>
        <? $array_norepeat_menu[] = $catalog_target;?>

        <a href="#" onClick="Animate2id('<?=rus2translit($catalog_target);?>'); return false" title=""><?=$catalog_target;?></a>


      <?php endwhile; ?><!-- END of Post -->
      </div><!--END #menu-->
      <?php endif; wp_reset_query(); ?>

      <div class="enum-file stacked">

        <?if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); $do_not_duplicate = $post->ID; ?><!-- BEGIN of Post -->

          <?php
          $file_url = get_field('file_url');
          $file_name = get_field('file_name');
          $catalog_target = get_field('catalog_target');
          $brand_name = get_field('brand_name');
          $brand_img = get_field('brand_img');
          $miniature_photo = get_field('miniature_photo');
          $true_false = get_field('true_false');
          if($brand_name == 'buchi') { $noindex_a = "<noindex>"; $noindex_b = "</noindex>";} else {$noindex_a = ""; $noindex_b = "";}
          $url = wp_get_attachment_url( $file_url );
          $filesize = filesize( get_attached_file( $file_url ) );
          $filesize = size_format($filesize, 2);
          $path_info = pathinfo( get_attached_file( $file_url ) );
          ?>

          <? if($miniature_photo == "") $miniature_photo = "http://donaulab.ru/wp-content/uploads/2019/01/noimage-48x68.jpg";?>


        <?=$noindex_a;?><div class="file-node file-hidden hide-node" data-prof="<?=rus2translit($catalog_target);?>" style="background:url(<?php echo $miniature_photo; ?>) no-repeat;">
           <a class="file-label" href="<?php echo $url; ?>" data-href="<?php echo $url; ?>" title="<?php echo $file_name; ?>"><?php echo $file_name; ?></a>
           <div class="file-spec">(<?php echo $path_info['extension']; ?>, <?php echo $filesize; ?>)</div>
         </div><?=$noindex_b;?>


        <?php endwhile; ?><!-- END of Post -->
        <?php endif; wp_reset_query(); ?>





        <!-- <div class="file-node file-hidden hide-node" data-prof="microbiology" style="background:url(http://www.millab.ru/files/upload/khimiya.png) no-repeat;">
          <a class="file-label" href="#" data-href="http://donaulab.ru/wp-content/uploads/Rukovodstvo_po_ekspluatatsii_EUROSTAR_200_200_P4_control.pdf" title="Каталог лабораторного оборудования для анализа нефти и&nbsp;нефтепродуктов">Каталог лабораторного оборудования для анализа нефти и&nbsp;нефтепродуктов</a>
          <div class="file-spec">(PDF, 14.0 Mb)</div>
        </div> -->



      </div><!-- enum-file stacked -->

    </div><!-- tab_content_3 -->


  </div>
</div> <!-- tabscontainer -->



<!-- <a name="sem-forma"></a> -->



<footer>
  <p>Если у вас возникли вопросы, вы всегда можете <br>
    позвонить нам по тел. <b>+7 (495) 255 33 89</b> <br>
    или написать <b>info@donaulab.ru</b></p>
    <div class="sem-footer">
      <a href="http://donaulab.ru">Перейти на корпоративный сайт "Донау Лаб. Москва"</a>
    </div>
  </footer>


</div><!-- // Seminar content -->
</div><!-- .conteiner // -->





<script>
  $(document).ready(function() {

    var ELEM_TO_DL,interv,datahref;
    var FLAG = false;
    var CATALOG_NAME = "";

    $('#menu > a').click(function(){
      var this_elem = $(this);
      $('#menu > a').removeClass('current');
      this_elem.addClass('current');
    });



    $('.btn-show-all').click(function(){
      $('.producer-node').show(1000);
      $(this).hide();
      $('.hide-node').hide();
    });

    $(".producer-node a[href^='#']").click(function(){
      var _href = $(this).attr("href");
      $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
      $('.save').removeClass('save');
      $(this).closest('.producer-node').addClass('save');
      $('.producer-node:not(".save")').hide(1000);
      $('.btn-show-all').show();

      return true;
    });

    $(".tabs .tab[id^=tab_menu]").hover(function() {
      var curMenu=$(this);
      $(".tabs .tab[id^=tab_menu]").removeClass("selected");
      curMenu.addClass("selected");

      var index=curMenu.attr("id").split("tab_menu_")[1];
      $(".curvedContainer .tabcontent").css("display","none");
      $(".curvedContainer #tab_content_"+index).css("display","block");
    });


    function success_send_form(elem){
      if(!isset(elem)) error("elem не существует");
      elem.attr('href', datahref).attr('download','');
      elem.removeAttr('data-href');
      console.log('ссылки заменены');
      elem = null;
    }

    function isset(elem){
      if(typeof(elem) != "undefined" && elem !== null) return true;
      return false;
    }

    function error(alam){
      clearInterval(interv);
      alert(alam);
      return false;
    }


    $('.file-node a').each(function(){
      $(this).attr('href','#');
    });

    // точка старта
    function open_link(){
      $('a.file-label[data-href]').click(function(){
        console.log('link click form open');
        console.log('CATALOG_NAME = '+$(this).text());
        CATALOG_NAME = $(this).text();
        ELEM_TO_DL = $(this);
        datahref = ELEM_TO_DL.data('href');
        pupupStart();

      });
    }
    open_link();
    $('.hide-node').hide();

    function pupupStart(){

      if(!ELEM_TO_DL.is('[data-href]')) return false;
          $('#overlay').fadeIn(400, // снaчaлa плaвнo пoкaзывaем темную пoдлoжку
          function(){ // пoсле выпoлнения предъидущей aнимaции
            $('#modal_form')
              .css('display', 'block') // убирaем у мoдaльнoгo oкнa display: none;
              .animate({opacity: 1, top: '35%'}, 200); // плaвнo прибaвляем прoзрaчнoсть oднoвременнo сo съезжaнием вниз
            });
          setTimeout(function(){
          	$('input[name=catalog]').val(CATALOG_NAME).attr('disabled',false);
          },1500);
        }



  // Обработка ответа формы
  $('.new_form form input[type="submit"]').click(function(){

    interv = setInterval(function(){
      var i = 0;
      console.log(i++);
      if($('.wpcf7-response-output:contains("скачать")').length > 0){
           // здесь надо запустить по закритию окна скрипт открытия ссылки
           console.log('разрешается скачать');
           success_send_form(ELEM_TO_DL);
           clearInterval(interv);
           return true;
         }
         else if($('.wpcf7-response-output:contains("Ошибка")').length > 0){
          console.log("ошибка ввода данных");
          clearInterval(interv);
          return false;
        }
      },2000);

  });

  /* Зaкрытие мoдaльнoгo oкнa, тут делaем тo же сaмoе нo в oбрaтнoм пoрядке */
  $('#modal_close, #overlay').click( function(event){ // лoвим клик пo крестику или пoдлoжке
    //console.log('сработал клик');
    //event.preventDefault(); // выключaем стaндaртную рoль элементa
    // return false;
    $('#modal_form')
      .animate({opacity: 0, top: '25%'}, 200,  // плaвнo меняем прoзрaчнoсть нa 0 и oднoвременнo двигaем oкнo вверх
        function(){ // пoсле aнимaции
          $(this).css('display', 'none'); // делaем ему display: none;
          $('#overlay').fadeOut(400); // скрывaем пoдлoжку
        }
        );
    });






});
</script>




<div id="modal_form"><!-- Сaмo oкнo -->
  <span id="modal_close">X</span> <!-- Кнoпкa зaкрыть -->
  <div id="sem-zayavka1" class="new_form">
    <h3>Скачивание Каталога</h3>
    <?php echo do_shortcode('[contact-form-7 id="20832" title="Скачать каталог"]'); ?>

  </div>
</div>
<div id="overlay"></div><!-- Пoдлoжкa -->



<?php wp_footer(); ?>


</body>
</html>
