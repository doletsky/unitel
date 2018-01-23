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

<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?
	$i=1;
foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		if($i==1 || ($i%3+1)==0) echo '<div class="partners-row row">';
	?>
		
		
		
		<div class="partners-col col-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="partner-block">
				<div class="partner-logo">
					<span><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt=""></span>
				</div>
				<div class="partner-desc"><?echo $arItem["PREVIEW_TEXT"];?></div>
			</div>
		</div>
			
	
	
<?
if( $i%3==0){
							
	echo '</div>';
	if($i<count($arResult["ITEMS"]))
		echo '<div class="partners-row row">';
	
}	

$i++;
endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>

