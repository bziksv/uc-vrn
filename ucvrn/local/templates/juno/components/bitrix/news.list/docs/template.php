<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

$this->setFrameMode(true);
?>
<? foreach ($arResult["ITEMS"] as $key => $arItem) { ?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <a 
        href="<?= $arItem['DISPLAY_PROPERTIES']['PROP_FILE']['FILE_VALUE']['SRC'] ?>" 
        id="<?= $this->GetEditAreaId($arItem['ID']); ?>" target="_blank"
        class="doc_item <?= ($key >= 8 ? 'no_active' : '') ?>">
        <img src="<?= getFileIco(CFile::GetPath($arItem['PROPERTIES']['PROP_FILE']['VALUE'])) ?>" alt="doc ico">
            <span class="file_name"><?= $arItem['NAME'] ?></span>
            <span class="file_size">
                <?= getFileExt(CFile::GetPath($arItem['PROPERTIES']['PROP_FILE']['VALUE'])) ?>, 
                <?= getFileSize(CFile::GetPath($arItem['PROPERTIES']['PROP_FILE']['VALUE']), 0) ?>
            </span>
    </a>
<? } ?>
<? if (!$arResult["ITEMS"]) { ?>
    <p>Нет элементов для отображения.</p>
<? } ?>
<? if (count($arResult["ITEMS"]) > 8) { ?>
    <div class="pagination_container news_more-load more-load-btn load_more ajax_load load_more_docs">
        <a href="#" class="read_more_link">
            <span class="btn_svg_ico">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_227_1172)"><path d="M17.0607 2.9375C15.247 1.125 12.758 0 9.99375 0C4.46529 0 0 4.475 0 10C0 15.525 4.46529 20 9.99375 20C14.6592 20 18.5491 16.8125 19.6623 12.5H17.0607C16.035 15.4125 13.2583 17.5 9.99375 17.5C5.85366 17.5 2.48906 14.1375 2.48906 10C2.48906 5.8625 5.85366 2.5 9.99375 2.5C12.07 2.5 13.9212 3.3625 15.272 4.725L11.2445 8.75H20V0L17.0607 2.9375Z" fill="white"></path></g><defs><clipPath id="clip0_227_1172"><rect width="20" height="20" fill="white"></rect></clipPath></defs></svg>
            </span>
            <span class="btn_desc">Показать еще</span>
        </a>
    </div>
<? } ?>
<script>
    $(document).ready(function () {
        $('.load_more_docs').on('click', function (e) {
            e.preventDefault();
            var countDosc = 1;
            $('.tab_value_item.active .no_active').each(function () {
                $(this).css("display", "flex");
                $(this).removeClass('no_active');
                if (countDosc == 8) {
                    return false;
                }
                countDosc++;
            });
            if ($('.tab_value_item.active .no_active').length == 0) {
                $(this).fadeOut(500);
            }
            $('.preloader_raba').removeClass('active');
        });
    })
</script>