<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arViewModeList = array(
	'LIST' => GetMessage('CPT_BCSL_VIEW_MODE_LIST'),
	'LINE' => GetMessage('CPT_BCSL_VIEW_MODE_LINE'),
	'TEXT' => GetMessage('CPT_BCSL_VIEW_MODE_TEXT'),
	'TILE' => GetMessage('CPT_BCSL_VIEW_MODE_TILE')
);

$arTemplateParameters = array(
	'VIEW_MODE' => array(
		'PARENT' => 'VISUAL',
		'NAME' => GetMessage('CPT_BCSL_VIEW_MODE'),
		'TYPE' => 'LIST',
		'VALUES' => $arViewModeList,
		'MULTIPLE' => 'N',
		'DEFAULT' => 'LINE',
		'REFRESH' => 'Y'
	),
	'SHOW_PARENT_NAME' => array(
		'PARENT' => 'VISUAL',
		'NAME' => GetMessage('CPT_BCSL_SHOW_PARENT_NAME'),
		'TYPE' => 'CHECKBOX',
		'DEFAULT' => 'Y'
	),
);

if (isset($arCurrentValues['VIEW_MODE']) && 'TILE' == $arCurrentValues['VIEW_MODE'])
{
	$arTemplateParameters['HIDE_SECTION_NAME'] = array(
		'PARENT' => 'VISUAL',
		'NAME' => GetMessage('CPT_BCSL_HIDE_SECTION_NAME'),
		'TYPE' => 'CHECKBOX',
		'DEFAULT' => 'N'
	);
}
?><?
CModule::IncludeModule("iblock");

$dbIBlockType = CIBlockType::GetList(
   array("sort" => "asc"),
   array("ACTIVE" => "Y")
);
while ($arIBlockType = $dbIBlockType->Fetch())
{
   if ($arIBlockTypeLang = CIBlockType::GetByIDLang($arIBlockType["ID"], LANGUAGE_ID))
      $arIblockType[$arIBlockType["ID"]] = "[".$arIBlockType["ID"]."] ".$arIBlockTypeLang["NAME"];
}

$arComponentParameters = array(
   "GROUPS" => array(
      "SETTINGS" => array(
         "NAME" => GetMessage("SETTINGS_PHR")
      ),
      "PARAMS" => array(
         "NAME" => GetMessage("PARAMS_PHR")
      ),
   ),
   "PARAMETERS" => array(
      "IBLOCK_TYPE_ID" => array(
         "PARENT" => "SETTINGS",
         "NAME" => GetMessage("INFOBLOCK_TYPE_PHR"),
         "TYPE" => "LIST",
         "ADDITIONAL_VALUES" => "Y",
         "VALUES" => $arIblockType,
         "REFRESH" => "Y"
      ),
      "BASKET_PAGE_TEMPLATE" => array(
         "PARENT" => "PARAMS",
         "NAME" => GetMessage("BASKET_LINK_PHR"),
         "TYPE" => "STRING",
         "MULTIPLE" => "N",
         "DEFAULT" => "/personal/basket.php",
         "COLS" => 25
      ),
      "SET_TITLE" => array(),
      "CACHE_TIME" => array(),
      "VARIABLE_ALIASES" => array(
         "IBLOCK_ID" => array(
            "NAME" => GetMessage("CATALOG_ID_VARIABLE_PHR"),
         ),
         "SECTION_ID" => array(
            "NAME" => GetMessage("SECTION_ID_VARIABLE_PHR"),
         ),
      ),
      "SEF_MODE" => array(
         "list" => array(
            "NAME" => GetMessage("CATALOG_LIST_PATH_TEMPLATE_PHR"),
            "DEFAULT" => "index.php",
            "VARIABLES" => array()
         ),
         "section1" => array(
            "NAME" => GetMessage("SECTION_LIST_PATH_TEMPLATE_PHR"),
            "DEFAULT" => "#IBLOCK_ID#",
            "VARIABLES" => array("IBLOCK_ID")
         ),
         "section2" => array(
            "NAME" => GetMessage("SUB_SECTION_LIST_PATH_TEMPLATE_PHR"),
            "DEFAULT" => "#IBLOCK_ID#/#SECTION_ID#",
            "VARIABLES" => array("IBLOCK_ID", "SECTION_ID")
         ),
      ),
   )
);
?>