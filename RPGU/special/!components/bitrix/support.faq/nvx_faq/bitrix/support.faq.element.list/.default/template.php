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


<?//elements list?>
<a name="top"></a>
<?foreach ($arResult['ITEMS'] as $key=>$val):?>
	<li class="point-faq"><a href="#<?=$val["ID"]?>"><?=$val['NAME']?></a><br/></li>
<?endforeach;?>
<br/>
<?foreach ($arResult['ITEMS'] as $key=>$val):?>
<?
	$this->AddEditAction($val['ID'],$val['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($val['ID'],$val['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BSFE_ELEMENT_DELETE_CONFIRM')));
?>
<a name="<?=$val["ID"]?>"></a>

<table cellpadding="0" cellspacing="0" class="data-table" width="100%"  id="<?=$this->GetEditAreaId($val['ID']);?>">
	<tr>
		<td>
			<b>Вопрос:</b><br><?=$val['PREVIEW_TEXT']?><br><br>
			<b>Ответ:</b><br>
		<?if ($hasAdmPerm):?>
			<a class="fancypopup" href="#popupfaq<?=$i?>"><?=$val['DETAIL_TEXT']?><br></a>
		<div style="display:none">
			<div id="popupfaq<?=$i?>">
				<div class="btn_Add" onClick="javascript: document.getElementById('fancybox-close').click(); (new BX.CAdminDialog({'content_url':'<?=$val["EDIT_LINK"]?>','width':'700','height':'400'})).Show();"><div class="btn_Add_Title">Редактировать</div></div>
				<div class="btn_Add" onClick="javascript: document.getElementById('fancybox-close').click(); if(confirm('Будет удалена вся информация, связанная с этой записью. Продолжить?')) jsUtils.Redirect([], '<?=$val["DELETE_LINK"]?>&sessid=<?=bitrix_sessid()?>')"><div class="btn_Add_Title">Удалить</div></div>
			</div>
		</div>

		<?else:?>
			<?=$val['DETAIL_TEXT']?><br>
		<?endif?>

		<br/>
		<div style="float: left"><a href="#top"><?=GetMessage("SUPPORT_FAQ_GO_UP")?></a></div>
		<?if ($arParams["SHOW_RATING"] == "Y"):?>
			<div class="faq-rating" style="float: right">
			<?
			$GLOBALS["APPLICATION"]->IncludeComponent(
				"bitrix:rating.vote", $arParams["RATING_TYPE"],
				Array(
					"ENTITY_TYPE_ID" => "IBLOCK_ELEMENT",
					"ENTITY_ID" => $val['ID'],
					"OWNER_ID" => $val['CREATED_BY'],
					"USER_VOTE" => $arResult['RATING'][$val['ID']]["USER_VOTE"],
					"USER_HAS_VOTED" => $arResult['RATING'][$val['ID']]["USER_HAS_VOTED"],
					"TOTAL_VOTES" => $arResult['RATING'][$val['ID']]["TOTAL_VOTES"],
					"TOTAL_POSITIVE_VOTES" => $arResult['RATING'][$val['ID']]["TOTAL_POSITIVE_VOTES"],
					"TOTAL_NEGATIVE_VOTES" => $arResult['RATING'][$val['ID']]["TOTAL_NEGATIVE_VOTES"],
					"TOTAL_VALUE" => $arResult['RATING'][$val['ID']]["TOTAL_VALUE"],
					"PATH_TO_USER_PROFILE" => $arParams["PATH_TO_USER"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);?>
			</div>
		<?endif;?>		
		</td>
	</tr>
</table>
<br/>
<?endforeach;?>