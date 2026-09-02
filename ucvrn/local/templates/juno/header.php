<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<!DOCTYPE html>
<html lang="ru"> 
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><? $APPLICATION->ShowTitle() ?></title>
        <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
        <link rel="manifest" href="/favicon/site.webmanifest">
        <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="/favicon/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="/favicon/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        <? CJSCore::Init(array("fx")); ?>
        <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/slick-theme.min.css", true); ?>
        <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/slick.min.css", true); ?>
        <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/jquery.fancybox.min.css", true); ?>
        <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/main.css", true); ?>
        <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/custom.css", true); ?>
        <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/responsive.css", true); ?>
        <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery-3.6.0.min.js"); ?>
        <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/slider-touch.js"); ?>
        <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/slider.js"); ?>
        <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/slick.min.js"); ?>
        <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.maskedinput.min.js"); ?>
        <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.fancybox.min.js"); ?>
        <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/script.js"); ?>
        <? $APPLICATION->ShowHead(); ?>
    </head>
    <body class="page">
        <div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
        <div class="header_menu_mobile" id="header_menu_mobile">
            <?
            $APPLICATION->IncludeComponent("bitrix:menu", "topMenuMobile", Array(
                "ALLOW_MULTI_SELECT" => "Y", // Разрешить несколько активных пунктов одновременно
                "CHILD_MENU_TYPE" => "left", // Тип меню для остальных уровней
                "DELAY" => "N", // Откладывать выполнение шаблона меню
                "MAX_LEVEL" => "2", // Уровень вложенности меню
                "MENU_CACHE_GET_VARS" => array(// Значимые переменные запроса
                    0 => "",
                ),
                "MENU_CACHE_TIME" => "3600", // Время кеширования (сек.)
                "MENU_CACHE_TYPE" => "A", // Тип кеширования
                "MENU_CACHE_USE_GROUPS" => "Y", // Учитывать права доступа
                "ROOT_MENU_TYPE" => "top", // Тип меню для первого уровня
                "USE_EXT" => "N", // Подключать файлы с именами вида .тип_меню.menu_ext.php
                    ),
                    false
            );
            ?>
            <div class="header_mobile_soc" style="display: none">
                <?
                $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_DIR . "include/header/header_soc_vk.php"], false);
                ?>
                <?
                $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_DIR . "include/header/header_soc_fb.php"], false);
                ?>
                <?
                $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_DIR . "include/header/header_soc_insta.php"], false);
                ?>
            </div>
            <a href="#callback" class="header_callback_btn btn--blue fancybox" style="margin-top: 40px">Заказать звонок</a>
            <div class="header_top_left_address">
                <?
                $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_DIR . "include/header/address.php"], false);
                ?>
            </div>
            <div class="header_top_left_contacts">
                <?
                $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_DIR . "include/header/phone.php"], false);
                ?>
                <?
                $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_DIR . "include/header/email.php"], false);
                ?>
            </div>
        </div>
        <div class="mobile_menu_bg"></div>
        <div class="main-wrap">
            <header class="header">
                <div class="header_top">
                    <div class="container">
                        <div class="header_top_left">
                            <div class="header_top_left_soc" style="display: none">
                                <?
                                $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_DIR . "include/header/header_soc_vk.php"], false);
                                ?>
                                <?
                                $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_DIR . "include/header/header_soc_fb.php"], false);
                                ?>
                                <?
                                $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_DIR . "include/header/header_soc_insta.php"], false);
                                ?>
                            </div>
                            <div class="header_top_left_address">
                                <?
                                $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_DIR . "include/header/address.php"], false);
                                ?>
                            </div>
                            <div class="header_top_left_contacts">
                                <?
                                $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_DIR . "include/header/phone.php"], false);
                                ?>
                                <?
                                $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_DIR . "include/header/email.php"], false);
                                ?>
                            </div>
                        </div>
                        <div class="header_top_right">
                            <div class="header_search_btn">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.6667 14.6667H15.6133L15.24 14.3067C16.5467 12.7867 17.3333 10.8133 17.3333 8.66667C17.3333 3.88 13.4533 0 8.66667 0C3.88 0 0 3.88 0 8.66667C0 13.4533 3.88 17.3333 8.66667 17.3333C10.8133 17.3333 12.7867 16.5467 14.3067 15.24L14.6667 15.6133V16.6667L21.3333 23.32L23.32 21.3333L16.6667 14.6667ZM8.66667 14.6667C5.34667 14.6667 2.66667 11.9867 2.66667 8.66667C2.66667 5.34667 5.34667 2.66667 8.66667 2.66667C11.9867 2.66667 14.6667 5.34667 14.6667 8.66667C14.6667 11.9867 11.9867 14.6667 8.66667 14.6667Z" fill="#004171"/> </svg>
                            </div>
                            <a href="#callback" class="header_callback_btn btn--blue fancybox">Заказать звонок</a>
                        </div>
                    </div>
                </div>
                <div class="header_menu-wr">
                    <div class="container">
                        <div class="header_logo">
                            <a href="<?= SITE_DIR ?>">
                                <img class="logo_dt" src="/local/templates/juno/img/logo.svg" alt="logo">
                                <img class="logo_mobile" src="/local/templates/juno/img/logo_mobile.svg" alt="logo">
                            </a>
                        </div>
                        <div class="header_menu">
                            <?
                            $APPLICATION->IncludeComponent("bitrix:menu", "topMenu", Array(
                                "ALLOW_MULTI_SELECT" => "Y", // Разрешить несколько активных пунктов одновременно
                                "CHILD_MENU_TYPE" => "left", // Тип меню для остальных уровней
                                "DELAY" => "N", // Откладывать выполнение шаблона меню
                                "MAX_LEVEL" => "2", // Уровень вложенности меню
                                "MENU_CACHE_GET_VARS" => array(// Значимые переменные запроса
                                    0 => "",
                                ),
                                "MENU_CACHE_TIME" => "3600", // Время кеширования (сек.)
                                "MENU_CACHE_TYPE" => "A", // Тип кеширования
                                "MENU_CACHE_USE_GROUPS" => "Y", // Учитывать права доступа
                                "ROOT_MENU_TYPE" => "top", // Тип меню для первого уровня
                                "USE_EXT" => "N", // Подключать файлы с именами вида .тип_меню.menu_ext.php
                                    ),
                                    false
                            );
                            ?>
                        </div>
                        <div class="mobile_menu_btn" id="show_mobile_menu"></div>
                    </div>
                </div>
            </header>
            <main>
                <?
                if (
                        $APPLICATION->GetCurPage() == '/' || defined('ERROR_404') || $APPLICATION->GetCurPage() == '/kontakty/' ||
                        (count(explode('/', $APPLICATION->GetCurPage())) == 5 && mb_strpos($APPLICATION->GetCurPage(), '/obuchenie/') !== false) ||
                        (count(explode('/', $APPLICATION->GetCurPage())) == 5 && mb_strpos($APPLICATION->GetCurPage(), '/distantsionnoe-obuchenie/') !== false)
                ) {
                    //nothing
                } else {
                    ?>
                    <div class="breadcrumb_section">
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

                                <h1 class="title h1"><? $APPLICATION->ShowTitle() ?></h1>
                            </div>
                        </div>
                    </div>
                <? } ?>