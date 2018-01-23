<?
$property_enums = CIBlockPropertyEnum::GetList(Array("ID"=>"ASC"), Array("IBLOCK_ID"=>$arResult['IBLOCK_ID'], "CODE"=>"OBLAST"));
while($enum_fields = $property_enums->GetNext())
{
	$arResult['OBLAST'][] = $enum_fields;
	$arResult["ITEMS_SORTED"][$enum_fields['ID']] = array();
}

foreach($arResult["ITEMS"] as $arItem){
	$arResult["ITEMS_SORTED"][$arItem['DISPLAY_PROPERTIES']['OBLAST']['VALUE_ENUM_ID']][] =  $arItem;
}

?>