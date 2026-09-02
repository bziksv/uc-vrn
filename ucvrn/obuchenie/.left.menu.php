<?

$sectionList = getSectionList(9);
foreach ($sectionList as $section) {
    $aMenuLinks[] = [$section['NAME'], $section['SECTION_PAGE_URL'], [], [], ''];
}
?>