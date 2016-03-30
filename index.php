<?php
// No direct access.
defined('_JEXEC') or die;

JHTML::_('behavior.framework', true);

/* The following line gets the application object for things like displaying the site name */
$user = $user = JFactory::getUser();
$app = JFactory::getApplication();
$tplparams  = $app->getTemplate(true)->params;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
  <jdoc:include type="head" />
	<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/ikon.png" rel="shortcut icon" type="image/x-icon">
  <!-- The following line loads the template CSS file located in the template folder. -->
<meta name='yandex-verification' content='4df3ba09c4e95681' />
 <!--LiveInternet counter--><script type="text/javascript"><!--
new Image().src = "//counter.yadro.ru/hit?r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random();//--></script><!--/LiveInternet--> 
  <!-- The following line loads the template JavaScript file located in the template folder. It's blank by default. -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
	(w[c] = w[c] || []).push(function() {
		try {
			w.yaCounter29079820 = new Ya.Metrika({id:29079820,
					webvisor:true,
					clickmap:true,
					trackLinks:true,
					accurateTrackBounce:true});
		} catch(e) { }
	});

	var n = d.getElementsByTagName("script")[0],
		s = d.createElement("script"),
		f = function () { n.parentNode.insertBefore(s, n); };
	s.type = "text/javascript";
	s.async = true;
	s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

	if (w.opera == "[object Opera]") {
		d.addEventListener("DOMContentLoaded", f, false);
	} else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/29079820" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->  
	

	<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/style.css" rel="stylesheet" type="text/css" />
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="all">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

</head>
<body >
<div id="parent_popup">
<div id="popup">
<span style="display: block; text-align: center;">НЕ НАШЛИ ЧТО ИСКАЛИ ПОЗВОНИТЕ НАМ <a href="tel:+74953646465">+7 (495) 364-64-65</a> </br> ИЛИ ОТПРАВЬТЕ ЗАЯВКУ</span>
	<div id="set"></div>
<a class="close"title="Закрыть" onclick="document.getElementById('parent_popup').style.display='none';">X</a></div>
</div>
<script src="//yandex.st/jquery/cookie/1.0/jquery.cookie.min.js"></script>
<script type="text/javascript">

jQuery(function($) {
		if (!$.cookie('was2')) {
		var delay_popup = 10000;
		setTimeout("document.getElementById('parent_popup').style.display='none'", delay_popup); //Попап заблочен, для разблокирования прописать style.display='block'
		//$.cookie('was2', true, {
			// expires: 365,
			// path: '/'
		 //  });
	})
</script>

<div style="width: 100%; height: 100%;">
	<nav>
		<div class="conainer">
	
		<div class="left">
			<jdoc:include type="modules" name="left_top" />
			
			
		</div>
	   
			
		<div class="right">
			
			<jdoc:include type="modules" name="right_top" />
				<jdoc:include type="modules" name="menu_input" style="rounded"/>
			
			
			
		<div class="car">
			<jdoc:include type="modules" name="position-7" style="rounded"/>
		</div>
		</div>
	<div class="clr"></div>
		</div>
	
		
	</nav>
	<div class="logotip">
		<div class="conainer">
			
			<div class="row">
				<div class="left padding">
					<address>
						<span class="normal" style="padding-left:63px; margin-bottom: -10px;">Центральный офис</span>
						<span class="bold icon metro title">Волоколамское</span>
						<span class="normal">Москва, Волоколамское шоссе,<br /> 142 стр.1 (бизнес-центр "Ирбис")</span>
						<span class="normal smal">Мы работаем без выходных!</span>
					
					</address>
				
				</div>
				<div class="center">
					<a href="/">
						<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/logo.png" class="logo" />
					</a>
				
				</div>
				<div class="right padding">
					<div class="call_back">
						<a class="button inline_cform_tel" href="#contactable_tel">Оставить заявку</a>
						<a href="#contactable_tel" class="inline_cform_tel"><span style="padding-top:15px ; padding-bottom: 15px;" class="normal icon call">+7 (495) 364-64-65<br /></span></a>
						<span class="normal smal">Звонки принимаем с 09.00 до 20.00 часов</span>
						
					</div>
				
				</div>
				
				<div class="clr"></div>
			</div>

		</div>
	</div>
	<div class="line"></div><br>
	<div class="navigaciya">
		
		<jdoc:include type="modules" name="navigation" />
	</div>
	<div class="content">
	<?php if ($this->countModules( 'slaider2' )) : ?> 
						 <div class="slaider" style="width: 100%; ">
							<jdoc:include type="modules" name="slaider2" />
							
						</div>
	<?php endif;?> 
	<?php if ( $this->countModules( 'glavnaya' )) : ?>
	
	
	<div class="conainer">
		<div class="glavnaya">
		<jdoc:include type="modules" name="glavnaya" style="rounded" />

			<div class="line"></div>
				 <br>
				 <div align="center"><h4 style="color: #115982; font-size: 26px;">WarmWest</h4></div>
				<br>
				<div class="container">
					<div class="row">
						<div class="div3"><i>"... Наша компания существует на рынке с 1991 года. Зарекомендовала себя только с лучшей стороны. Наши поставщики это производители самых известных брендов в Европе. Сотрудники проходят обязательное обучение в Германии. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, sunt, quis. Aliquid deleniti, modi perferendis. Blanditiis et, nulla dolorem! Nobis."</i></div>
						<div class="div2">
							<h3>Продажа оборудования</h3>
							<p>Оборудование одной из лучших фирм мира. Качество проверенное временем. В качестве подтверждения этих слов - благодарные отзывы многих клиентов. </p>
						</div>
						<div class="div2">
							<h3>Установка оборудования</h3>
							<p>Мастера монтажа высочайшей квалификации, уникальный опыт установки, который трудно чем то заместить. Гарантийное и постгарантийное обслуживаение. </p>
						</div>
					</div>
					<!-- <div class="row">
						<div class="div1"></div>
						<div class="div1"></div>
					</div> -->
			</div>
			<br>
		<div class="clr"></div>
		</div>
		<div class="row">
					<div class="">
						<div class="row" align="center">
						<h4 class="margin-bot70 fnt-roboto" style="color: #115982; text-align: center; margin: 10px 0; font-size: 24px;">Наши поставщики</h4>
						</div>
					</div><br>
					
					<div class="col-md-3 col-sm-6 col-xs-6 brand wow flipInY data-wow-duration="1.5s" data-wow-delay="0s"data-wow-offset="20" " id="brand1">
						<img src="images/brands/bosch.png" class="img-responsive" alt="Responsive image">
					</div>
					
					<div class="col-md-3 col-sm-6 col-xs-6 brand wow flipInY d"ata-wow-duration="1.5s" data-wow-delay="0.2s"data-wow-offset="20" id="brand2">
						<img src="images/brands/siemens.png" class="img-responsive" alt="Responsive image">
					</div>

					 <div class="col-md-3 col-sm-6 col-xs-6 brand wow flipInY d"ata-wow-duration="1.5s" data-wow-delay="0.4s"data-wow-offset="20" id="brand3">
						<img src="images/brands/miele.png" class="img-responsive" alt="Responsive image">
					</div>
					 <div class="col-md-3 col-sm-6 col-xs-6 brand wow flipInY d"ata-wow-duration="1.5s" data-wow-delay="0.6s"data-wow-offset="20" id="brand4">
						<img src="images/brands/aeg.png" class="img-responsive" alt="Responsive image">
					</div>

					<div class="col-md-3 col-sm-6 col-xs-6 brand wow flipInX" data-wow-duration="1.5s" data-wow-delay="0s"data-wow-offset="20" id="brand5">
						<img src="images/brands/indesit.png" class="img-responsive" alt="Responsive image">
					</div>
					 <div class="col-md-3 col-sm-6 col-xs-6 brand wow flipInX" data-wow-duration="1.5s" data-wow-delay="0.4s"data-wow-offset="20" id="brand6">
						<img src="images/brands/ariston.png" class="img-responsive" alt="Ariston">
					</div>
					 <div class="col-md-3 col-sm-6 col-xs-6 brand wow flipInX" data-wow-duration="1.5s" data-wow-delay="0.6s"data-wow-offset="20" id="brand7">
						<img src="images/brands/samsung.png" class="img-responsive" alt="Responsive image">
					</div>
					 <div class="col-md-3 col-sm-6 col-xs-6 brand wow flipInX" data-wow-duration="1.5s" data-wow-delay="0.8s"data-wow-offset="20" id="brand8">
						<img src="images/brands/electrolux.png" class="img-responsive" alt="Responsive image">
					</div>
					
				</div><br><br>

	<div class="clr"></div>
	</div>
	<?php endif;?>
			<div class="conainer">
<?php if ($this->countModules( 'news_right' ) && $this->countModules( 'slaider' )) : ?>
					<br><div class="row" style="box-shadow: 1px 1px 10px #115982; border-radius: 5px;">
						
						<div style="width: 40%; float:left;">
							
							<jdoc:include type="modules" name="news_right" style="rounded" />
						 </div>  
						 <div style="width: 60%; float: left; ">
							<jdoc:include type="modules" name="slaider" />
							
						</div>
					 
						<div class="clr"></div>
					
					</div>
	<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
	<br><br><p style="color: #A02929; font-size: 22px; text-align: center">При заказе монтажа с покупкой оборудования, пусконаладочные работы - бесплатно. </p>
	<br><br>
	<div style="text-align: center;"><h1 style="color: #115982; text-align: center; margin: 10px 0; font-size: 20px;">ПОЧЕМУ BUDERUS?	</h1></div>
	<ul class="actions">

			<li class="edit-icon">
			<span class="hasTip" title="Изменить материал :: Опубликовано&lt;br /&gt;08.03.2015&lt;br /&gt;Автор: Administrator"><a href="/component/content/?task=article.edit&amp;a_id=68&amp;return=aHR0cCUzQSUyRiUyRndhcm0td2VzdC5ydSUyRg==" ><img src="/media/system/images/edit.png" alt="Изменить"  /></a></span>
			</li>
	</ul>

	<div style="text-align: justify;">
	<p style="text-align: justify;"><span style="color: #012bc2;"><br><img src="/images/AmRS4MMQFes.jpg" border="0" alt="Котлы Buderus" title="Buderus" style="float: left; margin: 0px 10px 5px 0px;" />Buderus «Будерус» - немецкая компания, которая является гарантией качества, надежности и долговечности, активно продвигающая свои передовые технологии на Российский рынок. <br />Оборудование Buderus позволяет в значительной мере снижать потребление энергии, но при этом обладает высокой производительностью, простотой эксплуатации и обслуживания. Buderus – это ведущий поставщик инновационной энергоэффективной отопительной техники и систем комфортного климата. Вместе с техникой для отопления, компания Buderus предлагает полный спектр комплектующих и принадлежностей.</span></p>
	<span style="color: #012bc2;">Компания WarmWest предлагает полный спектр оборудования для отопления Вашего дома от компании Buderus: настенные котлы, газовые котлы, водонагреватели, системы управления и многое другое. В наших разделах размещены краткие обзоры котельного оборудования компании Buderus, которые помогут Вам сделать правильный выбор.</span>
	</div>
	<br>
	<div class="line"></div>
	<div style="clear: both;"></div>
	<br>
<!-- 	<div class="row">
		<div id="shema">
		
		<h4 style="text-align: center; color: #115982;">Наш спектр услуг</h4>

			<div class="wrap">
			<div class="wrap_st">
				<a href="montazh.html">
					<img src="images/image1.jpg" alt="Picture 1"/>
				</a>
			</div>
			<span class="title_set">Проектные<br/> работы</span>
			</div>
			<div class="wrap">
			<div class="wrap_st">
				<a href="montazh.html">
					<img src="images/image2.jpg" alt="Picture 2"/>
				</a>
			</div>
			<span class="title_set">Монтаж<br/> котельной</span>
			</div>
			<div class="wrap">
			<div class="wrap_st">
				<a href="montazh.html">
					<img src="images/image3.jpg" alt="Picture 3"/>
				</a>
			</div>
			<span class="title_set">Монтаж<br/> радиаторов</span>
			</div>
			<div class="wrap">
			<div class="wrap_st">
				<a href="montazh.html">
					<img src="images/image4.jpg" alt="Picture 4"/>
				</a>
			</div>
			<span class="title_set">Монтаж<br/> водоснабжения</span>
			</div>
			<div class="wrap">
			<div class="wrap_st">
				<a href="montazh.html">
				
					<img src="images/image5.jpg" alt="Picture 5"/>
					
				</a>
			</div>
		   <span class="title_set">Пусконаладочные<br/> работы</span>
		   </div>
		</div>
		
		
		
		<script type="text/javascript">
			jQuery(function() {
				jQuery('#shema img4').hover(
					function(){
						var $this = jQuery(this);
						$this.stop().animate({'opacity':'1.0','height':'150px','top':'0px','left':'0px'});
					},
					function(){
						var $this = jQuery(this);
						$this.stop().animate({'opacity':'1.0','height':'150px','top':'0px','left':'0px'});
					}
				);
			});
		</script>
	</div> -->

	<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
					<!-- <div class="line"></div>
					<div class="row">
					
					<jdoc:include type="modules" name="forma_specifik" style="rounded" />
					
					</div> -->
					
					
					
<?php endif;?>


<?php if ( $this->countModules( 'forma_specifik' )) : ?>
	<div class="line"></div>
	
	<div class="conainer">
		<div class="forma_specifik">
		<jdoc:include type="modules" name="forma_specifik" style="rounded" />
		<div class="clr"></div>
		</div>

	<div class="clr"></div>
	</div>
<?php endif;?>
					
					<div class="row">
					
					<!--<div class="line"></div>-->
					
						<jdoc:include type="message" />
						<jdoc:include type="component" />
					
					
					<div style="clear: both;"></div>
					</div>
		
			</div>
	</div>

<?php if ( $this->countModules( 'shema' )) : ?>
	<div class="line"></div>
	
	<div class="conainer">
		<div class="shema">
		<jdoc:include type="modules" name="shema" style="rounded" />
		<div class="clr"></div>
		</div>
	<div class="clr"></div>
	</div>
<?php endif;?>
<?php if ( $this->countModules( 'news' )) : ?> 
	 <div class="line"></div>
	
	<div class="conainer">
		<div class="shema">
		<jdoc:include type="modules" name="news" style="rounded" />
		<div class="clr"></div>
		</div>
	<div class="clr"></div>
	</div>
<?php endif;?>

<?php if ( $this->countModules( 'service' )) : ?> 
	

	 <div class="line"></div>
	 <br>
	 <div align="center"><h4 style="color: #115982; font-size: 20px;">НАШИ РАБОТЫ</h4></div>
	<br>
	 <div class="container">
		<div class="row">
			<div class="div1"><a href="http://remont-machine.ru/nashi-raboty/category/1-moskovskaya-obl-selo-malo-ivantsevo.html"><img width='460' align="middle" src="/images/Bud1.jpg"></a></div>
			<div class="div1"><a href="http://remont-machine.ru/nashi-raboty/category/2-moskovskaya-obl-kp-uspenka-21.html"><img width='460' align="middle" src="/images/Bud3.jpg"></a></div>
		</div>
		<div class="row">
			<div class="div1"><a href="http://remont-machine.ru/nashi-raboty/category/6-moskovskaya-obl-kp-usadba-zhodochi.html"><img width='460' align="middle" src="/images/Bud2.jpg"></a></div>
			<div class="div1"><a href="http://remont-machine.ru/nashi-raboty/category/7-ob-ekt-6.html"><img width='460' align="middle" src="/images/Bud4.jpg"></a></div>
		</div>
	 </div>
	<br>
<div class="conainer">
		<div class="service" style="text-align: center;">
		<jdoc:include type="modules" name="service" style="rounded" />
		<div class="row">
			<div id="service">

				<!-- <h4 style="text-align: center; color: #115982;">Наш спектр услуг</h4> -->

				<div class="wrap">
					<div class="wrap_st">
					<a href="montazh.html">
					<img src="images/image1.jpg" alt="Picture 1"/>
					</a>
					</div>
					<span class="title_set">Проектные<br/> работы</span>
				</div>
				<div class="wrap">
					<div class="wrap_st">
					<a href="montazh.html/#second">
					<img src="images/image2.jpg" alt="Picture 2"/>
					</a>
					</div>
					<span class="title_set">Монтаж<br/> котельной</span>
				</div>
				<div class="wrap">
					<div class="wrap_st">
					<a href="montazh.html/#third">
					<img src="images/image3.jpg" alt="Picture 3"/>
					</a>
					</div>
					<span class="title_set">Монтаж<br/> радиаторов</span>
				</div>
				<div class="wrap">
					<div class="wrap_st">
					<a href="montazh.html/#forth">
					<img src="images/image4.jpg" alt="Picture 4"/>
					</a>
					</div>
					<span class="title_set">Монтаж<br/> водоснабжения</span>
				</div>
				<div class="wrap">
					<div class="wrap_st">
					<a href="montazh.html/#fives">

					<img src="images/image5.jpg" alt="Picture 5"/>

					</a>
					</div>
					<span class="title_set">Пусконаладочные<br/> работы</span>
				</div>
			</div>
		</div><br>
		<div class="line"></div><br><br>
		
		<div class="about">
			<span style="font-size: 20px;">Наши монтажные бригады профессионально и в оговоренные сроки выполнят весь спектр работ от проектных до запуска системы и сдачи её в эксплуатацию, благодаря опыту и профессионализму.</span>
			<br><br>
			<p style="font-size: 18px;">С более подробным прайс листом вы можете ознакомиться, скачав его по этой <a id="link-price" class="hvr-icon-down" href="#">ссылке</a></p><br>
			<p style="color: #A02929; font-size: 22px;">При заказе монтажа с покупкой оборудования, пусконаладочные работы - бесплатно. </p>
			<br>
			<div align="center"><a id="Zakazat" href="#">Заказать</a></div>
			<br>
		</div>
		<div class="clr"></div>
		</div>
	<div class="clr"></div>
</div>

<?php endif;?>     
	
<?php if ( $this->countModules( 'menu_katalog' )) : ?>
<div class="line"></div>     
	<div class="conainer">
		<div class="menu_katalog">
		<jdoc:include type="modules" name="menu_katalog" />
		<div class="clr"></div>
		</div>
	<div class="clr"></div>
	</div>
<?php endif;?>    
	
	
  
</div>
<br><br>
<footer>
<div class="conainer">
	<div class="left">
	
		<jdoc:include type="modules" name="position-logo_footer" />
	<div><span style="color:#ffffff">ООО "ВАРМВЕСТ"</span><br>
	<a href="cart.html" style="color:#ffffff">ОГРН: 1157746589186</a></div>
	</div>
	<div class="center">
	
		<jdoc:include type="modules" name="menu_footer" />
		<div class="clr"></div>
	</div>
	<div class="right">
		<span>
			Разработка сайтов<br />
			Web-студия<br />
			<a href="http://www.pln-b.ru">Plan B</a>
		
		</span>
		<div style="text-align: right;">
		<!--LiveInternet logo--><a href="//www.liveinternet.ru/click"
		target="_blank"><img src="//counter.yadro.ru/logo?13.11"
		title="LiveInternet: показано число просмотров за 24 часа, посетителей за 24 часа и за сегодня"
		alt="" border="0" width="88" height="31"/></a><!--/LiveInternet-->
		<!-- Yandex.Metrika informer -->
		<a href="https://metrika.yandex.ru/stat/?id=29079820&amp;from=informer"
		target="_blank" rel="nofollow"><img src="//informer.yandex.ru/informer/29079820/3_1_8BAAEEFF_6B8ACEFF_1_pageviews"
		style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:29079820,lang:'ru'});return false}catch(e){}"/></a>
		<!-- /Yandex.Metrika informer -->
		</div>
	</div>
	</div>
	<div class="clr"></div>
</footer>  

<div style="display:none;">

<jdoc:include type="modules" name="contakt_header" />

</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
			$( "h3:contains('МОНТАЖНЫЕ РАБОТЫ ПО КОТЕЛЬНОЙ')" ).append("<a href='#second'></a>");
			$( "h3:contains('МОНТАЖ РАДИАТОРНОГО ОТОПЛЕНИЯ')" ).append("<a href='#third'></a>");
			$( "h3:contains('МОНТАЖ ВОДОСНАБЖЕНИЯ')" ).append("<a href='#forth'></a>");
			$( "h3:contains('ПУСКО-НАЛАДОЧНЫЕ РАБОТЫ')" ).append("<a href='#fives'></a>");

			str = location.href;
			//alert(str);
			if(str.search('#')>0){
			var from1 = str.search('#'); 
			var to = str.length;
			newstr = str.substring(from1,to);
			var scrollT = $('[href='+newstr+'] ').offset().top;
			//alert(scrollT);
			$('html, body').animate({ scrollTop: scrollT-80 }, 1300);
		}
		})
</script>

<style type="text/css">
.brand:hover{
	transform: scale(1.2);
	transition: .1s;
}
.logotip {
	margin-top: 70px;
}
	.container{
		display: block;
		clear: left;
		margin: 10px auto;
		width: 1024px;
	}
	.row{
		width: 970px;
		margin: 10px auto;
	}
	.div1{
		width: 460px;
		height: 200px;
		border: solid 1px #3c8eb7;
		display: inline-block;
		border-radius: 15px;
		margin-left: 15px;
		box-shadow: 0 0 4px #999;
		overflow: hidden;
	}
	.div1:hover{
		border: solid 1px #A02929;
		box-shadow: 0 0 7px #999;
		cursor: pointer;
}
.div2{
		width: 460px;
		height: 480px;
		border: solid 1px #3c8eb7;
		display: inline-block;
		border-radius: 15px;
		margin-left: 15px;
		box-shadow: 0 0 4px #3c8eb7;
		overflow: hidden;
		box-sizing: border-box;;
		padding: 30px 30px;
		font-size: 24px;
	}
		.div2:hover{
		/*border: solid 1px #A02929;*/
		box-shadow: 2px 2px 7px #888;
		cursor: pointer;
}
.div3{
		width: 940px;
		height: 257px;
		border: solid 1px #3c8eb7;
		display: inline-block;
		border-radius: 15px;
		margin-left: 15px;
		margin-bottom: 15px;
		box-shadow: 0 0 4px #3c8eb7;
		overflow: hidden;
		box-sizing: border-box;;
		padding: 30px 30px;
		font-size: 24px;
	}

#link-price{
	color:#3c8eb7;
	font-weight: bold;
}
#link-price:hover { 
	text-decoration: underline; 
}
#Zakazat{
	display: block;
	margin: 10px, auto;
	text-decoration: none;
	border-radius: 8px;
	border: solid 3px #3c8eb7;
	width: 180px;
	height: 45px;
	font-size: 20px;
	line-height: 40px;
	transition: box-shadow .1s, background-color .1s, color .1s, border-radius .3s;
	}
#Zakazat:hover{
	box-shadow: 2px 2px 2px #ccc;
	 background-color: #3c8eb7; 
	 color: #fff;
	 border-radius: 12px;
}

#Zakazat {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: transform;
  transition-property: transform;
}
#Zakazat:before {
  pointer-events: none;
  position: absolute;
  z-index: -1;
  content: '';
  top: 100%;
  left: 5%;
  height: 10px;
  width: 90%;
  opacity: 0;
  background: -webkit-radial-gradient(center, ellipse, rgba(0, 0, 0, 0.35) 0%, rgba(0, 0, 0, 0) 80%);
  background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.35) 0%, rgba(0, 0, 0, 0) 80%);
  /* W3C */
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: transform, opacity;
  transition-property: transform, opacity;
}
#Zakazat:hover, .hvr-float-shadow:focus, .hvr-float-shadow:active {
  -webkit-transform: translateY(-5px);
  transform: translateY(-5px);
  /* move the element up by 5px */
}
#Zakazat:hover:before, .hvr-float-shadow:focus:before, .hvr-float-shadow:active:before {
  opacity: 1;
  -webkit-transform: translateY(5px);
  transform: translateY(5px);
  /* move the element down by 5px (it will stay in place because it's attached to the element that also moves up 5px) */
}

@-webkit-keyframes hvr-icon-down {
  0%,
  50%,
  100% {
	-webkit-transform: translateY(0);
	transform: translateY(0);
  }

  25%,
  75% {
	-webkit-transform: translateY(6px);
	transform: translateY(6px);
  }
}

@keyframes hvr-icon-down {
  0%,
  50%,
  100% {
	-webkit-transform: translateY(0);
	transform: translateY(0);
  }

  25%,
  75% {
	-webkit-transform: translateY(6px);
	transform: translateY(6px);
  }
}


.hvr-icon-down {
  display: inline-block;
  /*vertical-align: middle;*/
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
  padding-right: 2.2em;
}
.hvr-icon-down:before {
  content: "\f01a";
  position: absolute;
  right: 1em;
  padding: 0 1px;
  font-family: FontAwesome;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
}
.hvr-icon-down:hover:before, .hvr-icon-down:focus:before, .hvr-icon-down:active:before {
  -webkit-animation-name: hvr-icon-down;
  animation-name: hvr-icon-down;
  -webkit-animation-duration: 0.75s;
  animation-duration: 0.75s;
  -webkit-animation-timing-function: ease-out;
  animation-timing-function: ease-out;
}


</style>

</body>
</html>