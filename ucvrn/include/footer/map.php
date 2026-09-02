<?
if (detectMobile()) {
    if (in_array(getOS()['platform'], ['iPhone'])) {
        $href = 'http://maps.apple.com/?address=Минская ул.,2Б,Воронеж,Россия';
    } else {
        $href = 'geo:51.680528,39.256185';
    }
} else {
    $href = 'https://yandex.ru/maps/-/CCUu7Qsj-B';
}
?>
<a href="<?= $href ?>" class="footer_map" target="_blank" >
    показать  на карте
</a>