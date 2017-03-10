<html>
<head>
	<!-- Plugin styles -->
	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/lib/css/sliderkit-core.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/lib/css/sliderkit-demos.css" media="screen, projection" />

	<!-- Site styles -->
	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/lib/css/sliderkit-site.css" media="screen, projection" />
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/../rpgu-main/Parts/Style/style.css">


	<?$APPLICATION->ShowHead()?>
	<title><?$APPLICATION->ShowTitle()?></title>	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

</head>
<body>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/templates/rpgu-main/Portal/commonHtml.html");?>
<?$APPLICATION->ShowPanel();?>

<?
$rsSites = CSite::GetByID(SITE_ID); 
$arSite = $rsSites->Fetch(); 
global $siteName;
$siteName = $arSite['SITE_NAME'];
?>

<div id="panel">
	<div class="panel_special_bg">
        <div class="panel_special">
        	<a name="top"></a>
           <div class="size_block">
			   <div class="title"><img src="<?=SITE_TEMPLATE_PATH?>/images/title_size_font.gif" alt="Размер шрифта"></div>
                    <div class="size1" ><span> </span></div>
                    <div class="size2" ><span> </span></div>
			   <div class="size3 size3_sel" ><span> </span></div>
           </div>
           <div class="color_block">
			   <div class="title"><img src="<?=SITE_TEMPLATE_PATH?>/images/title_color.gif" alt="Цвета сайта"></div>
                    <div class="color1 color1_sel"> </div>
                    <div class="color2"> </div>
                    <div class="color3"> </div>
           </div>
           <div class="search_block">
            <a href="<?=SITE_DIR?>poisk/?special=y"><img src="<?=SITE_TEMPLATE_PATH?>/images/title_search.gif" alt="Поиск"></a>
           </div>
           <div id="backToNormal">
                <a href="<?=SITE_DIR?>"><span>Обычная версия сайта</span></a>
            </div>
    </div></div>
</div>


<div id="page">
       <div id="wrapper">
		<h1 class="hidden">Госуслуги</h1>
		<!-- topbar -->
		<div class="topbar-holder">
			
			<!-- top-bar -->
			<div class="top-bar">
				<div class="container">
				
					<!-- dropdown-holder -->
					<strong class="logo-svg pull-left"></strong>
					
					<!-- dropdown -->
					<div class="open-close dropdown pull-left" id="nvxUserSelect">					
						<a class="opener" href="#">
							<span data-bind="text: activeType"></span>
							<i class="icon-arrow-down"></i>
						</a>
						<div class="slide">
							<ul class="list-unstyled">
								<!-- ko foreach: availTypes -->
								<li>
									<a data-bind="click: $parent.changeType, text: title"></a>
								</li>
								<!-- /ko -->
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
					<div id="nvxCurrentLocation">
						<a href="#lightbox1" class="locationButton pull-right lightbox"><i class="icon-map-marker"></i> <span data-bind="text: locationBaseText">Выберите район</span></a>
					</div>
					
				</div>
			</div>
			
			<!-- header -->
			<header id="header">
				<div class="container">
					
					<div class="logo-holder">
						<!-- logo -->
						<h1 class="logo pull-left"><a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/../rpgu-main/images/logo.svg" alt="Госуслуги"></a></h1>
						
						<!-- opener -->
						<a href="#" class="nav-opener"><span></span></a>
						
						<!-- topbar-opener -->
						<a href="#" class="topbar-opener pull-right"><i class="icon-open"></i></a>
					</div>
					
					<div id="nvxAuth">
						<!-- ko if: userLoggedStatus() == false -->
							<a data-bind="click: click" class="btn-link pull-right"><i class="icon-key_new"></i><span data-bind="text: loginButtonTitle">Личный кабинет</span></a>
						<!-- /ko -->
						<!-- ko if: userLoggedStatus -->
							<a data-bind="click: showMenu" class="btn-link pull-right">
								<span data-bind="text: currentUserName"></span>
								<img src="<?=SITE_TEMPLATE_PATH?>/../rpgu-main/Parts/Img/blue_dw_arrow.svg" style="width: 13px;">
								<i class="icon-key_new"></i>
							</a>
							<div class="auth-submenu" data-bind="visible: submenuVisible" style="display: none">
								<a class="auth-submenu-item" href="/cabinet/">Личный кабинет</a>
								<a class="auth-submenu-item" data-bind="click: click" href="#">Выйти</a>
							</div>							
						<!-- /ko -->
						<input id="userLoggedStatus" type="hidden" data-bind="value: userLoggedStatus">
					</div>

					<a href="#" class="form-opener pull-left"><i class="icon-zoom_white_desk"></i></a>

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
			
			
			<!-- search area -->
			<div id="nvxSearchPanel">
				<form action="#" class="search-area" data-bind="submit: goSearch">
					<div class="container">
						<div class="field-holder">
							<input type="search" placeholder="Введите название услуги" class="form-control" data-bind="value: searchText">
							<button type="submit" class="btn" data-bind="click: goSearch"><i class="icon-zoom_white_desk"></i></button>
						</div>
						<!--span class="filter-itm">
							<label class="filter-label"><input type="checkbox" data-bind="checked: onlyOnline"><span> Только электронные услуги</span></label>
						</span-->

						<nav class="help-area">
							<strong class="title">Например:</strong>
							<ul class="list-inline search-list">
								<li><a href="/services" data-bind="click: goPreSearch.bind('информирование')">информирование</a></li>
								<li><a href="/services" data-bind="click: goPreSearch.bind('паспорт')">паспорт</a></li>
								<li><a href="/services" data-bind="click: goPreSearch.bind('запись к врачу')">запись к врачу</a></li>								
							</ul>
						</nav>		
					</div>					
				</form>			
			</div>
			
		</div>
		
		
		<div class="article">
		<section class="news-wrapper container">