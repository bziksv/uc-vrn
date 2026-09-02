$(document).ready(function () {
    $(document).on('click', '.load_more', function (e) {
        e.preventDefault();
        $('.preloader_raba').addClass('active');
        var targetContainer = $('#load_more_container'), //  Контейнер, в котором хранятся элементы
                url = $('.load_more').attr('data-url');    //  URL, из которого будем брать элементы
        if (url !== undefined) {
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'html',
                success: function (data) {
                    $('.load_more').remove();
                    var elements = $(data).find('.load_more_element'), //  Ищем элементы
                            pagination = $(data).find('.load_more');//  Ищем навигацию
                    targetContainer.append(elements);   //  Добавляем посты в конец контейнера
                    targetContainer.after(pagination); //  добавляем навигацию следом
                    $('.fancybox').fancybox();
                    setTimeout(function () {
                        $('.preloader_raba').removeClass('active');
                    }, 1000);
                }
            });
        }
    });
});