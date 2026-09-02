<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
$this->setFrameMode(true);
?>
<? foreach ($arResult["ITEMS"] as $arItem) { ?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div class="specialties_item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
        <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>">
            <div class="specialties_item_img">
                <img src="<?= CFile::GetPath($arItem['PROPERTIES']['PROP_MAIN_FILE']['VALUE']) ?>" alt="<?= $arItem['NAME'] ?>">
            </div>
            <div class="specialties_item_wr">
                <div class="specialties_item_title"><?= $arItem['PROPERTIES']['PROP_MAIN_TITLE']['VALUE'] ?></div>
                <div class="specialties_item_desc"><?= $arItem['PROPERTIES']['PROP_MAIN_DESC']['VALUE'] ?></div>
            </div>
        </a>
    </div>
<? } ?>
<div class="specialties_item all">
    <a href="/obuchenie/">
        <div class="specialties_item_img">
            <svg width="53" height="59" viewBox="0 0 53 59" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M25.1505 0.360058C24.6542 -0.132104 23.8633 -0.117915 23.3839 0.391562C22.9163 0.888653 22.9163 1.67662 23.3839 2.17359L49.9855 29.4855L23.3814 56.7948C22.8851 57.287 22.8713 58.0989 23.3507 58.6085C23.8301 59.118 24.621 59.132 25.1174 58.64C25.1278 58.6296 25.138 58.6192 25.1481 58.6085L52.6342 30.391C53.1219 29.8902 53.1219 29.0783 52.6342 28.5774L25.1505 0.360058Z" fill="white"/> <path d="M29.6355 28.5775L2.15039 0.360058C1.65414 -0.132104 0.863202 -0.117915 0.383814 0.391562C-0.0837444 0.888653 -0.0837444 1.67662 0.383814 2.17371L26.9844 29.4856L0.381354 56.7948C-0.1149 57.287 -0.128603 58.0989 0.350668 58.6085C0.830056 59.118 1.62088 59.132 2.11725 58.64C2.12767 58.6296 2.13786 58.6192 2.14793 58.6085L29.633 30.391C30.1213 29.8909 30.1225 29.079 29.6355 28.5775Z" fill="white"/> </svg>
        </div>
        <div class="specialties_item_wr">
            <div class="specialties_item_title">Все специальности</div>
        </div>
    </a>
</div>