<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Политика конфиденциальности Центрально-Черноземного учебного центра");
$APPLICATION->SetTitle("Политика конфиденциальности");
?><div class="page_content">
    <div class="container">
        <section class="text_container">
            <?
            $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                "PATH" => SITE_DIR . "include/politika-konfidentsialnosti/text1.php"], false);
            ?>
        </section>
    </div>
</div>
<? require_once $_SERVER['DOCUMENT_ROOT'] . '/local/templates/juno/forms/askQuestion.php'; ?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>