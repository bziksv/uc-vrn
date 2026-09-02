<div class="news_item_container teacher_detail_page">
    <div class="text_container">
        <div class="teacher_dolj">Должность: <?= $arResult["PROPERTIES"]['PROP_DOLJ']['VALUE'] ?></div>
        <?= $arResult["DETAIL_TEXT"]; ?>
    </div>
    <a href="<?= $arResult['LIST_PAGE_URL'] ?>" class="back_to_list">Вернуться к списку</a>
</div>