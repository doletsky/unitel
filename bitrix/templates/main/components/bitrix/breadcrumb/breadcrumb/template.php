
<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

//delayed function must return a string
if(empty($arResult))
	return "";
$arTmp=array();
foreach($arResult as $i=>$item){
    if(substr_count($item["TITLE"],"Шефмонтаж")>0 || substr_count($item["TITLE"],"Шефналадка")>0){
        $arTmp=$item;
        $arResult[$i]=array(
            "TITLE" => "Услуги",
            "LINK"  => "/support/services/"
        );
    }
}
if(!empty($arTmp))$arResult[]=$arTmp;
$strReturn = '<div class="breadcrumbs">	<span>';

for($index = 0, $itemSize = count($arResult); $index < $itemSize; $index++)
{
	if($index > 0)
		$strReturn .= '';

	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	if($arResult[$index]["LINK"] <> "" && $index<=$itemSize-2)
		$strReturn .= '<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'">'.$title.'</a> → ';
	else
		$strReturn .= '<a href="javascript:void(0);">'.$title.'</a>';
}

$strReturn .= '</span></div>';
return $strReturn;
?>