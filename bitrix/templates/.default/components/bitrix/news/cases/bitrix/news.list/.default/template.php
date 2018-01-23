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
<?

#print_r($voltage);
?>
				<div class="page-content-row clearfix">
					<div class="page-content-body" id="case">
						<div class="case_left">
							<h1 class="page-title"><?
								$sSectionName = "";
								$sPath = $_SERVER["DOCUMENT_ROOT"].$APPLICATION->GetCurDir().".section.php";
								include($sPath);
								echo $sSectionName;
								?></h1>
								<div class="case_right_text">
									<p>«Шкафы РЗА производства ООО «МРЗ» соответствуют требованиям нормативных документов: ГОСТ Р 51321.1-2007, ГОСТ Р  51317.6.5-2006, СТО 56947007-29.120.70.042-2010 и Правила устройства электроустанововок (7 изд.). </p>
									<p>Шкафы выполняются на основе металлоконструкций производства Rittal, в которые устанавливаются современные и надежные комплектующие ведущих мировых производителей (ABB, Finder, Phoenix Сontact, Wago, Weidmuller и др.). Шкафы изготавливаются в типовых габаритах 2200х800х600 мм двухстороннего или одностороннего обслуживания. По отдельному заказу шкафы могут быть изготовлены в иных габаритах металлоконструкции.</p> 
									<p>Шкафы имеют степень защиты до IP54 по ГОСТ 14254-96 и предназначен для установки в ОПУ и РЩ электрических станций и подстанций с климатическими условиями соответствующими УХЛ4 по ГОСТ 15150-69. Шкафы могут быть изготовлены с характеристиками иными от указанных по конкретному проекту, в зависимости от требований указанных в опросном листе.»</p>
								</div>
								<div class="params_buttons">
									<ul>
									<?
									global $arFilter;
									
									$i=0;
									foreach( $arResult["VOLTAGE"] as $k=>$v ){
										?>
										<?/*?><li class="active"><a href="#">6-10 кВ</a></li><?*/?>
										<li <?if($arFilter['PROPERTY_VOLTAGE']==$k):?>class="active"<?endif?>><a href="?voltage_id=<?=$k?>" data-voltage="<?=$k?>"><?=$v?></a></li>
										<?
									}
									?>
									</ul>
								</div>
						</div>
						<div class="clear"></div>
						
						
						
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
											<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
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
					<div class="page-content-sidebar">
						<div class="sidebar-widget">
							<div class="questionnaire">
								<div class="sidebar-widget-title">Опросный лист</div>
								<a href="/price/" class="questionnaire-link">Заполните опросный лист</a>
								<div class="questionnaire-link-desc">и мы предложим вам решение</div>
							</div>
						</div>
						<?/*?><div class="sidebar-widget">
							<div class="case-type">
								<div class="sidebar-widget-title">Напряжение</div>
								<ul class="case-type-list">
									<?
									global $arFilter;
									
									$i=0;
									foreach( $arResult["VOLTAGE"] as $k=>$v ){
										?>
										<?/*?><li class="active"><a href="#">6-10 кВ</a></li><??>
										<li><a <?if($arFilter['PROPERTY_VOLTAGE']==$k):?>class="active"<?endif?> href="?voltage_id=<?=$k?>" data-voltage="<?=$k?>"><?=$v?></a></li>
										<?
									}
									?>
								</ul>
							</div>
						</div><?*/?>
					</div>
				</div>


