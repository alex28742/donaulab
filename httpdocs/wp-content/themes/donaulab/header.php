<?php //if(!is_user_logged_in()) die("Технические работы"); ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
<!-- поменял залоговок для того чтобы работал yoast-->
<?/*<meta name="yandex-verification" content="6dec494f407fc64d">*/?>
<meta name="cmsmagazine" content="13966e5b04d92a2186e36a1a7f3d2e5f">
<meta name="author" content="DonauLab">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5T4PWK5');</script>
<!-- End Google Tag Manager -->

<?
if (strpos($_SERVER['REQUEST_URI'], 'articles') === false) {
?>
<!--<title><?php bloginfo('name');?></title>-->
<title><?php wp_title(''); ?></title>
<?
}
?>
<link rel="shortcut icon" href="/images/favicon.ico">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/reset.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/slider/themes/default/default.css" type="text/css" media="screen">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.0.0/animate.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/slider/css/liquid-slider.css" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/journal-styles.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<meta property="og:image" content="/img/logo.png">

<?php wp_head(); ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/misc.js"></script>
<!--[if IE 6 ]><link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/ie6.css"><![endif]-->
<!--[if IE 7 ]><link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/ie7.css"><![endif]-->
<!--[if IE 8 ]><link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/ie8.css"><![endif]-->


	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>">

	<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".page-id-17 .gallery-item img").each(function(){
		    this.style.marginTop = $(this).height() / -2 + "px";
		});

		$('.unit-img .fancybox.image img').on('click', function(){ console.log('up');   });
		$('#fancybox-outer').on('click', function(){ console.log('close');   });
	});
	</script>

<style type="text/css">
			#gallery-1 {
				margin: auto;
			}
			#gallery-1 .gallery-item {
				float: left;
				margin-top: 10px;
				text-align: center;
				width: 33%;
			}
			#gallery-1 img {
				border: 2px solid #cfcfcf;
			}
			#gallery-1 .gallery-caption {
				margin-left: 0;
			}
			/* see gallery_shortcode() in wp-includes/media.php */
		</style>


<style type="text/css">
.less {display:none;}
</style>
<?/*<meta name='yandex-verification' content='4205c878e88c77b8'>*/?>
<meta name="yandex-verification" content="ef5042d201bf6ea4" />
<meta name="google-site-verification" content="NkMFZNL99LpfoPgjVf5gZomikJR5GBofdFnKAj9bgmw">
<script src='https://www.google.com/recaptcha/api.js'></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter31050146 = new Ya.Metrika2({ id:31050146, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true, triggerEvent:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/tag.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks2"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/31050146" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- calltouch code -->
<script type="text/javascript">
(function (w, d, nv, ls, yac){
    var lwait = function (w, on, trf, dly, ma, orf, osf) { var pfx = "ct_await_", sfx = "_completed";  if(!w[pfx + on + sfx]) { var ci = clearInterval, si = setInterval, st = setTimeout , cmld = function () { if (!w[pfx + on + sfx]) {  w[pfx + on + sfx] = true; if ((w[pfx + on] && (w[pfx + on].timer))) { ci(w[pfx + on].timer);  w[pfx + on] = null;   }  orf(w[on]);  } };if (!w[on] || !osf) { if (trf(w[on])) { cmld();  } else { if (!w[pfx + on]) { w[pfx + on] = {  timer: si(function () { if (trf(w[on]) || ma < ++w[pfx + on].attempt) { cmld(); } }, dly), attempt: 0 }; } } }   else { if (trf(w[on])) { cmld();  } else { osf(cmld); st(function () { lwait(w, on, trf, dly, ma, orf); }, 0); } }} else {orf(w[on]);}};
    var ct = function (w, d, e, c, n) { var a = 'all', b = 'tou', src = b + 'c' + 'h';  src = 'm' + 'o' + 'd.c' + a + src; var jsHost = "https://" + src, s = d.createElement(e); var jsf = function (w, d, s, h, c, n, yc) { if (yc !== null) { lwait(w, 'yaCounter'+yc, function(obj) { return (obj && obj.getClientID ? true : false); }, 50, 100, function(yaCounter) { s.async = 1; s.src = jsHost + "." + "r" + "u/d_client.js?param;" + (yaCounter  && yaCounter.getClientID ? "ya_client_id" + yaCounter.getClientID() + ";" : "") + (c ? "client_id" + c + ";" : "") + "ref" + escape(d.referrer) + ";url" + escape(d.URL) + ";cook" + escape(d.cookie) + ";attrs" + escape("{\"attrh\":" + n + ",\"ver\":171110}") + ";"; p = d.getElementsByTagName(e)[0]; p.parentNode.insertBefore(s, p); }, function (f) { if(w.jQuery) {  w.jQuery(d).on('yacounter' + yc + 'inited', f ); }}); } else { s.async = 1; s.src = jsHost + "." + "r" + "u/d_client.js?param;" + (c ? "client_id" + c + ";" : "") + "ref" + escape(d.referrer) + ";url" + escape(d.URL) + ";cook" + escape(d.cookie) + ";attrs" + escape("{\"attrh\":" + n + ",\"ver\":171110}") + ";"; p = d.getElementsByTagName(e)[0]; p.parentNode.insertBefore(s, p); } }; if (!w.jQuery) { var jq = d.createElement(e); jq.src = jsHost + "." + "r" + 'u/js/jquery-1.7.min.js'; jq.onload = function () { lwait(w, 'jQuery', function(obj) { return (obj ? true : false); }, 30, 100, function () { jsf(w, d, s, jsHost, c, n, yac); }); }; p = d.getElementsByTagName(e)[0]; p.parentNode.insertBefore(jq, p); } else { jsf(w, d, s, jsHost, c, n, yac); } };
    var gaid = function (w, d, o, ct, n) { if (!!o) { lwait(w, o, function (obj) {  return (obj && obj.getAll ? true : false); }, 200, (nv.userAgent.match(/Opera|OPR\//) ? 10 : 20), function (gaCounter) { var clId = null; try {  var cnt = gaCounter && gaCounter.getAll ? gaCounter.getAll() : null; clId = cnt && cnt.length > 0 && !!cnt[0] && cnt[0].get ? cnt[0].get('clientId') : null; } catch (e) { console.warn("Unable to get clientId, Error: " + e.message); } ct(w, d, 'script', clId, n); }, function (f) { w[o](function () {  f(w[o]); })});} else{ ct(w, d, 'script', null, n); }};
    var cid  = function () { try { var m1 = d.cookie.match('(?:^|;)\\s*_ga=([^;]*)');if (!(m1 && m1.length > 1)) return null; var m2 = decodeURIComponent(m1[1]).match(/(\d+\.\d+)$/); if (!(m2 && m2.length > 1)) return null; return m2[1]} catch (err) {}}();
    if (cid === null && !!w.GoogleAnalyticsObject){
        if (w.GoogleAnalyticsObject=='ga_ckpr') w.ct_ga='ga'; else w.ct_ga = w.GoogleAnalyticsObject;
        if (typeof Promise !== "undefined" && Promise.toString().indexOf("[native code]") !== -1){new Promise(function (resolve) {var db, on = function () {  resolve(true)  }, off = function () {  resolve(false)}, tryls = function tryls() { try { ls && ls.length ? off() : (ls.x = 1, ls.removeItem("x"), off());} catch (e) { nv.cookieEnabled ? on() : off(); }};w.webkitRequestFileSystem ? webkitRequestFileSystem(0, 0, off, on) : "MozAppearance" in d.documentElement.style ? (db = indexedDB.open("test"), db.onerror = on, db.onsuccess = off) : /constructor/i.test(w.HTMLElement) ? tryls() : !w.indexedDB && (w.PointerEvent || w.MSPointerEvent) ? on() : off();}).then(function (pm){
            if (pm){gaid(w, d, w.ct_ga, ct, 2);}else{gaid(w, d, w.ct_ga, ct, 3);}})}else{gaid(w, d, w.ct_ga, ct, 4);}
    }else{ct(w, d, 'script', cid, 1);}})
(window, document, navigator, localStorage, "31050146");
</script>
<!-- /calltouch code -->
<script type="text/javascript" src="http://donaulab.ru/js/jquery.session.js"></script>
</head>

<body <?php body_class(); ?> >
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5T4PWK5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="conteiner">
	<div id="wrapper">

        <!-- // Header -->
        <div id="header">
			<div class="topLine_new">
				<div id="logo">
					<a href="<?php bloginfo('url'); ?>"><img src="/img/logo.png"></a>
				</div><!-- logo // -->

                <div id="top_social">
					<a href="https://vk.com/donaulab" id="ico_vk"><span></span></a>
                    <a href="https://www.facebook.com/DonauLabMoscow/" id="ico_fb"><span></span></a>
                    <?/*<a href="https://plus.google.com/+DonaulabRu" id="ico_gp"><span></span></a>
                    <a href="https://www.linkedin.com/company/донау-лаб-москва" id="ico_in"><span></span></a>*/?>
				</div><!--Social // -->

				<div class="topContacts_new">
					<!--<a style="background: none; font-weight: bold;" href="<?php echo get_permalink('3141'); ?>">Заказать обратный звонок</a>-->
					<span>115280, г. Москва, ул. Ленинская Слобода, 26, стр. 5, оф. 5702<br><i class="far fa-envelope-open"></i>&nbsp;&nbsp;<a href="mailto:info@donaulab.ru">info@donaulab.ru</a></span>
                    <!--
					<a class="arrow colored" href="<?php echo get_permalink('25'); ?>">все филиалы</a>
					<a class="colored topContacts_new_a_padding" href="mailto:sales@donaulab.ru">sales@donaulab.ru</a>
					<a class="topContacts_new_a_padding" href="<?php echo get_permalink('118'); ?>">Карта сайта</a>
                    -->
				</div>

				<div class="sendEnquiry">
					<span>+7 (495) 255-33-89</span>
                    <div><a href="/otpravit-zapros/"><span>Отправить запрос</span></a></div>
				</div>
			</div>
		</div>
        <!-- Header // -->

            <? /* ?>
				<div class="topMenu_new_wrap">
					<ul id="menu-navigation" class="menu">
						<li id="menu-item-186" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-186"><a href="/components/">Каталог оборудования</a></li>
						<li id="menu-item-1297" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1297" style="margin-right:-20px;"><a href="/kompleksnye-resheniya/">Комплексные решения</a></li>
					</ul>
				</div>
				<div class="topMenu_new_wrap topMenu_new_right">
					<ul id="menu-navigation" class="menu">
						<li id="menu-item-29" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29"><a href="/kontakty/">Контакты</a></li>
					</ul>
				</div>
				<div class="topMenu_search_wrap">
					<ul id="menu-navigation" class="menu">
						<li id="menu-item-177" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-177"><a href="/servisnaya-podderzhka/">Сервис</a></li>
						<li id="menu-item-33" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-33"><a href="/o-kompanii/">О компании</a></li>
					</ul>

					<div class="topSearch_new">
						<form action="<?php bloginfo('url'); ?>" method="get" id="searchform">
							<p><input type="text" id="s" name="s" value="Поиск" onfocus="if(this.value == 'Поиск') {this.value='';}; return true;" onblur="if(this.value == '') {this.value='Поиск';}; return true;"><input type="submit" value=" "></p>
						</form>
					</div>
              </div>
			</div><!-- // Top Menu -->
             <? */ ?>

        <!-- // Top Menu -->
        <div id="topMenu" class="clearfix">

        <!-- // Top Navigation -->
        <div class="drop-menu">
          <div class="miniMenu" onclick="">
          	<div class="miniIconPanel">
          		<input type="radio" name="miniMenu" id="open">
          		<input type="radio" name="miniMenu" id="close" checked="checked">
          		<label class="labelOpen" for="open" title="Open Menu"></label>
          		<label class="labelClose" for="close" title="Close Menu"></label>
          		<div class="miniIcon"><b></b><b></b></div>
                <div class="dd_div">

          <?php wp_nav_menu(array('container' => '', 'menu_id' => 'menu-navigation', 'theme_location' => 'primary')); ?>

                </div>
          	</div>
          </div>
        </div>
        <!-- Top Navigation // -->


          <div class="topSearch_new">
            <form action="<?php bloginfo('url'); ?>" method="get" id="searchform">
            <span><input type="text" id="s" name="s" value="Поиск" onfocus="if(this.value == 'Поиск') {this.value='';}; return true;" onblur="if(this.value == '') {this.value='Поиск';}; return true;"></span>
            <span><input type="submit" value=" "></span>
            </form>
          </div>
        </div><!-- Top Menu //  -->

        <?/*?>
        <div id="top_slider">
        	<?php putRevSlider("main") ?>
        </div>
        <?*/?>

	</div>	<!--//wrapper-->


	<div id="mainWrap">
