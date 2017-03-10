<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html class="loader">
<head>
	<?$APPLICATION->ShowHead()?>
	<link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/../rpgu-main/images/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?$APPLICATION->ShowTitle()?></title>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>	
	<link rel="stylesheet" href="/bitrix/templates/rpgu-main/Parts/Style/style.css">
</head>
<body>
<!-- bundle -->
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/templates/rpgu-main/Portal/commonHtml.html");?>

<?$APPLICATION->ShowPanel();?> 
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
						<a class="opener">
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
					
					<!--
					
					-->
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
				</div>
				
				<!-- form-search -->
		<?$APPLICATION->IncludeComponent(
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
		<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"nvx-breadcrumb", 
	array(
		"START_FROM" => "0",
		"PATH" => "",
		"SITE_ID" => "s1",
		"COMPONENT_TEMPLATE" => "nvx-breadcrumb"
	),
	false
);?>
		</div>
		
		
		<div class="article">
		
<section class="news-wrapper container">