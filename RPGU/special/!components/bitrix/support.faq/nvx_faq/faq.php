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
$hasAdmPerm = false;
//Определяем является ли пользователь администратором
$arUsersGroups = array();
$rsGroups = CGroup::GetList ($by = "c_sort", $order = "asc", Array ("NAME" => "Администратор%"));
if(intval($rsGroups->SelectedRowsCount()) > 0)
	{while($arGroups = $rsGroups->Fetch()){$arUsersGroups[] = $arGroups["ID"];}}
if (CSite::InGroup($arUsersGroups)) $hasAdmPerm = true;
?>

<?if ($hasAdmPerm):?>
	<div class="btn_Add" onClick="javascript:(new BX.CAdminDialog({
'content_url':'/bitrix/admin/iblock_section_edit.php?IBLOCK_ID=<?=$arParams["IBLOCK_ID"]?>&type=<?=$arParams["IBLOCK_TYPE"]?>&lang=ru&force_catalog=&IBLOCK_SECTION_ID=0&filter_section=<?=$arParams["SECTION"]?>&bxpublic=Y&from_module=iblock&return_url=<?=rawurlencode($APPLICATION->GetCurPageParam())?>&siteTemplateId=nvx_tver_regpage2col',
'width':'700','height':'400'})).Show();"><div class="btn_Add_Title">Добавить тему</div></div>
   <p> </p>
   <p> </p>   <div style=""></div>
<?endif;?>

<?$APPLICATION->IncludeComponent(
	"bitrix:support.faq.section.list",
	"",
	Array(
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
		"SECTION" => $arParams["SECTION"],
		"EXPAND_LIST" => $arParams["EXPAND_LIST"],
		"AJAX_MODE"	=> $arParams["AJAX_MODE"],
		"AJAX_OPTION_SHADOW"	=>	$arParams["AJAX_OPTION_SHADOW"],
		"AJAX_OPTION_JUMP"	=>	$arParams["AJAX_OPTION_JUMP"],
		"AJAX_OPTION_STYLE"	=>	$arParams["AJAX_OPTION_STYLE"],
		"AJAX_OPTION_HISTORY"	=>	$arParams["AJAX_OPTION_HISTORY"],
		"SHOW_RATING" => $arParams["SHOW_RATING"],
		"RATING_TYPE" => $arParams["RATING_TYPE"],
		"PATH_TO_USER" => $arParams["PATH_TO_USER"],		
		"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
	),
	$component
);?>