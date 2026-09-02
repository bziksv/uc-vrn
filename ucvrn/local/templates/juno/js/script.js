$(document).ready(function () {

    $(".main-news_slider").slick({
        nextArrow: '.main-news_controls_btn.right',
        prevArrow: '.main-news_controls_btn.left',
        slidesToShow: 4,
        responsive: [
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 910,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 510,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]

    });
    let agrees = $('input[type="checkbox"]');
    agrees.click(function () {
        agrees.each(function () {
            if ($(this).is(':checked')) {
                let form = $(this).closest('form');
                let btn = form.find('button');
                btn.removeAttr('disabled');
                btn.removeClass('disabled');
                let lbl = $(this).prev('label');
                lbl.addClass('checked');
            } else {
                let form = $(this).closest('form');
                let btn = form.find('button');
                btn.attr('disabled', 'disabled');
                let lbl = $(this).prev('label');
                lbl.removeClass('checked');
                btn.addClass('disabled');
            }
        });
    });

    $('.custom-selector_header').click(function () {
        $(this).parent().toggleClass('active');
    });
    $('.custom-selector_body_item').click(function () {
        $('.custom-selector').toggleClass('active');
        $('.custom-selector_header .select__current').text($(this).text());
        $('.custom-selector .custom-selector_header').addClass('choisen');
        $('.custom-selector #selector').val($(this).text());
    });
    $('.text_container').find('table').each(function () {
        $(this).wrap('<div class="over_table"></div>');
    });
    $('.faq_item .faq_title').click(function () {
        $(this).parent('.faq_item').toggleClass('active');
    });
    $('.learning_group_title').click(function () {
        $(this).toggleClass('active');
    });
    $('.tab_label_container span').click(function () {
        $('.tab_label_container span').removeClass('active');
        $(this).addClass('active');
        var tabIndex = $(this).index();
        $('.tab_value_container .tab_value_item').removeClass('active');
        $('.tab_value_container .tab_value_item').eq(tabIndex).addClass('active');
    });
    // раскрывающийся блок
    if ($('.read_more_container').length) {
        if (($('.read_more_container').height() > 600)) {
            $('.read_more_container_btn').fadeIn();
            $('.read_more_container').addClass('blure');
            $('.read_more_container').css('max-height', '370px');
        }
    }
    $('.read_more_container_btn').click(function () {
        $(this).prev('.read_more_container').toggleClass('active')
    });
    $('.popup_description').click(function () {
        $(this).toggleClass('active');
        $(this).find('.popup_description_container').toggleClass('active');
    });
    $('.question-form .drop_select_value').click(function () {
        $(this).toggleClass('active');
        $(this).next('.drop_select_item_container').toggleClass('active');
    });
    $('.question-form .drop_select_item').click(function () {
        $('.drop_select_value, .drop_select_item_container').removeClass('active');
        $(this).closest('.drop_select_container').find('input[type="hidden"]').val($(this).html());
        $(this).closest('.drop_select_container').find('.drop_select_value').html($(this).html());
    });

    $('.header_search_btn, .close_form_search').click(function () {
        $('.search_form_popup').toggleClass('active');
    });
    $('.header_search_btn_mobile').click(function () {
        $('.search_form_popup').toggleClass('active');
        $('#header_menu_mobile').removeClass('active');
    });
    $(document).keyup(function (e) {
        if (e.key === "Escape") {
            $('.search_form_popup').toggleClass('active');
        }
    });
    $('.fancybox').fancybox();
    // подмена ссылки для карты ------------------------------------------------
//    changeMapLink();
//    $(window).on('resize', function () {
//        changeMapLink();
//    });
//    function changeMapLink() {
//        if ($(document).width() < 900) {
//            $('.map_geo_link').attr('href', $('.map_geo_link').data('geo'));
//        } else {
//            $('.map_geo_link').attr('href', $('.map_geo_link').data('map_link'));
//        }
//    }
    // подмена ссылки для карты END --------------------------------------------
    // Замена стандартного прелоадера ------------------------------------------
    BX.showWait = function () {
        $('.preloader').addClass('active');
    };

    BX.closeWait = function () {
        $('.preloader').removeClass('active');
    };
    // Замена стандартного прелоадера END --------------------------------------
    // FORMS -------------------------------------------------------------------
    $('input[type="tel"]').mask('+7 (999) 999-99-99');
    //генерируем случайную строку
    function makeid(length) {
        var result = '';
        var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var charactersLength = characters.length;
        for (var i = 0; i < length; i++) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }
        return result;
    }
    //генерируем случайную строку END
    $("form.send_mail_raba").append('<input type="hidden" name="clickField" class="clickField" value="' + makeid(10) + '" />');
    $("form.send_mail_raba").append('<input type="hidden" name="inputField" class="inputField" value="' + makeid(10) + '" />');
    $("body").append('\
                    <div class="response_container">\n\
                        <div class="response">\n\
                            <div class="response_wrap">\n\
                                <div class="response_close_cros"><svg width="20" height="20" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.2929 10.9203L0 21.2132L0.707092 21.9203L11 11.6274L21.2929 21.9203L22 21.2132L11.7071 10.9203L21.9203 0.707108L21.2132 0L11 10.2132L0.786804 0L0.0797119 0.707108L10.2929 10.9203Z"></path></svg></div>\n\
                                <div class="response_title">Title</div>\n\
                                <div class="response_text">text</div>\n\
                                    <div class="response_close btn--green">Закрыть</div>\n\
                            </div>\n\
                        </div>\n\
                    </div>');

    function closeForm() {
        $(".response").fadeOut(500);
        $(".response_container").fadeOut(500);
        $('.feedback-wrapper').css("display", "none");
        $('.page-blur').removeClass('page-wrap-fix');
        $('.page').css("overflow", "auto");
    }
    $(".response_close").on('click', closeForm);
    $(".response_close_cros").on('click', closeForm);
    // типа капча
    $(".send_mail_raba input").on('click', (function () {
        $(".send_mail_raba .clickField").val("click_true");
    }));
    $(".send_mail_raba input").on("keydown", function () {
        $(".send_mail_raba .inputField").val("keyBoard_true");
    });
    // типа капча END
    // отправка записи на заселение --------------------------------------------
    $("form.send_mail_raba").submit(function (e) {
        e.preventDefault();
        $('.preloader').addClass('active');
        var form = $(this), data = new FormData(this);
        $.ajax({
            type: 'POST', url: '/local/templates/juno/forms/ajax_sendForm.php',
            data: data,
            cache: false, contentType: false, processData: false, mimeType: "multipart/form-data", dataType: "json",
            success: function (msg) {
                $('.preloader').removeClass('active');
                $('.fancybox-close-small').trigger('click');
                // показываем сообщение
                $(".response .response_title").html(msg.title);
                $(".response .response_text").html(msg.text);
                $(".response").fadeIn(500);
                $(".response_container").fadeIn(500);
                setTimeout(function () {
                    $(".response").fadeOut(500);
                    $(".response_container").fadeOut(500);
                }, 20000);
                // показываем сообщение END
            },
            error: function (xhr, str) {
                $('.preloader').removeClass('active');
                console.log('error');
                console.log(xhr);
                console.log(str);
            }
        });
    });
    // FORMS END ---------------------------------------------------------------
    // прячем элементы в меню Обучение -----------------------------------------
    $('.tab_label_container a').each(function (index, value) {
        if (index > 5) {
            $(this).fadeOut();
        }
    });
    if ($('.tab_label_container a').length > 5) {
        $('.show_more_tabs').addClass('show');
    }
    $('.show_more_tabs').click(function () {
        $('.tab_label_container a').fadeIn();
        if ($(this).hasClass('rotate')) {
            $('.tab_label_container a').each(function (index, value) {
                if (index > 5) {
                    $(this).fadeOut();
                }
            });
        }
        $(this).toggleClass('rotate');
        $(this).closest('.tab_label_container').toggleClass('full_height');
    })
    // прячем элементы в меню Обучение END -------------------------------------
    // поиск по документам
    $('#clear_search_doc').click(function () {
        window.location.href = location.protocol + '//' + location.host + location.pathname;
    })
    // поиск по документам END
    // мобилка
    $('#show_mobile_menu').click(function (event) {
//        event.stopPropagation();
        $('#header_menu_mobile').addClass('active');
    });
    $('#hide_mobile_menu').click(function () {
        $('#header_menu_mobile').removeClass('active');
    });
//    $('body').click(function (event) {
//        event.stopPropagation();
//        if ($('#header_menu_mobile').hasClass('active')) {
//            $('#header_menu_mobile').removeClass('active');
//        }
//    });
    $('.parent_menu_mobile_arrow').click(function (e) {
        e.preventDefault();
        $(this).closest('.parent_menu_mobile').toggleClass('active');
    });
    $('.mobile_menu_bg').click(function () {
        $('#header_menu_mobile').removeClass('active');
    });
    // мобилка END
});