$(document).ready(function () {
// загрузка архива
    $('.download_zip_raba').click(function (e) {
        $('.preloader_raba').first().addClass('active');
        $.get("/local/templates/juno/download_zip.php", {sect: $(this).data('sect'), iblock: $(this).data('iblock')}, onAjaxSuccess);
    });
    function onAjaxSuccess(data)
    {
        setTimeout(function () {
            $('.preloader_raba').first().removeClass('active');
        }, 2000);
        window.location.href = data;
    }
//    печать

});
function printDiv() {
    var divToPrint = document.getElementById('DivIdToPrint');
    var newWin = window.open('', 'Print-Window');
    newWin.document.open();
    newWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</body></html>');
    newWin.document.close();
//        setTimeout(function () {
//            newWin.close();
//        }, 10);

}