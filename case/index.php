<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Проекты и решения");
?><div class="page">
	<div class="page-content">
		<div class="container">
			<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"cases", 
	array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "EQUIPMENT",
			1 => "NOTE",
			2 => "SCHEME",
			3 => "VOLTAGE",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "equipment",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"FILTER_NAME" => "arFilter",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "VOLTAGE",
			1 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ID",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "Y",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "cases",
		"SEF_FOLDER" => "/case/",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
		)
	),
	false
);?>
		<div id="for_tech">
			<p>Одним из перспективных направлений развития электроэнергетики является переход на более совершенные технологии контроля и управления, передачи данных и систем защиты – на цифровые технологии. Поэтому и энергетический объект, на котором внедряются данные современные цифровые технологии принято называть «цифровой подстанцией».</p>
			<p>Главной отличительной особенностью «цифровой подстанции» от ПС традиционного типа является организация широкого взаимодействия между интеллектуальными устройствами всех уровней (РЗ, ПА, АСУТП, ТМ, РАС) посредством передачи данных по цифровым каналам связи. Также «цифровая подстанция» обладает рядом преимуществ перед ПС традиционного типа, а именно:</p>
			<ul>
				<li>1.	Сокращение капитальных и операционных затрат при строительстве и эксплуатации энергообъекта;</li>
				<li>2.	Сокращение сроков ввода объекта в эксплуатацию;</li>
				<li>3.	Минимизация кабельных взаимосвязей;</li>
				<li>4.	Повышение наблюдаемости, в т.ч.:
					<ul>
						<li>―	мониторинг первичного и вторичного оборудования;</li>
						<li>―	максимальная степень автоматизации энергообъекта;</li>
						<li>―	повышение автономности.</li>
					</ul>
				</li>
			</ul>
			<p>Принципы организации взаимодействия между интеллектуальными устройствами на «цифровой подстанции» описаны в международном стандарте МЭК 61850. Указанный стандарт фактически описывает стандартные логические узлы, являющиеся, в частности, и функциями устройств РЗА (например, МТЗ, ДЗТ и пр.), язык описания информационного обмена (SQL) и модели информационного обмена, в числе которых GOOSE и SAMPLED VALUES (SV).</p>
			<p>Отличительными элементами «цифровой подстанции» являются:</p>
			<ul>
				<li>―	цифровые (оптические) трансформаторы тока и напряжения;</li>
				<li>―	аналоговые преобразователи (Merging Units);</li>
				<li>―	выносные модули сопряжения с объектом - УСО  (Micro RTU);</li>
				<li>―	интеллектуальные электронные устройства (IED).</li>
				<li></li>
			</ul>
			<img src="/bitrix/templates/.default/img/img_1.png" alt="img_1">
			<p class="sub_img">Рис.1. Вариант построения сети обмена данными на «цифровой подстанции»</p>
			<p>Устройства релейной защиты и автоматики являются интеллектуальными электронными устройствами (IED - Intelligent Electronic Device) и структурно входят в уровень присоединения.</p>
			<p>Устройства релейной защиты и автоматики серии МРЗ-3 разработаны с возможностью применения в составе «цифровой подстанции». Устройства поддерживают передачу данных по протоколам МЭК 61850 8 1 (GOOSE, MMS) и МЭК 61850 9 2LE (SV), поддерживают различные типы резервирования каналов связи, в т.ч. PRP (IEC 62439-3), HSR (IEC 62429-3) и RSTP. В устройствах серии МРЗ-3 предусмотрена возможность получения метки времени от системы единого времени посредством одного из протоколов: - SNTP, IRIG-B, PTP.</p>
			<p>В качестве альтернативы цифровым (оптическим) трансформаторам тока в структуре «цифровой подстанции» предусматриваются цифровые измерительные преобразователи (MU - Merging Unit). MU осуществляют аналогово-цифровое преобразование входных сигналов тока и напряжения и дальнейшую передачу выборок значений (Sampled Values (SV)) по сети Ethernet в соответствии с техническими требованиями МЭК 61850-9-2LE.</p>
			<p>Таким устройством является МРЗ-3АМ, выполненное на базе устройства серии МРЗ-3, включающее в базовой комплектации 4 аналоговых входа для ТТ и 4 аналоговых входа для ТН. При этом в устройстве МРЗ-3АМ аналоговые величины оцифровываются с частотой 4 кГц, поддерживается 50 Гц/ 80 потоков 9-2LE профиля.</p>
			<img src="/bitrix/templates/.default/img/img_2.png" alt="img_2">
			<p>Для построения «цифровой подстанции» необходимо, чтобы все элементы, входящие в неё, строго соответствовали требованиям стандарта МЭК 61850, что подтверждается соответствующими протоколами испытаний и опытной эксплуатацией. Данным требованиям в полной мере отвечают устройства серии МРЗ-3.</p>
			<p>Обеспечение функциональной совместимости устройств между собой является основной целью стандарта МЭК 61850. Здесь необходимым условием является то, что устройства должны удовлетворять требованиям стандарта. Проверка соответствия требованиям стандарта МЭК 61850 осуществляется специализированными организациями, такими как KEMA (DNV GL-Energy) и АО «НТЦ ФСК ЕЭС» (при поддержке KEMA).</p>
			<p>Устройства МРЗ-3 протестированы лабораторией KEMA и имеют соответствующий сертификат.</p>
			<img src="/bitrix/templates/.default/img/KEMA.jpg" alt="МРЗ-3. МЭК 61850 KEMA (DNVGL).jpg">
		</div>

		</div>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>