<?
function format_by_count($count, $form1, $form2, $form3)
{
    $count = abs($count) % 100;
    $lcount = $count % 10;
    if ($count >= 11 && $count <= 19) return($form3);
    if ($lcount >= 2 && $lcount <= 4) return($form2);
    if ($lcount == 1) return($form1);
    return $form3;
}
function translit($st,$coder='utf-8')   
{   
	$st = mb_strtolower($st, $coder);   
	$st = str_replace(array(   
			'?','!',',',':',';','*','(',')','{','}','***91;','***93;','%','#','№','@','$','^','-','+','/','\\','=','|','"','\'',   
			'а','б','в','г','д','е','ё','з','и','й','к',   
			'л','м','н','о','п','р','с','т','у','ф','х',   
			'ъ','ы','э',' ','ж','ц','ч','ш','щ','ь','ю','я'   
		), array(   
			'_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_',   
			'a','b','v','g','d','e','e','z','i','y','k',   
			'l','m','n','o','p','r','s','t','u','f','h',   
			'j','i','e','_','zh','ts','ch','sh','shch',   
			'','yu','ya'   
		), $st);   
	//$st = preg_replace("/***91;^a-z0-9_***93;/", "", $st);   
	$st = trim($st, '_');   
	  /* Удаляем одиночные буквы 
	$prev_st = '';   
	do   
	{   
		$prev_st = $st;   
		$st = preg_replace("/_***91;a-z0-9***93;_/", "_", $st);   
	}   
	while($st != $prev_st);   
	  */ 
	$st = preg_replace("/_{2,}/", "_", $st);   
	return $st;   
}
function pre($t){
	echo '<pre>';
	print_r($t);
	echo '</pre>';
}
/**
 * Генерация превьюшек для больших изображений
 *
 * @param string $src путь от корня сайта к исходной картинке
 * @param int $size размер изображения (сторона квадрата в пикселях)
 * @param int $lifeTime время жизни превьюшки в секундах (по дефолту месяц)
 * @return string
 */
function MakeImage($src, $params = false) {
	if (!is_array($params) AND is_numeric($params)) $params = array('w'=>intval($params)); // подмена
	if (is_numeric($src)) if ($src > 0) $src = CFile::GetPath($src);
	if (file_exists($_SERVER['DOCUMENT_ROOT'].$src)) {
		$ext = strtolower(pathinfo($_SERVER['DOCUMENT_ROOT'].$src, PATHINFO_EXTENSION)); // Расширение файла картинки
		$allowed_ext = array("jpg", "jpeg", "gif", "png");
		if (in_array($ext, $allowed_ext)) {
			$base_name = basename($src, ".".$ext); // Основное имя файла (без расширения)
			$code = substr(md5(serialize($params)), 8, 16); // сократим суффикс с параметрами до 16 символов, но возьмем его из середины хэша
                  $newExt=$ext;
                  if(isset($params["f"])){
                        $newExt=$params["f"];
                  }
			$target_file = $_SERVER['DOCUMENT_ROOT'].dirname($src)."/".$base_name."_thumb_".$code.".".$newExt; // Имя файла с превьюшкой
			$source_filemtime = filemtime($_SERVER['DOCUMENT_ROOT'].$src);
			if (file_exists($target_file)) $target_filemtime = filemtime($target_file);
			else $target_filemtime = 0;
			if ($source_filemtime>$target_filemtime) { // файл-исходник обновлен, либо нету сгенерированного
				require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/php_interface/phpThumb/phpthumb.class.php"); // Подключаем и иннициализируем phpThumb
				$phpThumb = new phpThumb();
				$phpThumb->f = $ext;
				$phpThumb->src = $src;
				$phpThumb->config_allow_src_above_docroot = true; // Разрешаем работать в других разделах (для многосайтовости)
				// Дефолтные параметры:
				$phpThumb->q = 100;
				$phpThumb->bg = "ffffff";
				$phpThumb->far = "C";
				$phpThumb->aoe = 0;
				/*$phpThumb->zc = 1;*/
				// Применение всех параметров
				if (is_array($params)) {
					foreach ($params as $param=>$value) {
						$phpThumb->$param = $value;
					}
				}
				$phpThumb->GenerateThumbnail();
				$phpThumb->RenderToFile($target_file);
			}
		}
		if (file_exists($target_file)) {
			return substr($target_file, strlen($_SERVER['DOCUMENT_ROOT']));
		}
	}
	return false;
} 
?>