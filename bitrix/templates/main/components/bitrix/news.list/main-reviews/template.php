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
<div class="main-widget-reviews">
	<h3 class="main-widget-title">Отзывы клиентов</h3>
	<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	
	<div class="main-widget-review clearfix" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="main-widget-review-img">
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
		</div>
		<div class="main-widget-review-body">
			<div class="main-widget-review-text"><?echo $arItem["PREVIEW_TEXT"];?></div>
			<div class="main-widget-review-info">
				<div class="main-widget-review-name"><?echo $arItem["NAME"]?></div>
				<div class="star-block">
					<span data-star="5"></span>
				</div>
			</div>
		</div>
	</div>
		<?endforeach;?>
	<a href="<?=$arResult['LIST_PAGE_URL']?>" class="main-widget-reviews-all">Все отзывы</a>
</div>



