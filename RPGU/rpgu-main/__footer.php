<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<!-- news-wrapper -->
		
		<?$APPLICATION->IncludeComponent("bitrix:news.list", "nvx.last.news", 
		Array(
			"COMPONENT_TEMPLATE" => "nvx.last.news",
			"DETAIL_URL" => "/news/?ELEMENT_ID=#ELEMENT_ID#",
			)
		);?>	
		</section>
		</div>
<!-- footer -->
		<footer id="footer">
			<div class="container">
			
				<!-- footer-aside -->
				<aside class="footer-aside clearfix">
					
					<div class="footer-feedback pull-left">
						<span class="tel"><a href="tel:880010070-10">8 800 100-70-10</a></span>
						<span class="tel"><a href="tel:74995501839">+7 499 550-18-39</a></span>
						
						<nav class="footer-nav">
							<h3>Обратная связь</h3>
							<ul class="list-unstyled">
								
								<li><a href="#"><span class="icon-telegram"><span class="path1"></span><span class="path2"></span></span> gosuslugi_support</a></li>
								<li><a href="#">Оставить отзыв</a></li>
								<li><a href="mailto:support@gosuslugi.ru">support@gosuslugi.ru </a></li>
							</ul>
						</nav>
					</div>
					
					<!-- footer-information -->
					<div class="footer-information pull-left">
						<nav class="footer-nav">
							<h3>Помощь и поддержка</h3>
							<ul>
								<li><a href="/support/faq">Частые вопросы</a></li>
								<li><a href="/news">Новости</a></li>
								<li><a href="#">Информация о платежах</a></li>
								<li><a href="#">О защите персональных данных</a></li>
								<li><a href="#">Мобильные приложения</a></li>
							</ul>
						</nav>
					</div>
					
					<!-- footer-resources -->
					<div class="footer-resources pull-left">
						<nav class="footer-nav">
							<h3>Полезные ресурсы</h3>
							<ul>
								
								<li><a href="#">Российская общественная инициатива <i class="icon-arrow-right"></i></a></li>
								<li><a href="#">Интернет-портал правовой информации <i class="icon-arrow-right"></i></a></li>
							</ul>
						</nav>
						<nav class="footer-nav">
							<h3>Для провайдеров услуг</h3>
							<ul>
								<li><a href="#">Информация по ЕСИА</a></li>
								<li><a href="#">Нормативно-правовые и методические материалы</a></li>
								<li><a href="#">Информация о платных услугах</a></li>
							</ul>
						</nav>
					</div>
					
					<!-- footer-projects -->
					<div class="footer-projects pull-right">
						<nav class="footer-nav">
							<h3>Наши проекты</h3>
							<ul>
								<li><a href="#">Качество связи <i class="icon-arrow-right"></i></a></li>
								<li><a href="#">Старый портал <i class="icon-arrow-right"></i></a></li>
								<li><a href="#">Регистрация юридического лица <i class="icon-arrow-right"></i></a></li>
								<li><a href="#">Контроль инвестиционных программ <i class="icon-arrow-right"></i></a></li>
								<li><a href="#">Информационно-справочная система ЖКХ <i class="icon-arrow-right"></i></a></li>
								<li><a href="#">Досудебное обжалование <i class="icon-arrow-right"></i></a></li>
								<li><a href="#">Беженцам с Юго-Востока Украины <i class="icon-arrow-right"></i></a></li>
							</ul>
						</nav>
					</div>
					
				</aside>
				
				<!-- footer-info -->
				<div class="footer-info row">
					<div class="col-6 copyright-col">
						<strong class="logo"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo_dept_mks.png" alt="&nbsp;" width="64" height="65"></strong>
						<p class="copyright">Региональный портал государственных услуг, 2016 г.</p>
					</div>
					
					<div class="col-6 info-col">
						<strong class="logo"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo-rtk.png" alt="&nbsp;" width="61" height="50"></strong>
						
						<div class="holder">
							<p class="text">Госуслуги в социальных сетях</p>
							
							<!-- social-networks -->
							<ul class="social-networks">
								<li><a href="#"><i class="icon-social_vk"></i></a></li>
								<li><a href="#"><i class="icon-social_fb"></i></a></li>
								<li><a href="#"><i class="icon-social_tw"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>
		</footer>
		
	</div>
	
	<!-- inline lightbox structure example -->
	<div class="popup-holder">
		<div id="lightbox1" class="lightbox">
			<div class="head">
				<a href="#" class="close"><i class="icon-closed"></i></a>
	
				<strong class="heading">Укажите ваше местоположение</strong>
			</div>
			
			<form action="#">
				<div class="scroll-holder">
					<p>Вам будет доступен список услуг, предоставляемых в соответствующем регионе</p>
					
					<strong class="sub-heading">Ваше текущее местоположение</strong>
					
					<div class="field-row">
						<label for="radio1" class="radio">
							<input type="radio" id="radio1" checked>
							<span></span>
						</label>
						<span class="label"><label for="radio1">г. Белгород</label></span>
					</div>
					
					<strong class="sub-heading">Вы можете изменить регион:</strong>
					
					<div class="row">
						
						<div class="col-6">
							<div class="field-row">
								<label for="search-radio" class="radio">
									<input type="radio" id="search-radio" name="type1">
									<span></span>
								</label>
								<span class="label"><label for="search-radio">г. Белгород</label></span>
							</div>
						</div>
						<div class="col-6">
							<div class="field-row">
								<label for="search-radio" class="radio">
									<input type="radio" id="search-radio" name="type1">
									<span></span>
								</label>
								<span class="label"><label for="search-radio">Алексеевский район</label></span>
							</div>
						</div>
						<div class="col-6">
							<div class="field-row">
								<label for="search-radio" class="radio">
									<input type="radio" id="search-radio" name="type1">
									<span></span>
								</label>
								<span class="label"><label for="search-radio">Белгородский район</label></span>
							</div>
						</div>
						<div class="col-6">
							<div class="field-row">
								<label for="search-radio" class="radio">
									<input type="radio" id="search-radio" name="type1">
									<span></span>
								</label>
								<span class="label"><label for="search-radio">Борисовский район</label></span>
							</div>
						</div>
						<div class="col-6">
							<div class="field-row">
								<label for="search-radio" class="radio">
									<input type="radio" id="search-radio" name="type1">
									<span></span>
								</label>
								<span class="label"><label for="search-radio">Валуйский район</label></span>
							</div>
						</div>
						<div class="col-6">
							<div class="field-row">
								<label for="search-radio" class="radio">
									<input type="radio" id="search-radio" name="type1">
									<span></span>
								</label>
								<span class="label"><label for="search-radio">Вейделевский район</label></span>
							</div>
						</div>
						<div class="col-6">
							<div class="field-row">
								<label for="search-radio" class="radio">
									<input type="radio" id="search-radio" name="type1">
									<span></span>
								</label>
								<span class="label"><label for="search-radio">Волоконовский район</label></span>
							</div>
						</div>
						<div class="col-6">
							<div class="field-row">
								<label for="search-radio" class="radio">
									<input type="radio" id="search-radio" name="type1">
									<span></span>
								</label>
								<span class="label"><label for="search-radio">Грайворонский район</label></span>
							</div>
						</div>
						<div class="col-6">
							<div class="field-row">
								<label for="search-radio" class="radio">
									<input type="radio" id="search-radio" name="type1">
									<span></span>
								</label>
								<span class="label"><label for="search-radio">Губкинский городской округ</label></span>
							</div>
						</div>
						<div class="col-6">
							<div class="field-row">
								<label for="search-radio" class="radio">
									<input type="radio" id="search-radio" name="type1">
									<span></span>
								</label>
								<span class="label"><label for="search-radio">Ивнянский район</label></span>
							</div>
						</div>
						<div class="col-6">
							<div class="field-row">
								<label for="search-radio" class="radio">
									<input type="radio" id="search-radio" name="type1">
									<span></span>
								</label>
								<span class="label"><label for="search-radio">Корочанский район</label></span>
							</div>
						</div>
					</div>
					
					<div class="search-holder">
						<div class="field">
							<input type="search" id="srearch-modal" class="form-control" placeholder="Российская Федерация">
							<button><i class="icon-zoom_blur"></i></button>
						</div>
					</div>
					
					<a href="#" class="btn">Сохранить</a>
				</div>
			</form>
		</div>
	</div>
	
	
	
	<div class="icons" style="font-size: 150px; display: none;">
		<span class="icon-zoom_white_desk"></span>
		<span class="icon-telegram"><span class="path1"></span><span class="path2"></span></span>
		<span class="icon-social_vk"></span>
		<span class="icon-social_tw"></span>
		<span class="icon-social_tw2"></span>
		<span class="icon-social_fb"></span>
		<span class="icon-slider_arrow_sq_rh"><span class="path1"></span><span class="path2"></span></span>
		<span class="icon-slider_arrow_sq_lh"><span class="path1"></span><span class="path2"></span></span>
		<span class="icon-logo_nobeta"><span class="path1"></span><span class="path2"></span></span>
		<span class="icon-key_new"></span>
		<span class="icon-icon9"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span></span>
		
		<span class="icon-icon8"></span>
		<span class="icon-icon7"></span>
		<span class="icon-icon6"></span>
		<span class="icon-icon5"></span>
		<span class="icon-icon4"></span>
		<span class="icon-icon3"></span>
		<span class="icon-icon2"></span>
		<span class="icon-icon1"></span>
		
		<span class="icon-gos_logo_mobile"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></span>
		
		<span class="icon-closed"></span>
		<span class="icon-arrow_east_white"></span>
	</div>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-1.11.2.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.main.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/custom.js"></script>


</body>
</html>