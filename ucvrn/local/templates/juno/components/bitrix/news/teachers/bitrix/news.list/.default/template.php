<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
$this->setFrameMode(true);
?>
<div class="teacher_container">
    <? foreach ($arResult["ITEMS"] as $arItem) { ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="teacher_item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <? $image = getResizeImgSrc($arItem["DETAIL_PICTURE"]['ID'], 200, 200) ?>
            <img src="<?= ($image ? $image : '/local/templates/juno/img/noImageTeacher.jpg') ?>" alt="<?= $arItem["NAME"] ?>">
            <div class="teacher_info">
                <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="teacher_name"><?= str_replace_once(' ', '<br>', $arItem["NAME"]) ?></a>
                <div class="teacher_dolj"><?= $arItem["PROPERTIES"]['PROP_DOLJ']['VALUE'] ?></div>
            </div>
        </div>
    <? } ?>
    <?= $arResult["NAV_STRING"] ?>
</div>
