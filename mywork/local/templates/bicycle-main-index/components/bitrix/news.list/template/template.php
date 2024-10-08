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
$this->setFrameMode(true);
?>
<section class="city-bike">
	<div class="container">
		<h2>Городские велосипеды</h2>
		<div class="slider slick-city-slider">
			<?php foreach ($arResult["ITEMS"] as $arItem): ?>
				<?php
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="slider__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<div class="city-bike__slide-wrp">
						<?php if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])): ?>
							<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
						<?php endif; ?>
						<div class="city-bike__content">
							<?php if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]): ?>
								<h3>
									<?php if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
									<?php else: ?>
									<?php endif; ?>
								</h3>
							<?php endif; ?>
							<?php if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]): ?>
								<p><?=htmlspecialcharsbx($arItem["PREVIEW_TEXT"])?></p>
							<?php endif; ?>
							<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=htmlspecialcharsbx($arItem["NAME"])?></a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
