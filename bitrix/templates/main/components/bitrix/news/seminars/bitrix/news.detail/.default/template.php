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
				<div class="learn-page">
					<h1 class="page-title"><?=$arResult["NAME"]?></h1>
					<div class="learn-page-row clearfix">
						<div class="learn-page-content">
							<div class="learn-page-content-desc"><?echo $arResult["DETAIL_TEXT"];?></div>
							<div class="component">
								<?echo $arResult["DISPLAY_PROPERTIES"]['DESCR']['~VALUE']['TEXT']?>
							</div>
						</div>
						<div class="learn-page-sidebar">
								<?echo $arResult["DISPLAY_PROPERTIES"]['PRIM']['~VALUE']['TEXT']?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
