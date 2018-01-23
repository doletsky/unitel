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
			//if($arResult['DISPLAY_PROPERTIES']['VSP']['DISPLAY_VALUE']!='Да'):
			
			?>
	<div class="page">
		<section class="item-head">
			<div class="item-head-img">
				<img src="/img/item-head-img.jpg" alt="">
			</div>
			<div class="item-head-desc">
				<div class="container">
					<div class="clearfix">
						<div class="item-img-col">
							<div class="item-img clearfix">
								<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="">
							</div>
							<a href="/support/documents/" class="btn btn-block item-btn btn-scroll">Техническое описание</a>
							<a href="#item-footer" class="btn btn-block item-btn btn-scroll">Запросить цену</a>
							<div class="item-btn-desc">Заполните форму, чтобы узнать стоимость решения</div>
						</div>
						<div class="item-desc-col">
							<h1 class="item-title">Серия устройств <?=$arResult["NAME"]?></h1>
							<div class="item-desc-content">
								<h1 class="section-title">Область применения</h1>
								<div class="item-desc-content-text">
									<?echo $arResult["DETAIL_TEXT"];?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?if($arResult['DISPLAY_PROPERTIES']['FUNCTIONS']['DISPLAY_VALUE'] || $arResult['DISPLAY_PROPERTIES']['ADVANTAGES']['DISPLAY_VALUE']):?>
			<section class="item-info">
				<div class="container">
					<div class="item-info-row row bounce-in-left">
						<?if($arResult['DISPLAY_PROPERTIES']['FUNCTIONS']['DISPLAY_VALUE']):?>
							<div class="item-info-col col-6">
								<h2 class="section-title">Функционал</h2>
								<?=$arResult['DISPLAY_PROPERTIES']['FUNCTIONS']['DISPLAY_VALUE']?>
							</div>
						<?endif?>
						<?if($arResult['DISPLAY_PROPERTIES']['ADVANTAGES']['DISPLAY_VALUE']):?>
							<div class="item-info-col col-6">
								<h2 class="section-title">Преимущества</h2>
								<?=$arResult['DISPLAY_PROPERTIES']['ADVANTAGES']['DISPLAY_VALUE']?>
							</div>
						<?endif?>
					</div>
				</div>
			</section>
		<?endif?>
		<section class="item-equipment ">
			<div class="container">
				<h2 class="section-title">Стандартная комплектация</h2>
				<p class="item_size">Габариты прибора (мм): <?=$arResult['DISPLAY_PROPERTIES']['SIZE']['DISPLAY_VALUE']?></p>
				<input id="back_slide_number" type="hidden" value="<?=$arResult['DISPLAY_PROPERTIES']['BACK_SLIDE']['DISPLAY_VALUE']?>">
				<div class="item-slider-wrapp bounce-in-left">
					<div class="item-slider">
						<?foreach($arResult['DISPLAY_PROPERTIES']['IMG_3D']['FILE_VALUE'] as $arFile):?>
							<div class="item-slide"><img src="<?=$arFile['SRC']?>" alt=""></div>
						<?endforeach?>
					
					</div>
					<div class="item-slider-rotate-info">360°</div>
					<?/*?>
					<?if($arResult['DISPLAY_PROPERTIES']['DIODS']['DISPLAY_VALUE']):?>
						<div class="item-slider-info--left-top item_front">
							<div class="item-slider-info-num"><?=$arResult['DISPLAY_PROPERTIES']['DIODS']['DISPLAY_VALUE']?></div>
							<div class="item-slider-info-desc">свободно<br><?=format_by_count($arResult['DISPLAY_PROPERTIES']['DIODS']['DISPLAY_VALUE'],'назначаемый','назначаемых','назначаемых')?><br><?=format_by_count($arResult['DISPLAY_PROPERTIES']['DIODS']['DISPLAY_VALUE'],'светодиод','светодиода','светодиодов')?></div>
						</div>
					<?endif?>
					<?if($arResult['DISPLAY_PROPERTIES']['DISCR_OUTS']['DISPLAY_VALUE']):?>
						<div class="item-slider-info--left-bottom item_back">
							<div class="item-slider-info-num"><?=$arResult['DISPLAY_PROPERTIES']['DISCR_OUTS']['DISPLAY_VALUE']?></div>
							<div class="item-slider-info-desc">дискретных входов/<br>выходов</div>
						</div>
					<?endif?>
					<?if($arResult['DISPLAY_PROPERTIES']['ANALOG_IN']['DISPLAY_VALUE']):?>
						<div class="item-slider-info--right-top item_back">
							<div class="item-slider-info-num"><?=$arResult['DISPLAY_PROPERTIES']['ANALOG_IN']['DISPLAY_VALUE']?></div>
							<div class="item-slider-info-desc">аналоговых<br>входа</div>
						</div>
					<?endif?>
					<?if($arResult['DISPLAY_PROPERTIES']['BUTTONS']['DISPLAY_VALUE']):?>
						<div class="item-slider-info--right-bottom item_front">
							<div class="item-slider-info-num"><?=$arResult['DISPLAY_PROPERTIES']['BUTTONS']['DISPLAY_VALUE']?></div>
							<div class="item-slider-info-desc">кнопок<br>управления</div>
						</div>
					<?endif?>
					<?*/?>
					<?if($arResult['DISPLAY_PROPERTIES']['LEFT_COL']['DISPLAY_VALUE']):?>
						<?=$arResult['DISPLAY_PROPERTIES']['LEFT_COL']['DISPLAY_VALUE']?>
					<?endif?>
					<?if($arResult['DISPLAY_PROPERTIES']['RIGHT_COL']['DISPLAY_VALUE']):?>
						<?=$arResult['DISPLAY_PROPERTIES']['RIGHT_COL']['DISPLAY_VALUE']?>
					<?endif?>
				</div>
				<div class="item_video">
					<video width="320" height="240" autoplay="autoplay" controls loop="loop" controlsList="nodownload" tabindex="0">
					    <source src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/bitrix/templates/.default/img/201_МР3-1_0001.mp4" type="video/mp4">
					    <source src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/bitrix/templates/.default/img/201_3-1_0001.ogv" type='video/ogg; codecs="theora, vorbis"'>
					  	<source src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/bitrix/templates/.default/img/201_3-1_0001.webm" type='video/webm; codecs="vp8, vorbis"'>
					   Your browser does not support the video tag.
					</video>
				</div>
			</div>
		</section>
		<?if($arResult['DISPLAY_PROPERTIES']['BLOCK1']['DISPLAY_VALUE'] || $arResult['DISPLAY_PROPERTIES']['BLOCK2']['DISPLAY_VALUE']):?>
			<section class="item-spec">
				<div class="container">
					<div class="item-spec-row row">
						<div class="item-spec-col col-7">
							<?=$arResult['DISPLAY_PROPERTIES']['BLOCK1']['DISPLAY_VALUE']?>
							
						</div>
						<div class="item-spec-col col-5">
							<?=$arResult['DISPLAY_PROPERTIES']['BLOCK2']['DISPLAY_VALUE']?>
						</div>
					</div>
				</div>
			</section>
		<?endif?>
		<?if($arResult['CASES']):?>
		<section class="item-decision">
			<div class="container">
				<h2 class="section-title">Решения</h2>
				<div class="item-decision-row row bounce-in-left">
					<?foreach($arResult['CASES'] as $arCase):?>
						<div class="item-decision-col col-4">
							<a href="/cases/<?=$arCase['ID']?>/" class="decision-link">
								<img src="<?=$arCase['PREVIEW']['SRC']?>" alt="" class="decision-link-img">
								<span class="decision-link-content-wrapp">
									<span class="decision-link-content-cell">
										<span class="decision-link-content">
											<span class="decision-link-content-title"><?=$arCase['TITLE']['VALUE']?></span>
											<span class="decision-link-content-text"><?=$arCase['DESCR']['VALUE']['TEXT']?></span>
										</span>
									</span>
								</span>
							</a>
						</div>
					<?endforeach?>
				</div>
			</div>
		</section>
		<?endif?>
		<section class="certs">
			<div class="container">
				<?if(count($arResult['DISPLAY_PROPERTIES']['CERT']['FILE_VALUE'])>0):?>
					<div class="item-footer-col col-12">
						<div class="item-docs">
							<h2 class="section-title">Сертификаты</h2>
									
							<div class="item-docs-row">
								<?foreach($arResult['DISPLAY_PROPERTIES']['CERT']['FILE_VALUE'] as $arFile): ?>
									<? $file = CFile::ResizeImageGet($arFile, array('width'=>160, 'height'=>227), BX_RESIZE_IMAGE_PROPORTIONAL, true); 
									?>	
									<a href="<?=$arFile['SRC']?>" class="item-doc fancybox-group" data-fancybox-group="item-dog">
										<img src="<?=$file['src']?>" alt="">
									</a>
								
								<?endforeach?>
							</div>
						</div>
					</div>
				<?endif?>
			</div>
		</section>
		<section class="item-footer" id="item-footer">
			<div class="container">
				<div class="item-footer-row row bounce-in-left">
					
					<div class="item-footer-col col-5">
						<form action="/ajax/price_request_form.php" method="POST" class="item-form form price_request_form" id="price_request_form">
							<?=bitrix_sessid_post()?>
							<input type="hidden" name="vacancy" value="<?=$arResult["NAME"]?>">
							<div class="item-form-body form-body">
								<h2 class="section-title">Запрос цены</h2>
								<div class="form_new">
									<div class="your_contacts">
										<h3>Ваши контактные данные</h3>
										<span class="form_input_wrap">
											<input type="text" required="true" name="user_name" placeholder="Имя" class="input valid">
											<p class="req">Введите корректное имя</p>
										</span>
										<span class="form_input_wrap">
											<input type="text" required="true" name="user_dol" placeholder="Должность" class="input valid">
											<p class="req">Введите корректную должность</p>
										</span>
										<span class="form_input_wrap">
											<input type="text" required="true" name="MESSAGE" placeholder="Компания" class="input valid">
											<p class="req">Введите корректную компанию</p>
										</span>
										<span class="form_input_wrap">
											<input type="phone" required="true" name="user_phone" placeholder="Телефон" class="input valid">
											<p class="req">Введите корректный телефон</p>
										</span>
										<span class="form_input_wrap">
											<input type="email" required="true" name="user_email" placeholder="Электронная почта" class="input valid">
											<p class="req">Введите корректный email</p>
										</span>
										<span class="form_input_wrap">
											<input type="text" required="true" name="user_obj" placeholder="Объект/Титул проекта" class="input valid">
											<p class="req">Введите корректный объект/титул</p>
										</span>
										<!-- <input type="text" required="true" name="user_type" placeholder="Тип запроса" class="input valid"> -->
										<!-- <div class="user_type_select_wrap">
											<select name="user_type" class="select-2 user_type_select">
												<option selected value="obj">Объект</option>
												<option value="titul_proj">Титул проекта</option>
															                        </select>
										</div> -->
										<div class="form_input_wrap user_type_select_wrap">
											<input type="text" required="true" id="input_for_user_type">
											<select name="user_type" class="select-2 user_type_select" required="true">
												<option selected disabled value=''></option>
												<option value="konkurs">Конкурс/Проектная документация</option>
												<option value="delivery">Поставка</option>
					                        </select>
					                        <p class="req">Введите корректный тип запроса</p>
										</div>
									</div>
									<div class="code_conf">
										<h3>Код конфигурации <span class="product_conf_name">МРЗ-3Л3</span>:</h3>
										<div class="conf_list">
											<div class="conf_item conf_type_of_function" id="type_of_function_select_conf"></div>
											<div class="conf_item conf_diapazon" id="diapazon_select_conf"></div>
											<div class="conf_item conf_execution" id="execution_select_conf"></div>
											<div class="conf_item conf_output" id="output_select_conf"></div>
											<div class="conf_item conf_klem_block" id="klem_block_select_conf"></div>
											<div class="conf_item conf_nominal" id="nominal_select_conf"></div>
											<div class="conf_item conf_gost" id="gost_select_conf"></div>
										</div>
									</div>
									<div class="number_conf">
										<h3>Количество устройств:</h3>
										<div class="number_item">1</div>
									</div>
					<?if($arResult['ID']==17):?>
									<input type="hidden" name="product_id" value="17">
									<div class="your_config">
										<h3>Выберите конфигурацию оборудования</h3>
										<div class="config_item">
                      <p>1. Типоисполнение</p>
                      <div class="config_select">
                        <select name="config_select[]" class="select-2">
                          
							<option value="Л1">Комплект ДЗЛ линии 110-222 кВ</option>
							<option selected value="Л2">Комплект ступенчатых защит линии 110-220 кВ</option>
                        </select>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>2. Блок питания</p>
                      <div class="config_select">
                        <select name="config_select[]" class="select-2">
                          <option selected value="PS3">пост/перем. 110-220 В</option>
                        </select>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>3. Дискретные входы</p>
                      <div class="config_select">
                        <select name="config_select[]" class="select-2">
						  <option value="BI01">пост. 220 В; 1 мс; 2 мА</option>
						  <option value="BI02">пост. 110 В; 1 мс; 2 мА</option>
						  <option value="BI05">пост. 220 В; 1 мс; 4 мА</option>
                          <option selected value="BI06">пост. 110 В; 1 мс; 4 мА</option>
                          <option value="BI11">перем. 220 В; 11 мс; 2 мА</option>
                          <option value="BI13">пост. 220 В; 1 мс; 2 мА; перем. 220 В; 21 мс; 2 мА</option>
                          <option value="BI14">пост. 110 В; 1 мс; 2 мА; перем. 110 В; 21 мс; 2 мА</option>
                        </select>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>4. Дискретные выходы</p>
                      <div class="config_select">
                        <select name="config_select[]" class="select-2">
                          <option value="B01">перем.400/пост.220 В; 10 мс; 8 А; 15 А броском</option>
                        
                        </select>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>5. Аналоговые входы</p>
                      <div class="config_select">
                        <select name="config_select[]" class="select-2">
                          <option value="AL1">3xla+1xlo+1xlшон+3xUф+1xUни+1xUик</option>
                          <option selected value="AL1*">3xla+1xlшон+3xUф+1xUни+1xUик</option>
                        
                        </select>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>6. Номинальный фазовый ток</p>
                      <div class="config_select">
                        <select name="config_select[]" class="select-2">
                          <option value="Ir1">1 А</option>
                          <option selected value="Ir2">5 А</option>
                          
                        </select>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>7. Номинальный ток нулевой последовательности</p>
                      <div class="config_select">
                        <select name="config_select[]" class="select-2">
                          <option selected value="Ior1">1 А</option>
                          <option value="Ior2">5 А</option>
                          
                        </select>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>8. Модуль связи - Порт 1</p>
                      <div class="config_select">
                        <select name="config_select[]" class="select-2">
                          <option value="IM10">Отсутствует</option>
                          <option value="IM11">2x100BASE-TX (2xRJ45)</option>
                          <option value="IM11P">2x100BASE-TX (2xRJ45), синхронизация времени PTPv2</option>
                          <option selected value="IM11S">2x100BASE-TX (2xRJ45), встроенный Switch, с поддержкой HSR/PRP/RSTP</option>
                          <option value="IM12">2x100BASE-FX (2xLC, MM, 1300 нм)</option>
						  <option value="IM12P">2x100BASE-FX (2xLC, MM, 1300 нм), синхронизация времени PTPv2</option>
						  <option value="IM12S">2x100BASE-FX (2xLC, MM, 1300 нм), встроенный Switch, с поддержкой HSR/PRP/RSTP</option>
						  <option value="IM14">2xRS485 электрический (1x4-pin коннектор CTM049PT)</option>
						  <option value="IM15">1xRS485 электрический (1x4-pin коннектор CTM049PT)+1x100BASE-TX (1xRJ45)</option>
						  <option value="IM15P">1xRS485 электрический (1x4-pin коннектор CTM049PT)+1x100BASE-TX (1xRJ45), синхронизация времени PTPv2</option>
						  <option value="IM18">1xRS485 электрический (1x4-pin коннектор CTM049PT)+1x100BASE-TX (2xLC, MM, 1300 нм)</option>
						  <option value="IM18P">1xRS485 электрический (1x4-pin коннектор CTM049PT)+1x100BASE-TX (2xLC, MM, 1300 нм), синхронизация времени PTPv2</option>
                        </select>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>9. Модуль связи - Порт 2</p>
                      <div class="config_select">
                        <select name="config_select[]" class="select-2">
                          <option selected value="IM20">Отсутствует</option>
                          <option value="IM21">Последовательный оптический интерфейс для УКБ (2xST, MM, 820 нм)</option>
                          <option value="IM22">Оптический интерфейс для ДЗЛ С37.94(NRZ)/G.704(CMI) (2xST, MM, 820 нм)</option>

                        </select>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>10. Модуль связи - Порт 3</p>
                      <div class="config_select">
                        <select name="config_select[]" class="select-2">
                          <option selected value="IM30">Отсутствует</option>
                          <option value="IM31">Последовательный оптический интерфейс для УКБ (2xST, MM, 820 нм)</option>
                          <option value="IM32">Оптический интерфейс для ДЗЛ С37.94(NRZ)/G.704(CMI) (2xST, MM, 820 нм)</option>
                          <option value="IM34">Последовательный оптический интерфейс для УКБ (2xST, MM, 820 нм) + коаксиальный IRIQ-B/PPS (F-коннектор)</option>

                        </select>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>11. Модуль связи - Порт 4</p>
                      <div class="config_select">
                        <select name="config_select[]" class="select-2">
						  <option selected value="IM40">Отсутствует</option>
                          <option value="IM42">Последовательный оптический интерфейс для УКБ (2xST, MM, 820 нм) + коаксиальный IRIQ-B/PPS (F-коннектор)</option>
                          <option value="IM43">Коаксиальный IRIG-B/PPS (F-коннектор)</option>
                          <option value="IM46">1x100BASE-TX (1xRJ45) + коаксиальный IRIG-B/PPS (F-коннектор)</option>
                          <option value="IM47">1x100BASE-TX (1xRJ45) + оптический PPS (1xST, MM, 820 нм)</option>
                          <option value="IM48">1x100BASE-FX (2xLC, MM, 1300 нм) + коаксиальный IRIG-B/PPS (F-коннектор)</option>
                          <option value="IM49">1x100BASE-FX (2xLC, MM, 1300 нм) + оптический PPS (1xST, MM, 820 нм)</option>
                          <option value="IM410">2x100BASE-TX (2xRJ45), встроенный Switch, с поддержкой HSR/PRP+PTPv2</option>
                          <option value="IM411">2x100BASE-FX (2xLC, MM, 1300 нм), встроенный Switch, с поддержкой HSR/PRP+PTPv2</option>
                          <option value="IM412">2x100BASE-FX (2xLC, MM, 1300 нм) + оптический PPS (1xST, MM, 820 нм)</option>

                        </select>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>12. Язык</p>
                      <div class="config_select">
                        <select name="config_select[]" class="select-2">
                          <option selected value="L2">Русский и Английский</option>
                         
                        </select>
                      </div>
                    </div>
                    <div class="config_item">
                     <p>13. Набор функций</p>
                      <div class="config_select">
                        <select name="config_select[]" class="select-2">
                          <option selected value="F1">Базовый</option>
                          <option value="F2">Расширенный</option>
                        
                        </select>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>14. Корпус</p>
                      <div class="config_select">
                        <select name="config_select[]" class="select-2">
                          <option selected value="Box3">Металлический, утопленный монтаж</option>
                         </select>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>15. Дисплей</p>
                      <div class="config_select">
                        <select name="config_select[]" class="select-2">
                          <option  value="D1">Символьный - 4 строки по 20 символов</option>
                          <option selected value="D2">Графический - 640х480 точек</option>
                         
                        </select>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>16. Клеммы</p>
                      <div class="config_select">
                        <select name="config_select[]" class="select-2">
                          <option selected value="T2">Неразъемные</option>

                        </select>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>17. МЭК 61850</p>
                      <div class="config_select">
                        <select name="config_select[]" class="select-2">
                          <option selected value="MMS0">Нет</option>
                          <option value="MMS1">Да</option>
                        
                        </select>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>18. Модули ввода/вывода</p>
                      <div class="config_select">
                        <select name="config_select[]" class="select-2">
                          <option value="EM00">(16BI+9BO)</option>
                          <option selected value="EM01">(16BI+9BO)+1x(16BI+12BO):(1xУКБ1)</option>
                          <option value="EM02">(16BI+9BO)+2x(16BI+12BO):(2xУКБ1)</option>
                          <option value="EM03">(16BI+9BO)+1x(16BI+10BO):(1xУКБ4)</option>
                          <option value="EM04">(16BI+9BO)+2x(16BI+10BO):(1xУКБ4)</option>
                          <option value="EM05">(16BI+9BO)+3x(16BI+10BO):(1xУКБ4)</option>
                          <option value="EM06">(16BI+9BO)+4x(16BI+10BO):(1xУКБ4)</option>
                          <option value="EM07">(16BI+9BO)+1x(16BI+7BO+4DC):(1xУКБ3)</option>
                          <option value="EM08">(16BI+9BO)+1x(16BI+7BO+4DC):1x(16BI+12BO):(1xУКБ3)+(1xYKB1)</option>
                          <option value="EM09">(16BI+9BO)+1x(16BI+7BO+4DC):2x(16BI+12BO):(1xУКБ3)+(2xYKB1)</option>
                          <option value="EM10">(16BI+9BO)+4x(12BI+11BO):(1xYKB4)</option>
                          
                        </select>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>19. Каналы постоянного тока</p>
                      <div class="config_select">
                        <select name="config_select[]" class="select-2">
                          <option value="DC00">Отсутствует</option>
                          <option value="DC01">Ток от -20 до +20 мА</option>
                          <option value="DC02">Сопротивление от 200 от 2000 Ом</option>
                          <option value="DC03">Температурный датчик 100С</option>
                          <option value="DC04">Температурный датчик 500С</option>
                          <option value="DC05">Температурный датчик 1000С</option>
                          <option selected value="DC06">Напряжение от -10 до +10 В</option>
                        </select>
                      </div>
                    </div>
									</div><?endif?>
									
									<?if($arResult['ID']==16):?>
									<input type="hidden" name="product_id" value="16">
									<div class="your_config">
										<h3>Выберите конфигурацию оборудования</h3>
										<div class="config_item">
                      <p>1. Типоисполнение по выполняемым функциям</p>
                      <div class="config_select">
                        <select id="type_of_function_select" name="config_select[]" class="select-2">
                        	<option selected value="">Не выбрано</option>
							<option value="В">Вводной выключатель</option>
							<option value="Д2">Двигатель (МТЗ, ТЗНП)</option>
							<option value="Д1">Двигатель (НМТЗ, ТНЗНП)</option>
							<option value="ДЗД">Дифференциальная защита двигателя</option>
							<option value="ДЗЛ">Дифференциальная защита линии</option>
							<option value="ДЗТ">Дифференциальная защита трансформатора</option>
							<option value="Л3">Линия (МТЗ, ТЗНП)</option>
							<option value="Л2">Линия (МТЗ, ТНЗНП)</option>
							<option value="Л1">Линия (НМТЗ, ТНЗНП)</option>
							<option value="ПУ">Переферийное устройство (только для ДЗЛ, ДЗТ, ДЗД)</option>
							<option value="СВ">Сеционный выключатель (МТЗ, ТЗНП)</option>
							<option value="СВ2">Сеционный выключатель (НМТЗ, ТЗНП)</option>
							<option value="ТН">Трансформатор напряжения</option>
                        </select>
                      </div>

                    </div>
                    <div class="config_item">
                      <p>2. Диапазон токовых цепей</p>
                      <div class="config_select">
                        <select id="diapazon_select" name="config_select[]" class="select-2">
                          <option selected value="">Не выбрано</option>
                          <option value="1">4ТТ - 3 фазные 5А + 3Io 5А</option>
                          <option value="2">4ТТ - 3 фазные 1А + 3Io 1А</option>
                          <option value="3">4ТТ - 3 фазные 5А + 3Io 1А</option>
                          <option value="4">4ТТ - 3 фазные 1А + 3Io 0,2А</option>
                          <option value="5">3ТТ - 2 фазные 5А + 3Io 5А + 1ТН</option>
                          <option value="6">3ТТ - 2 фазные 5А + 3Io 1А + 1ТН</option>
                          <option value="7">3ТТ - 2 фазные 1А + 3Io 1А + 1ТН</option>
                          <option value="8">3ТТ - 2 фазные 1А + 3Io 0,2А + 1ТН</option>
                          <option value="9">4ТН - 3 фазные/междуфазные + 3Uo</option>
                        
                        </select>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>3. Исполнение измерительных цепей</p>
                      <div class="config_select">
                        <select id="execution_select" name="config_select[]" class="select-2">
                          <option selected value="">Не выбрано</option>
						  <option value="1">0,01-40 Iон</option>
						  <option value="2">0,02-8 Iон</option>
                        </select>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>4. Выходные реле</p>
                      <div class="config_select">
                        <select id="output_select" name="config_select[]" class="select-2">
                          <option selected value="">Не выбрано</option>
                          <option value="1">5 стандартных</option>
                          <option value="2">3 стандартных + 2 силовых</option>
                        </select>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>5. Удаленный клеммный блок (УКБ)</p>
                      <div class="config_select">
                        <select id="klem_block_select" name="config_select[]" class="select-2">
                          <option selected value="">Не выбрано</option>
                          <option value="1">УКБ-1</option>
                          <option value="2">УКБ-2</option>
                        
                        </select>
                        <p class="uniq">Выбранное типоисполнение устройства МРЗ-1 комплектуется только УКБ-2</p>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>6. Номинальное напряжение дискретных входов</p>
                      <div class="config_select">
                        <select id="nominal_select" name="config_select[]" class="select-2">
                          <option selected value="">Не выбрано</option>
                          <option value="1">220 В переменного тока 50 Гц</option>
                          <option value="2">220 В постоянного тока</option>
                          <option value="3">110 В переменного тока 50 Гц</option>
                          <option value="4">110 В постоянного тока</option>
                        </select>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>7. Климатическое исполнение ГОСТ 15150 и ГОСТ 15543.1</p>
                      <div class="config_select">
                        <select id="gost_select" name="config_select[]" class="select-2">
                          <option selected value="">Не выбрано</option>
                          <option value="УХЛ2.1">УХЛ2.1</option>
                          <option value="УХЛ3">УХЛ3</option>
                          <option value="УХЛ3.1">УХЛ3.1</option>
                          <option value="УХЛ4">УХЛ4</option>
                          <option value="О4">О4</option>
                          <option value="Т2.1">Т2.1</option>
                          <option value="Т3">Т3</option>
                          <option value="Т3.1">Т3.1</option>
                        </select>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>8. Количество устройств</p>
                      <div class="config_select">
                        <input type="number" id="number_select" min="1" max="50" value="1">
                      </div>
                    </div>
                    
									</div>
									
									<?endif?>
									
									
									<?if($arResult['ID']==18):?>
									<input type="hidden" name="product_id" value="18">
									<div class="your_config">
										<h3>Выберите конфигурацию оборудования</h3>
										<div class="config_item">
                      <p>1. Типоисполнение</p>
                      <div class="config_select">
                        <select id="mrz_type_select" readonly name="config_select[]" class="select-2">
                          
							<option selected value="МРЗ-3Л3">МРЗ-3Л3</option>
						
                        </select>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>2. Блок питания</p>
                      <div class="config_select">
                        <select id="mrz_block_select" readonly name="config_select[]" class="select-2">
                          <option selected value="PS3">пост/перем. 110-220 В</option>
                        </select>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>3. Дискретные входы</p>
                      <div class="config_select">
                        <select name="config_select[]" class="select-2">
                          <option selected value="">Не выбрано</option>
						  <option value="BI01">пост. 220 В</option>
						  <option value="BI02">пост. 110 В</option>
						  <?/*?><option value="BI05">пост. 220 В; 1 мс; 4 мА</option>
                          <option selected value="BI06">пост. 110 В; 1 мс; 4 мА</option>
                          <option value="BI11">перем. 220 В; 11 мс; 2 мА</option>
                          <option value="BI13">пост. 220 В; 1 мс; 2 мА; перем. 220 В; 21 мс; 2 мА</option>
                          <option value="BI14">пост. 110 В; 1 мс; 2 мА; перем. 110 В; 21 мс; 2 мА</option><?*/?>
                        </select>
                      </div>
                    </div>
                    <?/*?><div class="config_item">
                      <p>4. Дискретные выходы</p>
                      <div class="config_select">
                        <select readonly name="config_select[]" class="select-2">
                          <option value="B01">перем.400/пост.220 В; 10 мс; 8 А; 15 А броском</option>
                        
                        </select>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>5. Аналоговые входы</p>
                      <div class="config_select">
                        <select readonly name="config_select[]" class="select-2">
                          <option selected value="AL1">3xla+1xlo+1xlшон+3xUф+1xUни+1xUик</option>
                         
                        
                        </select>
                      </div>
                    </div><?*/?>
                    <div class="config_item">
                      <p>4. Номинальный фазовый ток</p>
                      <div class="config_select">
                        <select name="config_select[]" class="select-2">
                        	<option selected value="">Не выбрано</option>
                          <option value="Ir1">1 А</option>
                          <option value="Ir2">5 А</option>
                          
                        </select>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>5. Номинальный ток нулевой последовательности</p>
                      <div class="config_select">
                        <select name="config_select[]" class="select-2">
                        	<option selected value="">Не выбрано</option>
                          <option value="Ior1">1 А</option>
                        </select>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>6. Модуль связи - Порт 1</p>
                      <div class="config_select">
                        <select name="config_select[]" class="select-2">
                        	<option selected value="">Не выбрано</option>
                          <option value="IM10">Отсутствует</option>
                          <option value="IM11">2x100BASE-TX (2xRJ45)</option>
                          <option value="IM11P">2x100BASE-TX (2xRJ45), синхронизация времени PTPv2</option>
                          <option value="IM11S">2x100BASE-TX (2xRJ45), встроенный Switch, с поддержкой HSR/PRP/RSTP</option>
                          <option value="IM12">2x100BASE-FX (2xLC, MM, 1300 нм)</option>
						  <option value="IM12P">2x100BASE-FX (2xLC, MM, 1300 нм), синхронизация времени PTPv2</option>
						  <option value="IM12S">2x100BASE-FX (2xLC, MM, 1300 нм), встроенный Switch, с поддержкой HSR/PRP/RSTP</option>
						  <option value="IM14">2xRS485 электрический (1x4-pin коннектор CTM049PT)</option>
						  <option value="IM15">1xRS485 электрический (1x4-pin коннектор CTM049PT)+1x100BASE-TX (1xRJ45)</option>
						  <option value="IM15P">1xRS485 электрический (1x4-pin коннектор CTM049PT)+1x100BASE-TX (1xRJ45), синхронизация времени PTPv2</option>
						  <option value="IM18">1xRS485 электрический (1x4-pin коннектор CTM049PT)+1x100BASE-TX (2xLC, MM, 1300 нм)</option>
						  <option value="IM18P">1xRS485 электрический (1x4-pin коннектор CTM049PT)+1x100BASE-TX (2xLC, MM, 1300 нм), синхронизация времени PTPv2</option>
                        </select>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>7. Модуль связи - Порт 2</p>
                      <div class="config_select">
                        <select name="config_select[]" class="select-2">
                        	<option selected value="">Не выбрано</option>
                          <option value="IM20">Отсутствует</option>
                          <option value="IM21">Последовательный оптический интерфейс для УКБ (2xST, MM, 820 нм)</option>
                          <option value="IM22">Оптический интерфейс для ДЗЛ С37.94(NRZ)/G.704(CMI) (2xST, MM, 820 нм)</option>

                        </select>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>8. Модуль связи - Порт 3</p>
                      <div class="config_select">
                        <select name="config_select[]" class="select-2">
                        	<option selected value="">Не выбрано</option>
                          <option value="IM30">Отсутствует</option>
                          <option value="IM31">Последовательный оптический интерфейс для УКБ (2xST, MM, 820 нм)</option>
                          <option value="IM32">Оптический интерфейс для ДЗЛ С37.94(NRZ)/G.704(CMI) (2xST, MM, 820 нм)</option>
                          <option value="IM34">Последовательный оптический интерфейс для УКБ (2xST, MM, 820 нм) + коаксиальный IRIQ-B/PPS (F-коннектор)</option>

                        </select>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>9. Модуль связи - Порт 4</p>
                      <div class="config_select">
                        <select name="config_select[]" class="select-2">
                        	<option selected value="">Не выбрано</option>
						  <option value="IM40">Отсутствует</option>
                          <option value="IM42">Последовательный оптический интерфейс для УКБ (2xST, MM, 820 нм) + коаксиальный IRIQ-B/PPS (F-коннектор)</option>
                          <option value="IM43">Коаксиальный IRIG-B/PPS (F-коннектор)</option>
                          <option value="IM46">1x100BASE-TX (1xRJ45) + коаксиальный IRIG-B/PPS (F-коннектор)</option>
                          <option value="IM47">1x100BASE-TX (1xRJ45) + оптический PPS (1xST, MM, 820 нм)</option>
                          <option value="IM48">1x100BASE-FX (2xLC, MM, 1300 нм) + коаксиальный IRIG-B/PPS (F-коннектор)</option>
                          <option value="IM49">1x100BASE-FX (2xLC, MM, 1300 нм) + оптический PPS (1xST, MM, 820 нм)</option>
                          <option value="IM410">2x100BASE-TX (2xRJ45), встроенный Switch, с поддержкой HSR/PRP+PTPv2</option>
                          <option value="IM411">2x100BASE-FX (2xLC, MM, 1300 нм), встроенный Switch, с поддержкой HSR/PRP+PTPv2</option>
                          <option value="IM412">2x100BASE-FX (2xLC, MM, 1300 нм) + оптический PPS (1xST, MM, 820 нм)</option>

                        </select>
                      </div>
                    </div>
                    <?/*?><div class="config_item">
                      <p>12. Язык</p>
                      <div class="config_select">
                        <select readonly name="config_select[]" class="select-2">
                          <option selected value="L2">Русский и Английский</option>
                         
                        </select>
                      </div>
                    </div><?*/?>
                    <div class="config_item">
                     <p>10. Набор функций</p>
                      <div class="config_select">
                        <select name="config_select[]" class="select-2">
                        	<option selected value="">Не выбрано</option>
                          <option value="F1">Базовый</option>
                          <option value="F2">Расширенный</option>
                        
                        </select>
                      </div>
                    </div>
                    <?/*><div class="config_item">
                      <p>14. Корпус</p>
                      <div class="config_select">
                        <select readonly name="config_select[]" class="select-2">
                          <option selected value="Box3">Металлический, утопленный монтаж</option>
                         </select>
                      </div>
                    </div><?*/?>
                    <div class="config_item">
                      <p>11. Дисплей</p>
                      <div class="config_select">
                        <select name="config_select[]" class="select-2">
                        	<option selected value="">Не выбрано</option>
                          <option  value="D1">Символьный - 4 строки по 20 символов</option>
                          <option value="D2">Графический - 640х480 точек</option>
                        </select>
                      </div>
                    </div>
                    <?/*?><div class="config_item">
                      <p>16. Клеммы</p>
                      <div class="config_select">
                        <select readonly name="config_select[]" class="select-2">
                          <option selected value="T2">Неразъемные</option>

                        </select>
                      </div>
                    </div><?*/?>
                    <div class="config_item">
                      <p>12. Цифровой стандарт</p>
                      <div class="config_select">
                        <select name="config_select[]" class="select-2">
                        	<option selected value="">Не выбрано</option>
                            <option value="MMS0">Нет</option>
                          <option value="MMS1">МЭК 61850</option>
                          <option value="MMS2">МЭК 60870-5-103</option>
                            <option value="MMS3">МЭК 60870-5-104</option>
                            <option value="MMS4">Modbus RTU</option>
                            <option value="MMS5">Modbus TCP</option>
                        </select>
                      </div>
                    </div>
                    <div class="config_item">
                      <p>13. Модули ввода/вывода</p>
                      <div class="config_select">
                        <select name="config_select[]" class="select-2">
                        	<option selected value="">Не выбрано</option>
                          <option value="EM00">(16BI+9BO)</option>
                          <option value="EM01">(16BI+9BO)+1x(16BI+12BO):(1xУКБ1)</option>
                        </select>
                      </div>
                    </div>
                    <?/*?><div class="config_item">
                      <p>19. Каналы постоянного тока</p>
                      <div class="config_select">
                        <select readonly name="config_select[]" class="select-2">
                          <option selected value="DC00">Отсутствует</option>
                         
                        </select>
                      </div>
                    </div><?*/?>
									</div><?endif?>
								</div>
								<!-- <div class="form-block">
									<i class="alert">Введите Ваше имя</i>
									<input type="text" name="user_name"  class="input valid" placeholder="Ваше имя">
								</div>
								<div class="form-block">
									<i class="alert">Введите компанию</i>
									<input type="text" name="MESSAGE" class="input valid" placeholder="Компания">
								</div>
								<div class="form-block">
									<i class="alert">Введите телефон или эл. почту</i>
									<input type="text" name="user_email" class="input valid" placeholder="Телефон или эл. почта">
								</div> -->
                <input type="hidden" name="is_perechen" id="is-perechen" value="">
								<button type="submit" class="btn submit ask_price" formnovalidate>Запросить цену</button>
								<button type="button" class="btn perechen" formnovalidate>Сформировать перечень выбранных устройств</button>
								<button type="button" class="btn reset">Сброс параметров</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>
	<div class="item-form-done form-done">
		<??><div class="thx-container">
			<div class="is_right">
				<h2>Всё верно?</h2>
				<div class="confirm_conf"></div>
				<div class="list-item left-list">
					<ul>
						<li>1. Типоисполнение: <span class="type_of_function_select_li"></span></li>
						<li>2. Диапазон: <span class="diapazon_select_li"></span></li>
						<li>3. Токовые цепи: <span class="execution_select_li"></span></li>
						<li>4. Выходные реле: <span class="output_select_li"></span></li>
					</ul>
				</div>
				<div class="list-item right-list">
					<ul>
						<li>5. Клеммный блок: <span class="klem_block_select_li"></span></li>
						<li>6. Дискретные входы: <span class="nominal_select_li"></span></li>
						<li>7. Климатическое исполнение: <span class="gost_select_li"></span></li>
						<li>8. Количество: <span class="number_select_li">1</span></li>
					</ul>
				</div>
				<div class="form_confirm_btns">
					<div class="btn yes">Да</div>
					<div class="btn no">Нет</div>
				</div>
			</div>
			<div class="close_tnx_container">
				<a href="#">x</a>
			</div>
			<div class="send_confirmed">
				<h2>Спасибо!</h2>
				<h3>Ваша заявка отправлена</h3>
			</div>
		</div><!-- thx-container --><??>
	</div><!-- item-form-done -->
	<?
	//else:
	
	?>
	
<!--<div class="page">
	<div class="page-content">
		<div class="container">
			<h1 class="page-title"><?=$arResult["NAME"]?></h1>
			<div class="content-text">
			
				<?echo $arResult["DETAIL_TEXT"];?>
			
			
			</div>
		</div>
	</div>
</div>	
	-->

<?
//endif?>
