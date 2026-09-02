<?
//require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
//$APPLICATION->SetTitle("dev");

error_reporting(E_ALL|E_STRICT);

ini_set('display_errors', 1);

ini_set('sendmail_from', 'no-reply@uc-vrn.ru');

$mail_to = 'test@mail.ru';

// Отправляем
$return = mail($mail_to, 'My Subject', 'message');

var_dump($return);

echo '<hr>';

// echo phpinfo();

//require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>