<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;

Loc::loadMessages(__FILE__);
?>
<footer class="footer">
	<div class="container">
		<div class="footer__wrp">
			<?
			$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"back_multilevel", 
	array(
		"ROOT_MENU_TYPE" => "first_bottom",
		"MAX_LEVEL" => "2",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"COMPONENT_TEMPLATE" => "back_multilevel",
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
	"back_multilevel", 
	array(
		"ROOT_MENU_TYPE" => "second_bottom",
		"MAX_LEVEL" => "2",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"COMPONENT_TEMPLATE" => "back_multilevel",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>
			<?$APPLICATION->IncludeComponent(
	"bitrix:subscribe.form", 
	"template", 
	array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"PAGE" => "#SITE_DIR#about/subscr_edit.php",
		"SHOW_HIDDEN" => "N",
		"USE_PERSONALIZATION" => "Y",
		"COMPONENT_TEMPLATE" => "template"
	),
	false
);?>
		</div>
		<div class="footer__social-wrp">

			<?
			$APPLICATION->IncludeFile(
				SITE_DIR."include/social.php",
				Array(),
				Array("MODE"=>"html")
			);
			?>
			<?
			$APPLICATION->IncludeFile(
				SITE_DIR."include/copyright.php",
				Array(),
				Array("MODE"=>"html")
			);
			?>
		</div>
	</div>
</footer>
</body>
<?
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/slick.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/scripts.js');
?>
</html>
