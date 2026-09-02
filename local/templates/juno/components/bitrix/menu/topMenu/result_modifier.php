<?php
// работает только для второго уровня вложенности
foreach ($arResult as $key => $menuItem) {
    if ($menuItem['DEPTH_LEVEL'] == 1) {
        $newArr[$key] = $menuItem;
    }
}
foreach ($newArr as $key => $menuItem) {
    if ($menuItem['IS_PARENT'] == 1) {
        for ($i = $key + 1; $i < count($arResult); $i++) {
            if ($arResult[$i]['DEPTH_LEVEL'] <= $menuItem['DEPTH_LEVEL']) {
                break;
            }
            $newArr[$key]['CHILD'][] = $arResult[$i];
        }
    }
}
$arResult = $newArr;
