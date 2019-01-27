
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
  <div class="tabscontainer">
  <div class="left_side"></div>
    <div class="right_side"><p>На этой странице Вы можете скачать каталоги в формате PDF, для более детального изучения нашей продукции.</p></div>
  </div>
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


            <div class="file-node" style="background:url(http://www.millab.ru/files/upload/khimiya.png) no-repeat;">
          	<a class="file-label" href="temp-link" data-href="http://donaulab.ru/wp-content/uploads/Rukovodstvo_po_ekspluatatsii_EUROSTAR_200_200_P4_control.pdf" title="Оборудование для химических и&nbsp;испытательных лабораторий">Оборудование для химических и&nbsp;испытательных лабораторий</a>
          	<div class="file-spec">(PDF, 24.5 Mb)</div>
            </div>


            <div class="file-node" style="background:url(http://www.millab.ru/files/upload/khimiya.png) no-repeat;">
          	<a class="file-label" href="#" data-href="http://donaulab.ru/wp-content/uploads/Rukovodstvo_po_ekspluatatsii_EUROSTAR_200_200_P4_control.pdf" title="Каталог лабораторного оборудования для анализа нефти и&nbsp;нефтепродуктов">Каталог лабораторного оборудования для анализа нефти и&nbsp;нефтепродуктов</a>
          	<div class="file-spec">(PDF, 14.0 Mb)</div>
            </div>


            <div class="file-node" style="background:url(http://www.millab.ru/files/upload/khimiya.png) no-repeat;">
          	<a class="file-label" href="#" data-href="http://donaulab.ru/wp-content/uploads/Rukovodstvo_po_ekspluatatsii_EUROSTAR_200_200_P4_control.pdf" title="Оборудование и&nbsp;решения для исследовательского и&nbsp;пилотного синтеза">Оборудование и&nbsp;решения для исследовательского и&nbsp;пилотного синтеза</a>
          	<div class="file-spec">(PDF, 3.3 Mb)</div>
            </div>


          </div><!-- enum-file stacked -->

        </div><!-- tab_content_1 -->



        <div class="tabcontent" id="tab_content_2">
        <h1>Каталоги по производителю</h1>
          <div class="node-wrap">

            <div class="producer-node">
              <a href="files/19/">
              <img class="" src="http://www.millab.ru/files/upload/asahi_132.png" alt="Asahi Glassplant Inc.">
              </a>
            </div>

            <div class="producer-node">
              <a href="files/19/">
              <img class="" src="http://www.millab.ru/files/upload/asahi_132.png" alt="Asahi Glassplant Inc.">
              </a>
            </div>

            <div class="producer-node">
              <a href="files/19/">
              <img class="" src="http://www.millab.ru/files/upload/asahi_132.png" alt="Asahi Glassplant Inc.">
              </a>
            </div>

            <div class="producer-node">
              <a href="files/19/">
              <img class="" src="http://www.millab.ru/files/upload/asahi_132.png" alt="Asahi Glassplant Inc.">
              </a>
            </div>

            <div class="producer-node">
              <a href="files/19/">
              <img class="" src="http://www.millab.ru/files/upload/asahi_132.png" alt="Asahi Glassplant Inc.">
              </a>
            </div>

            <div class="producer-node">
              <a href="files/19/">
              <img class="" src="http://www.millab.ru/files/upload/asahi_132.png" alt="Asahi Glassplant Inc.">
              </a>
            </div>

            <div class="producer-node">
              <a href="files/19/">
              <img class="" src="http://www.millab.ru/files/upload/asahi_132.png" alt="Asahi Glassplant Inc.">
              </a>
            </div>

            <div class="producer-node">
              <a href="files/19/">
              <img class="" src="http://www.millab.ru/files/upload/asahi_132.png" alt="Asahi Glassplant Inc.">
              </a>
            </div>

            <div class="producer-node">
              <a href="files/19/">
              <img class="" src="http://www.millab.ru/files/upload/asahi_132.png" alt="Asahi Glassplant Inc.">
              </a>
            </div>

            <div class="producer-node">
              <a href="files/19/">
              <img class="" src="http://www.millab.ru/files/upload/asahi_132.png" alt="Asahi Glassplant Inc.">
              </a>
            </div>

            <div class="producer-node">
              <a href="files/19/">
              <img class="" src="http://www.millab.ru/files/upload/asahi_132.png" alt="Asahi Glassplant Inc.">
              </a>
            </div>

            <div class="producer-node">
              <a href="files/19/">
              <img class="" src="http://www.millab.ru/files/upload/asahi_132.png" alt="Asahi Glassplant Inc.">
              </a>
            </div>

            <div class="producer-node">
              <a href="files/19/">
              <img class="" src="http://www.millab.ru/files/upload/asahi_132.png" alt="Asahi Glassplant Inc.">
              </a>
            </div>

            <div class="producer-node">
              <a href="files/19/">
              <img class="" src="http://www.millab.ru/files/upload/asahi_132.png" alt="Asahi Glassplant Inc.">
              </a>
            </div>

            <div class="producer-node">
              <a href="files/19/">
              <img class="" src="http://www.millab.ru/files/upload/asahi_132.png" alt="Asahi Glassplant Inc.">
              </a>
            </div>

            <div class="producer-node">
              <a href="files/19/">
              <img class="" src="http://www.millab.ru/files/upload/asahi_132.png" alt="Asahi Glassplant Inc.">
              </a>
            </div>

            <div class="producer-node">
              <a href="files/19/">
              <img class="" src="http://www.millab.ru/files/upload/asahi_132.png" alt="Asahi Glassplant Inc.">
              </a>
            </div>



          </div><!-- node-wrap -->

        </div><!-- tab_content_2 -->



		<div class="tabcontent" id="tab_content_3">
        <h1>Каталоги по назначению</h1>

        <div id="menu">
        <a href="#" onClick="Animate2id('analitics'); return false" title="Перейти к содержанию 1-ого элемента. Тип easing: default">Аналитика</a>
        <a href="#" onClick="Animate2id('microbiology'); return false" title="Перейти к содержанию 2-ого элемента.Тип easing: easeInOutExpo">Микробиология</a>
        <a href="#" onClick="Animate2id('analiznefty'); return false" title="Перейти к содержанию 3-ого элемента. Тип easing: easeOutQuint">Анализ нефти и нефтепродуктов</a>
        <a href="#" onClick="Animate2id('testmaterials'); return false" title="Перейти к содержанию 4-ого элемента. Тип easing type: easeOutElastic">Испытания материалов</a>
        <a href="#" onClick="Animate2id('sintez'); return false" title="Перейти к содержанию 5-ого элемента. Тип easing type: easeOutBack">Синтез</a>
        <a href="#" onClick="Animate2id('tempo'); return false" title="Перейти к содержанию 6-ого элемента. Тип easing type: easeOutBounce">Термообработка</a>
        <a href="#" onClick="Animate2id('vacum'); return false" title="Перейти к содержанию 6-ого элемента. Тип easing type: easeOutBounce">Вакуумная техника</a>
        <a href="#" onClick="Animate2id('obshelaborat'); return false" title="Перейти к содержанию 6-ого элемента. Тип easing type: easeOutBounce">Общелабораторное оборудование</a>
        <a href="#" onClick="Animate2id('laboratmebel'); return false" title="Перейти к содержанию 6-ого элемента. Тип easing type: easeOutBounce">Лабораторная мебель</a>
        </div>

          <div class="enum-file stacked">


            <div class="file-node file-hidden hide-node" data-prof="analitics" style="background:url(http://www.millab.ru/files/upload/khimiya.png) no-repeat;">
            <a class="file-label" href="temp-link" data-href="http://donaulab.ru/wp-content/uploads/Rukovodstvo_po_ekspluatatsii_EUROSTAR_200_200_P4_control.pdf" title="Оборудование для химических и&nbsp;испытательных лабораторий">Оборудование для химических и&nbsp;испытательных лабораторий</a>
            <div class="file-spec">(PDF, 24.5 Mb)</div>
            </div>


            <div class="file-node file-hidden hide-node" data-prof="microbiology" style="background:url(http://www.millab.ru/files/upload/khimiya.png) no-repeat;">
            <a class="file-label" href="#" data-href="http://donaulab.ru/wp-content/uploads/Rukovodstvo_po_ekspluatatsii_EUROSTAR_200_200_P4_control.pdf" title="Каталог лабораторного оборудования для анализа нефти и&nbsp;нефтепродуктов">Каталог лабораторного оборудования для анализа нефти и&nbsp;нефтепродуктов</a>
            <div class="file-spec">(PDF, 14.0 Mb)</div>
            </div>


            <div class="file-node file-hidden hide-node" data-prof="analiznefty" style="background:url(http://www.millab.ru/files/upload/khimiya.png) no-repeat;">
            <a class="file-label" href="#" data-href="http://donaulab.ru/wp-content/uploads/Rukovodstvo_po_ekspluatatsii_EUROSTAR_200_200_P4_control.pdf" title="Оборудование и&nbsp;решения для исследовательского и&nbsp;пилотного синтеза">Оборудование и&nbsp;решения для исследовательского и&nbsp;пилотного синтеза</a>
            <div class="file-spec">(PDF, 3.3 Mb)</div>
            </div>


          </div><!-- enum-file stacked -->

        </div><!-- tab_content_3 -->


	</div>
</div> <!-- tabscontainer -->



<a name="sem-forma"></a>



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

    $(".tabs .tab[id^=tab_menu]").hover(function() {
        var curMenu=$(this);
        $(".tabs .tab[id^=tab_menu]").removeClass("selected");
        curMenu.addClass("selected");

        var index=curMenu.attr("id").split("tab_menu_")[1];
        $(".curvedContainer .tabcontent").css("display","none");
        $(".curvedContainer #tab_content_"+index).css("display","block");
    });



    $('.file-node a').each(function(){
      $(this).attr('href','#');
    });


    function open_link(){
      $('a.file-label[data-href]').click(function(){
        console.log('link click');
        var thislink = $(this);
        var datahref = thislink.data('href');
        //if(datahref == "#") return false;
        setTimeout(function(){
          thislink.attr('href', datahref).attr('download','');
          alert('ссылки заменены');
        }, 3000);
      });
    }
    open_link();
    $('.hide-node').hide();

$('a#go').click( function(event){ // лoвим клик пo ссылки с id="go"
    event.preventDefault(); // выключaем стaндaртную рoль элементa
    $('#overlay').fadeIn(400, // снaчaлa плaвнo пoкaзывaем темную пoдлoжку
      function(){ // пoсле выпoлнения предъидущей aнимaции
        $('#modal_form') 
          .css('display', 'block') // убирaем у мoдaльнoгo oкнa display: none;
          .animate({opacity: 1, top: '35%'}, 200); // плaвнo прибaвляем прoзрaчнoсть oднoвременнo сo съезжaнием вниз
    });
  });


  // Обработка ответа формы
  $('.new_form form input[type="submit"]').click(function(){
    if($('.wpcf7-response-output:contains("скачать")').length > 0)
     // здесь надо запустить по закритию окна скрипт открытия ссылки
    console.log('yes');
    else console.log('no');
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


<a href="#" id="go">тест окна</a>
<?php wp_footer(); ?>
</body>
</html>
