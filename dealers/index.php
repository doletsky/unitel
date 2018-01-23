<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Дилеры");
?>
<div class="contacts-head">
	<h1 class="page_title">Дилеры</h1>
</div>
<?/*?>
<div class="partner_map">
	<div id="map"></div>
    <script>

      function initMap() {

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 3,
          center: {lat: -28.024, lng: 140.887},
          scrollwheel: false,
          styles: [
			    {
			        "featureType": "administrative",
			        "elementType": "labels.text.fill",
			        "stylers": [
			            {
			                "color": "#444444"
			            }
			        ]
			    },
			    {
			        "featureType": "landscape",
			        "elementType": "all",
			        "stylers": [
			            {
			                "color": "#f2f2f2"
			            }
			        ]
			    },
			    {
			        "featureType": "poi",
			        "elementType": "all",
			        "stylers": [
			            {
			                "visibility": "off"
			            }
			        ]
			    },
			    {
			        "featureType": "road",
			        "elementType": "all",
			        "stylers": [
			            {
			                "saturation": -100
			            },
			            {
			                "lightness": 45
			            }
			        ]
			    },
			    {
			        "featureType": "road.highway",
			        "elementType": "all",
			        "stylers": [
			            {
			                "visibility": "simplified"
			            }
			        ]
			    },
			    {
			        "featureType": "road.arterial",
			        "elementType": "labels.icon",
			        "stylers": [
			            {
			                "visibility": "off"
			            }
			        ]
			    },
			    {
			        "featureType": "transit",
			        "elementType": "all",
			        "stylers": [
			            {
			                "visibility": "off"
			            }
			        ]
			    },
			    {
			        "featureType": "water",
			        "elementType": "all",
			        "stylers": [
			            {
			                "color": "#b5e9ff"
			            },
			            {
			                "visibility": "on"
			            }
			        ]
			    }
			]
        });

        // Create an array of alphabetical characters used to label the markers.
        var labels = '';
      
			
		var locations = [
			{lat: -31.563910, lng: 147.154312},
			{lat: -33.718234, lng: 150.363181},
			{lat: -33.727111, lng: 150.371124},
			{lat: -33.848588, lng: 151.209834},
			{lat: -33.851702, lng: 151.216968},
			{lat: -34.671264, lng: 150.863657},
			{lat: -35.304724, lng: 148.662905},
			{lat: -36.817685, lng: 175.699196},
			{lat: -36.828611, lng: 175.790222},
			{lat: -37.750000, lng: 145.116667},
			{lat: -37.759859, lng: 145.128708},
			{lat: -37.765015, lng: 145.133858},
			{lat: -37.770104, lng: 145.143299},
			{lat: -37.773700, lng: 145.145187},
			{lat: -37.774785, lng: 145.137978},
			{lat: -37.819616, lng: 144.968119},
			{lat: -38.330766, lng: 144.695692},
			{lat: -39.927193, lng: 175.053218},
			{lat: -41.330162, lng: 174.865694},
			{lat: -42.734358, lng: 147.439506},
			{lat: -42.734358, lng: 147.501315},
			{lat: -42.735258, lng: 147.438000},
			{lat: -43.999792, lng: 170.463352}
		];	
		var contents = [
			"<div class='cluster_descr'><h5>ООО “СтройИнвестХолдинг” LLC StroiInvestHolding</h5><i class='icon-phone-i'></i><p><a href='tel:8 (495) 921-33-46'>8 (495) 921-33-46</a></p><i class='icon-location'></i><p>111024, Россия, г. Москва, 2-я Кабельная улица 2, стр. 3</p><i class='icon-mail-alt'></i><p><a href='mailto:info@mzrza.ru'>info@mzrza.ru</a></p></div><div class='cluster_descr_block'></div>",
			"text2", "text3", "text4","text5","text6","text7","text8","text9"];	

        
        // Add some markers to the map.
        // Note: The code uses the JavaScript Array.prototype.map() method to
        // create an array of markers based on a given "locations" array.
        // The map() method here has nothing to do with the Google Maps API.
        var image = '/img/map_pointer.png';
        var markers = locations.map(function(location, i) {
		
		  var marker = new google.maps.Marker({
			position: location,
            label: labels[i % labels.length],
            icon: image
		  });
		  google.maps.event.addListener(marker, 'click', function(evt) {
			infowindow.setContent(contents[i]);
			infowindow.open(map, marker);
		  })
		  return marker;

        });

        var clusterStyles = [
		  {
		    textColor: 'white',
		    url: '/img/cluster_bg.png',
		    height: 30,
		    width: 34
		  }
		];
        // Add a marker clusterer to manage the markers.
        /*var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: '/img/cluster_bg.png'});*//*

		var mcOptions = {
		    gridSize: 26,
		    styles: clusterStyles,
		    maxZoom: 15
		};
		var mc= new MarkerClusterer(map, markers, mcOptions);
      }

    </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAxRaIJAWfwfGfuIgIzWdNI3Z45KmU7OA&callback=initMap">
    </script>
</div><?*/?>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "dealers-map", Array(
	"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"IBLOCK_TYPE" => "info",	// Тип информационного блока (используется только для проверки)
		"IBLOCK_ID" => "12",	// Код информационного блока
		"NEWS_COUNT" => "999",	// Количество новостей на странице
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"FILTER_NAME" => "",	// Фильтр
		"FIELD_CODE" => array(	// Поля
			0 => "ID",
			1 => "",
		),
		"PROPERTY_CODE" => array(	// Свойства
			0 => "EMAIL",
			1 => "ADDRESS",
			2 => "LOCATION",
			3 => "PHONE",
			4 => "",
		),
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_FILTER" => "Y",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => "",	// Шаблон постраничной навигации
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SHOW_404" => "N",	// Показ специальной страницы
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"PAGER_BASE_LINK" => "",
		"PAGER_PARAMS_NAME" => "arrPager",
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
<?$APPLICATION->IncludeComponent("bitrix:catalog.sections.top", "dealers", Array(
	"IBLOCK_TYPE" => "info",	// Тип инфоблока
		"IBLOCK_ID" => "12",	// Инфоблок
		"SECTION_FIELDS" => array(	// Поля разделов
			0 => "",
			1 => "",
		),
		"SECTION_USER_FIELDS" => array(	// Свойства разделов
			0 => "",
			1 => "",
		),
		"SECTION_SORT_FIELD" => "id",	// По какому полю сортируем разделы
		"SECTION_SORT_ORDER" => "asc",	// Порядок сортировки разделов
		"ELEMENT_SORT_FIELD" => "id",	// По какому полю сортируем элементы
		"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки элементов
		"ELEMENT_SORT_FIELD2" => "sort",	// Поле для второй сортировки элементов
		"ELEMENT_SORT_ORDER2" => "asc",	// Порядок второй сортировки элементов
		"FILTER_NAME" => "arrFilter",	// Имя массива со значениями фильтра для фильтрации элементов
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
		"BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
		"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
		"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Название переменной, в которой передается количество товара
		"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
		"SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
		"DISPLAY_COMPARE" => "Y",	// Выводить кнопку сравнения
		"USE_MAIN_ELEMENT_SECTION" => "Y",	// Использовать основной раздел для показа элемента
		"SECTION_COUNT" => "99",	// Максимальное количество выводимых разделов
		"ELEMENT_COUNT" => "99",	// Максимальное количество элементов, выводимых в каждом разделе
		"LINE_ELEMENT_COUNT" => "3",	// Количество элементов, выводимых в одной строке таблицы
		"PROPERTY_CODE" => array(	// Свойства
			0 => "EMAIL",
			1 => "ADDRESS",
			2 => "LOCATION",
			3 => "PHONE",
			4 => "",
			5 => "",
			6 => "",
			7 => "",
			8 => "",
		),
		"PRICE_CODE" => "",	// Тип цены
		"USE_PRICE_COUNT" => "Y",	// Использовать вывод цен с диапазонами
		"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
		"PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
		"PRODUCT_PROPERTIES" => "",	// Характеристики товара
		"USE_PRODUCT_QUANTITY" => "Y",	// Разрешить указание количества товара
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_FILTER" => "Y",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"HIDE_NOT_AVAILABLE" => "N",
		"QUANTITY_FLOAT" => "N",
		"CONVERT_CURRENCY" => "Y",
		"CURRENCY_ID" => "RUB",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>