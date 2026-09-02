<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

$this->setFrameMode(true);
?>

<div class="news_item_container">
    <div class="news_item_detail_date">
        <?=
        ($arResult["DISPLAY_ACTIVE_FROM"] ?
                CIBlockFormatProperties::DateFormat("d F Y", MakeTimeStamp($arResult["DATE_ACTIVE_FROM"], CSite::GetDateFormat())) :
                CIBlockFormatProperties::DateFormat("d F Y", MakeTimeStamp($arResult["DATE_CREATE"], CSite::GetDateFormat())) )
        ?>
    </div>
    <div class="text_container">
        <div class="news_item_anons"><?= $arResult["PREVIEW_TEXT"]; ?></div>
        <?= $arResult["DETAIL_TEXT"]; ?>
    </div>
    <a href="<?= $arResult['LIST_PAGE_URL'] ?>" class="back_to_list">Вернуться к новостям</a>
</div>



