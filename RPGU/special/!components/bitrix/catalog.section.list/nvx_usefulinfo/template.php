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
<div class="nvx2_block">
  <input type="radio" name="nvx2_block" checked="checked" id="nvx2_1"/><label for="nvx2_1"></label><input type="radio" name="nvx2_block" id="nvx2_2"/><label for="nvx2_2"></label><input type="radio" name="nvx2_block" id="nvx2_3"/><label for="nvx2_3"></label>

<?
		$arriblock = array(1=>"projectspa",2=>"vacancies",3=>"announcements");
	$iblockurl="";//сюда будем записывать url детальной страницы инфоблока
			for ($i = 1; $i <= 3; $i++) {//для каждой вкладки в цикле
?> <div class="tab"> 
<?

$nvx2_arSelect = Array("ID", "NAME","DETAIL_PAGE_URL","LIST_PAGE_URL","IBLOCK_ID", "IBLOCK_NAME");
$nvx2_arFilter = Array("IBLOCK_CODE"=>$arriblock[$i]."_".SITE_ID, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "!PROPERTY_inrotation"=>false);
$nvx2_res = CIBlockElement::GetList(Array(), $nvx2_arFilter, false, Array(), $nvx2_arSelect);
$needToShowTitle=true;
while($nvx2_ob = $nvx2_res->GetNextElement())
{
  $nvx2_arFields = $nvx2_ob->GetFields();
  if ($needToShowTitle)
  {//если первая итерация цикла, то сначала вставляем ссылку-название инфоблока
     ?><div class="nvx2_slider_tab_title"><a href="<?=$nvx2_arFields["LIST_PAGE_URL"]?>"><?=$nvx2_arFields["IBLOCK_NAME"]?></a></div><?
     $needToShowTitle=false;
  }//дальше вставляем только сами элементы
?><a href="<?=$nvx2_arFields["DETAIL_PAGE_URL"]?>"><?=$nvx2_arFields["NAME"]?></a><br /><br/><?

}

?>
	</div> <!-- закрываем таб -->
<?
			}
?>
</div> <!-- закрываем блок -->
<?
		break;
	}
}
?>