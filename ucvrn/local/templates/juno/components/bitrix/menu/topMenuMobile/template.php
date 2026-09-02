<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? if (!empty($arResult)) { ?>
    <div class="head_mobile_menu">
        <img class="logo_mobile_menu" src="/local/templates/juno/img/logo_mobile.svg" alt="logo" />
        <div class="header_search_btn_mobile">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.6667 14.6667H15.6133L15.24 14.3067C16.5467 12.7867 17.3333 10.8133 17.3333 8.66667C17.3333 3.88 13.4533 0 8.66667 0C3.88 0 0 3.88 0 8.66667C0 13.4533 3.88 17.3333 8.66667 17.3333C10.8133 17.3333 12.7867 16.5467 14.3067 15.24L14.6667 15.6133V16.6667L21.3333 23.32L23.32 21.3333L16.6667 14.6667ZM8.66667 14.6667C5.34667 14.6667 2.66667 11.9867 2.66667 8.66667C2.66667 5.34667 5.34667 2.66667 8.66667 2.66667C11.9867 2.66667 14.6667 5.34667 14.6667 8.66667C14.6667 11.9867 11.9867 14.6667 8.66667 14.6667Z" fill="#004171"></path> </svg>
        </div>
        <div class="mobile_menu_btn_close" id="hide_mobile_menu"></div>
    </div>
    <div class="mobile_menu_container">
        <nav>
            <? foreach ($arResult as $arItem) { ?>
                <a href="<?= $arItem["LINK"] ?>" class="<?= !empty($arItem['CHILD']) ? 'parent_menu_mobile' : '' ?>">
                    <?= $arItem["TEXT"] ?>
                    <?= !empty($arItem['CHILD']) ? '<div class="parent_menu_mobile_arrow"></div>' : '' ?>
                </a>
                <? if (!empty($arItem['CHILD'])) { ?>
                    <div class="child_menu_mobile_container">
                        <? foreach ($arItem['CHILD'] as $arItemChild) { ?>
                            <a href="<?= $arItemChild["LINK"] ?>" class="header_menu_inner_item_subtitle"><?= $arItemChild["TEXT"] ?></a>
                        <? } ?>
                    </div>
                <? } ?>
            <? } ?>
        </nav>
    </div>
<? } ?>
