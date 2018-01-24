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
					<div class="page-content-body">
						<div class="case-item">
							<h1 class="section-title"><?=$arResult["NAME"]?></h1>
							<div class="case-item-img">
								<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="">
							</div>
						</div>
						<div class="case-item-info">
							<div class="case-item-info-body">
								<div class="page-content-row clearfix">
									<div class="page-content-body">
										<div class="case-item">
											<div class="component">
												<?echo $arResult["DETAIL_TEXT"];?>
											</div>
										</div>
									</div>
									<!-- <div class="page-content-sidebar">
										<div class="sidebar-widget">
											<div class="case-item-info-desc">
												<i class="icon-info-circled-alt"></i>
												<?=$arResult['DISPLAY_PROPERTIES']['NOTE']['DISPLAY_VALUE']?>
											</div>
										</div>
									</div> -->
								</div>
							</div>
							<div class="page-nav clearfix">
								<?if($arResult['PREV_ELEM']['ID']):?>
									<a href="<?=$arParams['SECTION_URL']?><?=$arResult['PREV_ELEM']['CODE']?>/" class="page-nav-link page-nav-link-prev">
										<span class="page-nav-link-title">Предыдущее решение</span>
										<span class="page-nav-link-text"><?=$arResult['PREV_ELEM']['NAME']?></span>
									</a>
								<?endif?>
								<?if($arResult['NEXT_ELEM']['ID']):?>
									<a href="<?=$arParams['SECTION_URL']?><?=$arResult['NEXT_ELEM']['CODE']?>/" class="page-nav-link page-nav-link-next">
										<span class="page-nav-link-title">Следующее решение</span>
										<span class="page-nav-link-text"><?=$arResult['NEXT_ELEM']['NAME']?></span>
									</a>
								<?endif?>
							</div>
						</div>
					</div>
					<div class="page-content-sidebar">
						<div class="sidebar-widget">
							<div class="questionnaire">
								<div class="sidebar-widget-title sidebar-widget-title-big">Запросить цену</div>
								<a href="#" class="questionnaire-link">Заполните опросный лист</a>
								<div class="questionnaire-link-desc">и мы предложим вам решение</div>
							</div>
						</div>
						<div class="sidebar-widget">
							<div class="case-item-widget">
								<div class="sidebar-widget-title">Назначение</div>
								<?echo $arResult["PREVIEW_TEXT"];?>
							</div>
						</div>
						<?#pre($arResult['DISPLAY_PROPERTIES']['EQUIPMENT']['LINK_ELEMENT_VALUE'])?>
						<?if(is_array($arResult['DISPLAY_PROPERTIES']['EQUIPMENT']['LINK_ELEMENT_VALUE'])):?>
							<div class="sidebar-widget">
								<?$isShown=false;?>
								<?foreach($arResult['DISPLAY_PROPERTIES']['EQUIPMENT']['LINK_ELEMENT_VALUE'] as $key=>$arElement):?>
								<div class="case-item-widget">
									<?if(!$isShown){ $isShown=true;?><div class="sidebar-widget-title">Аппаратный состав</div><?}?>
									<?#pre($arElement)?>
									<div class="sostav_img">
											<a href="<?=$arElement['LINK']?>" class="case-item-composition">
												<img src="<?=MakeImage($arElement['SRC'],array("w"=>95,"h"=>95))?>" alt="">
											</a>
									</div>
									<div class="sostav_info">
										<p class="sostav_name"><?=$arElement['NAME']?></p>
										<p><?=$arElement["ALL"]["~PREVIEW_TEXT"]?></p>
									</div>
									<div class="clear"></div>
								</div>
								<?endforeach?>
							</div>
						<?endif?>
						<div class="sidebar-widget">
							<div class="case-item-widget">
								<div class="sidebar-widget-title">Схема подключения</div>
								<? $file = CFile::ResizeImageGet($arResult['DISPLAY_PROPERTIES']['SCHEME']['FILE_VALUE'], array('width'=>144, 'height'=>212), BX_RESIZE_IMAGE_PROPORTIONAL, true); 

								?>								
								<a href="<?=$arResult['DISPLAY_PROPERTIES']['SCHEME']['FILE_VALUE']['SRC']?>" class="fancybox case-item-scheme">
									<img src="<?=$file['src']?>" alt="">
								</a>
								<a target="_blank" href="/request-schemas/" class="btn">Схемы</a><br><br>
								<a href="/support/documents/" class="btn open_user_popup" data-name="<?=$arResult["NAME"]?>">Техническое описание</a>
							</div>
						</div>
						<div class="sidebar-widget">
							<?if( $arResult['DISPLAY_PROPERTIES']['NOTE']['DISPLAY_VALUE'] ){?>
							<div class="case-item-info-desc">
								<i class="icon-info-circled-alt"></i>
								<?=$arResult['DISPLAY_PROPERTIES']['NOTE']['DISPLAY_VALUE']?>
							</div>
							<?}?>
						</div>
					</div>
				</div>
				

