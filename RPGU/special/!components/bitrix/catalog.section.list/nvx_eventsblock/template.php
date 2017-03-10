<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

$arViewModeList = $arResult['VIEW_MODE_LIST'];

$arViewStyles = array(
	'LIST' => array(
		'CONT' => 'bx_sitemap',
		'TITLE' => 'bx_sitemap_title',
		'LIST' => 'bx_sitemap_ul',
	)
);
$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

if ('Y' == $arParams['SHOW_PARENT_NAME'] && 0 < $arResult['SECTION']['ID'])
{
	$this->AddEditAction($arResult['SECTION']['ID'], $arResult['SECTION']['EDIT_LINK'], $strSectionEdit);
	$this->AddDeleteAction($arResult['SECTION']['ID'], $arResult['SECTION']['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

}
//if (0 < $arResult["SECTIONS_COUNT"])
{
	switch ($arParams['VIEW_MODE'])
	{
		case 'LIST':
?>
<div class="nvx1_block">
  <input type="radio" name="nvx_block" checked="checked" id="nvx_1"/><label for="nvx_1"></label>
  <input type="radio" name="nvx_block" id="nvx_2"/><label for="nvx_2"></label>
  <input type="radio" name="nvx_block" id="nvx_3"/><label for="nvx_3"></label>


<?

$arriblock = array(1=>"eventsanons",2=>"eventsculture", 3=>"eventssport");

for ($i = 1; $i <= 3; $i++) {
		//для каждой вкладки в цикле
?>
	<div class="tab"> <!-- Открыли i-й таб-->
<?

		$nvx_arSelect = Array("ID","IBLOCK_ID","IBLOCK_NAME","LIST_PAGE_URL","DETAIL_PAGE_URL","NAME","PREVIEW_TEXT","DETAIL_TEXT", "PROPERTY_PREVIEWINROTATION","PROPERTY_SHOWTITLE");
		$nvx_arFilter = Array("IBLOCK_CODE"=>$arriblock[$i]."_".SITE_ID, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "!PROPERTY_inrotation"=>false);
		$nvx_res = CIBlockElement::GetList(Array(1=>"PROPERTY_SHOWTITLE"), $nvx_arFilter, false, Array(), $nvx_arSelect);
		$needToShowTitle=true;
		while($nvx_ob = $nvx_res->GetNextElement())
		{//перебираем каждый отфильтрованный элемент инфоблока 
			$nvx_arFields = $nvx_ob->GetFields();
			if ($needToShowTitle)
			{//если первая итерация цикла, то проверяем надо ли вставлять ссылку-название инфоблока (заголовок)
				if ($nvx_arFields["PROPERTY_SHOWTITLE_VALUE"]=="Да")
				{//выводим заголовок
					?><div class="nvx_slider_tab_title"><a href="<?=$nvx_arFields["LIST_PAGE_URL"]?>"><?=$nvx_arFields["IBLOCK_NAME"]?></a></div><?
				}//вылючаем вывод заголовка, чтобы он позже в этом табе не вывелся
				$needToShowTitle=false;//дальше будем вставлять только сами элементы
			}
			if ($nvx_arFields["PROPERTY_PREVIEWINROTATION_VALUE"]=="Да")
			{//если указано что надо вывести превью элемента инфоблока, то выводим текст превью
				?><div class="nvx_detailcong"><?=$nvx_arFields["PREVIEW_TEXT"]?></div><?
			} else
			{//иначе выводим ссылку на элемент
	  			?><a href="<?=$nvx_arFields["DETAIL_PAGE_URL"]?>"><?=$nvx_arFields["NAME"]?></a><br /><br/><?
			}
		}
?>
	</div> <!-- Закрыли i-й таб -->
<?
}//конец цикла for i
?>
</div>
<?		break;

	}//закрываем switch
}//закрываем if
?>