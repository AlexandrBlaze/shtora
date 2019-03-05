$(document).ready(function () {
    //меню
    $(function () {
        $("#menu").mmenu({
            navbar		: {
                title			: ""
            },
            navbars		: [
                {
                    type		: 'tabs',
                    content		: [
                        '<a href="#panel-menu"><i class="fa fa-bars"></i> <span>Меню</span></a>',
                        '<a href="#panel-cart"><i class="fa fa-shopping-cart"></i> <span>Корзина</span></a>',
                        '<a href="#panel-contacts"><i class="fa fa-phone" aria-hidden="true"></i> <span>Контакты</span></a>'
                    ]
                }
            ],
        });
    });
    //десктоп меню
    var menu__block = $('.drop__menu');
    $('[data-lvl=2], [data-lvl=3]', menu__block).hide();
    menu__block.on('mouseenter','li', function () {

        var id = $(this).attr('data-id'), lvl= $(this).parent('ul').attr('data-lvl');

        if ( lvl == 1 ) {
            $('[data-lvl=2], [data-lvl=3]', menu__block).hide();
            $('li.active', menu__block).removeClass('active');
        }

        else if ( lvl == 2 ) {
            $('[data-lvl=3]', menu__block).hide();
            $('[data-lvl=2], [data-lvl=3]', menu__block).find('li.active').removeClass('active');
        }
        else if ( lvl == 3 ) {
            $('[data-lvl=3]', menu__block).find('li.active').removeClass('active');
        }

        menu__block.find('[data-parent=' + id + ']').show();
        $(this).addClass('active');

    });

    $('.category__title').on('click', function () {
        if (window.innerWidth <= 1024) {
            $(this).toggleClass('open')
            $(this).parents('.sidebar__row').find('.category__list').toggleClass('d-block');
            $(this).parents('.sidebar__row').find('.color__pick').toggleClass('d-flex');
        }
    });



    // $('.hamburger').on('click', function () {
    //     $(this).toggleClass('is-active');
    // });
    $('#drop').on('click', function () {
        $(this).toggleClass('is-active');
        $('.drop__menu').toggleClass('active');
    });
    $('.sidebar__mobile--param').on('click', function () {
        $(this).toggleClass('is-active');
        $('.sidebar__mobile--wrap').slideToggle();
    });

    $('.slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider__nav'
    });
    $('.slider__nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider',
        vertical: true,
        focusOnSelect: true,
        prevArrow: '<div class="arrow__prev"><div class="arrow__inner"><img src="dist/img/top__arr.png" alt=""></div></div>',
        nextArrow: '<div class="arrow__next"><div class="arrow__inner"><img src="dist/img/bottom__arr.png" alt=""></div></div>'
    });

    $('.product__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.product__slider--nav'
    });
    $('.product__slider--nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.product__slider',
        focusOnSelect: true,
        prevArrow: '<div class="product--arrow__prev"><div class="product--arrow__inner"><img src="dist/img/left_arr.png" alt=""></div></div>',
        nextArrow: '<div class="product--arrow__next"><div class="product--arrow__inner"><img src="dist/img/right_arr.png" alt=""></div></div>',
        responsive: [
            {
                breakpoint: 700,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 450,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });

    $('.fancy__select').fancySelect();

    $(".checkbox__show--param").on('change', function () {
        if ($(this).prop("checked")) {
            $('#hidden__param').removeClass('d-none');
        }
        else
            $('#hidden__param').addClass('d-none');
    });


});

// табы
if (typeof jQuery === 'undefined') {
    throw new Error('Bootstrap\'s JavaScript requires jQuery')
}

+function ($) {
    'use strict';
    var Tab = function (element) {
        // jscs:disable requireDollarBeforejQueryAssignment
        this.element = $(element)
        // jscs:enable requireDollarBeforejQueryAssignment
    }

    Tab.VERSION = '3.3.6'

    Tab.TRANSITION_DURATION = 150

    Tab.prototype.show = function () {
        var $this = this.element
        var $ul = $this.closest('ul:not(.dropdown-menu)')
        var selector = $this.data('target')

        if (!selector) {
            selector = $this.attr('href')
            selector = selector && selector.replace(/.*(?=#[^\s]*$)/, '') // strip for ie7
        }

        if ($this.parent('li').hasClass('active')) return

        var $previous = $ul.find('.active:last a')
        var hideEvent = $.Event('hide.bs.tab', {
            relatedTarget: $this[0]
        })
        var showEvent = $.Event('show.bs.tab', {
            relatedTarget: $previous[0]
        })

        $previous.trigger(hideEvent)
        $this.trigger(showEvent)

        if (showEvent.isDefaultPrevented() || hideEvent.isDefaultPrevented()) return

        var $target = $(selector)

        this.activate($this.closest('li'), $ul)
        this.activate($target, $target.parent(), function () {
            $previous.trigger({
                type: 'hidden.bs.tab',
                relatedTarget: $this[0]
            })
            $this.trigger({
                type: 'shown.bs.tab',
                relatedTarget: $previous[0]
            })
        })
    }

    Tab.prototype.activate = function (element, container, callback) {
        var $active = container.find('> .active')
        var transition = callback
            && $.support.transition
            && ($active.length && $active.hasClass('fade') || !!container.find('> .fade').length)

        function next() {
            $active
                .removeClass('active')
                .find('> .dropdown-menu > .active')
                .removeClass('active')
                .end()
                .find('[data-toggle="tab"]')
                .attr('aria-expanded', false)

            element
                .addClass('active')
                .find('[data-toggle="tab"]')
                .attr('aria-expanded', true)

            if (transition) {
                element[0].offsetWidth // reflow for transition
                element.addClass('in')
            } else {
                element.removeClass('fade')
            }

            if (element.parent('.dropdown-menu').length) {
                element
                    .closest('li.dropdown')
                    .addClass('active')
                    .end()
                    .find('[data-toggle="tab"]')
                    .attr('aria-expanded', true)
            }

            callback && callback()
        }

        $active.length && transition ?
            $active
                .one('bsTransitionEnd', next)
                .emulateTransitionEnd(Tab.TRANSITION_DURATION) :
            next()

        $active.removeClass('in')
    }


    // TAB PLUGIN DEFINITION
    // =====================

    function Plugin(option) {
        return this.each(function () {
            var $this = $(this)
            var data = $this.data('bs.tab')

            if (!data) $this.data('bs.tab', (data = new Tab(this)))
            if (typeof option == 'string') data[option]()
        })
    }

    var old = $.fn.tab

    $.fn.tab = Plugin
    $.fn.tab.Constructor = Tab


    // TAB NO CONFLICT
    // ===============

    $.fn.tab.noConflict = function () {
        $.fn.tab = old
        return this
    }


    // TAB DATA-API
    // ============

    var clickHandler = function (e) {
        e.preventDefault()
        Plugin.call($(this), 'show')
    }

    $(document)
        .on('click.bs.tab.data-api', '[data-toggle="tab"]', clickHandler)
        .on('click.bs.tab.data-api', '[data-toggle="pill"]', clickHandler)
}(jQuery);