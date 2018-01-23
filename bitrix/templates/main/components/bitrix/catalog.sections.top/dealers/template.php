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
<?foreach($arResult["SECTIONS"] as $arSection):?>
<div class="partner_info_block">
	<h4><?=$arSection["NAME"]?></h4>
	<ul>
		<?
		$cell = 0;
		foreach($arSection["ITEMS"] as $arElement):
		?>
		<?
		$this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCST_ELEMENT_DELETE_CONFIRM')));
		?>
			<li id="<?=$this->GetEditAreaId($arElement['ID']);?>">
				<h5><?=$arElement["NAME"]?></h5>
				<i class="icon-phone-i"></i><p><a href="tel:<?=$arElement["DISPLAY_PROPERTIES"]['PHONE']['DISPLAY_VALUE']?>"><?=$arElement["DISPLAY_PROPERTIES"]['PHONE']['DISPLAY_VALUE']?></a></p>
				<i class="icon-location"></i><p><?=$arElement["DISPLAY_PROPERTIES"]['ADDRESS']['DISPLAY_VALUE']?></p>
				<i class="icon-mail-alt"></i><p><a href="mailto:<?=$arElement["DISPLAY_PROPERTIES"]['EMAIL']['DISPLAY_VALUE']?>"><?=$arElement["DISPLAY_PROPERTIES"]['EMAIL']['DISPLAY_VALUE']?></a></p>
			</li>
		<?endforeach;?>
	</ul>
</div><!-- partner_info_block -->
<?endforeach?>
