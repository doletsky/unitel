<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="params_buttons">
	<ul>
		<?
		foreach($arResult as $arItem):
			if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
				continue;
            if(substr_count($APPLICATION->GetCurDir(),"/support/shef-montazh/")>0 || substr_count($APPLICATION->GetCurDir(),"/support/shef-naladka/")>0 || substr_count($APPLICATION->GetCurDir(),"/support/obuchenie/")>0){
                if(substr_count($arItem['LINK'],"/support/services/")>0)
                    $arItem["SELECTED"]=1;
            }
		?>
			<?if($arItem["SELECTED"]):?>
				<li class="active"><a href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>
			
		<?endforeach?>
	</ul>
</div>
<?endif?>