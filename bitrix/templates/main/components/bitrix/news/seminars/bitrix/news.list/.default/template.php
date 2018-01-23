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
<div class="page">
	<div class="page-content">
		<div class="container">
			<h1 class="page-title">Обучение</h1>
			<div class="content-text">
				<div class="learn">
					<?
					$APPLICATION->IncludeFile(
						SITE_DIR."/include/seminars.php",
						Array(),
						Array("MODE"=>"html")
					);
					?>
					<h3 class="section-title">Проводимые семинары</h3>
					<ul class="learn-list">
						<?foreach($arResult["ITEMS"] as $arItem):?>
						<?
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>
						<li>
							<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="learn-link clearfix" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
								<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
								<span class="learn-link-desc">
									<span class="learn-link-title"><?echo $arItem["NAME"]?></span>
									<span class="learn-link-text"><?echo $arItem["PREVIEW_TEXT"];?></span>
								</span>
							</a>
						</li>
						<?endforeach;?>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
