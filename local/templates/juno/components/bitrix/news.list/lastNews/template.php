<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
$this->setFrameMode(true);
?>
<div class="news_top">
    <div class="news_top_title">Читайте также</div>
    <div class="news_list_container">
        <div class="other_list">
            <? foreach ($arResult["ITEMS"] as $arItem) { ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="news_item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                    <div 
                        class="preview_img <?= $arItem["PREVIEW_PICTURE"]["ID"] ? '' : 'no_photo' ?>" 
                        style="background-image: url('<?= ($arItem["PREVIEW_PICTURE"]["ID"] ? getResizeImgSrc($arItem["PREVIEW_PICTURE"]["ID"], 416, 298) : '/local/templates/juno/img/noPhoto.png') ?>')"></div>
                    <span class="news_title"><?= $arItem["NAME"] ?></span>
                    <span class="news_date">
                        <?=
                        ($arItem["DISPLAY_ACTIVE_FROM"] ?
                                CIBlockFormatProperties::DateFormat("d F Y", MakeTimeStamp($arItem["DATE_ACTIVE_FROM"], CSite::GetDateFormat())) :
                                CIBlockFormatProperties::DateFormat("d F Y", MakeTimeStamp($arItem["DATE_CREATE"], CSite::GetDateFormat())) )
                        ?>
                    </span>
                </a>
            <? } ?>
        </div>
    </div>
</div>