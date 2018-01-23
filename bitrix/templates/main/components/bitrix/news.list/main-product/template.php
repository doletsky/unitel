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
<div class="main-widget main-widget-top">
	<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
		<div class="main_prod_slider">
			<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="main-widget-equipment" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<span class="main-widget-equipment-cell">
					<span class="main-widget-equipment-img">
						<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
					</span>
					<span class="main-widget-equipment-desc-wrapp">
						<span class="main-widget-equipment-desc">Серия <?echo $arItem["NAME"]?></span>
					</span>
				</span>
			</a>
			<a href="http://unitel.studio-test.ru/production/rza-6-35-kv-mrz-3l3/" class="main-widget-equipment" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<span class="main-widget-equipment-cell">
					<span class="main-widget-equipment-img">
						<img src="/bitrix/templates/.default/img/main_prod_slide2.png" alt="main_prod_slide2.png">
					</span>
					<span class="main-widget-equipment-desc-wrapp">
						<span class="main-widget-equipment-desc">Серия РЗА 6-35 кВ МРЗ-3Л3</span>
					</span>
				</span>
			</a>
			<a href="http://unitel.studio-test.ru/production/rza-110-220kv-mrz-3/" class="main-widget-equipment" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<span class="main-widget-equipment-cell">
					<span class="main-widget-equipment-img">
						<img src="/bitrix/templates/.default/img/main_prod_slide3.png" alt="main_prod_slide2.png">
					</span>
					<span class="main-widget-equipment-desc-wrapp">
						<span class="main-widget-equipment-desc">Серия РЗА 110-220 кВ МРЗ-3</span>
					</span>
				</span>
			</a>
		</div>
	<?endforeach?>
</div>

