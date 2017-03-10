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
?>
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>

<?
$hasPerm = false;
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
			$hasPerm = true;
		}
?>
<?if ($hasPerm):?>
	<div class="btn_Add" onClick="javascript:(new BX.CAdminDialog({
'content_url':'/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult["ID"]?>&type=<?=$arResult["IBLOCK_TYPE_ID"]?>&lang=ru&force_catalog=&filter_section=0&bxpublic=Y&from_module=iblock&return_url=<?=rawurlencode($APPLICATION->GetCurPageParam())?>',
'width':'700',
	'height':'400'})).Show();"><div class="btn_Add_Title">Добавить выступление</div></div>
	<p>&nbsp;</p>
   <div style="clear:right"></div>
<?endif;?>
<?$i=0;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
<div style="overflow:hidden;  margin-bottom:30px">
<?if ($hasPerm):?>
   <div style="float:left; margin-top:0px;" class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>"></div>
<?endif?>
		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
			<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span><br>
		<?endif?>

		<?if ($hasPerm):?>
			<a class="fancypopup" href="#popupvacapan<?=$i?>"><b><?echo $arItem["NAME"]?></b></a>
			<div style="display:none">
				<div id="popupvacapan<?=$i?>">
					<div class="btn_Add" onClick="javascript: document.getElementById('fancybox-close').click(); (new BX.CAdminDialog({
						'content_url':'/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arItem["IBLOCK_ID"]?>&type=<?=$arItem["IBLOCK_TYPE_ID"]?>&ID=<?=$arItem['ID']?>&lang=ru&force_catalog=&filter_section=0&bxpublic=Y&from_module=iblock&return_url=<?=rawurlencode($APPLICATION->GetCurPageParam())?>',
						'width':'700','height':'400'})).Show();"><div class="btn_Add_Title">Редактировать</div>
					</div>
					<div class="btn_Add" onClick="javascript: document.getElementById('fancybox-close').click();"><div class="btn_Add_Title">Отмена</div></div>
				</div>
			</div>		
		
		<?else:?>
			<?if($arItem["DETAIL_PAGE_URL"]):?>
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><b><?echo $arItem["NAME"]?></b></a><br>
			<?endif?>		
		<?endif?>
</div>
<?$i=$i+1;?>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>