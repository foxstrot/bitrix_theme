<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html class="loader">
<head>

	<?$APPLICATION->ShowHead()?>
	<link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/images/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?$APPLICATION->ShowTitle()?></title>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link media="all" rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/main.css">
	
</head>
<body>
<?$APPLICATION->ShowPanel();?> 
	<div id="wrapper">
		<h1 class="hidden">Госуслуги</h1>
		<!-- topbar -->
		<div class="topbar-holder">
			
			<!-- top-bar -->
			<div class="top-bar">
				<div class="container">
				
					<!-- dropdown-holder -->
					<div class="open-close main-panel pull-left">
						<a href="#" class="opener">
							<strong class="logo-svg"></strong>
						</a>
						<div class="slide">
							<div class="col-6 col-5">
								<div class="scroll">
									<article>
										<h2 class="hidden">Госуслуги</h2>
										<strong class="heading">О каталоге</strong>
										<p>В каталог государственных сайтов включены официальные информационные интернет-ресурсы, посвященные деятельности государственных ведомств.</p>
										<p>Навигация в каталоге организована таким образом, чтобы вы могли быстро найти нужное ведомство и его контактную информацию, ознакомиться с предоставляемыми услугами или перейти на официальный сайт.</p>
										<strong class="sub-heading">В настоящее время каталог содержит:</strong>
										<ul class="stat-list">
											<li>
												<span class="number">32</span>
												<span class="text">Министерства</span>
											</li>
											<li>
												<span class="number">60</span>
												<span class="text">Ведомств</span>
											</li>
											<li>
												<span class="number">4</span>
												<span class="text">Сайта</span>
											</li>
										</ul>
									</article>
									<img src="<?=SITE_TEMPLATE_PATH?>/images/logo.svg" alt="Госуслуги" class="logo">
									<p>Теперь пользоваться госуслугами очень просто!<br> Мы запустили дополнение к основному порталу.</p>
									<a href="/" class="btn">Перейти на портал</a>
								</div>
							</div>
							<div class="col-6">
								<div class="scroll">
									<strong class="heading">Категории</strong>
									<ul class="catalog">
										<li>
											<a href="/services">
											<strong>Государственные услуги</strong>
											<p>Порталы государственных услуг</p>
											</a></li>
										<li>
											<a href="/services">
											<strong>Здоровье, спорт, туризм</strong>
											<p>Здравоохранение, активный и здоровый образ жизни</p>
											</a></li>
										<li>
											<a href="/services">
											<strong>Правосудие, правопорядок</strong>
											<p>Обеспечение и охрана правопорядка на территории РФ, нормативно-правовое и судебное регулирование</p>
											</a></li>
										<li>
											<a href="/services">
											<strong>Безопасность страны, ЧС</strong>
											<p>Защита от внешних угроз и чрезвычайных ситуаций</p>
											</a></li>
										<li>
											<a href="/services">
											<strong>Образование, наука, культура</strong>
											<p>Воспитание и обучение, научные учреждения, искусство, культурное наследие</p>
											</a></li>
										<li>
											<a href="/services">
											<strong>Труд, соцзащита</strong>
											<p>Охрана прав человека, регулирование в вопросах труда и его оплаты, пенсионного обеспечения и социальной защиты</p>
											</a></li>
										<li>
											<a href="/services">
											<strong>ИТ, связь, СМИ</strong>
											<p>Государственные услуги, информационные технологии, почта, доступ к услугам связи и медиасреде</p>
											</a></li>
										<li>
											<a href="/services">
											<strong>Экономика, финансы</strong>
											<p>Макроэкономика, финансовые рынки, инвестиционная политика</p>
											</a></li>
										<li>
											<a href="/services">
											<strong>Промышленность, строительство</strong>
											<p>Промышленный и оборонно-промышленный комплекс, техническое регулирование</p>
											</a></li>
										<li>
											<a href="/services">
											<strong>Природопользование, экология</strong>
											<p>Использование, воспроизводство и охрана природных ресурсов</p>
											</a></li>
										<li>
											<a href="/services">
											<strong>Транспорт</strong>
											<p>Перевозка пассажиров и грузов</p>
											</a></li>
										<li>
											<a href="/services">
											<strong>Региональное развитие</strong>
											<p>Социально-экономического развитие субъектов Российской Федерации</p>
											</a></li>
										<li>
											<a href="/services">
											<strong>Стандарты, реестры, статистика</strong>
											<p>Службы государственной регистрации</p>
											</a></li>
										<li>
											<a href="/services">
											<strong>Международная деятельность</strong>
											<p>Международные отношения Российской Федерации</p>
											</a></li>
										<li>
											<a href="/services">
											<strong>Президент, Правительство, Федеральное собрание</strong>
											<p>Высшее руководство страны</p>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					
					<!-- dropdown -->
					<div class="open-close dropdown pull-left">
						<a href="#" class="opener">Для граждан <i class="icon-arrow-down"></i></a>
						<div class="slide">
							<ul class="list-unstyled">
								<li><a href="/services">Для юридических лиц</a></li>
								<li><a href="/services">Для предпринимателей</a></li>
								<li><a href="/services">Для иностранных граждан</a></li>
							</ul>
						</div>
					</div>
					
					
					<!-- civi-picker -->
					<div class="civi-picker open-close custom-select pull-right">
						<a href="#" class="opener">
							<span class="select-text">
								<i class="flag-russia"></i>
								<span class="text">RUS</span>
							</span>
							<i class="icon-arrow-down"></i>
						</a>
						<div class="slide">
							<ul class="list-unstyled">
								<li><a href="#"><i class="flag-uk"></i> GBR</a></li>
								<li><a href="#"><i class="flag-germany"></i> GER</a></li>
								<li><a href="#"><i class="flag-france"></i> FRA</a></li>
								<li class="selected"><a href="#"><i class="flag-russia"></i> RUS</a></li>
							</ul>
						</div>
					</div>
					
					<!-- locationButton -->
					<a href="#lightbox1" class="locationButton pull-right lightbox"><i class="icon-map-marker"></i> Выберите регион</a>
					
				</div>
			</div>
			
			<!-- header -->
			<header id="header">
				<div class="container">
					
					<div class="logo-holder">
						<!-- logo -->
						<h1 class="logo pull-left"><a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.svg" alt="Госуслуги"></a></h1>
						
						<!-- opener -->
						<a href="#" class="nav-opener"><span></span></a>
						
						<!-- topbar-opener -->
						<a href="#" class="topbar-opener pull-right"><i class="icon-open"></i></a>
					</div>
					
					<!-- main navigation -->
					<nav id="nav" class="pull-left">
						<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_menu", 
	array(
		"ROOT_MENU_TYPE" => "top",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "2",
		"CHILD_MENU_TYPE" => "top-2-lvl",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"COMPONENT_TEMPLATE" => "top_menu"
	),
	false
);?>
					</nav>
					
					<a href="#" class="form-opener pull-left"><i class="icon-zoom_white_desk"></i></a>
					
					<a href="https://esia.gosuslugi.ru/aas/oauth2/ac?client_id=RPBO03311&redirect_uri=http%3A%2F%2Fbitx.egspace.ru" class="btn-link pull-right"><i class="icon-key_new"></i> Личный кабинет</a>
					
				</div>
				
				<!-- form-search -->						<?$APPLICATION->IncludeComponent(
	"bitrix:search.form", 
	"nvx-mainsearch", 
	array(
		"PAGE" => "#SITE_DIR#search/index.php",
		"USE_SUGGEST" => "Y",
		"COMPONENT_TEMPLATE" => "nvx-mainsearch"
	),
	false
);?>
		
			</header>
			
		</div>
		
		<a href="#" class="form-overlay form-opener"></a>
		
		<div class="slider-area">
			<!-- slideshow -->
			<div class="slideshow">
				<div class="slideset">
					<!-- slide -->
					<div class="slide">
						<div class="img-holder" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/img1.jpg)"></div>
						<div class="container">
							<div class="col-6">
								<h2>Качество связи!</h2>
								<p>Создадим народную карту покрытия <br> сотовой связи вместе!</p>
								<a href="/support" class="btn">Участвовать!</a>
							</div>
						</div>
					</div>
					<!-- slide -->
					<div class="slide">
						<div class="img-holder" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/img2.jpg)"></div>
						<div class="container">
							<div class="col-6">
								<h2>Круглосуточная поддержка<br>  пользователей</h2>
								<p>Представляем новую возможность <br>получить консультацию по услугам</p>
								<a href="/support" class="btn">Подробнее</a>
							</div>
						</div>
					</div>
					<!-- slide -->
					<div class="slide">
						<div class="img-holder" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/img3.jpg)"></div>
						<div class="container">
							<div class="col-6">
								<h2>Оплачивайте штрафы ГИБДД <br> со скидкой 50%</h2>
								<p>В течение 20 дней со дня получения штрафа Вы<br> платите только половину суммы.</p>
								<a href="/pay" class="btn">Подробнее</a>
							</div>
						</div>
					</div>
					<!-- slide -->
					<div class="slide">
						<div class="img-holder" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/img4.jpg)"></div>
						<div class="container">
							<div class="col-6">
								<h2>Открываете свой бизнес?</h2>
								<p>Подайте документы для государственной регистрации ИП<br> и получайте услуги на портале - быстро и удобно.</p>
								<a href="/services" class="btn">Подробнее</a>
							</div>
						</div>
					</div>
				</div>
				<div class="switchers">
					<a href="#" class="btn-prev"><span class="icon-slider_arrow_sq_lh"><span class="path1"></span><span class="path2"></span></span></a>
					<a href="#" class="btn-next"><span class="icon-slider_arrow_sq_rh"><span class="path1"></span><span class="path2"></span></span></a>
				</div>
			</div>
			
			<!-- banner -->
			<div class="banner">
				<div class="container">
					<div class="banner-holder">
						<img src="<?=SITE_TEMPLATE_PATH?>/images/gos_logo.svg" alt="Госуслуги" width="80" height="88" class="sub-logo">
						<p>Теперь пользоваться<br> госуслугами очень<br> просто! </p>
						<a href="https://esia.gosuslugi.ru/aas/oauth2/ac?client_id=RPBO03311&redirect_uri=http%3A%2F%2Fbitx.egspace.ru" class="btn">Войти</a>
						<a href="/bitrix/admin/index.php#forgot_password" class="btn primary">Зарегистрироваться</a>
					</div>
				</div>
			</div>
			
			<!-- search area -->
			<form action="#" class="search-area">
				<div class="container">
					<div class="field-holder">
						<input type="search" placeholder="Введите название услуги или ведомства" class="form-control">
						<button type="submit" class="btn"><i class="icon-zoom_white_desk"></i></button>
					</div>
					<nav class="help-area">
						<strong class="title">Например:</strong>
						<ul class="list-inline search-list">
							<li><a href="/services">загранпаспорт</a></li>
							<li><a href="/services">пенсионный фонд</a></li>
							<li><a href="/services">детский сад</a></li>
							<li><a href="/services">водительское удостоверение</a></li>
						</ul>
					</nav>
					
				</div>
			</form>
			
		</div>
		
		
		<div class="article">
		<section class="news-wrapper container">