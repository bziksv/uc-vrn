<?
include_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404", "Y");

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetTitle("Страница не найдена");
?>
<div class="page_content">
    <div class="container p404">
        <div class="text_container">
            <h1>Страница не найдена</h1>
            <p>К сожалению страница не найдена, либо она ещё <br>в разработке. Но вы можете вернуться на главную</p>
        </div>
        <a href="<?=SITE_DIR?>" class="to_main_link">
            <span class="btn_svg_ico">
                <svg width="21" height="12" viewBox="0 0 21 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20.5303 6.53033C20.8232 6.23744 20.8232 5.76256 20.5303 5.46967L15.7574 0.696699C15.4645 0.403806 14.9896 0.403806 14.6967 0.696699C14.4038 0.989593 14.4038 1.46447 14.6967 1.75736L18.9393 6L14.6967 10.2426C14.4038 10.5355 14.4038 11.0104 14.6967 11.3033C14.9896 11.5962 15.4645 11.5962 15.7574 11.3033L20.5303 6.53033ZM0 6.75H20V5.25H0V6.75Z" fill="white"/></svg>
            </span>
            <span class="btn_desc">На главную</span>
        </a>
    </div>
</div>
<script>
    $(document).ready(function () {
        if ($(document).width() > 1000) {
            $('main').css('position', 'relative');
            $('main').addClass('error404');
            $('main').append('<div class="bg_404"></div>');
            $('main>*').css('position', 'relative');
            $('main>*').css('z-index', '2');
            $('.bg_404').fadeIn();
        }
    });
</script>
<? require_once $_SERVER['DOCUMENT_ROOT'] . '/local/templates/juno/forms/askQuestion.php'; ?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>