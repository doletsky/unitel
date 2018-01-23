<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");?>

<?$APPLICATION->IncludeComponent(
	"my:main.feedback", 
	".default", 
	array(
		"USE_CAPTCHA" => "N",
		"OK_TEXT" => "Отправлено",
		"EMAIL_TO" => "info@mzrza.ru",
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "EMAIL",
			2 => "MESSAGE",
		),
		"EVENT_MESSAGE_ID" => array(
			0 => "28",
		),
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>