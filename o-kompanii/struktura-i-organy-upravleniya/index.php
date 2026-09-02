<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Структура и органы управления Центрально-Черноземного учебного центра");
$APPLICATION->SetTitle("Структура и органы управления");
?><div class="page_content">
    <div class="container">
        <div class="managmvent_container">
            <div class="text_container">
                <?
                $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_DIR . "include/struktura-i-organy-upravleniya/text1.php"], false);
                ?>
            </div>
        </div>
    </div>
</div>
<? require_once $_SERVER['DOCUMENT_ROOT'] . '/local/templates/juno/forms/askQuestion.php'; ?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>