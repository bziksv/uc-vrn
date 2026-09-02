<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Расчет профессиональных рынков в Центрально-Черноземном учебном центре");
$APPLICATION->SetTitle("Расчет профессиональных рисков");
?><div class="page_content">
    <div class="container">
        <div class="white_container">
            <div class="text_container">
                <?
                $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_DIR . "include/raschet-professionalnykh-riskov/text1.php"], false);
                ?>
            </div>
        </div>
    </div>
</div>
<? require_once $_SERVER['DOCUMENT_ROOT'] . '/local/templates/juno/forms/askQuestion.php'; ?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>