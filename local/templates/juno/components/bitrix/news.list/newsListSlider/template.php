<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
?>
<? foreach ($arResult["ITEMS"] as $arItem) { ?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div class="news_item-main-wr" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
        <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="news_item">
            <div class="news_item_img">
                <img src="<?= ($arItem["PREVIEW_PICTURE"]["ID"] ? getResizeImgSrc($arItem["PREVIEW_PICTURE"]["ID"], 432, 230) : '/local/templates/juno/img/noPhoto.png') ?>" alt="<?= $arItem["NAME"] ?>">
            </div>
            <div class="news_item-wr">
                <div class="news_item_title"><?= $arItem["NAME"] ?></div>
            </div>
            <div class="news_item_date">
                <?=
                ($arItem["DISPLAY_ACTIVE_FROM"] ?
                        CIBlockFormatProperties::DateFormat("d F Y", MakeTimeStamp($arItem["DATE_ACTIVE_FROM"], CSite::GetDateFormat())) :
                        CIBlockFormatProperties::DateFormat("d F Y", MakeTimeStamp($arItem["DATE_CREATE"], CSite::GetDateFormat())) )
                ?>
            </div>
        </a>
    </div>
<? } ?>