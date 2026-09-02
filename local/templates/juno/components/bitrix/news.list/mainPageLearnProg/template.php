<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
die();
$this->setFrameMode(true);
?>
<div class="main-programm_content-wr">
    <div class="programm-item">
        <a href="<?=$arResult["ITEMS"][0]['DETAIL_PAGE_URL']?>">
            <div class="programm-item_wr">
                <div class="programm-item_nmb">01.</div>
                <div class="programm-item_title"><?= $arResult["ITEMS"][0]['PROPERTIES']['PROP_MAIN_TITLE']['VALUE'] ?></div>
            </div>
            <img src="<?= CFile::GetPath($arResult["ITEMS"][0]['PROPERTIES']['PROP_MAIN_FILE']['VALUE']) ?>" alt="<?= $arResult["ITEMS"][0]['NAME'] ?>">
        </a>
    </div>
    <div class="programm-item">
        <a href="<?=$arResult["ITEMS"][1]['DETAIL_PAGE_URL']?>">
            <div class="programm-item_wr">
                <div class="programm-item_nmb">02.</div>
                <div class="programm-item_title"><?= $arResult["ITEMS"][1]['PROPERTIES']['PROP_MAIN_TITLE']['VALUE'] ?></div>
            </div>
            <img src="<?= CFile::GetPath($arResult["ITEMS"][1]['PROPERTIES']['PROP_MAIN_FILE']['VALUE']) ?>" alt="<?= $arResult["ITEMS"][1]['NAME'] ?>">
        </a>
    </div>
</div>
<div class="main-programm_content-wr flex">
    <div class="programm-item vertical blue">
        <a href="<?=$arResult["ITEMS"][2]['DETAIL_PAGE_URL']?>">
            <div class="programm-item_wr">
                <div class="programm-item_nmb">03.</div>
                <div class="programm-item_title"><?= $arResult["ITEMS"][2]['PROPERTIES']['PROP_MAIN_TITLE']['VALUE'] ?></div>
            </div>
            <img src="<?= CFile::GetPath($arResult["ITEMS"][2]['PROPERTIES']['PROP_MAIN_FILE']['VALUE']) ?>" alt="<?= $arResult["ITEMS"][2]['NAME'] ?>">
        </a>
    </div>
    <div class="programm-item vertical blue">
        <a href="<?=$arResult["ITEMS"][3]['DETAIL_PAGE_URL']?>">
            <div class="programm-item_wr">
                <div class="programm-item_nmb">04.</div>
                <div class="programm-item_title"><?= $arResult["ITEMS"][3]['PROPERTIES']['PROP_MAIN_TITLE']['VALUE'] ?></div>
            </div>
            <img src="<?= CFile::GetPath($arResult["ITEMS"][3]['PROPERTIES']['PROP_MAIN_FILE']['VALUE']) ?>" alt="<?= $arResult["ITEMS"][3]['NAME'] ?>">
        </a>
    </div>
</div>