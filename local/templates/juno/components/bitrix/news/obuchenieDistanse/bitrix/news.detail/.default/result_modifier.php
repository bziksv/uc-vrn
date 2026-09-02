<?php
// забираем группы
$selectGroup = ["ID", "NAME", "IBLOCK_ID", "PREVIEW_TEXT"];
$filterGroup = ['IBLOCK_ID' => $arResult["PROPERTIES"]["PROP_GROUPS"]['LINK_IBLOCK_ID'], 'ACTIVE' => 'Y', 'SECTION_ID' => $arResult["PROPERTIES"]["PROP_GROUPS"]['VALUE']];
$groupQuery = CIBlockElement::GetList(["SORT" => "ASC"], $filterGroup, false, ['nPageSize' => '30'], $selectGroup);
while ($groupObj = $groupQuery->GetNextElement()) {
    $groupItem[] = array_merge($groupObj->GetFields(), $groupObj->GetProperties());
}
$arResult['CUST_GROUPS'] = $groupItem;
