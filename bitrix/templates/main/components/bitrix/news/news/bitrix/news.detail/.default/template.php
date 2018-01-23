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

	<div class="article">
		<h2 class="section-title"><?=$arResult["NAME"]?></h2>
		<div class="article-date"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></div>
		<div class="component">
			<?echo $arResult["DETAIL_TEXT"];?>
		</div>
		<div class="article-gallery">
			<?foreach($arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'] as $arPhoto):?>
				<div class="article-gallery-img">
					<a href="<?=$arPhoto['SRC']?>" rel="article-gallery-img" class="article-gallery-fancy"><img src="<?=$arPhoto['SRC']?>" alt=""></a>
				</div>
			<?endforeach?>
		</div>
		<div class="article-gallery-nav">
			<?foreach($arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'] as $arPhoto):?>
				<div class="article-gallery-img-nav">
					<img src="<?=$arPhoto['SRC']?>" alt="">
				</div>
			<?endforeach?>
		</div>
	</div>
	<?if($arResult['PREV_ELEM']['ID'] || $arResult['NEXT_ELEM']['ID']):?>
		<div class="page-nav clearfix">
			<?if($arResult['PREV_ELEM']['ID']):?>
				<a href="<?=$arParams['SECTION_URL']?><?=$arResult['PREV_ELEM']['ID']?>/" class="page-nav-link page-nav-link-prev">
					<span class="page-nav-link-title">Предыдущая новость</span>
					<span class="page-nav-link-text"><?=$arResult['PREV_ELEM']['NAME']?></span>
				</a>
			<?endif?>
			<?if($arResult['NEXT_ELEM']['ID']):?>
			<a href="<?=$arParams['SECTION_URL']?><?=$arResult['NEXT_ELEM']['ID']?>/" class="page-nav-link page-nav-link-next">
				<span class="page-nav-link-title">Следующая новость</span>
				<span class="page-nav-link-text"><?=$arResult['NEXT_ELEM']['NAME']?></span>
			</a>
			<?endif?>
		</div>
	<?endif?>

