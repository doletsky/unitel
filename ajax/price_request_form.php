<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");?>
<?
$message = $_REQUEST["MESSAGE"];
$code = implode(' ', $_POST['config_select']);

if($_POST['product_id']==17){
$_POST["MESSAGE"] = $_POST["MESSAGE"]."\r\n\r\n Код: МРЗ-3 ".implode(' ', $_POST['config_select']);
$config = array(
	0 => array(
		'name' => '1. Типоисполнение',
		'data' => array(
			'Л1' => 'Комплект ДЗЛ линии 110-222 кВ',
			'Л2' => 'Комплект ступенчатых защит линии 110-220 кВ',
		),
	),
	1 => array(
		'name' => '2. Блок питания',
		'data' => array(
			'PS3' => 'пост/перем. 110-220 ВЗ',
		),
	),
	2 => array(
		'name' => '3. Дискретные входы',
		'data' => array(
			'BI01' => 'пост. 220 В; 1 мс; 2 мА',
			'BII02' => 'пост. 110 В; 1 мс; 2 мА',
			'BI05' => 'пост. 220 В; 1 мс; 4 мА',
			'BI06' => 'пост. 110 В; 1 мс; 4 мА',
			'BI11' => 'перем. 220 В; 11 мс; 2 мА',
			'BI13' => 'пост. 220 В; 1 мс; 2 мА; перем. 220 В; 21 мс; 2 мА',
			'BI14' => 'пост. 110 В; 1 мс; 2 мА; перем. 110 В; 21 мс; 2 мА',
		),
	),
	3 => array(
		'name' => '4. Дискретные выходы',
		'data' => array(
			'B01' => 'перем.400/пост.220 В; 10 мс; 8 А; 15 А броском',
			
		),
	),
	4 => array(
		'name' => '5. Аналоговые входы',
		'data' => array(
			'AL1' => '3xla+1xlo+1xlшон+3xUф+1xUни+1xUик',
			'AL1*' => '3xla+1xlшон+3xUф+1xUни+1xUик',
			
		),
	),
	5 => array(
		'name' => '6. Номинальный фазовый ток',
		'data' => array(
			'Ir1' => '1 А',
			'Ir2' => '5 А',
			
		),
	),
	6 => array(
		'name' => '7. Номинальный ток нулевой последовательности',
		'data' => array(
			'Ior1' => '1 А',
			'Ior2' => '5 А',
			
		),
	),
	7 => array(
		'name' => '8. Модуль связи - Порт 1',
		'data' => array(
			'IM10' => 'Отсутствует',
			'IM11' => '2x100BASE-TX (2xRJ45)',
			'IM11P' => '2x100BASE-TX (2xRJ45), синхронизация времени PTPv2',
			'IM11S' => '2x100BASE-TX (2xRJ45), встроенный Switch, с поддержкой HSR/PRP/RSTP',
			'IM12' => '2x100BASE-FX (2xLC, MM, 1300 нм)',
			'IM12P' => '2x100BASE-FX (2xLC, MM, 1300 нм), синхронизация времени PTPv2',
			'IM12S' => '2x100BASE-FX (2xLC, MM, 1300 нм), встроенный Switch, с поддержкой HSR/PRP/RSTP',
			'IM14' => '2xRS485 электрический (1x4-pin коннектор CTM049PT)',
			'IM15' => '1xRS485 электрический (1x4-pin коннектор CTM049PT)+1x100BASE-TX (1xRJ45)',
			'IM15P' => '1xRS485 электрический (1x4-pin коннектор CTM049PT)+1x100BASE-TX (1xRJ45), синхронизация времени PTPv2',
			'IM18' => '1xRS485 электрический (1x4-pin коннектор CTM049PT)+1x100BASE-TX (2xLC, MM, 1300 нм)',
			'IM18P' => '1xRS485 электрический (1x4-pin коннектор CTM049PT)+1x100BASE-TX (2xLC, MM, 1300 нм), синхронизация времени PTPv2',
			
		),
	),
	8 => array(
		'name' => '9. Модуль связи - Порт 2',
		'data' => array(
			'IM20' => 'Отсутствует',
			'IM21' => 'Последовательный оптический интерфейс для УКБ (2xST, MM, 820 нм)',
			'IM22' => 'Оптический интерфейс для ДЗЛ С37.94(NRZ)/G.704(CMI) (2xST, MM, 820 нм)',
			
		),
	),
	9 => array(
		'name' => '10. Модуль связи - Порт 3',
		'data' => array(
			'IM30' => 'Отсутствует',
			'IM31' => 'Последовательный оптический интерфейс для УКБ (2xST, MM, 820 нм)',
			'IM32' => 'Оптический интерфейс для ДЗЛ С37.94(NRZ)/G.704(CMI) (2xST, MM, 820 нм)',
			'IM34' => 'Последовательный оптический интерфейс для УКБ (2xST, MM, 820 нм) + коаксиальный IRIQ-B/PPS (F-коннектор)',
			
		),
	),
	10 => array(
		'name' => '11. Модуль связи - Порт 4',
		'data' => array(
			'IM40' => 'Отсутствует',
			'IM42' => 'Последовательный оптический интерфейс для УКБ (2xST, MM, 820 нм) + коаксиальный IRIQ-B/PPS (F-коннектор)',
			'IM43' => 'Коаксиальный IRIG-B/PPS (F-коннектор)',
			'IM46' => '1x100BASE-TX (1xRJ45) + коаксиальный IRIG-B/PPS (F-коннектор)',
			'IM47' => '1x100BASE-TX (1xRJ45) + оптический PPS (1xST, MM, 820 нм)',
			'IM48' => '1x100BASE-FX (2xLC, MM, 1300 нм) + коаксиальный IRIG-B/PPS (F-коннектор)',
			'IM49' => '1x100BASE-FX (2xLC, MM, 1300 нм) + оптический PPS (1xST, MM, 820 нм)',
			'IM410' => '2x100BASE-TX (2xRJ45), встроенный Switch, с поддержкой HSR/PRP+PTPv2',
			'IM411' => '2x100BASE-FX (2xLC, MM, 1300 нм), встроенный Switch, с поддержкой HSR/PRP+PTPv2',
			'IM412' => '2x100BASE-FX (2xLC, MM, 1300 нм) + оптический PPS (1xST, MM, 820 нм)',
			
		),
	),
	11 => array(
		'name' => '12. Язык',
		'data' => array(
			'L2' => 'Русский и Английский',
			
			
		),
	),
	12 => array(
		'name' => '13. Набор функций',
		'data' => array(
			'F1' => 'Базовый',
			'F2' => 'Расширенный',
			
			
		),
	),
	13 => array(
		'name' => '14. Корпус',
		'data' => array(
			'Box3' => 'Металлический, утопленный монтаж',
	
		),
	),
	14 => array(
		'name' => '15. Дисплей',
		'data' => array(
			'D1' => 'Символьный - 4 строки по 20 символов',
			'D2' => 'Графический - 640х480 точек',
	
		),
	),
	15 => array(
		'name' => '16. Клеммы',
		'data' => array(
			'T2' => 'Неразъемные',
	
		),
	),
	16 => array(
		'name' => '17. МЭК 61850',
		'data' => array(
			'MMS0' => 'Нет',
			'MMS1' => 'Да',
	
		),
	),
	17 => array(
		'name' => '18. Модули ввода/вывода',
		'data' => array(
			'EM00' => '(16BI+9BO)',
			'EM01' => '(16BI+9BO)+1x(16BI+12BO):(1xУКБ1)',
			'EM02' => '(16BI+9BO)+2x(16BI+12BO):(2xУКБ1)',
			'EM03' => '(16BI+9BO)+1x(16BI+10BO):(1xУКБ4)',
			'EM04' => '(16BI+9BO)+2x(16BI+10BO):(1xУКБ4)',
			'EM05' => '(16BI+9BO)+3x(16BI+10BO):(1xУКБ4)',
			'EM06' => '(16BI+9BO)+4x(16BI+10BO):(1xУКБ4)',
			'EM07' => '(16BI+9BO)+1x(16BI+7BO+4DC):(1xУКБ3)',
			'EM08' => '(16BI+9BO)+1x(16BI+7BO+4DC):1x(16BI+12BO):(1xУКБ3)+(1xYKB1)',
			'EM09' => '(16BI+9BO)+1x(16BI+7BO+4DC):2x(16BI+12BO):(1xУКБ3)+(2xYKB1)',
			'EM10' => '(16BI+9BO)+4x(12BI+11BO):(1xYKB4)',
	
		),
	),
	18 => array(
		'name' => '19. Каналы постоянного тока',
		'data' => array(
			'DC00' => 'Отсутствует',
			'DC01' => 'Ток от -20 до +20 мА',
			'DC02' => 'Сопротивление от 200 от 2000 Ом',
			'DC03' => 'Температурный датчик 100С',
			'DC04' => 'Температурный датчик 500С',
			'DC05' => 'Температурный датчик 1000С',
			'DC06' => 'Напряжение от -10 до +10 В',
	
		),
	),
);
}

if($_POST['product_id']==16){
	$_POST["MESSAGE"] = $_POST["MESSAGE"]."\r\n\r\n Код: МРЗ-1 ".implode(' ', $_POST['config_select']);
	$config = array(
		0 => array(
			'name' => '1. Типоисполнение по выполняемым функциям',
			'data' => array(
				'ТН' => 'Трансформатор напряжения',
				'СВ' => 'Сеционный выключатель (МТЗ, ТЗНП)',
				'СВ2' => 'Сеционный выключатель (НМТЗ, ТЗНП)',
				'В' => 'Вводной выключатель',
				'Л1' => 'Линия (НМТЗ, ТНЗНП)',
				'Л2' => 'Линия (МТЗ, ТНЗНП)',
				'Л3' => 'Линия (МТЗ, ТЗНП)',
				'Д1' => 'Двигатель (НМТЗ, ТНЗНП)',
				'Д2' => 'Двигатель (МТЗ, ТЗНП)',
				'ДЗЛ' => 'Дифференциальная защита линии',
				'ДЗТ' => 'Дифференциальная защита трансформатора',
				'ДЗД' => 'Дифференциальная защита двигателя',
				'ПУ' => 'Переферийное устройство',
			),
		),
		1 => array(
			'name' => '2. Диапазон токовых цепей',
			'data' => array(
				'1' => '4ТТ - 3 фазные 5А + 3Io 5А',
				'2' => '4ТТ - 3 фазные 1А + 3Io 1А',
				'3' => '4ТТ - 3 фазные 5А + 3Io 1А',
				'4' => '4ТТ - 3 фазные 1А + 3Io 0,2А',
				'5' => '3ТТ - 2 фазные 5А + 3Io 5А + 1ТН',
				'6' => '3ТТ - 2 фазные 5А + 3Io 1А + 1ТН',
				'7' => '3ТТ - 2 фазные 1А + 3Io 1А + 1ТН',
				'8' => '3ТТ - 2 фазные 1А + 3Io 0,2А + 1ТН',
				'9' => '4ТН - 3 фазные/междуфазные + 3Uo',
			),
		),
		2 => array(
			'name' => '3. Исполнение измерительных цепей',
			'data' => array(
				'0' => 'нет токовых цепей',
				'1' => '0,01-40 Iон',
				'2' => '0,02-8 Iон',
				
			),
		),
		3 => array(
			'name' => '4. Выходные реле',
			'data' => array(
				'1' => '5 стандартных',
				'2' => '3 стандартных + 2 силовых',
				
			),
		),
		4 => array(
			'name' => '5. Удаленный клеммный блок (УКБ)',
			'data' => array(
				'0' => 'не установлен',
				'1' => 'УКБ-1',
				'2' => 'УКБ-2',
				
			),
		),
		5 => array(
			'name' => '6. Номинальное напряжение дискретных входов',
			'data' => array(
				'1' => '220 В переменного тока 50 Гц',
				'2' => '220 В постоянного тока',
				'3' => '110 В переменного тока 50 Гц',
				'4' => '110 В постоянного тока',
				
			),
		),
		6 => array(
			'name' => '7. Климатическое исполнение ГОСТ 15150 и ГОСТ 15543.1',
			'data' => array(
				'УХЛ2.1' => 'УХЛ2.1',
				'УХЛ3' => 'УХЛ3',
				'УХЛ3.1' => 'УХЛ3.1',
				'УХЛ4' => 'УХЛ4',
				'О4' => 'О4',
				'Т2.1' => 'Т2.1',
				'Т3' => 'Т3',
				'Т3.1' => 'Т3.1',
				
			),
		),
	);
	
}
if($_POST['product_id']==18){
$_POST["MESSAGE"] = $_POST["MESSAGE"]."\r\n\r\n Код: ".implode(' ', $_POST['config_select']);
$config = array(
	0 => array(
		'name' => '1. Типоисполнение',
		'data' => array(
			'МРЗ-3Л3' => 'МРЗ-3Л3',

		),
	),
	1 => array(
		'name' => '2. Блок питания',
		'data' => array(
			'PS3' => 'пост/перем. 110-220 ВЗ',
		),
	),
	2 => array(
		'name' => '3. Дискретные входы',
		'data' => array(
			'BI01' => 'пост. 220 В; 1 мс; 2 мА',
			'BII02' => 'пост. 110 В; 1 мс; 2 мА',
			'BI05' => 'пост. 220 В; 1 мс; 4 мА',
			'BI06' => 'пост. 110 В; 1 мс; 4 мА',
			'BI11' => 'перем. 220 В; 11 мс; 2 мА',
			'BI13' => 'пост. 220 В; 1 мс; 2 мА; перем. 220 В; 21 мс; 2 мА',
			'BI14' => 'пост. 110 В; 1 мс; 2 мА; перем. 110 В; 21 мс; 2 мА',
		),
	),
	3 => array(
		'name' => '4. Дискретные выходы',
		'data' => array(
			'B01' => 'перем.400/пост.220 В; 10 мс; 8 А; 15 А броском',
			
		),
	),
	4 => array(
		'name' => '5. Аналоговые входы',
		'data' => array(
			'AL1' => '3xla+1xlo+1xlшон+3xUф+1xUни+1xUик',
			'AL1*' => '3xla+1xlшон+3xUф+1xUни+1xUик',
			
		),
	),
	5 => array(
		'name' => '6. Номинальный фазовый ток',
		'data' => array(
			'Ir1' => '1 А',
			'Ir2' => '5 А',
			
		),
	),
	6 => array(
		'name' => '7. Номинальный ток нулевой последовательности',
		'data' => array(
			'Ior1' => '1 А',
			'Ior2' => '5 А',
			
		),
	),
	7 => array(
		'name' => '8. Модуль связи - Порт 1',
		'data' => array(
			'IM10' => 'Отсутствует',
			'IM11' => '2x100BASE-TX (2xRJ45)',
			'IM11P' => '2x100BASE-TX (2xRJ45), синхронизация времени PTPv2',
			'IM11S' => '2x100BASE-TX (2xRJ45), встроенный Switch, с поддержкой HSR/PRP/RSTP',
			'IM12' => '2x100BASE-FX (2xLC, MM, 1300 нм)',
			'IM12P' => '2x100BASE-FX (2xLC, MM, 1300 нм), синхронизация времени PTPv2',
			'IM12S' => '2x100BASE-FX (2xLC, MM, 1300 нм), встроенный Switch, с поддержкой HSR/PRP/RSTP',
			'IM14' => '2xRS485 электрический (1x4-pin коннектор CTM049PT)',
			'IM15' => '1xRS485 электрический (1x4-pin коннектор CTM049PT)+1x100BASE-TX (1xRJ45)',
			'IM15P' => '1xRS485 электрический (1x4-pin коннектор CTM049PT)+1x100BASE-TX (1xRJ45), синхронизация времени PTPv2',
			'IM18' => '1xRS485 электрический (1x4-pin коннектор CTM049PT)+1x100BASE-TX (2xLC, MM, 1300 нм)',
			'IM18P' => '1xRS485 электрический (1x4-pin коннектор CTM049PT)+1x100BASE-TX (2xLC, MM, 1300 нм), синхронизация времени PTPv2',
			
		),
	),
	8 => array(
		'name' => '9. Модуль связи - Порт 2',
		'data' => array(
			'IM20' => 'Отсутствует',
			'IM21' => 'Последовательный оптический интерфейс для УКБ (2xST, MM, 820 нм)',
			'IM22' => 'Оптический интерфейс для ДЗЛ С37.94(NRZ)/G.704(CMI) (2xST, MM, 820 нм)',
			
		),
	),
	9 => array(
		'name' => '10. Модуль связи - Порт 3',
		'data' => array(
			'IM30' => 'Отсутствует',
			'IM31' => 'Последовательный оптический интерфейс для УКБ (2xST, MM, 820 нм)',
			'IM32' => 'Оптический интерфейс для ДЗЛ С37.94(NRZ)/G.704(CMI) (2xST, MM, 820 нм)',
			'IM34' => 'Последовательный оптический интерфейс для УКБ (2xST, MM, 820 нм) + коаксиальный IRIQ-B/PPS (F-коннектор)',
			
		),
	),
	10 => array(
		'name' => '11. Модуль связи - Порт 4',
		'data' => array(
			'IM40' => 'Отсутствует',
			'IM42' => 'Последовательный оптический интерфейс для УКБ (2xST, MM, 820 нм) + коаксиальный IRIQ-B/PPS (F-коннектор)',
			'IM43' => 'Коаксиальный IRIG-B/PPS (F-коннектор)',
			'IM46' => '1x100BASE-TX (1xRJ45) + коаксиальный IRIG-B/PPS (F-коннектор)',
			'IM47' => '1x100BASE-TX (1xRJ45) + оптический PPS (1xST, MM, 820 нм)',
			'IM48' => '1x100BASE-FX (2xLC, MM, 1300 нм) + коаксиальный IRIG-B/PPS (F-коннектор)',
			'IM49' => '1x100BASE-FX (2xLC, MM, 1300 нм) + оптический PPS (1xST, MM, 820 нм)',
			'IM410' => '2x100BASE-TX (2xRJ45), встроенный Switch, с поддержкой HSR/PRP+PTPv2',
			'IM411' => '2x100BASE-FX (2xLC, MM, 1300 нм), встроенный Switch, с поддержкой HSR/PRP+PTPv2',
			'IM412' => '2x100BASE-FX (2xLC, MM, 1300 нм) + оптический PPS (1xST, MM, 820 нм)',
			
		),
	),
	11 => array(
		'name' => '12. Язык',
		'data' => array(
			'L2' => 'Русский и Английский',
			
			
		),
	),
	12 => array(
		'name' => '13. Набор функций',
		'data' => array(
			'F1' => 'Базовый',
			'F2' => 'Расширенный',
			
			
		),
	),
	13 => array(
		'name' => '14. Корпус',
		'data' => array(
			'Box3' => 'Металлический, утопленный монтаж',
	
		),
	),
	14 => array(
		'name' => '15. Дисплей',
		'data' => array(
			'D1' => 'Символьный - 4 строки по 20 символов',
			'D2' => 'Графический - 640х480 точек',
	
		),
	),
	15 => array(
		'name' => '16. Клеммы',
		'data' => array(
			'T2' => 'Неразъемные',
	
		),
	),
	16 => array(
		'name' => '17. МЭК 61850',
		'data' => array(
			'MMS0' => 'Нет',
			'MMS1' => 'Да',
	
		),
	),
	17 => array(
		'name' => '18. Модули ввода/вывода',
		'data' => array(
			'EM00' => '(16BI+9BO)',
			'EM01' => '(16BI+9BO)+1x(16BI+12BO):(1xУКБ1)',
			'EM02' => '(16BI+9BO)+2x(16BI+12BO):(2xУКБ1)',
			'EM03' => '(16BI+9BO)+1x(16BI+10BO):(1xУКБ4)',
			'EM04' => '(16BI+9BO)+2x(16BI+10BO):(1xУКБ4)',
			'EM05' => '(16BI+9BO)+3x(16BI+10BO):(1xУКБ4)',
			'EM06' => '(16BI+9BO)+4x(16BI+10BO):(1xУКБ4)',
			'EM07' => '(16BI+9BO)+1x(16BI+7BO+4DC):(1xУКБ3)',
			'EM08' => '(16BI+9BO)+1x(16BI+7BO+4DC):1x(16BI+12BO):(1xУКБ3)+(1xYKB1)',
			'EM09' => '(16BI+9BO)+1x(16BI+7BO+4DC):2x(16BI+12BO):(1xУКБ3)+(2xYKB1)',
			'EM10' => '(16BI+9BO)+4x(12BI+11BO):(1xYKB4)',
	
		),
	),
	18 => array(
		'name' => '19. Каналы постоянного тока',
		'data' => array(
			'DC00' => 'Отсутствует',
			'DC01' => 'Ток от -20 до +20 мА',
			'DC02' => 'Сопротивление от 200 от 2000 Ом',
			'DC03' => 'Температурный датчик 100С',
			'DC04' => 'Температурный датчик 500С',
			'DC05' => 'Температурный датчик 1000С',
			'DC06' => 'Напряжение от -10 до +10 В',
	
		),
	),
);
}

foreach($_POST['config_select'] as $key=>$value){
	
	$_POST["MESSAGE"] = $_POST["MESSAGE"]."\r\n\r\n ".$config[$key]['name']."\r\n".$config[$key]['data'][$value];

}

if( isset($_REQUEST["is_perechen"]) && $_REQUEST["is_perechen"]){

	include($_SERVER["DOCUMENT_ROOT"].'/bitrix/php_interface/PHPWord/PHPWord.php');
	
	// New Word Document
	$PHPWord = new PHPWord();

	// New portrait section
	$section = $PHPWord->createSection();

	$section->addText('Адрес сайта: '.$_SERVER["HTTP_HOST"]);
	$section->addTextBreak(2);

	#$section->addText('I am inline styled.', array('name'=>'Verdana', 'color'=>'006699'));
	#$section->addTextBreak(2);

	$PHPWord->addFontStyle('rStyle', array('bold'=>true, 'italic'=>false, 'size'=>16));
	$PHPWord->addFontStyle('rStyle1', array('bold'=>true, 'italic'=>false, 'size'=>12));
	$PHPWord->addParagraphStyle('pStyle', array('align'=>'left', 'spaceAfter'=>100));
	$section->addText( $_REQUEST["vacancy"], 'rStyle', 'pStyle');
	$section->addTextBreak(2);
	
	$section->addText('Контактные данные:', 'rStyle1', 'pStyle');
	$section->addText('Имя: '.$_REQUEST["user_name"], null, 'pStyle');
	$section->addText('Должность: '.$_REQUEST["user_dol"], null, 'pStyle');
	$section->addText('Компания: '.$message, null, 'pStyle');
	$section->addText('Телефон или электронная почта: '.$_REQUEST["user_email"], null, 'pStyle');
	$section->addText('Объект/Титул проекта: '.$_REQUEST["user_obj"], null, 'pStyle');
	$section->addText('Поставка: '.$_REQUEST["user_type"], null, 'pStyle');
	$section->addTextBreak(2);

	$section->addText('Код конфигурации: '.$code, 'rStyle1', 'pStyle');
	$section->addTextBreak(2);

	$section->addText('Конфигурация:', 'rStyle1', 'pStyle');
	foreach($_POST['config_select'] as $key=>$value){
		if(!$config[$key]['name']) continue;
		$section->addText($config[$key]['name'].': '.$config[$key]['data'][$value], null, 'pStyle');
	}



	// Save File
	$objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');
	$fn = time().'.docx';
	$objWriter->save($_SERVER["DOCUMENT_ROOT"].'/word/'.$fn);
	echo $fn;
	exit(0);
}


?>



<?$APPLICATION->IncludeComponent(
	"my:main.feedback", 
	".default", 
	array(
		"USE_CAPTCHA" => "N",
		"OK_TEXT" => "Отправлено",
		//"EMAIL_TO" => "info@mzrza.ru",
		"EMAIL_TO" => "info@mzrza.ru",
		"PROD_ID" => intval($_POST['product_id']),
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "EMAIL",
			2 => "MESSAGE",
		),
		"EVENT_MESSAGE_ID" => array(
			0 => 29
		),
		"EVENT_NAME" => "FEEDBACK_FORM",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>