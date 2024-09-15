<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;

Loc::loadMessages(__FILE__);
?>
<!doctype html>
<html lang="<?=LANGUAGE_ID;?>">

<head>
	<title><?$APPLICATION->ShowTitle()?></title>
	<?
	$APPLICATION->ShowHead();
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/slick.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
	Asset::getInstance()->addString('<meta name="viewport"
			content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">');
	Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">');
	Asset::getInstance()->addString('<link rel="preconnect" href="https://fonts.googleapis.com">');
	Asset::getInstance()->addString('<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>');
	Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="ie=edge">');
	?>
</head>

<body>
<?$APPLICATION->ShowPanel();?>
<header class="header">
	<div class="container">
		<div class="header__wrp">
			<div class="header__wrp-nav">
						<?
						$APPLICATION->IncludeFile(
							SITE_DIR."include/company_name.php",
							Array(),
							Array("MODE"=>"html")
						);
						?>
						<?
						$APPLICATION->IncludeComponent("bitrix:menu", "horizontal_multilevel", array(
							"ROOT_MENU_TYPE" => "top",
							"MAX_LEVEL" => "2",
							"CHILD_MENU_TYPE" => "left",
							"USE_EXT" => "Y",
							"MENU_CACHE_TYPE" => "A",
							"MENU_CACHE_TIME" => "36000000",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => ""
						),
							false,
							array(
								"ACTIVE_COMPONENT" => "Y"
							)
						);?>

				<div class="header__nav-box header__search">
							<?
							$APPLICATION->IncludeComponent("bitrix:search.form", "flat", Array(
								"PAGE" => "#SITE_DIR#search/",
							),
								false
							);
							?>
					<?
					$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"auth_multilevel1", 
	array(
		"ROOT_MENU_TYPE" => "auth",
		"MAX_LEVEL" => "2",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"COMPONENT_TEMPLATE" => "auth_multilevel1",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>
					<?
					$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"basket_multilevel", 
	array(
		"ROOT_MENU_TYPE" => "basket",
		"MAX_LEVEL" => "2",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"COMPONENT_TEMPLATE" => "basket_multilevel",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>
				</div>
			</div>
			<div class="header__wrp-first-screen">
				<div class="header__desc">
					<h2>go&ride</h2>
					<p>велосипеды & аксессуары</p>
					<a href="catalog.html">магазин</a>
				</div>
			</div>
			<div class="header__second-screen">
				<picture>
					<source srcset="<?=SITE_TEMPLATE_PATH?>/img/bycicle-mobile.png" media="(max-width: 1400px)">
					<source srcset="<?=SITE_TEMPLATE_PATH?>/img/bicycle-first-screen.jpg">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/bicycle-first-screen.jpg" alt="bicycle"/>
				</picture>
			</div>

		</div>
	</div>
</header>