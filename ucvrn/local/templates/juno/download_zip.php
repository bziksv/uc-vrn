<?

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
// забираем все файлы по id и имени свойства
$_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
$sect = intval($_GET['sect']);
$iblock = intval($_GET['iblock']);
if (!CModule::IncludeModule("iblock")) {
    return;
}
$elemetsArr = getElemensList($iblock, true, ["SORT" => "ASC"], '', 1000, $sect);
//var_dump($elemetsArr);
// Очищаем папку с архивами за последние два дня
$filestoDel = glob($_SERVER['DOCUMENT_ROOT'] . '/upload/temp_zip/temp_' . "*.zip");
$now = time();
foreach ($filestoDel as $file) {
    if (is_file($file)) {
        if ($now - filemtime($file) >= 60 * 60 * 24 * 2) { // 2 days
            unlink($file);
        }
    }
}
// создаем архив
$zip = new ZipArchive();
$zip_name = $_SERVER['DOCUMENT_ROOT'] . '/upload/temp_zip/temp_' . date('d.m.Y') . '_' . mt_rand() . ".zip"; // Zip name
$zip->open($zip_name, ZipArchive::CREATE);
foreach ($elemetsArr as $key => $fileIdToArr) {
    $nameFile = $fileIdToArr['NAME'] . '.' . end(explode('.', CFile::GetPath($fileIdToArr['PROP_FILE']['VALUE'])));
    $path = $_SERVER['DOCUMENT_ROOT'] . CFile::GetPath($fileIdToArr['PROP_FILE']['VALUE']);
    $zip->addFromString($nameFile, file_get_contents($path));
}
$fileZipPath = str_replace($_SERVER['DOCUMENT_ROOT'], "", $zip->filename);
$zip->close();
// отдаем ссылку
echo $fileZipPath;
?>