<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<?
//анализ открытых узлов дерева
$myLastLevel = 0;
$lastLevel = 0;
$selected = false;
foreach(array_reverse($arResult) as $arItem){
 if ($arItem["SELECTED"]) {
 $lastLevel = $arItem["DEPTH_LEVEL"];
 if ($myLastLevel<$lastLevel) {$myLastLevel=$lastLevel;}
 $selected = true;
 } 
 if ($selected and $arItem["DEPTH_LEVEL"] < $lastLevel){
 $arResult[ $arItem["ITEM_INDEX"] ]["SELECTED"] = true;
 $lastLevel--;
 }
}
?>

<div class="menu-sitemap-tree">
<ul>
<?
$previousLevel = 0;
foreach($arResult as $arItem):
?>
	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>
			<?if (!$arItem["SELECTED"]):?>
				<li class="close">
			<?else:?>
				<?if ($arItem["DEPTH_LEVEL"]==$myLastLevel):?>
					<li class="active">
				<?else:?>
					<li>
				<?endif;?>
			<?endif;?>
				<div class="folder" onClick="OpenMenuNode(this)" style="z-index:1; position:relative;"></div>
				<div class="item-text" style="z-index:0"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></div>
				<ul>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>
			<?if (!$arItem["SELECTED"]):?>
				<li>
			<?else:?>
				<li class="active">
			<?endif?>
					<div class="page"></div>
					<div class="item-text"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></div>
				</li>
		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
</div>
<?endif?>