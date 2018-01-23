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
<div class="main_slider_wrapper">
	<div class="main-slider">

	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="main-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="" class="main-slide-img">
			<div class="container">
				<div class="main-slide-content">
					<div class="main-slide-content-cell">
						<div class="main-slide-body">
							<h1 class="main-title"><?echo $arItem["NAME"]?></h1>
							<div class="main-title-desc"><?echo $arItem["PREVIEW_TEXT"];?></div>
							<a href="<?echo $arItem["DISPLAY_PROPERTIES"]['LINK']['DISPLAY_VALUE'];?>" class="btn btn-white"><?echo $arItem["DISPLAY_PROPERTIES"]['LINK_CAPTION']['DISPLAY_VALUE'];?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	<?endforeach;?>
	</div>
	<div class="scrolldown">
	  <div class="mouse">
	    <span><p>↓</p></span>
	  </div>
	</div>
</div>
