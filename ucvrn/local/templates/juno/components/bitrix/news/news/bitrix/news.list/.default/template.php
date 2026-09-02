<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
?>
<div class="page_content">
    <div class="container">
        <div class="news_list_container">
            <? if (!strpos($_SERVER['REQUEST_URI'], 'PAGEN')) { ?>
                <? $firstItem = array_shift($arResult["ITEMS"]); ?>
                <?
                $this->AddEditAction($firstItem['ID'], $firstItem['EDIT_LINK'], CIBlock::GetArrayByID($firstItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($firstItem['ID'], $firstItem['DELETE_LINK'], CIBlock::GetArrayByID($firstItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <a href="<?= $firstItem['DETAIL_PAGE_URL'] ?>" class="first_news_item <?= ($firstItem["PREVIEW_PICTURE"]["SRC"] ? '' : 'noPhotoBigNews') ?>">
                    <img src="<?= ($firstItem["PREVIEW_PICTURE"]["SRC"] ? $firstItem["PREVIEW_PICTURE"]["SRC"] : '/local/templates/juno/img/noPhotoBigNews.jpg') ?>" alt="<?= $firstItem["NAME"] ?>"/>
                    <span class="first_news_desc">
                        <span class="news_title"><?= $firstItem["NAME"] ?></span>
                        <span class="news_date">
                            <?=
                            ($firstItem["DISPLAY_ACTIVE_FROM"] ?
                                    CIBlockFormatProperties::DateFormat("d F Y", MakeTimeStamp($firstItem["DATE_ACTIVE_FROM"], CSite::GetDateFormat())) :
                                    CIBlockFormatProperties::DateFormat("d F Y", MakeTimeStamp($firstItem["DATE_CREATE"], CSite::GetDateFormat())) )
                            ?>
                        </span>
                    </span>
                </a>
            <? } ?>
            <div class="other_list" id="load_more_container">
                <? foreach ($arResult["ITEMS"] as $arItem) { ?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="news_item load_more_element" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
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
            <?= $arResult["NAV_STRING"] ?>
        </div>
    </div>
</div>