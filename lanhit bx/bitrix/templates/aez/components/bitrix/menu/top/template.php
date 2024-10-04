<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<ul class="nav-menu mb-0 -fs-16">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li class="nav-item">
			<a href="<?=$arItem["LINK"]?>" class="nav-link selected"><?=$arItem["TEXT"]?></a>
		</li>
	<?else:?>
		<li class="nav-item">
			<a href="<?=$arItem["LINK"]?>" class="nav-link"><?=$arItem["TEXT"]?></a>
		</li>
	<?endif?>
	
<?endforeach?>

</ul>
<?endif?>