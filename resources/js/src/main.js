import SVGInliner from 'svg-inliner';
import swal from 'sweetalert';

document.addEventListener('DOMContentLoaded', function () {
    //svg inliner
    new SVGInliner(document.querySelectorAll(".svg-to-inline"), function () {});

    if (document.querySelector('.js-burger')) {
        $('.js-burger').on('click', function () {
            if ($('.header').hasClass('header--open')) {
                $('body').removeClass('body-overflow');
                $('.header').removeClass('header--open');
            } else {
                $('body').addClass('body-overflow');
                $('.header').addClass('header--open');
            }
        })
    }

    if (document.querySelector('.js-reviews-slider')) {
        $('.js-reviews-slider').slick({
            infinite: true,
            slidesToShow: 3,
            prevArrow: document.querySelector('.js-reviews-left-arrow'),
            nextArrow: document.querySelector('.js-reviews-right-arrow'),
            responsive: [
                {
                    breakpoint: 1023,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 639,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    }

    if (document.querySelector('.js-faq')) {
        $('.js-faq').click(function () {
            $(this).closest('.js-faq-item').toggleClass('active');
        });
    }

    if (document.querySelector('.js-contacts')) {
        $('.js-contacts').click(function () {
            if ($('.header').hasClass('header--open')) {
                $('body').removeClass('body-overflow');
                $('.header').removeClass('header--open');
            }
        });
    }


    //validation
    $.validator.addMethod("plus", function (value, element) {
        var Reg61 = new RegExp("^.*[^+-/(/)1234567890 ].*$");
        return !Reg61.test(value);
    });

    $.validator.addMethod("notnumbers", function (value, element) {
        var Reg61 = new RegExp("^.*[^A-zА-яЁёіЇїЄєҐґ ].*$");
        return !Reg61.test(value);
    });

    //add validation rules
    var rules = {
        email: {
            email: true,
        },
        name: {
            required: true,
            notnumbers: true,
            minlength: 2,
        },
        phone: {
            required: true,
            plus: true,
            minlength: 10
        },
    }

    // validation example
    if (document.querySelector('.js-contacts-form')) {
        let form = $('.js-contacts-form');
        form.validate({
            rules: rules,
            highlight: function (element, errorClass) {
                $(element).parent().addClass('input--error');
            },
            unhighlight: function (element, errorClass) {
                $(element).parent().removeClass('input--error');
            },
            submitHandler: function submitHandler(form) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.post('/send_contact_form', {
                    name: $(form).find('input[name="name"]').val(),
                    phone: $(form).find('input[name="phone"]').val(),
                    email: $(form).find('input[name="email"]').val(),
                    text: $(form).find('textarea').val()
                }).done(function (data) {
                    if (data.success) {
                        swal('Дякуємо за Вашу заявку', 'Наш менеджер скоро з вами зв\'яжеться', 'success');
                    } else {
                        swal('Помилка з\'єднання..', 'Спробуйте ще раз пізніше', 'error');
                    }
                    const validator = $('.js-contacts-form').validate();
                    validator.resetForm();
                    document.querySelector('.js-contacts-form').reset();
                }).catch(function (data) {
                    swal('Помилка з\'єднання..', 'Спробуйте ще раз пізніше', 'error');
                });
            }
        })
    }

});
