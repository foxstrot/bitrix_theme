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


$hasEditPerm = false;
$rsGroups = CGroup::GetList ($by = "c_sort", $order = "asc", Array ("NAME" => "Администратор%"));
if(intval($rsGroups->SelectedRowsCount()) > 0)
{
   while($arGroups = $rsGroups->Fetch())
   {
      $arUsersGroups[] = $arGroups["ID"];
   }
}
		if (CSite::InGroup($arUsersGroups))
		{
			$hasEditPerm = true;
		}
$hasEditPerm=true;
		

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
<div class="nvx3_block">
  <input type="radio" name="nvx3_block" checked="checked" id="nvx3_1"/><label for="nvx3_1"></label>
  <input type="radio" name="nvx3_block" id="nvx3_2"/><label for="nvx3_2"></label>
  <input type="radio" name="nvx3_block" id="nvx3_3"/><label for="nvx3_3"></label>
  <input type="radio" name="nvx3_block" id="nvx3_4"/><label for="nvx3_4"></label>
  <input type="radio" name="nvx3_block" id="nvx3_5"/><label for="nvx3_5"></label>


<?

$arriblock = array(1=>"congratulations",2=>"quotes", 3=>"speeches", 4=>"linkstophotos", 5=>"letterstodirector");

for ($i = 1; $i <= 5; $i++) {
		//для каждой вкладки в цикле
?>
	<div class="tab"> <!-- Открыли i-й таб-->
<?

		$nvx3_arSelect = Array("ID","IBLOCK_ID","IBLOCK_NAME","NAME","LIST_PAGE_URL","DETAIL_PAGE_URL","PREVIEW_TEXT","DETAIL_TEXT", "PROPERTY_PREVIEWINROTATION","PROPERTY_SHOWTITLE");
		$nvx3_arFilter = Array("IBLOCK_CODE"=>$arriblock[$i]."_".SITE_ID, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "!PROPERTY_inrotation"=>false);
		$nvx3_res = CIBlockElement::GetList(Array(1=>"PROPERTY_SHOWTITLE"), $nvx3_arFilter, false, Array(), $nvx3_arSelect);
		$needToShowTitle=true;
		$j=0;
		while($nvx3_ob = $nvx3_res->GetNextElement())
		{//перебираем каждый отфильтрованный элемент инфоблока 
			$nvx3_arFields = $nvx3_ob->GetFields();
			if ($needToShowTitle)
			{//если первая итерация цикла, то проверяем надо ли вставлять ссылку-название инфоблока (заголовок)
				if ($nvx3_arFields["PROPERTY_SHOWTITLE_VALUE"]=="Да")
				{//выводим заголовок
					?><div class="nvx3_slider_tab_title"><a href="<?=$nvx3_arFields["LIST_PAGE_URL"]?>"><?=$nvx3_arFields["IBLOCK_NAME"]?></a></div><?
				}//вылючаем вывод заголовка, чтобы он позже в этом табе не вывелся
				$needToShowTitle=false;//дальше будем вставлять только сами элементы
			}
			if ($nvx3_arFields["PROPERTY_PREVIEWINROTATION_VALUE"]=="Да")
			{//если указано что надо вывести превью элемента инфоблока, то выводим текст превью
					?><div class="nvx3_detailcong"><?=$nvx3_arFields["PREVIEW_TEXT"]?></div><?
			} else
			{//иначе выводим ссылку на элемент
	  			?><a href="<?=$nvx3_arFields["DETAIL_PAGE_URL"]?>"><?=$nvx3_arFields["NAME"]?></a><br /><br/><?
			}
			$j=$j+1;
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