</div><!-- //mainWrap -->
<?php if(!is_front_page()){ ?>
<?php } ?>
<div id="footerWrap">
  <div id="footer">
    <!-- // footer-menu -->
    <div id="footer-menu">
      <div class="table-box">
        <div>
          <div class="title"><a href="/o-kompanii/">О компании</a></div>
          <ul>
            <li><a href="/o-kompanii/nasha-istoriya/">Наша история</a></li>
            <li><a href="/o-kompanii/nashi-klienty/">Наши клиенты</a></li>
            <li><a href="/o-kompanii/mnenie-klientov/">Мнение клиентов</a></li>
            <li><a href="/o-kompanii/partnery-donau-lab-moscow/">Наши партнёры</a></li>
            <li><a href="/o-kompanii/avtorizatsii-ot-proizvoditelej/">Авторизации от производителей</a></li>
            <li><a href="/o-kompanii/fotogalereya/">Фотогалерея</a></li>
          </ul>
          <!--<div id="footer_social">
            <a href="https://vk.com/donaulab" id="ico_vk"><span></span></a>
            <a href="https://www.facebook.com/DonauLabMoscow/" id="ico_fb"><span></span></a>
            <a href="https://plus.google.com/+DonaulabRu" id="ico_gp"><span></span></a>
            <a href="https://www.linkedin.com/company/донау-лаб-москва" id="ico_in"><span></span></a>
          </div>-->
        </div>
        <div>
          <div class="title"><a href="#">Каталог оборудования</a></div>
          <div class="table-box">
            <div>
              <ul>
                <li><a href="/components/">Оборудование по производителю</a></li>
                <li><a href="/industries/">Оборудование по отраслям</a></li>
                <li><a href="/keywords/">Оборудование по типу</a></li>
              </ul>
            </div>
            
          </div>
        </div>
        <div>
          <div class="title"><a href="/servisnaya-podderzhka/">Сервис и обслуживание</a></div>
          <!--<ul>
            <li><a href="#">Сервис</a></li>
            <li><a href="#">Доставка</a></li>
          </ul> -->
          <!--<div class="title"><a href="/informatsiya/">информация</a></div>-->
          <ul>
            <li><a href="/article/novosti/">Новости</a></li>
            <li><a href="/article/meropriyatiya/">События</a></li>
          </ul>
          <div class="title"><a href="/kontakty/">контакты</a></div>
          <div class="title"><a href="/otpravit-zapros/">отправить запрос</a></div>
        </div>
      </div>
      <?/*?>
      <?php wp_nav_menu(array('container' => '', 'menu_id' => 'menu-navigation-f', 'theme_location' => 'secondary')); ?>
      <?*/?>
    </div>
    <!-- footer-menu // -->
    <div id="footer_bttm">
      <div id="footer_logo">
        <a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo2.png" alt=""></a>
      </div>
      <div id="copyright">
        <div>Copyright &#169; 2018 Dоnau Lаb Mоscоw. Все права защищены.</div>
        <div><a href="/karta-sajta/">Карта сайта</a></div>
      </div>
      <div id="empis">
        <a href="http://www.empis.ru/" target="_blank">Создание сайта - EMPIS</a>
      </div>
    </div>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
	
	$('.sendNow').on('click', function(){
		setTimeout(function(){
			document.body.scrollTop = document.documentElement.scrollTop = 0;
		},1000);
	});
		
    <?php if(is_single()) { ?> $('#prodname').val("<?php wp_title('');?>"); <?php } ?>
    $(".modal-list-alfa li").each(function (i) {
    $(this).removeAttr('class');
    var x = $(this).find('a').text();
    $(this).addClass(x.charAt(0));
    });
    var headings = 'АБВГДЕЖЗИКЛМНОПРСТУФХЦЧШЩЫЭЮЯ';
    var $recipes = $('#recipes').detach();
    for (var i=0; i < headings.length; i++) {
    //console.log(texto.charAt(i));
    $('#toThis').append($('<ul/>').append('<span>'+ headings.charAt(i) +'</span>').append($recipes.find('.' + headings.charAt(i))));
    }
    /*   $.each(headings, function(){
    $('#toThis').append('<h3>' + this + '</h3>');
    $('#toThis').append($('<ul/>').append('<span>'+ this +'</span>').append($recipes.find('.' + this)));
    }); */
    var headings2 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    var $recipes2 = $('#recipes2').detach();
    for (var i=0; i < headings2.length; i++) {
    //console.log(texto.charAt(i));
    $('#toThis2').append($('<ul/>').append('<span>'+ headings2.charAt(i) +'</span>').append($recipes2.find('.' + headings2.charAt(i))));
    }
    /*
    $.each(headings2, function(){
    //$('#toThis').append('<h3>' + this + '</h3>');
    $('#toThis2').append($('<ul/>').append('<span>'+ this +'</span>').append($recipes2.find('.' + this)));
    }); */
    var headings3 = 'АБВГДЕЖЗИКЛМНОПРСТУФХЦЧШЩЫЭЮЯ';
    var $recipes3 = $('#recipes3').detach();
    for (var i=0; i < headings3.length; i++) {
    //console.log(texto.charAt(i));
    $('#toThis3').append($('<ul/>').append('<span>'+ headings3.charAt(i) +'</span>').append($recipes3.find('.' + headings3.charAt(i))));
    }
    /*
    $.each(headings3, function(){
    //$('#toThis').append('<h3>' + this + '</h3>');
    $('#toThis3').append($('<ul/>').append('<span>'+ this +'</span>').append($recipes3.find('.' + this)));
    });
    */
    $("#toThis span").each(function(){
    if($(this).next().is('li')) {
    $(this).show();
    } else {
    $(this).hide();
    };
    });
    $("#toT3his2 ul").each(function(){
    if($(this).find('span').next().is('li')) {
    $(this).show();
    } else {
    $(this).hide();
    };
    });
    $("#toThis3 ul").each(function(){
    if($(this).find('span').next().is('li')) {
    $(this).show();
    } else {
    $(this).hide();
    };
    });
    $('#toThis, #toThis3').each(function(){
    $items = $('ul', this);
    $items.slice(0, ($items.length+1)/2) //split in half, round up
    .wrapAll('<div class="item-column">');
      $items.slice(($items.length+1)/2)
      .wrapAll('<div class="item-column">');
        });
        $('.manufacturerListJS').each(function(){
        $items = $('ul li', this);
        $items.slice(0, ($items.length+1)/3) //split in half, round up
        .wrapAll('<div class="item-column item-column-33">');
          $items.slice(($items.length+1)/3,(($items.length+1)/3)+(($items.length+1)/3))
          .wrapAll('<div class="item-column item-column-33">');
            $items.slice((($items.length+1)/3)+(($items.length+1)/3))
            .wrapAll('<div class="item-column item-column-33">');
              });
              jQuery('.post-text h4:contains(Совместный)').closest('.index-news').children('.img').css('float','left').children('a').append('<img src="http://donaulab.ru/seminar/img/01.jpg" style="width:150px;">');
              jQuery('.news-item .txt:contains(Совместный)').closest('.news-item').children('.img').children('a').append('<img src="http://donaulab.ru/seminar/img/01.jpg" style="width:150px;">');
              });
              </script>
              <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.iframetracker.js"></script>

              <script type="text/javascript">
                jQuery(document).ready(function($){
              if($('body').hasClass('single-post')){
              $('table').wrap('<div class="cTab"></div>');
              }
              if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
                $('#evBoxes').css("display", "block");
              $('.homepage-journal-wrapper').css("display", "none");
              }
              });
              </script>
              </div><!-- footer // -->
              </div><!-- footerWrap // -->
              <?php wp_footer(); ?>
              <?php// @include ($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/donaulab/images/arr.png');?>
              </div><!-- .conteiner // -->
              <div id="overlay"></div>
  <style>
    input[type=text].wpcf7-not-valid, input[type=email].wpcf7-not-valid, input[type=tel].wpcf7-not-valid, textarea.wpcf7-not-valid, #block-7 input[type=text].wpcf7-not-valid, #block-7 input[type=tel].wpcf7-not-valid, #block-15 input[type=tel].wpcf7-not-valid, #block-15 input[type=text].wpcf7-not-valid{
        border: 2px solid #ec3c06;
        z-index:12000;
        position:relative;
}
 
div span.wpcf7-not-valid-tip{
        left:3%;
}
 
body span.wpcf7-not-valid-tip {
  display: none;
  color: #ec3c06;
  border: none;
  background: none;
}
body span.wpcf7-not-valid-tip-no-ajax{
  display:inline-block;
  font-size:18px;
  margin:0 0 0 10px;
}
body div.wpcf7-validation-errors {
        background: #ffe2e2;
        border: 2px solid #ff8a8a;
        color: #ec3c06;
        font-size:18px;
        text-align:center;
        position:relative;
        z-index:12000;
}
.contact-inner-form .wpcf7-response-output{
  width:95%;
}
body div.wpcf7-response-output {
        padding: 6px;
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        border-radius: 3px;
}
 
body .wpcf7-mail-sent-ng {
        background: #fff2e2;
        border: 1px solid #ffbc8a;
        color: #e17731;
}
 
body .wpcf7-mail-sent-ok {
        background: #e8ffe2;
        border: 1px solid #6fdf51;
        color: #1ea524;
        font:12px arial, sans-serif;
        text-align:center;
}

.wpcf7-form.spam .wpcf7-response-output.wpcf7-display-none.wpcf7-spam-blocked {
    margin-top: -15px;
}
  </style>            
              <div class="form als" id="order">
                

                <div class="head">Форма заявки<span>x</span></div>
                <div class="body">
                  <div class="mess1"></div>									
				<?php echo do_shortcode( '[contact-form-7 id="10524" title="ЗАКАЗАТЬ ОБОРУДОВАНИЕ"]' ); ?>
                  
<? /*
                  
                  <form id="order">
                    <input type="text" id="ftitle" name="title" readonly />
                    <input type="text" id="fname" name="fio" placeholder="ФИО"/>
                    <input type="text" id="forg" name="org" placeholder="Организация"/>
                    <input type="text" id="fphone" name="phone" placeholder="Телефон"/>
                    <input type="text" id="femail" name="email" placeholder="E-mail"/>
                    <input type="text" id="fcity" name="city" placeholder="Город"/>
                    <!--<img src = "/ajax/captcha/captcha.php" width="120" height="40" style="float:left;"/>-->
                    <!--<input type="text" id="fcaptcha" name="captcha" placeholder="Введите символы с картинки"/>-->
                    <div style="width: 304px;margin: 0 auto;" class="g-recaptcha" data-sitekey="6LfA6VAUAAAAAOC3OLT5JY_0fqsG1aWhbKJ3DoDh"></div>
                    <textarea id="fcomm" name="comm" placeholder="Комментарий к заказу"></textarea>
                    <input type="hidden" name="url" id="furl"/>
                    <input type="hidden" name="id" id="fid"/>
                    <span onclick="yaCounter31050146.reachGoal('zapros'); return true;"><input type="submit" value="ОТПРАВИТЬ"><span>
                    <?php //echo wpcf7_captcha_url(); ?>
                  </form>
*/ ?>

                </div>



              </div>
              <script>
              jQuery(document).ready(function($){




              	setTimeout(function(){
              		jQuery('.cat-item a').attr('title','');
              		console.log('title remove');
              	},1500);

              	

               $('.sendNow').on('click', function(){
                console.log('clicked');
                var h1 = $('h1').text();
                $('input[name=text-800]').val(h1);
               }); 
                
              $('.sub-menu li a:contains(Семинар)').attr('data-href','/seminar/');
              //console.log('added');
              $('a[data-href]').on('click', function(){
                window.location = $(this).data('href');
              });
              $("#femail").keyup(function(){
              var email = $("#femail").val();
              if(email != 0)
                  {
                  if(isValidEmailAddress(email))
                  {
              $("#femail").css({
              //"background-image": "url('validYes.png')"
                "background-color": "#A7F6C2"
              });
              } else {
              $("#femail").css({
              //"background-image": "url('validNo.png')"
                "background-color": "#FAC7C7"
              });
              }
              } else {
              $("#femail").css({
              //"background-image": "none"
              "background-color": "white"
              });
              }
              
              });
              function isValidEmailAddress(emailAddress) {
              var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
              return pattern.test(emailAddress);
              }
              });
              </script>
            </body>
          </html>