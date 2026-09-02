<?

error_reporting(0);
ini_set('display_errors', 0);

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
if (!CModule::IncludeModule("iblock")) {
    return;
}
// проверка капчи
if ($_POST["clickField"] != 'click_true' || $_POST["inputField"] != 'keyBoard_true') {
    echo json_encode(array('success' => false, 'title' => 'Ошибка!', 'text' => 'Вы почему-то не прошли проверку антиспама. Попробуйте не использовать автозаполнение.'));
    die();
}
// Проверка осознания и принятия себя Согласие на обработку персональных даный
if (!isset($_POST['agreement'])) {
    echo json_encode(array('success' => false, 'title' => 'Ошибка!', 'text' => 'Дайте согласие на обработку персональных данных!'));
    die();
}
// проверка капчи END
// добавляем заявку в админку
$msgObj = new CIBlockElement;
if ($_POST["formTitle"]) {
    $PROP['PROP_FORM_TITLE'] = htmlspecialchars($_POST["formTitle"]);
}
if ($_POST["name"]) {
    $PROP['PROP_NAME'] = htmlspecialchars($_POST["name"]);
}
if ($_POST["phone"]) {
    $PROP['PROP_PHONE'] = htmlspecialchars($_POST["phone"]);
}
if ($_POST["email"]) {
    $PROP['PROP_EMAIL'] = htmlspecialchars($_POST["email"]);
}
if ($_POST["spec"]) {
    $PROP['PROP_SPEC'] = htmlspecialchars($_POST["spec"]);
}
if ($_POST["page"]) {
    $PROP['PROP_PAGE'] = htmlspecialchars($_POST["page"]);
}
if ($_POST["question"]) {
    $PROP['PROP_QUESTION'] = htmlspecialchars($_POST["question"]);
}


$formType = [
    'IBLOCK_ID' => 13,
    'CEvent' => 32,
    'elementName' => $PROP['PROP_FORM_TITLE'] . ', ' . $PROP['PROP_NAME'],
];

$resultAdd = $msgObj->Add([
    'ACTIVE' => 'Y', "PROPERTY_VALUES" => $PROP,
    'IBLOCK_ID' => 13,
    'NAME' => $PROP['PROP_FORM_TITLE'] . ', ' . $PROP['PROP_NAME'],
        ]);
// добавляем заявку в админку END
// отправляем письма
$resultSend = CEvent::Send('FEEDBACK_MSG', SITE_ID, $PROP, "Y", 32);

echo (
$resultAdd && $resultSend ?
        json_encode(array('success' => true, 'title' => 'Спасибо!', 'text' => 'Спасибо, ваша заявка принята!<br> Мы свяжемся с вами в ближайшее время.')) :
        json_encode(array('success' => false, 'title' => 'Ошибка!', 'text' => 'Что-то пошло не так...<br>' . $answer))
);
