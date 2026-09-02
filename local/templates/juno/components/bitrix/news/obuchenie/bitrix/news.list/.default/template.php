<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

$this->setFrameMode(true);
?>
<? if ($arResult["ITEMS"]) { ?>
    <? foreach ($arResult["ITEMS"] as $key => $arItem) { ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="propgram_list_desc <?= ($key > 3 ? 'no_active' : '') ?>" id="<?= $this->GetEditAreaId($arItem['ID']); ?>" >
            <div class="title"><?= $arItem['NAME'] ?></div>
            <div class="anons"><?= $arItem['PREVIEW_TEXT'] ?></div>
            <div class="property_container">
                <? if ($arItem['PROPERTIES']['PROP_FORMAT']['VALUE']) { ?>
                    <div class="property_item">
                        <div class="title">Формат обучения</div>
                        <div class="value"><?= $arItem['PROPERTIES']['PROP_FORMAT']['VALUE'] ?></div>
                    </div>
                <? } ?>
                <? if ($arItem['PROPERTIES']['PROP_SROK']['VALUE']) { ?>
                    <div class="property_item">
                        <div class="title">Срок обучения</div>
                        <div class="value"><?= $arItem['PROPERTIES']['PROP_SROK']['VALUE'] ?></div>
                    </div>
                <? } ?>
                <? if ($arItem['PROPERTIES']['PROP_RES_DOC']['VALUE']) { ?>
                    <div class="property_item">
                        <div class="title">Выдаваемый документ</div>
                        <div class="value"><?= $arItem['PROPERTIES']['PROP_RES_DOC']['VALUE'] ?></div>
                    </div>
                <? } ?>
                <? if ($arItem['PROPERTIES']['PROP_COST']['VALUE']) { ?>
                    <div class="property_item">
                        <div class="title">Стоимость обучения</div>
                        <div class="value price"><?= $arItem['PROPERTIES']['PROP_COST']['VALUE'] ?> руб.</div>
                    </div>
                <? } ?>
            </div>
        </a>
    <? } ?>
    <? if (count($arResult["ITEMS"]) > 4) { ?>
        <div class="pagination_container news_more-load more-load-btn load_more ajax_load load_more_docs">
            <a href="#" class="read_more_link">
                <span class="btn_svg_ico">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_227_1172)"><path d="M17.0607 2.9375C15.247 1.125 12.758 0 9.99375 0C4.46529 0 0 4.475 0 10C0 15.525 4.46529 20 9.99375 20C14.6592 20 18.5491 16.8125 19.6623 12.5H17.0607C16.035 15.4125 13.2583 17.5 9.99375 17.5C5.85366 17.5 2.48906 14.1375 2.48906 10C2.48906 5.8625 5.85366 2.5 9.99375 2.5C12.07 2.5 13.9212 3.3625 15.272 4.725L11.2445 8.75H20V0L17.0607 2.9375Z" fill="white"></path></g><defs><clipPath id="clip0_227_1172"><rect width="20" height="20" fill="white"></rect></clipPath></defs></svg>
                </span>
                <span class="btn_desc">Показать еще</span>
            </a>
        </div>
    <? } ?>
<? } else { ?>
    <div class="text_container">
        <p class="propgram_list_desc">Нет элементов для показа</p>
    </div>

<? } ?>
               