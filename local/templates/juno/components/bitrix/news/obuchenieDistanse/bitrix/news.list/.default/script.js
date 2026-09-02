$(document).ready(function () {
    $('.load_more_docs').on('click', function (e) {
        e.preventDefault();
        var countDosc = 1;
        $('.tab_value_item.active .no_active').each(function () {
            $(this).css('display', 'block');
            $(this).removeClass('no_active');
            if (countDosc == 4) {
                return false;
            }
            countDosc++;
        });
        if(!$('.tab_value_item.active .no_active').length){
            $('.ajax_load.load_more_docs').fadeOut();
        }
    });
})