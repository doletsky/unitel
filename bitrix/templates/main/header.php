<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html>
<head>
	<title><?$APPLICATION->ShowTitle()?></title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?$APPLICATION->ShowHead()?>
	<!-- css -->
	<link href="/bitrix/templates/.default/css/plugins.css" rel="stylesheet"/>
	<link href="/bitrix/templates/.default/css/fontello.css" rel="stylesheet"/>
	<link href="/bitrix/templates/.default/css/jquery.fancybox.css" rel="stylesheet">
	<link href="/bitrix/templates/.default/css/select2.min.css" rel="stylesheet">
	<link href="/bitrix/templates/.default/css/animate.css" rel="stylesheet"/>
	<!-- less -->
	<link rel="stylesheet/less" type="text/css" href="/bitrix/templates/.default/less/styles.less"/>
	<link href="/bitrix/templates/.default/css/print.css" rel="stylesheet" media="print" type="text/css" />
	<script src="/bitrix/templates/.default/less/less.js" type="text/javascript"></script>
	<!-- <link href="css/styles.css" rel="stylesheet"/> -->
	<link href="/favicon.ico" rel="shortcut icon">
</head>
<body>

	<header class="header">
		<div class="container">
			<div class="header-row">
				<div class="header-col header-col-logo">
					<a href="/" class="logo">
						<img src="/img/logo.svg" alt="" width="123">
					</a>
				</div>
				<div class="header-col header-col-menu">
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu", 
						"top-menu", 
						array(
							"ROOT_MENU_TYPE" => "top",
							"MAX_LEVEL" => "3",
							"CHILD_MENU_TYPE" => "submenu",
							"USE_EXT" => "N",
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array(
							),
							"COMPONENT_TEMPLATE" => "top-menu"
						),
						false
					);?>
				
				</div>
				<div class="header-col header_search">
					<form action="/search/">
						<a href="#" class="search_btn"><button></button><!-- <img src="/img/loup-icon.svg" alt="loup-icon.svg"> --></a>
						<span class="search_container">
							<input type="text" placeholder="поиск по сайту" name="q">
						</span>
					</form>
				</div>

				<div class="header-col header-col-contacts">
					<div class="header-contacts">
						<?
						$APPLICATION->IncludeFile(
							SITE_DIR."/include/phone.php",
							Array(),
							Array("MODE"=>"html")
						);
						?>
					</div>
				</div>
				<div class="header-col header_soc">
					<?
						$APPLICATION->IncludeFile(
							SITE_DIR."/include/social.php",
							Array(),
							Array("MODE"=>"html")
						);
						?>
					
				</div>
				<div class="header-col header_zoom">
					<div class="minus"><img src="/img/minus.svg" alt="minus"></div>
					<div class="plus"><img src="/img/plus.svg" alt="plus"></div>
				</div>
			</div>
		</div>
	</header>
	<?$APPLICATION->IncludeComponent("bitrix:breadcrumb","breadcrumb",Array(
		"START_FROM" => "0", 
		"PATH" => "", 
		"SITE_ID" => "s1" 
	)
);?>
    <div id="panel" style="margin-top: 140px"><?$APPLICATION->ShowPanel();?></div>