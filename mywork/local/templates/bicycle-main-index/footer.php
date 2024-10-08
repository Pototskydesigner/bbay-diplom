<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<footer class="footer">
	<div class="container">
		<div class="footer__wrp">
			<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"bottom_multilevel", 
	array(
		"ROOT_MENU_TYPE" => "bottom2",
		"MAX_LEVEL" => "2",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"COMPONENT_TEMPLATE" => "bottom_multilevel",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>
			<?$APPLICATION->IncludeComponent(
				"bitrix:menu",
				"bottom_multilevel",
				array(
					"ROOT_MENU_TYPE" => "bottom3",
					"MAX_LEVEL" => "2",
					"CHILD_MENU_TYPE" => "left",
					"USE_EXT" => "Y",
					"MENU_CACHE_TYPE" => "A",
					"MENU_CACHE_TIME" => "36000000",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"MENU_CACHE_GET_VARS" => array(
					),
					"COMPONENT_TEMPLATE" => "bottom_multilevel",
					"DELAY" => "N",
					"ALLOW_MULTI_SELECT" => "N"
				),
				false,
				array(
					"ACTIVE_COMPONENT" => "Y"
				)
			);?>
			<?$APPLICATION->IncludeComponent(
	"bitrix:sender.subscribe", 
	"template", 
	array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CONFIRMATION" => "Y",
		"HIDE_MAILINGS" => "N",
		"SET_TITLE" => "Y",
		"SHOW_HIDDEN" => "N",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"USE_PERSONALIZATION" => "Y",
		"COMPONENT_TEMPLATE" => "template"
	),
	false
);?>
		</div>
		<div class="footer__social-wrp">
			<?
			$APPLICATION->IncludeFile(
				SITE_DIR."local/include/social.php",
				Array(),
				Array("MODE"=>"html")
			);
			?>
			<?
			$APPLICATION->IncludeFile(
				SITE_DIR."local/include/copyright_footer.php",
				Array(),
				Array("MODE"=>"html")
			);
			?>
		</div>
	</div>
</footer>

<script defer src="<?=SITE_TEMPLATE_PATH?>/js/jquery.js"></script>
<script defer src="<?=SITE_TEMPLATE_PATH?>/js/slick.js"></script>
<script defer src="<?=SITE_TEMPLATE_PATH?>/js/scripts.js"></script>
</body>

</html>