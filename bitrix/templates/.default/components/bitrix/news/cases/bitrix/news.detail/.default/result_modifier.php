<?
$rsElements = CIBlockElement::GetList(array('ID' => 'DESC'), array(
               'IBLOCK_ID' => $arParams['IBLOCK_ID'],
               'ACTIVE' => 'Y',
			   ),
               false, array('nPageSize' => 1, 'nElementID' => $arResult['ID']),
               array('ID', 'NAME','CODE'));
			   

			
while($ob = $rsElements->GetNextElement()){ 
	$arFields = $ob->GetFields();
	if($arFields['ID']!=$arResult['ID']){
		if($arResult['ID']<$arFields['ID'])
			$arResult['NEXT_ELEM'] = $arFields;
		else
			$arResult['PREV_ELEM'] = $arFields;
	}
}

#pre($arResult['DISPLAY_PROPERTIES']['EQUIPMENT']['VALUE']);


if(is_array($arResult['DISPLAY_PROPERTIES']['EQUIPMENT']['LINK_ELEMENT_VALUE'])){
	foreach($arResult['DISPLAY_PROPERTIES']['EQUIPMENT']['LINK_ELEMENT_VALUE'] as $key=>$arElement){
		$arResult['DISPLAY_PROPERTIES']['EQUIPMENT']['LINK_ELEMENT_VALUE'][$key]['SRC'] = CFile::GetPath($arElement['PREVIEW_PICTURE']);


	}
}

if( $arResult['DISPLAY_PROPERTIES']['EQUIPMENT']['VALUE'] ){
	$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM", "PREVIEW_TEXT", "PROPERTY_LINK");
	$arFilter = Array("IBLOCK_ID"=>$arResult['DISPLAY_PROPERTIES']['EQUIPMENT']['LINK_IBLOCK_ID'], 'ID'=>$arResult['DISPLAY_PROPERTIES']['EQUIPMENT']['VALUE'], "ACTIVE"=>"Y");
	#pre($arFilter);
	$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
	while($ob = $res->GetNextElement())
	{
		$arFields = $ob->GetFields();
		#pre($arFields);
		$arFields['PROPS'] = $ob->GetProperties();
		
		$arResult['DISPLAY_PROPERTIES']['EQUIPMENT']['LINK_ELEMENT_VALUE'][$arFields['ID']]['LINK'] = $arFields['PROPS']['LINK']['VALUE'];
		$arResult['DISPLAY_PROPERTIES']['EQUIPMENT']['LINK_ELEMENT_VALUE'][$arFields['ID']]['ALL'] = $arFields;
	}
}

$APPLICATION->AddChainItem($arResult['DISPLAY_PROPERTIES']['VOLTAGE']['VALUE'],'/case/?voltage_id='.$arResult['DISPLAY_PROPERTIES']['VOLTAGE']['VALUE_ENUM_ID']);
$APPLICATION->AddChainItem($arResult["NAME"]);
#pre($arResult['DISPLAY_PROPERTIES']['VOLTAGE']);

?>