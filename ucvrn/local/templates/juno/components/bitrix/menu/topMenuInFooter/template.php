<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? if (!empty($arResult)) { ?>
    <? foreach ($arResult as $arItem) { ?>
        <div><b><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></b></div>
    <? } ?>
<? } ?>
