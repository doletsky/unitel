<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>1, "CODE"=>"VOLTAGE"));
while($enum_fields = $property_enums->GetNext())
{
  $arResult["VOLTAGE"][$enum_fields["ID"]] = $enum_fields["VALUE"];
}

?>