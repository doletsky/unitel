<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обучение");
?><div class="page">
	<div class="page-content">
		<div class="container">
			<h1 class="page-title"><?$APPLICATION->ShowTitle(false);?></h1>
			<?$APPLICATION->IncludeComponent("bitrix:menu", "submenu", Array(
					"COMPONENT_TEMPLATE" => ".default",
					"ROOT_MENU_TYPE" => "submenu",	// Тип меню для первого уровня
					"MENU_CACHE_TYPE" => "A",	// Тип кеширования
					"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
					"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
					"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
					"MAX_LEVEL" => "1",	// Уровень вложенности меню
					"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
					"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
					"DELAY" => "N",	// Откладывать выполнение шаблона меню
					"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
				),
				false
			);?>
			
			<div class="content-text">
				<div class="services-img">
 <img src="/upload/iblock/9b1/9b1460162e0d86e42831b6df316f9b0d.jpg" alt="">
				</div>
				 Аппаратура разработана по ТЗ ОАО "ФСК ЕЭС" и аттестована на соответствие стандартам и дополнительным требованиям ОАО "ФСК ЕЭС".
				<p>
					 В АКСТ "Линия-Ц" на базе одной платформы реализованы аналоговые и цифровые ВЧ каналы. С использованием аппаратуры возможно организовать до 12 стандартных аналоговых каналов с полосой 4 кГц со встроенными модемами телемеханики и цифровые каналы со встроенным мультиплексором с интерфейсами RS-232 и Ethernet.
				</p>
				<h3>
				<div>
 <img src="/support-footer-img.jpg" align="right">
				</div>
 <br>
 </h3>
				<p>
				</p>
				<div>
				</div>
				<h3 class="section-title"><br>
 </h3>
				<h3 class="section-title"><br>
 </h3>
				<h3 class="section-title"><br>
 </h3>
				<h3 class="section-title"><br>
 </h3>
				<h3 class="section-title">Обучение</h3>
				<div class="support-footer-text">
					 Высокое качество продукции является основным приоритетом компании. В наших устройствах используются компоненты от ведущих мировых производителей: Freescale, Analog Devices
				</div>
 <a href="/support/study/" onclick="$('.feedback-btn').click();return false;" class="btn">Запись на семинар</a> <br>
			</div>
		</div>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>