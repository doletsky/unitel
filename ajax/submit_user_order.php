<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");?>
<?php
CModule::IncludeModule("iblock");

$el = new CIBlockElement;

$fields = array(
    'IBLOCK_ID' => 22,
    'NAME' => $_REQUEST['popup_title'],
    'ACTIVE' => "Y",
    'PREVIEW_TEXT' => "Заявка на ".$_REQUEST['popup_title'].PHP_EOL
        ."Имя: ".$_REQUEST['popup_name'].PHP_EOL
        ."Должность: ".$_REQUEST['popup_dolz'].PHP_EOL
        ."Организация: ".$_REQUEST['popup_org'].PHP_EOL
        ."email: ".$_REQUEST['popup_email'].PHP_EOL
        ."Телефон: ".$_REQUEST['popup_tel'].PHP_EOL
        ."Объект: ".$_REQUEST['popup_obj'].PHP_EOL
        ."Тип запроса: ".$_REQUEST['popup-select']
);
if ($PRODUCT_ID = $el->Add($fields)) {
    echo 'Добавлен элемент, ID: ' . $PRODUCT_ID;
} else {
    echo "Error[" . $PRODUCT_ID . "]: " . $err=$el->LAST_ERROR . '<br />';
}

$arFields = Array(
    "TITLE" => $_REQUEST['popup_title'],
    "TEXT" => $fields["PREVIEW_TEXT"]
);

CEvent::Send("FEEDBACK_FORM", SITE_ID, $arFields, "N", 35);
