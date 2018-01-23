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
<div class="documents_list">
	<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<a href="<?=$arItem["DISPLAY_PROPERTIES"]['FILE']['FILE_VALUE']['SRC']?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<span class="doc_item">
			<span class="doc_img">
				<img src="/img/<?=strtolower($arItem["DISPLAY_PROPERTIES"]['TYPE']['VALUE'])?>_img.png" alt="<?=$arItem['NAME']?>">
			</span>
			<span class="doc_info">
				<p><?=$arItem['NAME']?></p>
			</span>
		</span>
	</a>
	<?endforeach;?>			
</div><!-- documents_list -->
