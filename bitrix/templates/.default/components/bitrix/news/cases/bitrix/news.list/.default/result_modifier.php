<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>1, "CODE"=>"VOLTAGE"));
while($enum_fields = $property_enums->GetNext())
{
  $arResult["VOLTAGE"][$enum_fields["ID"]] = $enum_fields["VALUE"];
}
if(array_key_exists("voltage_id", $_REQUEST)){
    $APPLICATION->AddChainItem($arResult["VOLTAGE"][$_REQUEST["voltage_id"]]);
}else{
    $APPLICATION->AddChainItem($arResult["VOLTAGE"][10]);
}

?>