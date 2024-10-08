<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?>
	<main>
		<section class="products">

			<div class="container">
				<h2>Популярные товары</h2>
				<div class="slider slick-good-slider">
					<div class="slider__item">
						<div class="slider__item-wrp">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/good-1.jpg" alt="good-1">
							<div class="slider__item-content-wrp">
								<h3><a href="product.html">Cycling Gloves, Adult</a></h3>
								<p>95.00 р</p>
								<p>Артикул</p>
							</div>
						</div>
					</div>
					<div class="slider__item">
						<div class="slider__item-wrp">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/good-1.jpg" alt="good-1">
							<div class="slider__item-content-wrp">
								<h3><a href="#">Cycling Gloves, Adult</a></h3>
								<p>95.00 р</p>
								<p>Артикул</p>
							</div>
						</div>
					</div>
					<div class="slider__item">
						<div class="slider__item-wrp">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/good-1.jpg" alt="good-1">
							<div class="slider__item-content-wrp">
								<h3><a href="#">Cycling Gloves, Adult</a></h3>
								<p>95.00 р</p>
								<p>Артикул</p>
							</div>
						</div>
					</div>
					<div class="slider__item">
						<div class="slider__item-wrp">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/good-1.jpg" alt="good-1">
							<div class="slider__item-content-wrp">
								<h3><a href="#">Cycling Gloves, Adult</a></h3>
								<p>95.00 р</p>
								<p>Артикул</p>
							</div>
						</div>
					</div>
					<div class="slider__item">
						<div class="slider__item-wrp">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/good-1.jpg" alt="good-1">
							<div class="slider__item-content-wrp">
								<h3><a href="#">Cycling Gloves, Adult</a></h3>
								<p>95.00 р</p>
								<p>Артикул</p>
							</div>
						</div>
					</div>
					<div class="slider__item">
						<div class="slider__item-wrp">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/good-1.jpg" alt="good-1">
							<div class="slider__item-content-wrp">
								<h3><a href="#">Cycling Gloves, Adult</a></h3>
								<p>95.00 р</p>
								<p>Артикул</p>
							</div>
						</div>
					</div>
					<div class="slider__item">
						<div class="slider__item-wrp">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/good-1.jpg" alt="good-1">
							<div class="slider__item-content-wrp">
								<h3><a href="#">Cycling Gloves, Adult</a></h3>
								<p>95.00 р</p>
								<p>Артикул</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<section class="ride-us">
			<img src="<?=SITE_TEMPLATE_PATH?>/img/ride-with-us-bycicle.jpg" alt="ride-us-pic">
			<a href="#">по городу</a>
		</section>
		<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"template", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => $_REQUEST["ID"],
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "template"
	),
	false
);?>
		<?$APPLICATION->IncludeComponent(
	"bitrix:furniture.catalog.random", 
	"template", 
	array(
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "180",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"IBLOCKS" => array(
		),
		"IBLOCK_TYPE" => "catalog",
		"PARENT_SECTION" => "",
		"COMPONENT_TEMPLATE" => "template"
	),
	false
);?>
<!--
		<section class="reviewed">
			<div class="container">
				<h2>Уже просмотрели</h2>
				<div class="slider slick-good-slider">
					<div class="slider__item">
						<div class="slider__item-wrp">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/good-1.jpg" alt="good-1">
							<div class="slider__item-content-wrp">
								<h3><a href="product.html">Bottle cage</a></h3>
								<p>95.00 р</p>
								<p>Артикул</p>
							</div>
						</div>
						<button>купить срочно</button>
					</div>
				</div>
			</div>
		</section>
		-->
		<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.products.viewed", 
	"template", 
	array(
		"ACTION_VARIABLE" => "action_cpv",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"BASKET_URL" => "/personal/basket.php",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CONVERT_CURRENCY" => "N",
		"DEPTH" => "2",
		"DISPLAY_COMPARE" => "N",
		"ENLARGE_PRODUCT" => "STRICT",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_MODE" => "single",
		"IBLOCK_TYPE" => "catalog",
		"LABEL_PROP_POSITION" => "top-left",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"PAGE_ELEMENT_COUNT" => "9",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"PRODUCT_SUBSCRIPTION" => "Y",
		"SECTION_CODE" => "",
		"SECTION_ELEMENT_CODE" => "",
		"SECTION_ELEMENT_ID" => $GLOBALS["CATALOG_CURRENT_ELEMENT_ID"],
		"SECTION_ID" => $GLOBALS["CATALOG_CURRENT_SECTION_ID"],
		"SHOW_CLOSE_POPUP" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_FROM_SECTION" => "N",
		"SHOW_MAX_QUANTITY" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SLIDER" => "Y",
		"TEMPLATE_THEME" => "blue",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"COMPONENT_TEMPLATE" => "template",
		"SLIDER_INTERVAL" => "3000",
		"SLIDER_PROGRESS" => "N",
		"ADDITIONAL_PICT_PROP_2" => "-",
		"LABEL_PROP_2" => array(
		),
		"ADDITIONAL_PICT_PROP_3" => "-"
	),
	false
);?>
	</main>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>