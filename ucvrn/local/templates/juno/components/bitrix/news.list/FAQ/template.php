<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
$this->setFrameMode(true);
?>
<? foreach ($arResult["ITEMS"] as $arItem){ ?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div class="faq_item" id="<?= $this->GetEditAreaId($arItem['ID'])?>">
        <div class="faq_title"><?= $arItem["NAME"] ?><div class="faq_btn"></div></div>
        <div class="faq_text"><?= $arItem["PREVIEW_TEXT"]; ?></div>
    </div>
<? } ?>
<?= $arResult["NAV_STRING"] ?>