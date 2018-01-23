<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="case-row row submenu1">
	<?
	foreach($arResult as $arItem):
		if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
			continue;
		?>
		<?if($arItem["SELECTED"]):?><?else:?><?endif?>

		<?
		$image = str_replace( array("/support/","/"), "", $arItem["LINK"]);
		?>

		<div class="case-col col-4">
			<a href="<?=$arItem["LINK"]?>" class="case-col-block">
				<span class="case-col-block-img" style="height: 346px;">
					<span>
						<img src="/img/services/<?=$image?>.jpg" alt="<?=$arItem["TEXT"]?>">
					</span>
				</span>
				<span class="case-col-block-desc"><?=$arItem["TEXT"]?></span>
			</a>
		</div>
	<?endforeach?>
</div>
<?endif?>