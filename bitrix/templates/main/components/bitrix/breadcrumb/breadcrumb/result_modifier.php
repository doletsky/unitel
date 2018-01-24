<?
if($_GET["dev"]==2)pre($arResult);
foreach($arResult as $i=>$item){
    if(substr_count($item["TITLE"],"Шефмонтаж")>0 || substr_count($item["TITLE"],"Шефналадка")>0){
        $arTmp=$item;
        $arResult[$i]=array(
            "TITLE" => "Услуги",
            "LINK"  => "/support/services/"
        );

    }
    $arResult[]=$arTmp;
}

?>