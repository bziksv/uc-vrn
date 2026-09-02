<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
// заменяем $arResult эпилога значением, сохраненным в шаблоне
if (isset($arResult['arResult'])) {
    $arResult = & $arResult['arResult'];
    // подключаем языковой файл
    global $MESS;
    include_once(GetLangFileName(dirname(__FILE__) . '/lang/', '/template.php'));
} else {
    return;
}
$this->setFrameMode(true);
?>
<div class="learning_deatil">
    <div class="learning_deatil_header_img <?= ($arResult["DETAIL_PICTURE"]["SRC"] ? '' : 'no_filter_learning_deatil_header') ?>" 
         style="background-image: url('<?= ($arResult["DETAIL_PICTURE"]["SRC"] ? $arResult["DETAIL_PICTURE"]["SRC"] : '/local/templates/juno/img/noPhotoProgs.jpg') ?>')"></div>
    <div class="breadcrumb_section">
        <div class="container">
            <div class="breadcrumb-wr">
                <?
                $APPLICATION->IncludeComponent("bitrix:breadcrumb", "", Array("PATH" => "", "SITE_ID" => "s1", "START_FROM" => "0"));
                ?>
                <h1 class="title h1"><? $APPLICATION->ShowTitle(false) ?></h1>
                <div class="learning_deatil_header_desc"><?= $arResult["PREVIEW_TEXT"] ?></div>
                <a href="#requestEduPopup" class="link_with_arrow fancybox">
                    <span class="btn_svg_ico">
                        <svg width="21" height="12" viewBox="0 0 21 12" fill="none" xmlns="http://www.w3.org/2000/svg" style="vertical-align: middle;display: inline-block;"><path d="M20.5303 6.53033C20.8232 6.23744 20.8232 5.76256 20.5303 5.46967L15.7574 0.696699C15.4645 0.403806 14.9896 0.403806 14.6967 0.696699C14.4038 0.989593 14.4038 1.46447 14.6967 1.75736L18.9393 6L14.6967 10.2426C14.4038 10.5355 14.4038 11.0104 14.6967 11.3033C14.9896 11.5962 15.4645 11.5962 15.7574 11.3033L20.5303 6.53033ZM0 6.75H20V5.25H0V6.75Z" fill="white"></path></svg>
                    </span>
                    <span class="btn_desc white">Подать заявку</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="page_content" id="DivIdToPrint">
    <div class="container">
        <div class="description_text text_container">
            <div class="read_more_container">
                <div class="print_btn" onclick="printDiv();">Печать</div>
                <div class="title h1">О программе</div>
                <?= $arResult["DETAIL_TEXT"] ?>
            </div>
            <div class="read_more_container_btn"></div>
        </div>
    </div>
    <? if ($arResult["PROPERTIES"]["PROP_GROUPS"]['VALUE']) { ?>
        <div class="description_text learning_props">
            <div class="container">
                <div class="left_side">
                    <div class="title">Условия обучения по программе</div>
                    <? if ($arResult["PROPERTIES"]["PROP_ONLINE"]['VALUE'] == 'да') { ?>
                        <div class="desc">По дайнной программе есть возможность обучения онлайн с применением дистанионных средств обучения.</div>
                        <a href="<?= $arResult["PROPERTIES"]["PROP_ONLINE_LINK"]['VALUE']?$arResult["PROPERTIES"]["PROP_ONLINE_LINK"]['VALUE']:'#' ?>" class="link_with_arrow" target="_blank">
                            <span class="btn_svg_ico"><svg width="21" height="12" viewBox="0 0 21 12" fill="none" xmlns="http://www.w3.org/2000/svg" style="vertical-align: middle; display: inline-block;"><path d="M20.5303 6.53033C20.8232 6.23744 20.8232 5.76256 20.5303 5.46967L15.7574 0.696699C15.4645 0.403806 14.9896 0.403806 14.6967 0.696699C14.4038 0.989593 14.4038 1.46447 14.6967 1.75736L18.9393 6L14.6967 10.2426C14.4038 10.5355 14.4038 11.0104 14.6967 11.3033C14.9896 11.5962 15.4645 11.5962 15.7574 11.3033L20.5303 6.53033ZM0 6.75H20V5.25H0V6.75Z" fill="white"></path></svg>
                            </span>
                            <span class="btn_desc">Онлайн обучение</span>
                        </a>
                    <? } ?>
                </div>
                <div class="right_side">
                    <div class="learning_group <?= (count($arResult['CUST_GROUPS']) == 1 ? 'learning_group_one' : '') ?>" >
                        <? foreach ($arResult['CUST_GROUPS'] as $key => $groupItem) { ?>
                            <? if (count($arResult['CUST_GROUPS']) == 1) { ?>
                                <div class="learning_group_title active" style="display:none"></div>
                            <? } else { ?>
                                <div class="learning_group_title <?= $key == 0 ? 'active' : '' ?>"><?= $groupItem['NAME'] ?><div class="learning_group_btn"></div></div>
                            <? } ?>
                            <div class="learning_group_prop_container">
                                <? if ($groupItem['PROP_SROK']['VALUE']) { ?>
                                    <div class="learning_group_prop">
                                        <div class="prop_title">Срок обучения</div>
                                        <div class="prop_val"><?= $groupItem['PROP_SROK']['~VALUE'] ?></div>
                                    </div>
                                <? } ?>
                                <? if ($groupItem['PROP_GIVE_DOC']['VALUE']) { ?>
                                    <div class="learning_group_prop">
                                        <div class="prop_title">Выдаваемый документ</div>
                                        <div class="prop_val"><?= $groupItem['PROP_GIVE_DOC']['~VALUE'] ?></div>
                                    </div>
                                <? } ?>
                                <? if ($groupItem['PROP_PERIOD']['VALUE']) { ?>
                                    <div class="learning_group_prop">
                                        <div class="prop_title">Периодичность обучения</div>
                                        <div class="prop_val popup_description">
                                            <span class="popup_description_title" style="<?= $groupItem['PREVIEW_TEXT'] ? '' : 'border-bottom: none;' ?>">
                                                <?= $groupItem['PROP_PERIOD']['~VALUE'] ?>
                                            </span> 
                                            <? if ($groupItem['PREVIEW_TEXT']) { ?>
                                                <span class="question_ico"></span>
                                                <div class="popup_description_container">
                                                    <div><?= $groupItem['~PREVIEW_TEXT'] ?></div>
                                                </div>
                                            <? } ?>
                                        </div>
                                    </div>
                                <? } ?>
                                <? if ($groupItem['PROP_COST']['VALUE']) { ?>
                                    <div class="learning_group_prop">
                                        <div class="prop_title">Стоимость обучения</div>
                                        <div class="prop_val price"><?= $groupItem['PROP_COST']['VALUE'] ?> руб.</div>
                                    </div>
                                <? } ?>
                            </div>
                        <? } ?>
                    </div>
                </div>
            </div>
        </div>
    <? } ?>
    <? if (!empty($arResult['PROPERTIES']['PROP_DOCS']['VALUE'])) { ?>
        <div class="container">
            <div class="docs">
                <div class="docs_title_container">
                    <div class="title h1">Документы</div>
                    <div 
                        class="download_zip download_zip_raba" 
                        data-sect="<?= $arResult['PROPERTIES']['DOCS_SECT']['VALUE'] ?>" 
                        data-iblock="<?= $arResult["PROPERTIES"]["PROP_DOCS"]['LINK_IBLOCK_ID'] ?>" 
                        target="_blank">
                        Скачать архивом
                    </div>
                </div>
                <div class="docs_container">
                    <?
                    // забираем доки из привязанной секции
                    $selectDocs = ["ID", "NAME", "IBLOCK_ID", "PREVIEW_TEXT"];
                    $filterDocs = ['IBLOCK_ID' => $arResult["PROPERTIES"]["PROP_DOCS"]['LINK_IBLOCK_ID'], 'ACTIVE' => 'Y', 'SECTION_ID' => $arResult["PROPERTIES"]["PROP_DOCS"]['VALUE']];
                    $docsQuery = CIBlockElement::GetList(["SORT" => "ASC"], $filterDocs, false, ['nPageSize' => '30'], $selectDocs);
                    while ($docsObj = $docsQuery->GetNextElement()) {
                        $docItem = array_merge($docsObj->GetFields(), $docsObj->GetProperties());
                        $docSrc = CFile::GetPath($docItem['PROP_FILE']['VALUE']);
                        ?>
                        <a href="<?= $docSrc ?>" class="document_item" target="_blank">
                            <img src="<?= getFileIco(CFile::GetPath($docItem['PROP_FILE']['VALUE'])) ?>" alt="doc ico">
                                <span class="file_name"><?= $docItem['NAME'] ?></span>
                                <span class="file_size">
                                    <?= getFileExt($docSrc) ?>, 
                                    <?= getFileSize($docSrc, 0) ?>
                                </span>
                        </a>
                    <? } ?>
                </div>
            </div>
        </div>
    <? } ?>
</div>