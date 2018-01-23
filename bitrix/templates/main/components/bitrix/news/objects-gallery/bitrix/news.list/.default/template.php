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
<div class="page-content-row clearfix">
	<div class="page-content-body" id="case">
		<?
		$i=1;
		foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		
		if($i==1 || ($i%3+1)==0) echo '<div class="case-row row">';
		?>
		
	
		
			<div class="case-col col-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="case-col-block">
					<span class="case-col-block-img">
						<span>
							<img src="<?=MakeImage($arItem["PREVIEW_PICTURE"]["SRC"],array("w"=>270,"h"=>190,"zc"=>1))?>" alt="">
						</span>
					</span>
					<span class="case-col-block-desc"><?echo $arItem["NAME"]?></span>
				</a>
			</div>
			
		
	
		<?if( $i%3==0){
			
			echo '</div>';
			if($i<count($arResult["ITEMS"]))
				echo '<div class="case-row row">';
			
		}	
		
		$i++;
		endforeach;?>
		
		<?if( $i%3==0){?></div><?}?>

	</div>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>

