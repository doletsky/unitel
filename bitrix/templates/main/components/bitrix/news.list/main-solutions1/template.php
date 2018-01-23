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
	<div class="decision">
		<div class="container">
			<div class="decision-wrapp">
				
				<div class="decision-head">
					<div class="decision-head-row">
						<div class="decision-head-col">
							<div class="section-title">Отраслевые решения</div>
						</div>
						<div class="decision-head-col decision-head-col-menu">
							<?/*?>
							<ul class="tabs-nav decision-menu clearfix" data-tabs=".decision-tabs">
								<?
								$firstObl = 1;
								foreach($arResult['OBLAST'] as $arOblast ):?>
								<li <?if($firstObl):?>class="active"<?endif?>><a href="#decision-tab-<?=$arOblast['ID']?>"><?=$arOblast['VALUE']?></a></li>
								<?
								$firstObl = 0;
								endforeach?>
							</ul>
							<?*/?>
						</div>
						<div class="decision-head-col">
							<a href="/industry-solutions/" class="decision-all">Все решения</a>
						</div>
					</div>
				</div>
				
				<div class="decision-body">
					<div class="tabs-wrapp decision-tabs">
						<!-- tab -->
						<?
						$tabFirst = 1;
						#pre($arResult["ITEMS"]);
						?>
					
							<div id="decision-tab-<?=$key?>" class="decision-tab tab-block <?if($tabFirst):?>active<?endif?>">
								<div class="decision-content">
									<div class="decision-row">
										<div class="decision-cols celarfix">
										<?
										#$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
										#$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
										#pre($arItem);
										foreach($arResult["ITEMS"] as $key=>$arItem){?>
										?>
										
											<div class="decision-col" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
												<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="decision-link">
													<span class="img" style="background-image: url(<?=MakeImage($arItem['PREVIEW_PICTURE']['SRC'],array("w"=>313,"h"=>210,"zc"=>1))?>);"></span>
													<img src="<?=MakeImage($arItem['PREVIEW_PICTURE']['SRC'],array("w"=>313,"h"=>210,"zc"=>1))?>" alt="" class="decision-link-img">
													<span class="decision-link-content-wrapp">
														<span class="decision-link-content-cell">
															<span class="decision-link-content">
																<span class="decision-link-content-title"><?=$arItem['NAME']?></span>
																<span class="decision-link-content-text"><?=$arItem["PREVIEW_TEXT"]?></span>
															</span>
														</span>
													</span>
												</a>
											</div>
											
										<?}?>	
										</div>
									</div>
									<div class="decision-scrollbar">
										<div class="mousearea"></div>
									</div>
								</div>
							</div>
						<?
						$tabFirst = 0;
						
						?>
						
					</div>
				</div>
			</div>
		</div>
	</div>



