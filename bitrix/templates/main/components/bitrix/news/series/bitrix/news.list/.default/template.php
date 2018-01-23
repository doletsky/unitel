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
		<div class="series-head">
			<div class="container">
				<h1 class="page-title">Серии устройств</h1>
			</div>
		</div>
		<div class="series-list">
			<?
			$i=1;
			foreach($arResult["ITEMS"] as $arItem):?>
			<?
			if($arItem['DISPLAY_PROPERTIES']['VSP']['DISPLAY_VALUE']!='Да'):
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
				<section class="series-line" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<div class="container">
						<div class="series-row row">
							<?if($i%2!=0):?>
								<div class="series-col">
									<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="series-img">
										<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
									</a>
								</div>
							<?endif?>
							<div class="series-col">
								<div class="series-content">
									<div class="series-desc">
										<div class="series-desc-title">Серия устройств</div>
										<h2 class="section-title"><?echo $arItem["NAME"]?></h2>
										<div class="series-desc-text"><?echo $arItem["PREVIEW_TEXT"];?></div>
									</div>
									<div class="series-btn">
										<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="btn">Подробнее о серии</a>
									</div>
								</div>
							</div>
							<?if($i%2==0):?>
								<div class="series-col">
									<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="series-img">
										<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
									</a>
								</div>
							<?endif?>
						</div>
					</div>
				</section>
			<?
			
			$i++;
			endif;
			endforeach?>
			
			<section class="series-line">
				<div class="container">
					<div class="series-ancillary">
						<h2 class="item-title">Вспомогательные</h2>
						<div class="series-ancillary-row row">
						<?foreach($arResult["ITEMS"] as $arItem):?>
						<?
						if($arItem['DISPLAY_PROPERTIES']['VSP']['DISPLAY_VALUE']=='Да'):
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>
							<div class="series-ancillary-col col-6">
								<div class="series-ancillary-block">
									<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="series-ancillary-img">
										<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
									</a>
									<div class="series-ancillary-content">
										<h3 class="section-title">
											<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a>
										</h3>
										<div class="series-ancillary-desc"><?echo $arItem["PREVIEW_TEXT"];?></div>
									</div>
								</div>
							</div>
						<?

					endif;
					endforeach?>
							
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>






