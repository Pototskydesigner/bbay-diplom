<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
?>
<div class="subscribe-form"  id="subscribe-form">
<?
$frame = $this->createFrame("subscribe-form", false)->begin();
?>
	<div class="footer__form">
		<h2>подписаться на новости магазина go&ride</h2>
	<form action="<?=$arResult["FORM_ACTION"]?>">
		<div class="footer__form-wrp">

	<?foreach($arResult["RUBRICS"] as $itemID => $itemValue):?>

	<?endforeach;?>

			<input type="email" placeholder="Enter your Email adress" required name="sf_EMAIL" size="20" value="<?=$arResult["EMAIL"]?>" title="<?=GetMessage("subscr_form_email_title")?>" /></td>
			<button><?=GetMessage("subscr_form_button")?></button>
		</div>
		<span>Продолжая, вы соглашаетесь с нашей политикой конфиденциальности.</span>

	</form>
	</div>
<?
$frame->beginStub();
?>
	<form action="<?=$arResult["FORM_ACTION"]?>">

		<?foreach($arResult["RUBRICS"] as $itemID => $itemValue):?>
			<label for="sf_RUB_ID_<?=$itemValue["ID"]?>">
				<input type="checkbox" name="sf_RUB_ID[]" id="sf_RUB_ID_<?=$itemValue["ID"]?>" value="<?=$itemValue["ID"]?>" /> <?=$itemValue["NAME"]?>
			</label><br />
		<?endforeach;?>

		<table border="0" cellspacing="0" cellpadding="2" align="center">
			<tr>
				<td><input type="text" name="sf_EMAIL" size="20" value="" title="<?=GetMessage("subscr_form_email_title")?>" /></td>
			</tr>
			<tr>
				<td align="right"><input type="submit" name="OK" value="<?=GetMessage("subscr_form_button")?>" /></td>
			</tr>
		</table>
	</form>
<?
$frame->end();
?>
</div>
