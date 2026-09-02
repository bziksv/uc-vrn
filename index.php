<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Центрально-Чернозёмный Учебный Центр");
?><section class="main-banner">
<div class="container">
	<div class="main-banner_content-wr">
		<div class="main-banner_content">
			<div class="main-banner_content_note">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."include/main/title1.php"
	)
);?>
			</div>
			<h1 class="main-banner_content_title">
			<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."include/main/title2.php"
	)
);?> </h1>
			<div class="main-banner_content_desc">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."include/main/text1.php"
	)
);?>
			</div>
 <a href="/o-kompanii/" class="btn--arrow main-banner_more" style="background-color: #fc5a0c; color: #fff; display:inline-block; padding:15px 20px; text-decoration:none;">
			<div>
			</div>
			 Подробнее о компании </a>
		</div>
		<div class="main-banner_links-wr">
			<div class="main-banner_programm-item">
 <a href="/obuchenie/" style="display:inline-block; width:400px; text-align:center;">
				Обучение </a>
			</div>
		</div>
	</div>
</div>
 </section> <section class="grey main-programm grey">
<div class="container">
	<div class="title h2">
		 Программы обучения
	</div>
	<div class="main-programm_content">
		<div class="main-programm_content-wr">
			<div class="programm-item">
 <a href="/obuchenie/okhrana-truda/" style="position:relative; display:block;">
				<div class="programm-item_wr">
					<div class="programm-item_nmb">
						 01.
					</div>
					<div class="programm-item_title">
						 Охрана труда
					</div>
				</div>
 <img src="/local/templates/juno/img/helmet-icon.svg" alt="" style="position:absolute; right:10px; top:50%; transform:translateY(-50%); width:140px; height:auto;"> </a>
			</div>
			<div class="programm-item">
 <a href="/obuchenie/pozharnaya-bezopasnost/">
				<div class="programm-item_wr">
					<div class="programm-item_nmb">
						 02.
					</div>
					<div class="programm-item_title">
						 Обучение мерам пожарной безопасности
					</div>
				</div>
 <img src="/local/templates/juno/img/extinguisher-icon.svg " alt="" style="right:0; margin-right: 10px"> </a>
			</div>
		</div>
		<div class="main-programm_content-wr flex">
			<div class="programm-item vertical blue">
 <a href="/obuchenie/dopog/">
				<div class="programm-item_wr">
					<div class="programm-item_nmb">
						 03.
					</div>
					<div class="programm-item_title">
						 ДОПОГ. Перевозка опасных грузов автомобильным транспортом
					</div>
				</div>
 <img src="/local/templates/juno/img/ico3.png" alt="" style="right:0"> </a>
			</div>
			<div class="programm-item vertical blue">
 <a href="/obuchenie/traktoristy-voditeli-pogruzchika/">
				<div class="programm-item_wr">
					<div class="programm-item_nmb">
						 04.
					</div>
					<div class="programm-item_title">
						 Трактористы, водители погрузчика
					</div>
				</div>
 <img src="/local/templates/juno/img/tractor.svg" alt="" style="right:0;"> </a>
			</div>
		</div>
	</div>
 <a href="/obuchenie/" class="btn--arrow main-programm_more" style="background-color: #fc5a0c; color: #fff; display:inline-block; padding:15px 20px; text-decoration:none;">
	<div>
	</div>
	 все программы </a>
</div>
 </section> <section class="main_specialties">
<div class="container">
	<div class="title h2">
		 Рабочие специальности
	</div>
	<div class="main_specialties_content">
		 <? $GLOBALS['filterProgMainPage'] = ['PROPERTY_PROP_SHOW_ON_MAIN_VALUE' => 'да', 'PROPERTY_PROP_IS_SPEC_VALUE' => 'да'] ?> <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"mainPageLearnSpec",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "filterProgMainPage",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "9",
		"IBLOCK_TYPE" => "learning",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "7",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("PROP_FORMAT","PROP_SROK","PROP_RES_DOC","PROP_COST","PROP_ONLINE","PROP_SHOW_ON_MAIN","PROP_IS_SPEC","PROP_MAIN_TITLE","PROP_MAIN_DESC","PROP_MAIN_ORDER"),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "PROPERTY_PROP_MAIN_ORDER",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
	</div>
</div>
 </section>
<? require_once $_SERVER['DOCUMENT_ROOT'] . '/local/templates/juno/forms/requestQuest.php'; ?> <section class="main-news grey">
<div class="container">
	<div class="title h2">
		 Новости
	</div>
	<div class="main-news-wr">
		<div class="main-news_slider-wr">
			<div class="main-news_slider">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"newsListSlider",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "newsListSlider",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"DATE_ACTIVE_FROM",1=>"DATE_CREATE",2=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "novosti",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "10",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "TIMESTAMP_X",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
			</div>
		</div>
		<div class="main-news_controls-wr">
 <a href="/o-kompanii/novosti/" class="btn--arrow main-news_more">
			<div>
			</div>
			 все новости </a>
			<div class="main-news_controls_btns">
				<div class="main-news_controls_btn left arrow">
				</div>
				<div class="main-news_controls_btn right arrow">
				</div>
			</div>
		</div>
	</div>
</div>
 </section>
<? require_once $_SERVER['DOCUMENT_ROOT'] . '/local/templates/juno/forms/askQuestion.php'; ?><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>