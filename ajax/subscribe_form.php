<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");?>

<?$APPLICATION->IncludeComponent(
	"my:subscribe", 
	".default", 
	array(
		
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>