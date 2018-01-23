<?
$rsElements = CIBlockElement::GetList(array('ID' => 'DESC'), array(
               'IBLOCK_ID' => $arParams['IBLOCK_ID'],
               'ACTIVE' => 'Y',
			   ),
               false, array('nPageSize' => 1, 'nElementID' => $arResult['ID']),
               array('ID', 'NAME', 'CODE'));
			   

			
while($ob = $rsElements->GetNextElement()){ 
	$arFields = $ob->GetFields();
	if($arFields['ID']!=$arResult['ID']){
		if($arResult['ID']<$arFields['ID'])
			$arResult['NEXT_ELEM'] = $arFields;
		else
			$arResult['PREV_ELEM'] = $arFields;
	}
}

?>