</main>
<footer class="footer">
    <div class="container">
        <div class="footer_content-wr">
            <div class="footer_item raba_custom">
                <a class="footer_logo" href="<?= SITE_DIR ?>">
                    <img src="/local/templates/juno/img/logo-footer.svg" alt="">
                </a>
                <div>
                    <?
                    $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_DIR . "include/footer/address.php"], false);
                    ?>
                </div>
                <div>
                    <?
                    $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_DIR . "include/footer/map.php"], false);
                    ?>
                </div>
                <div>
                    <?
                    $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_DIR . "include/footer/workHours.php"], false);
                    ?>
                </div>
                <div>
                    <?
                    $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_DIR . "include/footer/phone.php"], false);
                    ?>
                </div>
                <div>
                    <?
                    $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_DIR . "include/footer/email.php"], false);
                    ?>
                </div>
                <div class="footer_soc" style="display: none">
                    <?
                    $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_DIR . "include/footer/footer_soc_vk.php"], false);
                    ?>
                    <?
                    $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_DIR . "include/footer/footer_soc_fb.php"], false);
                    ?>
                    <?
                    $APPLICATION->IncludeComponent("bitrix:main.include", "", ["AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_DIR . "include/footer/footer_soc_insta.php"], false);
                    ?>
                </div>
            </div>
            <div class="footer_item">
                <?
                $APPLICATION->IncludeComponent("bitrix:menu", "topMenuInFooter", Array(
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
                    "ROOT_MENU_TYPE" => "top", // Тип меню для первого уровня
                    "USE_EXT" => "N", // Подключать файлы с именами вида .тип_меню.menu_ext.php
                        ),
                        false
                );
                ?>
            </div>

            <div class="footer_item">
                <?
                $APPLICATION->IncludeComponent("bitrix:menu", "topMenuInFooterNoBold", Array(
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
                    "ROOT_MENU_TYPE" => "freeMenu1", // Тип меню для первого уровня
                    "USE_EXT" => "N", // Подключать файлы с именами вида .тип_меню.menu_ext.php
                        ),
                        false
                );
                ?>
            </div>
            <div class="footer_item">
                <?
                $APPLICATION->IncludeComponent("bitrix:menu", "topMenuInFooterNoBold", Array(
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
                    "ROOT_MENU_TYPE" => "freeMenu2", // Тип меню для первого уровня
                    "USE_EXT" => "N", // Подключать файлы с именами вида .тип_меню.menu_ext.php
                        ),
                        false
                );
                ?>
            </div>

        </div>
        <div class="footer_bottom">
            <div class="footer_bottom_copy">&copy; АНО ДПО «ЦЧР Учебный Центр»</div>
            <div class="footer_bottom_dev">

                <span> Дизайн и разработка</span> 
                <a href="https://juno.ru" target="_blank"> 
                    <svg width="78" height="29" viewBox="0 0 78 29" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M21.416 10C22.256 10 23.012 10.188 23.684 10.564C24.364 10.94 24.896 11.46 25.28 12.124C25.664 12.78 25.856 13.52 25.856 14.344C25.856 15.168 25.664 15.912 25.28 16.576C24.896 17.232 24.364 17.748 23.684 18.124C23.012 18.5 22.256 18.688 21.416 18.688C20.664 18.688 19.976 18.54 19.352 18.244C18.728 17.94 18.212 17.52 17.804 16.984C17.404 16.44 17.148 15.82 17.036 15.124H15.932V18.544H14V10.144H15.932V13.444H17.06C17.188 12.772 17.452 12.176 17.852 11.656C18.26 11.128 18.772 10.72 19.388 10.432C20.004 10.144 20.68 10 21.416 10ZM21.416 17.032C21.88 17.032 22.3 16.92 22.676 16.696C23.052 16.472 23.348 16.156 23.564 15.748C23.78 15.34 23.888 14.872 23.888 14.344C23.888 13.816 23.78 13.348 23.564 12.94C23.348 12.532 23.052 12.216 22.676 11.992C22.3 11.768 21.88 11.656 21.416 11.656C20.952 11.656 20.532 11.768 20.156 11.992C19.78 12.216 19.484 12.532 19.268 12.94C19.052 13.348 18.944 13.816 18.944 14.344C18.944 14.872 19.052 15.34 19.268 15.748C19.484 16.156 19.78 16.472 20.156 16.696C20.532 16.92 20.952 17.032 21.416 17.032Z" fill="white"/> <path d="M35.0751 10.144V18.544H33.1311V15.1H29.3151V18.544H27.3711V10.144H29.3151V13.456H33.1311V10.144H35.0751Z" fill="white"/> <path d="M41.1877 18.688C40.3157 18.688 39.5277 18.5 38.8237 18.124C38.1277 17.748 37.5797 17.232 37.1797 16.576C36.7877 15.912 36.5917 15.168 36.5917 14.344C36.5917 13.52 36.7877 12.78 37.1797 12.124C37.5797 11.46 38.1277 10.94 38.8237 10.564C39.5277 10.188 40.3157 10 41.1877 10C42.0597 10 42.8437 10.188 43.5397 10.564C44.2357 10.94 44.7837 11.46 45.1837 12.124C45.5837 12.78 45.7837 13.52 45.7837 14.344C45.7837 15.168 45.5837 15.912 45.1837 16.576C44.7837 17.232 44.2357 17.748 43.5397 18.124C42.8437 18.5 42.0597 18.688 41.1877 18.688ZM41.1877 17.032C41.6837 17.032 42.1317 16.92 42.5317 16.696C42.9317 16.464 43.2437 16.144 43.4677 15.736C43.6997 15.328 43.8157 14.864 43.8157 14.344C43.8157 13.824 43.6997 13.36 43.4677 12.952C43.2437 12.544 42.9317 12.228 42.5317 12.004C42.1317 11.772 41.6837 11.656 41.1877 11.656C40.6917 11.656 40.2437 11.772 39.8437 12.004C39.4437 12.228 39.1277 12.544 38.8957 12.952C38.6717 13.36 38.5597 13.824 38.5597 14.344C38.5597 14.864 38.6717 15.328 38.8957 15.736C39.1277 16.144 39.4437 16.464 39.8437 16.696C40.2437 16.92 40.6917 17.032 41.1877 17.032Z" fill="white"/> <path d="M54.9853 10.144V18.544H53.0413V15.1H49.2253V18.544H47.2812V10.144H49.2253V13.456H53.0413V10.144H54.9853Z" fill="white"/> <path d="M62.7778 16.744H58.8778L58.1338 18.544H56.1418L59.8858 10.144H61.8058L65.5618 18.544H63.5218L62.7778 16.744ZM62.1658 15.268L60.8338 12.052L59.5018 15.268H62.1658Z" fill="white"/> <rect x="0.5" y="0.5" width="76.5618" height="27.688" stroke="white"/> </svg>
                </a>

<a href="https://prime-ltd.su/?from=uc-vrn.ru">
    <img src="http://prime-ltd.su/logo/white.svg" title="Продвижение сайтов" alt="Продвижение сайтов" width="180">
</a>

            </div>
        </div>

		<div style="border-top: 1px solid #fff; padding: 15px 0;">Мы используем <a target="_blank" style="color: #fff;" href="/legal/cookie/">cookie-файлы</a> в целях предоставления вам лучшего пользовательского опыта на нашем сайте. Продолжая использовать данный сайт, вы <a target="_blank" style="color: #fff;" href="/legal/consent/">даете согласие</a> на обработку ваших персональных данных в соответствии с нашей <a target="_blank" style="color: #fff;" href="/legal/personal-data/">политикой обработки персональных данных</a> и правилами применения <a target="_blank" style="color: #fff;" href="/legal/recommendation/">рекомендательных технологий</a>. Чтобы отказаться от cookie, отключите их сохранение в настройках вашего браузера.</div>

    </div>

</footer>
</div>
<?
require_once $_SERVER['DOCUMENT_ROOT'] . '/local/templates/juno/forms/searchPopup.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/local/templates/juno/forms/requestCallPopup.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/local/templates/juno/forms/requestEduPopup.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/local/templates/juno/forms/requestQuestionPopup.php'
?>
<div class="preloader_raba"></div>


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(29727650, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/29727650" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>