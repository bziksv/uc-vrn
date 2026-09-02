<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
$this->setFrameMode(true);
?>
<div class="founders_container" id="load_more_container">
    <? foreach ($arResult["ITEMS"] as $arItem) { ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="founders_item load_more_element" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <? if ($arItem['PROPERTIES']['PROP_DATE']['VALUE']) { ?>
                <div class="date">
                    <div class="title">Дата</div>
                    <div class="value"><?= $arItem['PROPERTIES']['PROP_DATE']['VALUE'] ?> г.</div>
                </div>
            <? } ?>
            <div class="fio_and_docs">
                <? if ($arItem["NAME"]) { ?>
                    <div class="title">ФИО учредителя</div>
                    <div class="value"><?= $arItem["NAME"] ?></div>
                <? } ?>
                <? if ($arItem['PROPERTIES']['PROP_DOCUM']['VALUE']) { ?>
                    <div class="title">Данные основного документа, удостоверяющего личность</div>
                    <div class="value"><?= $arItem['PROPERTIES']['PROP_DOCUM']['VALUE'] ?></div>
                <? } ?>
            </div>
            <div class="date_born_and_address">
                <? if ($arItem['PROPERTIES']['PROP_BORN']['VALUE']) { ?>
                    <div class="title">Дата роджения учредителя</div>
                    <div class="value"><?= $arItem['PROPERTIES']['PROP_BORN']['VALUE'] ?> г.</div>
                <? } ?>
                <? if ($arItem['PROPERTIES']['PROP_ADDRESS']['VALUE']) { ?>
                    <div class="title">Адрес регистрации</div>
                    <div class="value"><?= $arItem['PROPERTIES']['PROP_ADDRESS']['VALUE'] ?></div>
                <? } ?>
            </div>
        </div>
    <? } ?>
    <?= $arResult["NAV_STRING"] ?>
</div>
