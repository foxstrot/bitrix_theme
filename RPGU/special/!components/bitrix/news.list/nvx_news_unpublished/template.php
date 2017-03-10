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



<?
$hasCorPerm = false;
$hasRedPerm = false;
$hasAdmPerm = false;
//Определяем является ли пользователь корреспондентом
$arUsersGroups = array();
$rsGroups = CGroup::GetList ($by = "c_sort", $order = "asc", Array ("NAME" => "Корреспондент%"));
if(intval($rsGroups->SelectedRowsCount()) > 0)
	{while($arGroups = $rsGroups->Fetch()){$arUsersGroups[] = $arGroups["ID"];}}
if (CSite::InGroup($arUsersGroups)) $hasCorPerm = true;

//Определяем является ли пользователь редактором
$arUsersGroups = array();
$rsGroups = CGroup::GetList ($by = "c_sort", $order = "asc", Array ("NAME" => "Редактор%"));
if(intval($rsGroups->SelectedRowsCount()) > 0)
	{while($arGroups = $rsGroups->Fetch()){$arUsersGroups[] = $arGroups["ID"];}}
if (CSite::InGroup($arUsersGroups)) $hasRedPerm = true;

//Определяем является ли пользователь администратором
$arUsersGroups = array();
$rsGroups = CGroup::GetList ($by = "c_sort", $order = "asc", Array ("NAME" => "Администратор%"));
if(intval($rsGroups->SelectedRowsCount()) > 0)
	{while($arGroups = $rsGroups->Fetch()){$arUsersGroups[] = $arGroups["ID"];}}
if (CSite::InGroup($arUsersGroups)) $hasAdmPerm = true;
?>


<?

//$hasCorPerm = false;
//$hasRedPerm = false;
//$hasAdmPerm = true;

?>


<?if ($hasCorPerm || $hasRedPerm || $hasAdmPerm ):?>
	<div class="btn_Add" onClick="javascript:(new BX.CAdminDialog({
'content_url':'/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult["ID"]?>&type=<?=$arResult["IBLOCK_TYPE_ID"]?>&lang=ru&force_catalog=&filter_section=0&bxpublic=Y&from_module=iblock&return_url=<?=rawurlencode($APPLICATION->GetCurPageParam())?>',
'width':'700',
	'height':'400'})).Show();"><div class="btn_Add_Title">Добавить новость</div></div>
		<a class="btn_Add_Title" target=_self href="index.php"><div class="btn_Add"><div class="btn_Add_Title">Опубликованные</div></div></a>
		<p>&nbsp;</p>
   <div style="clear:right"></div>

<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?$i=0;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">


<?if ($hasRedPerm || ($hasCorPerm && $arItem["ACTIVE"]!="Y")):?>
	<div class="btn_Add" onClick="javascript:(new BX.CAdminDialog({'content_url':'/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arItem["IBLOCK_ID"]?>&type=<?=$arResult["IBLOCK_TYPE_ID"]?>&ID=<?=$arItem['ID']?>&lang=ru&force_catalog=&filter_section=0&bxpublic=Y&from_module=iblock&return_url=<?=rawurlencode($APPLICATION->GetCurPageParam())?>',
'width':'700','height':'400'})).Show();"><div class="btn_Add_Title">Редактировать</div></div>
<?endif;?>

<?if ($hasRedPerm):?>
	<div class="btn_Add" onClick="javascript:if(confirm('Будет удалена вся информация, связанная с этой записью. Продолжить?')) jsUtils.Redirect([], '/bitrix/admin/iblock_element_admin.php?IBLOCK_ID=<?=$arItem["IBLOCK_ID"]?>&type=<?=$arResult["IBLOCK_TYPE_ID"]?>&lang=ru&action=delete&ID=<?=$arItem['ID']?>&return_url=<?=rawurlencode($APPLICATION->GetCurPageParam())?>&sessid=<?=bitrix_sessid()?>')"><div class="btn_Add_Title">Удалить</div></div>
<?endif;?>

<?if ($hasCorPerm):?>
	<a class="btn_Add_Title" target=_self href="inform.php?IBLOCK_ID=<?=$arItem["IBLOCK_ID"]?>&IBLOCK_TYPE=<?=$arResult["IBLOCK_TYPE_ID"]?>&ELEMENT_ID=<?echo $arItem['ID']?>"><div class="btn_Add"><div class="btn_Add_Title">Проинформировать</div></div></a>
<?endif;?>

<?if ($hasCorPerm || $hasRedPerm || $hasAdmPerm ):?>
	<a class="btn_Add_Title" target=_blank href="print.php?IBLOCK_ID=<?=$arItem["IBLOCK_ID"]?>&IBLOCK_TYPE=<?=$arResult["IBLOCK_TYPE_ID"]?>&ELEMENT_ID=<?echo $arItem['ID']?>&print=y"><div class="btn_Add"><div class="btn_Add_Title">Печать</div></div></a>
<?endif;?>

<?if ($hasRedPerm || $hasAdmPerm ):?>
	<?if ($arItem["ACTIVE"]!="Y"):?>
		<a class="btn_Add_Title" target=_self href="publish.php?IBLOCK_ID=<?=$arItem["IBLOCK_ID"]?>&IBLOCK_TYPE=<?=$arResult["IBLOCK_TYPE_ID"]?>&ELEMENT_ID=<?echo $arItem['ID']?>"><div class="btn_Add"><div class="btn_Add_Title">Опубликовать</div></div></a>
	<?endif;?>
<?endif;?>

<?if ($hasCorPerm || $hasRedPerm || $hasAdmPerm ):?>
   <div style="clear:left"></div>
<?endif;?>

		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
			<div class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></div>
		<?endif?>

<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a class="fancypopup" href="#nvx_news<?=$i?>"><img
						class="preview_picture"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="150px"
						height="auto"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						/></a>
	<div style="display:none">
		<div id="nvx_news<?=$i?>">
			<img alt="" src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>"/><br>
			<p align="center"><a href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" target=_blank download>Скачать в оригинале</a> | <a href="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" target=_blank download>Скачать мини</a></p>
		</div>
	</div>

			<?else:?>
				<img
					class="preview_picture"
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					width="150px"
					height="auto"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					/>
			<?endif;?>
		<?endif?>
		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
		<div  class="news-item-title"><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><b><?echo $arItem["NAME"]?></b></a></div>
			<?else:?>
				<div class="news-list-title"><b><?echo $arItem["NAME"]?></b></div>
			<?endif;?>
		<?endif;?>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
		<div class="news-list-previewtext"><?echo $arItem["PREVIEW_TEXT"];?></div>
		<?endif;?>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div style="clear:both"></div>
		<?endif?>
<br><br>
</div>
<?$i=$i+1;?>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>

<?else:?>
<p>Для просмотра неопубликованных новостей необходимо авторизоваться</p>

<?endif;?>