<?php header( 'Location: http://vk.com/radmaskarade' ) ; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php include'class.php'; ?>
<html>
<head>
<title>
	Маскарад. Прокат костюма, аренда костюма. Прокат и аренда карнавальных костюмов.
</title>
	<!--<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">-->
	<link rel="stylesheet" type="text/css" href="/css/mascarade.css">
	<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="/res/favicon.ico">
	<link rel="icon" type="image/png" href="/res/favicon.png">
	<script type="text/javascript" src="/js/cufon-yui.js"></script>
	<script type="text/javascript" src="/js/calibri_cufonfonts.js"></script>
	<script type="text/javascript" src="/js/isFontFaceSupported.js"></script>
	<script type="text/javascript">
		if(!isFontFaceSupported()) {
		    Cufon.replace("p");
		    Cufon.replace("li");
		    Cufon.replace("h1");
		    Cufon.replace("h2");
		    Cufon.replace("a");
		    Cufon.replace("span");
		}
	</script>
	<script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter19898671 = new Ya.Metrika({id:19898671, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/19898671" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
</head>
<body>
<div id="top">
<div id="topwrap">
<div id="cntrimg">
	<div id="logo"></div>
	<div id="topinfo">
		<div class="fright">
			<div class="workTime">
				<p>Время работы:</p>
				<div>
					<span>Ежедневно:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
					c 10:00 — 21:00</span>
                </div>
			</div>
			
			<div class="tel">
				<span>ул Ким-Ю-Чена 44,</span><br>
				<span>"Магазины Радости"</span><br>
				<span>3 этаж</span><br>
			</div>
			
			<div class="searchTop">
				<div><p>поиск по сайту:</p></div>
				<form action="/" method="post" name="search">
					<input name="mode" value="search" type="hidden">
					<input name="sample" type="text" class="text">
					<input type="submit" value="" class="button">
				</form>
			</div>
		</div>
	</div>
	<div class="icons">
		<a href="/" class="home" title="на главную"></a>
		<a href="/contacts" class="contacts" title="Написать"></a>
		<a href="/sitemap" class="sitemap" title="Карта сайта"></a>
	</div>
</div>
</div>
</div>

<div id="center">
	<div class="menuTop">
		<table>
			<tr>
				<td width=300px><a href="/">Главная</a></td>
				<!--<td><a href="/aboutcompany">О компании</a></td>-->
				<td width=300px><a href="/costume">Каталог</a></td>
				<td width=300px><a href="/service">Услуги и цены</a></td>
				<td width=300px><a href="/rules">Правила проката</a></td>
				<!--<td><a href="/start13">Как взять костюм напрокат</a></td>-->
				<!--<td><a href="/photos">Фотоальбом клиентов</a></td>-->
				<td width=300px><a href="/contacts">Контакты</a></td>
			</tr>
		</table>
	</div>
	
	<div id="centerwrap">
	<div class="leftCol">
		<div class="title">
			<h1>Каталог костюмов</h1>
		</div>
		<ul class="leftMenu">
			<?php
				$out = new site_module_output();
				$out->menu_out();
			?>
		</ul>
		<div class="box">
			<div class="box-inner">
				<div class="title">
					<h1>Правила проката</h1>
                </div>
				<p><b>1. Оформление договора проката.</b><br>

					<b>2. Стоимость услуг проката</b><br>
					2.1. Клиент оплачивает арендную плату за пользование имуществом салона и вносит денежный залог в размере полной оценочной стоимости имущества. Внесенная в кассу Салона сумма денежного залога служит обеспечением выполнения условий Договора проката. Сумма денежного залога возвращается Клиенту после возврата имущества и проведения окончательных взаиморасчетов по Договору проката.<br>

					<b>3. Получение товара</b><br>
					3.1. При получении имущества в пользование Клиент и Салон проката подписывают договор проката, который содержит детальное описание имущества сдаваемого в прокат. После подписания Договора претензии к переданному по договору проката имуществу не принимаются.<br>

					<b>4. Использование имущества взятого напрокат</b><br>
					4.1. Клиент обязан бережно относиться к имуществу, взятому напрокат. Запрещается использовать имущество не по назначению, так как это может привести к появлению у него дефектов.<br>
					4.2. Категорически запрещается самостоятельная стирка имущества, взятого в Салоне напрокат. Карнавальные костюмы и прочие праздничные атрибуты это очень деликатный товар, требующий особого ухода и специальных методов чистки.<br>
					4.3. Запрещается изменять внешний вид костюмов, в том числе перешивать костюмы, и «подгонять» изделие по фигуре.<br>
					4.4. Запрещается наносить парфюмерию на костюмы и аксессуары взятые напрокат.<br>
					4.5. Клиент на своё усмотрение и под свою ответственность может погладить костюм, взятый напрокат. При этом необходимо соблюдать температурный режим и использовать специальную подкладку для деликатного глажения. В случае порчи имущества взятого напрокат Клиент несёт материальную ответственность.<br>
					4.6. К сведению клиентов, большинство карнавальных костюмов, предлагаемых Салоном, изготовлено из синтетических материалов. Салон не несёт ответственности за возможные аллергические реакции, вызванные у Клиента.<br>
					4.7. Подписание договора проката означает, что Клиент ознакомлен с правилами и условиями проката и дальнейшую ответственность, связанную с использованием имущества, берет на себя. Администрация Салона проката не несет ответственности за ущерб, который может произойти при использовании прокатного имущества Клиентом.<br>
               </p>
			</div>
			<div class="box-bottom">
				<a href="/rules">Полные правила</a>
			</div>
		</div>
	</div>
	
	<div class="content">
	<?php
		$out->output();
	?>
	</div>
	</div>
</div>

<div id="bottom">
	<div id="footer">
		<div class="footerInner">
			<div class="container">
				<div class="left-foot">
					<p>© <a href="http://technomedia.copiny.com/"; target="_blank">Разработка сайта и дизайн</a><br>«Техно Медиа», 2013</p>
					<div class="counters">
<noindex>

</noindex>
					</div>
				</div>
				<div class="footer-contacts">
					<p>© Маскарад — прокат костюмов, 2013</p>
					<p>«Маскарад» - прокат костюмов. Аренда костюмов.<br>
					г. Хабаровск, ул. Ким-Ю-Чена 44, ТРЦ "Магазины Радости", 3 этаж<br>
					Телефон: 8 (965) 675 36 68, E-mail: <a href="mailto:Maskarade.khb@gmail.com">Maskarade.khb@gmail.com</a></p>
				</div>
				<div class="footer-misc-biglist">
					<a href="http://www.biglist.ru"><img src="http://www.biglist.ru/pics/logo.gif" alt="Biglist.ru - Доска бесплатных объявлений товаров и услуг по городам России" border="0"></a>
				</div>
				<div class="footer-misc-minamap">
					<a href="http://namapi.ru/khabarovsk/razvlekatelnye-centry/" title="Отдых Хабаровск"><img border=0 src="http://namapi.com.ua/namapi.png" alt="Отдых Хабаровск"></a>
				</div>
				<div class="footer-vk">
					<a href="http://vk.com/radmaskarade" title="Наша группа вконтакте"><img border="0" src="img/vk.png" alt="ВКОНТАКТЕ"></a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>