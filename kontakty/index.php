<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Контакты Центрально-Черноземного учебного центра");
$APPLICATION->SetTitle("Контакты");
?><div class="contacts-main-wr">
    <div class="contacts-bg" style="background-image: url('/local/templates/juno/img/contacts-bg.jpg')"></div>
    <div class="container">
        <div class="breadcrumb-wr">
            <?
            $APPLICATION->IncludeComponent(
                    "bitrix:breadcrumb",
                    "",
                    Array(
                        "PATH" => "",
                        "SITE_ID" => "s1",
                        "START_FROM" => "0"
                    )
            );
            ?>
            <h1 class="title h1"><? $APPLICATION->ShowTitle(false) ?></h1>
        </div>
        <section class="contacts">
            <div class="contacts_content">
                <div class="contacts_content_item-wr">
                    <div class="contacts_content_item">
                        <div class="contacts_content_item_subtitle">
                            <?
                            $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_DIR . "include/kontakty/title1.php"], false);
                            ?>
                        </div>
                        <div class="contacts_content_item_desc">
                            <?
                            $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_DIR . "include/kontakty/address.php"], false);
                            ?>
                        </div>
                        <?
                        $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_DIR . "include/kontakty/map.php"], false);
                        ?>
                    </div>
                </div>
                <div class="contacts_content_item-wr">
                    <div class="contacts_content_item">
                        <div class="contacts_content_item_subtitle">
                            <?
                            $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_DIR . "include/kontakty/title2.php"], false);
                            ?>
                        </div>
                        <div class="contacts_content_item_desc">
                            <?
                            $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_DIR . "include/kontakty/phone.php"], false);
                            ?>
                        </div>
                    </div>
                    <div class="contacts_content_item">
                        <div class="contacts_content_item_subtitle">
                            <?
                            $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_DIR . "include/kontakty/title3.php"], false);
                            ?>
                        </div>
                        <div class="contacts_content_item_desc">
                            <?
                            $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_DIR . "include/kontakty/email.php"], false);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="contacts_content_item-wr">
                    <div class="contacts_content_item">
                        <div class="contacts_content_item_subtitle">
                            <?
                            $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_DIR . "include/kontakty/title4.php"], false);
                            ?>
                        </div>
                        <div class="contacts_content_item_desc">
                            <?
                            $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_DIR . "include/kontakty/workHours.php"], false);
                            ?>
                        </div>
                    </div>
                    <div class="contacts_content_item">
                        <div class="contacts_content_item_subtitle">
                            <?
                            $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_DIR . "include/kontakty/title5.php"], false);
                            ?>
                        </div>
                        <div class="contacts_content_item_desc">
                            <?
                            $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_DIR . "include/kontakty/dopDesc.php"], false);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<? require_once $_SERVER['DOCUMENT_ROOT'] . '/local/templates/juno/forms/askQuestion.php'; ?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>