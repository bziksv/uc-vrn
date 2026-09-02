<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
?>
<div class="search-page">
    <form action="" method="get" class="search_form_on_page">
        <button type="submit" value="<?= GetMessage("SEARCH_GO") ?>">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.6667 14.6667H15.6133L15.24 14.3067C16.5467 12.7867 17.3333 10.8133 17.3333 8.66667C17.3333 3.88 13.4533 0 8.66667 0C3.88 0 0 3.88 0 8.66667C0 13.4533 3.88 17.3333 8.66667 17.3333C10.8133 17.3333 12.7867 16.5467 14.3067 15.24L14.6667 15.6133V16.6667L21.3333 23.32L23.32 21.3333L16.6667 14.6667ZM8.66667 14.6667C5.34667 14.6667 2.66667 11.9867 2.66667 8.66667C2.66667 5.34667 5.34667 2.66667 8.66667 2.66667C11.9867 2.66667 14.6667 5.34667 14.6667 8.66667C14.6667 11.9867 11.9867 14.6667 8.66667 14.6667Z" fill="#D0D0D0"/></svg>
        </button>
        <?
        if ($arParams["USE_SUGGEST"] === "Y") {
            if (mb_strlen($arResult["REQUEST"]["~QUERY"]) && is_object($arResult["NAV_RESULT"])) {
                $arResult["FILTER_MD5"] = $arResult["NAV_RESULT"]->GetFilterMD5();
                $obSearchSuggest = new CSearchSuggest($arResult["FILTER_MD5"], $arResult["REQUEST"]["~QUERY"]);
                $obSearchSuggest->SetResultCount($arResult["NAV_RESULT"]->NavRecordCount);
            }
            ?>
            <?
            $APPLICATION->IncludeComponent(
                    "bitrix:search.suggest.input",
                    "",
                    array(
                        "NAME" => "q",
                        "VALUE" => $arResult["REQUEST"]["~QUERY"],
                        "INPUT_SIZE" => 40,
                        "DROPDOWN_SIZE" => 10,
                        "FILTER_MD5" => $arResult["FILTER_MD5"],
                    ),
                    $component, array("HIDE_ICONS" => "Y")
            );
            ?>
        <? } else { ?>
            <input type="text" name="q" value="<?= $arResult["REQUEST"]["QUERY"] ?>" />
        <? } ?>
        <input type="hidden" name="how" value="<? echo $arResult["REQUEST"]["HOW"] == "d" ? "d" : "r" ?>" />
    </form>
    <? if (isset($arResult["REQUEST"]["ORIGINAL_QUERY"])) {
        ?>
        <div class="search-language-guess">
            <? echo GetMessage("CT_BSP_KEYBOARD_WARNING", array("#query#" => '<a href="' . $arResult["ORIGINAL_QUERY_URL"] . '">' . $arResult["REQUEST"]["ORIGINAL_QUERY"] . '</a>')) ?>
        </div>
    <? } ?>

    <? if ($arResult["REQUEST"]["QUERY"] === false && $arResult["REQUEST"]["TAGS"] === false) { ?>
    <? } elseif ($arResult["ERROR_CODE"] != 0) { ?>
        <p><?= GetMessage("SEARCH_ERROR") ?></p>
        <? ShowError($arResult["ERROR_TEXT"]); ?>
        <p><?= GetMessage("SEARCH_CORRECT_AND_CONTINUE") ?></p>

        <p><?= GetMessage("SEARCH_SINTAX") ?><br /><b><?= GetMessage("SEARCH_LOGIC") ?></b></p>
        <table border="0" cellpadding="5">
            <tr>
                <td align="center" valign="top"><?= GetMessage("SEARCH_OPERATOR") ?></td><td valign="top"><?= GetMessage("SEARCH_SYNONIM") ?></td>
                <td><?= GetMessage("SEARCH_DESCRIPTION") ?></td>
            </tr>
            <tr>
                <td align="center" valign="top"><?= GetMessage("SEARCH_AND") ?></td><td valign="top">and, &amp;, +</td>
                <td><?= GetMessage("SEARCH_AND_ALT") ?></td>
            </tr>
            <tr>
                <td align="center" valign="top"><?= GetMessage("SEARCH_OR") ?></td><td valign="top">or, |</td>
                <td><?= GetMessage("SEARCH_OR_ALT") ?></td>
            </tr>
            <tr>
                <td align="center" valign="top"><?= GetMessage("SEARCH_NOT") ?></td><td valign="top">not, ~</td>
                <td><?= GetMessage("SEARCH_NOT_ALT") ?></td>
            </tr>
            <tr>
                <td align="center" valign="top">( )</td>
                <td valign="top">&nbsp;</td>
                <td><?= GetMessage("SEARCH_BRACKETS_ALT") ?></td>
            </tr>
        </table>
    <? } elseif (count($arResult["SEARCH"]) > 0) { ?>
        <? if ($arParams["DISPLAY_TOP_PAGER"] != "N") echo $arResult["NAV_STRING"] ?>
        <hr />
        <? foreach ($arResult["SEARCH"] as $arItem) { ?>
            <? if ($arItem['PROP_FILE']) { ?>
                <div class="tab_value_container active">
                    <div class="tab_value_item active">
                        <a 
                            href="<?= CFile::GetPath($arItem['PROP_FILE']) ?>" target="_blank"
                            class="doc_item">
                            <img src="<?= getFileIco(CFile::GetPath($arItem['PROP_FILE'])) ?>" alt="doc ico">
                                <span class="file_name"><?= $arItem["TITLE_FORMATED"] ?></span>
                                <span class="file_size">
                                    <?= getFileExt(CFile::GetPath($arItem['PROP_FILE'])) ?>, 
                                    <?= getFileSize(CFile::GetPath($arItem['PROP_FILE']), 0) ?>
                                </span>
                        </a>
                    </div>
                </div>    
            <? } else { ?>
                <a class="element_title" href="<?= $arItem["URL"] ?>"><?= $arItem["TITLE_FORMATED"] ?></a>
                <p class="element_desc"><?= $arItem["BODY_FORMATED"] ?></p>
                <?
                if (
                        $arParams["SHOW_RATING"] == "Y" && $arItem["RATING_TYPE_ID"] <> '' && $arItem["RATING_ENTITY_ID"] > 0
                ):
                    ?>
                    <div class="search-item-rate"><?
                        $APPLICATION->IncludeComponent(
                                "bitrix:rating.vote", $arParams["RATING_TYPE"],
                                Array(
                                    "ENTITY_TYPE_ID" => $arItem["RATING_TYPE_ID"],
                                    "ENTITY_ID" => $arItem["RATING_ENTITY_ID"],
                                    "OWNER_ID" => $arItem["USER_ID"],
                                    "USER_VOTE" => $arItem["RATING_USER_VOTE_VALUE"],
                                    "USER_HAS_VOTED" => $arItem["RATING_USER_VOTE_VALUE"] == 0 ? 'N' : 'Y',
                                    "TOTAL_VOTES" => $arItem["RATING_TOTAL_VOTES"],
                                    "TOTAL_POSITIVE_VOTES" => $arItem["RATING_TOTAL_POSITIVE_VOTES"],
                                    "TOTAL_NEGATIVE_VOTES" => $arItem["RATING_TOTAL_NEGATIVE_VOTES"],
                                    "TOTAL_VALUE" => $arItem["RATING_TOTAL_VALUE"],
                                    "PATH_TO_USER_PROFILE" => $arParams["~PATH_TO_USER_PROFILE"],
                                ),
                                $component,
                                array("HIDE_ICONS" => "Y")
                        );
                        ?>
                    </div>
                <? endif; ?>
                <? if ($arItem["CHAIN_PATH"]) { ?>
                    <div class="path_container">
                        <span class="path_title"><?= GetMessage("SEARCH_PATH") ?></span>
                        <span class="path"><?= str_replace('&nbsp;/&nbsp;', '', $arItem["CHAIN_PATH"]) ?></span>
                    </div>
                <? } ?>
                <hr />
            <? } ?>
        <? } ?>
        <?= $arParams["DISPLAY_BOTTOM_PAGER"] != "N" ? $arResult["NAV_STRING"] : '' ?>
        <br />
    <? } else { ?>
        <? ShowNote(GetMessage("SEARCH_NOTHING_TO_FOUND")); ?>
    <? } ?>
</div>