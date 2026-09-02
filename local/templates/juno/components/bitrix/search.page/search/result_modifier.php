<?

foreach ($arResult["SEARCH"] as &$arItem) {
    $res = CIBlockElement::GetList([], ['ID' => $arItem['ITEM_ID']], false, false, ["ID", "NAME", "IBLOCK_ID"]);
    if ($ob = $res->GetNextElement()) {
        $arElementFiedls = $ob->GetProperties();
        // для элементов с документами - добавляем ссылку на файл
        if($arElementFiedls['PROP_FILE']['VALUE']){
            $arItem['PROP_FILE']=$arElementFiedls['PROP_FILE']['VALUE'];
        }
    }
}
?>