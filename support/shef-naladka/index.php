<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Шефналадка");
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
				<div class="services">
					
					<div class="services-block clearfix">
			<div class="services-img">
				<img src="/upload/iblock/59f/59f4e1015e0348bbeb8fc45997ef8b79.jpg" alt="">
			</div>
			<div class="services-desc">
				
				<div class="services-desc-text">
					<p>
Представители ООО «МРЗ»  всегда готовы выполнить весь комплекс работ связанных с шефналадкой поставленного оборудования РЗА в период подготовки и проведения индивидуальных испытаний и в период комплексного опробования оборудования.
</p><p>Шефналадочные работы являются контрольным мероприятием со стороны компании ООО «МРЗ» или сертифицированных партнеров ООО «МРЗ» («Юнител Инжиниринг»), которые обеспечиваются присутствием и выездами наших специалистов на объект.
Выполнение работ по шефналадке позволяет сократить общее время всех ПНР по вторичному оборудованию и обеспечить максимальную надежность работы оборудования РЗА, так как пусконаладочные работы являются завершающим звеном в предпусковых мероприятиях для объектов энергетики.
Конкретный объем работ, проводимых при шефналадке, определяется требованиями соответствующего договора.</p>
</div>
			</div>
		</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>