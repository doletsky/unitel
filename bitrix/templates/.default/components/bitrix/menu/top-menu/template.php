<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<nav class="nav-top">
	<ul class="menu-top clearfix">
	<li><div class="to_main"><a href="/"><img src="/img/home.svg" alt="home.svg"></a></div></li>
<?

$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li <?if ($arItem["SELECTED"]):?>class="menu-selected"<?endif?>><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?><?else:?><?endif?>"><?=$arItem["TEXT"]?></a>
				<ul class="menu-top-submenu">
		<?else:?>
			<li class="has_sub"><a href="javascript:void(0);"><?=$arItem["TEXT"]?></a>
				<ul class="under_sub_menu">
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>menu-selected<?else:?><?endif?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li <?if ($arItem["SELECTED"]):?>class="menu-selected"<?endif?>><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>
			
		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="" class="<?if ($arItem["SELECTED"]):?>menu-selected<?else:?><?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>
	<?/*?><li>
		<div class="to_news"><a href="http://unitel.studio-test.ru/news/"><img src="/img/news.svg" alt="news.svg"></a></div>
	</li><?*/?>
	</ul>
	</nav>

<?endif?>