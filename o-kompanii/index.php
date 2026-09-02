<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "О Центрально-Черноземном учебном центре");
$APPLICATION->SetTitle("О компании");
?>
<section class="about grey">
    <div class="container">
        <div class="title h2">
            <?
            $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                "PATH" => SITE_DIR . "include/o-kompanii/title1.php"], false);
            ?>
        </div>
        <div class="about-desc">
            <p>
                <b>
                    <?
                    $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_DIR . "include/o-kompanii/text1.php"], false);
                    ?>
                </b>
            </p>
            <p>
                <?
                $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_DIR . "include/o-kompanii/text2.php"], false);
                ?>
            </p>
        </div>
        <div class="about_about-uc">
            <div class="about_about-uc_desc">
                <div class="title h2">
                    <?
                    $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_DIR . "include/o-kompanii/title2.php"], false);
                    ?>
                </div>
                <p>
                    <?
                    $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_DIR . "include/o-kompanii/text3.php"], false);
                    ?>
                </p>
            </div>
            <div class="about_about-uc_links">
                <?
                $APPLICATION->IncludeComponent("bitrix:menu", "aboutMenu", Array(
                    "ALLOW_MULTI_SELECT" => "Y", // Разрешить несколько активных пунктов одновременно
                    "CHILD_MENU_TYPE" => "left", // Тип меню для остальных уровней
                    "DELAY" => "N", // Откладывать выполнение шаблона меню
                    "MAX_LEVEL" => "1", // Уровень вложенности меню
                    "MENU_CACHE_GET_VARS" => array(// Значимые переменные запроса
                        0 => "",
                    ),
                    "MENU_CACHE_TIME" => "3600", // Время кеширования (сек.)
                    "MENU_CACHE_TYPE" => "A", // Тип кеширования
                    "MENU_CACHE_USE_GROUPS" => "Y", // Учитывать права доступа
                    "ROOT_MENU_TYPE" => "left", // Тип меню для первого уровня
                    "USE_EXT" => "N", // Подключать файлы с именами вида .тип_меню.menu_ext.php
                        ),
                        false
                );
                ?>
            </div>
        </div>
    </div>
</section>
<section class="about-advantages">
    <div class="container">
        <div class="about-advantages_desc">
            <div class="title h2">
                <?
                $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_DIR . "include/o-kompanii/title3.php"], false);
                ?>
            </div>
            <p>
                <?
                $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_DIR . "include/o-kompanii/text4.php"], false);
                ?>
            </p>
        </div>   
        <div class="about-advantages_content">
            <div class="about-advantages_content_item">
                <div class="about-advantages_content_item_img">
                    <? $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR . "include/o-kompanii/advantages/img1.php"], false); ?>
                </div>
                <div class="about-advantages_content_item_title">
                    <? $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR . "include/o-kompanii/advantages/title1.php"], false); ?>
                </div>
                <div class="about-advantages_content_item_desc">
                    <? $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR . "include/o-kompanii/advantages/text1.php"], false); ?>
                </div>
            </div>
            <div class="about-advantages_content_item">
                <div class="about-advantages_content_item_img">
                    <? $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR . "include/o-kompanii/advantages/img2.php"], false); ?>
                </div>
                <div class="about-advantages_content_item_title">
                    <? $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR . "include/o-kompanii/advantages/title2.php"], false); ?>
                </div>
                <div class="about-advantages_content_item_desc">
                    <? $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR . "include/o-kompanii/advantages/text2.php"], false); ?>
                </div>
            </div>
            <div class="about-advantages_content_item">
                <div class="about-advantages_content_item_img">
                    <? $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR . "include/o-kompanii/advantages/img3.php"], false); ?>
                </div>
                <div class="about-advantages_content_item_title">
                    <? $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR . "include/o-kompanii/advantages/title3.php"], false); ?>
                </div>
                <div class="about-advantages_content_item_desc">
                    <? $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR . "include/o-kompanii/advantages/text3.php"], false); ?>
                </div>
            </div>
            <div class="about-advantages_content_item">
                <div class="about-advantages_content_item_img">
                    <? $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR . "include/o-kompanii/advantages/img4.php"], false); ?>
                </div>
                <div class="about-advantages_content_item_title">
                    <? $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR . "include/o-kompanii/advantages/title4.php"], false); ?>
                </div>
                <div class="about-advantages_content_item_desc">
                    <? $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR . "include/o-kompanii/advantages/text4.php"], false); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<? require_once $_SERVER['DOCUMENT_ROOT'] . '/local/templates/juno/forms/askQuestion.php'; ?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>