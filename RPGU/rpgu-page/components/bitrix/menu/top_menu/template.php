<ul>
 	<li class="has-drop-down"><span><a href="/services/" class="has-drop-down-a">Каталог услуг</a></span>
		<div class="drop">
			<div class="container" id="nvxCategory">
				<ul class="drop-list" data-bind="foreach: cats">
					<li><a data-bind="attr: { 'href': link }"><i class="icon-icon10" data-bind="css: recId"></i> <span class="text" data-bind="text: title"></span></a></li>
				</ul></div></div></li>	 
	<li id="nvxTopmenuComplaint"><a href="#" data-bind="click: createComplaint">Подача жалобы</a></li>
	<li><a href="/reception/?type=doctor">Запись на приём</a></li>	
	<li><a href="/pay/">Оплата</a></li>	
</ul>