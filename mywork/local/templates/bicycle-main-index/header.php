<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;

Loc::loadMessages(__FILE__);

define("SITE_SERVER_PROTOCOL", (CMain::IsHTTPS()) ? "https://" : "http://"); // Переменная определяет протокол, по которому работает ваш сайт
$curPage = $APPLICATION->GetCurPage(); // Получаем текущий адрес страницы
?>
<!doctype html>
<html lang="<?=LANGUAGE_ID;?>">

<head>
	<meta charset="UTF-8">
	<meta name="viewport"
			content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<title><?$APPLICATION->ShowTitle()?></title>
	<?
	$APPLICATION->ShowHead();
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/slick.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
	?>

</head>

<body>
<?$APPLICATION->ShowPanel();?>
<header class="header">
	<div class="container">
		<div class="header__wrp">
			<div class="header__wrp-nav">
				<a href="<?=SITE_DIR?>">
					<?
					$APPLICATION->IncludeFile(
						SITE_DIR."local/include/company_name.php",
						Array(),
						Array("MODE"=>"html")
					);
					?>
				</a>
				<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"horizontal_multilevel", 
	array(
		"ROOT_MENU_TYPE" => "top2",
		"MAX_LEVEL" => "2",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"COMPONENT_TEMPLATE" => "horizontal_multilevel",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>

				<div class="header__nav-box header__search">
					<?$APPLICATION->IncludeComponent(
	"bitrix:search.form", 
	"template", 
	array(
		"PAGE" => "#SITE_DIR#search/index.php",
		"USE_SUGGEST" => "N",
		"COMPONENT_TEMPLATE" => "template"
	),
	false
);?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:sale.basket.basket.line",
						"bootstrap_v4",
						array(
							"PATH_TO_BASKET" => SITE_DIR."personal/cart/",
							"PATH_TO_PERSONAL" => SITE_DIR."personal/",
							"SHOW_PERSONAL_LINK" => "N",
							"SHOW_NUM_PRODUCTS" => "Y",
							"SHOW_TOTAL_PRICE" => "Y",
							"SHOW_PRODUCTS" => "N",
							"POSITION_FIXED" =>"N",
							"SHOW_AUTHOR" => "Y",
							"PATH_TO_REGISTER" => SITE_DIR."login/",
							"PATH_TO_PROFILE" => SITE_DIR."personal/"
						),
						false,
						array()
					);?>
				</div>
			</div>
			<?
			$APPLICATION->IncludeFile(
				SITE_DIR."local/include/motto.php",
				Array(),
				Array("MODE"=>"html")
			);
			?>
			<?
			$APPLICATION->IncludeFile(
				SITE_DIR."local/include/copyright.php",
				Array(),
				Array("MODE"=>"html")
			);
			?>
		</div>
	</div>
</header>