<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Программное обеспечение");
?><div class="page">
	<div class="page-content">
		<div class="container">
			<h1 class="page-title">Программное обеспечение</h1>
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
				<div class="programs">
					<div class="programs-main-img">
 <img src="/img/programs-main-img.jpg" alt="">
					</div>
					<div class="programs-desc-row clearfix">
						<div class="programs-desc">
							<h2 class="section-title">Сервисная программа ПО МРЗ</h2>
							<div class="programs-desc-text">
								<p>
									Программа ПО МРЗ реализует соединение точка-точка (IrDA оптический коннектор), для устройств серии МРЗ-3 дополнительно доступно TCP/IP соединение через локальную или глобальную сеть.
								</p>
								<p>
									Программу ПО МРЗ можно использовать для создания новой конфигурации и уставок, редактирования и сохранения в файл уставок и кокфигурации, записи конфигурации и уставок в устройство, просмотра и сохранения данных из регистратора событий и аварийного осциллографа, внешнего пуска осциллографа, печати конфигурации, уставок, событий и т.д.
								</p>
							</div>
						</div>
						<div class="programs-more-col">
							<h3 class="programs-more-title">Дополнительные возможности</h3>
							<ul class="programs-more-list">
								<li><img width="34" src="/img/programs-more-icon-1.svg" alt="">Преобразование файла событий в различные форматы для просмотра в других программах </li>
								<li><img width="35" src="/img/programs-more-icon-2.svg" alt="">Задание пользователем дополнительной логики (Логических уравнений) </li>
								<li><img width="25" src="/img/programs-more-icon-3.svg" alt="">Онлайн диагностика - визуализация текущего состояния всех измеренных и расчетных аналоговых величин, рабочих точек, дискретных входов и выходных реле, удаленное управление светодиодными индикаторами и дискретными выходами; </li>
								<li><img width="30" src="/img/programs-more-icon-4.svg" alt="">Доступ к файловой системе (FTP) для устройств серии МРЗ-3 </li>
							</ul>
						</div>
					</div>
					<div class="programs-free">
						<p>
							<img src="/img/programs-free.png" alt="">
						</p>
						<p>
							Поставляется бесплатно в комплекте с <a href="/products/">устройствами</a>
						</p>
					</div>
				</div>
			</div>
			<div class="programs-footer-img">
 <img src="/img/programs-footer-img.jpg" alt="">
			</div>
			 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"docs",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "docs",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "18",
		"IBLOCK_TYPE" => "info",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"TYPE",1=>"FILE",2=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>
		</div>
	</div>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>