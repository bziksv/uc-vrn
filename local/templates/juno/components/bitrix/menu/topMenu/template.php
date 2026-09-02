<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? if (!empty($arResult)) { ?>
    <ul id="horizontal-multilevel-menu">
        <? foreach ($arResult as $arItem) { ?>
            <li class="<?= !empty($arItem['CHILD']) ? 'parent_menu' : '' ?>">
                <a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
                <? if (!empty($arItem['CHILD'])) { ?>
                    <div class="header_menu_inner-wr">
                        <div class="container">
                            <div class="header_menu_inner_item">
                                <? foreach ($arItem['CHILD'] as $arItemChild) { ?>
                                    <a href="<?= $arItemChild["LINK"] ?>" class="header_menu_inner_item_subtitle"><?= $arItemChild["TEXT"] ?></a>
                                <? } ?>
                            </div>
                        </div>
                    </div>
                <? } ?>
            </li>
        <? } ?>
    </ul>
<? } ?>
