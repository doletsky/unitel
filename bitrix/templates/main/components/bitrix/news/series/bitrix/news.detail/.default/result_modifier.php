<?
			
	if($arResult["DISPLAY_PROPERTIES"]['CERT']['FILE_VALUE']['SRC']){
		$src = $arResult["DISPLAY_PROPERTIES"]['CERT']['FILE_VALUE']['SRC'];
		$arResult["DISPLAY_PROPERTIES"]['CERT']['FILE_VALUE'] = array();
		$arResult["DISPLAY_PROPERTIES"]['CERT']['FILE_VALUE'][0]['SRC'] = $src;

	}

	
	$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM","PROPERTY_*");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
	$arFilter = Array("IBLOCK_ID"=>1, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y","PROPERTY_EQUIPMENT.ID"=>$arResult['ID']);
	$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>3), $arSelect);
	while($ob = $res->GetNextElement()){ 
		$arFields = $ob->GetFields();  
		
		$arProps = $ob->GetProperties();
		$arProps['PREVIEW']['SRC'] = CFile::GetPath($arProps['PREVIEW']['VALUE']);
		$arResult['CASES'][] = array_merge($arFields,$arProps);
	}
	

?>