jQuery(function ($) {
    $('.menu_primary .menu__item').on('click', function () {
        var $item = $(this),
            $menu = $item.closest('.menu');

        if (!$item.hasClass('active')) {
            $menu.find('.menu__item.active').removeClass('active');
            $item.addClass('active');
        }

        return false;
    });

    if ($.fn.slick) {
        $('.slider_type_one').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1
        });
    }

    //Ограничение максимального колличества выбранных элементов
    $('[data-max-checked] input[type="checkbox"]').on('change', function () {
        var $this = $(this),
            name = $this.attr('name'),
            parent = $this.closest('[data-max-checked]'),
            maxChecked = $this.closest('[data-max-checked]').data('max-checked');
        if ($('input[name="' + name + '"]:checked', parent).length >= maxChecked) {
            $('input[name="' + name + '"]:not(:checked)', parent).attr('disabled', "disabled");
        } else {
            $('input[name="' + name + '"]:disabled', parent).removeAttr('disabled');
        }
    });

    //Числовой инпут
    $('.custom-input_number .custom-input__arrow').on('click', function () {
        console.log('clicked');
        var $arrow = $(this),
            $customInput = $arrow.closest('.custom-input'),
            $orig = $customInput.find('.custom-input__orig'),
            $value = $customInput.find('.custom-input__value'),
            step = ($customInput.data('step') || 1) * 1,
            min = (typeof $customInput.data('min') !== 'undefined' ? $customInput.data('min') : 0) * 1,
            max = (typeof $customInput.data('max') !== 'undefined' ? $customInput.data('max') : 0) * 1,
            currValue = ($orig.val()) * 1;

        if ($arrow.hasClass('custom-input__arrow_up')) {
            currValue += step;
        } else if ($arrow.hasClass('custom-input__arrow_down')) {
            currValue -= step;
        }

        if (currValue > max) {
            currValue = max;
        }

        if (currValue < min) {
            currValue = min;
        }

        $value.html(currValue);
        $orig.val(currValue).trigger('change');
    });


    $('[data-error]').each(function () {
        var $this = $(this),
            errorText = $this.data('error'),
            inputValue = $this.val();

        if (errorText) {
            $this
                .data('orig-value', inputValue)
                .val(errorText)
                .addClass('error')
                .one('focus', function () {
                    $this
                        .removeClass('error')
                        .val($this.data('orig-value'))
                        .removeData('orig-value');
                });
        }
    });

    $('form').on('submit', function(){
        $('[data-error]').each(function () {
            var $this = $(this);
            if (typeof $this.data('orig-value') !== 'undefined') {
                $this
                    .removeClass('error')
                    .val($this.data('orig-value'))
                    .data('orig-value', '');
            }
        });
    });

});

jQuery.fn.updateUnits = function (count) {
    var $this = $(this),
        aEndings = $this.data('units').split(','),
        unit = getNumEnding(count, aEndings);

    $this.text(unit);
}


//Товар добавлен в корзину
function openMinicart() {
    $('.mini-cart').addClass('mini-cart_added');

    setTimeout(function () {
        $('.mini-cart').removeClass('mini-cart_added');
    }, 2000);
}

function updateMinicartCount(count) {
    if (count > 0 && $('.mini-cart').hasClass('mini-cart_hidden')) {
        $('.mini-cart').removeClass('mini-cart_hidden');
    } else if (count == 0) {
        $('.mini-cart').addClass('mini-cart_hidden');
        return;
    }

    $('.mini-cart__count').text(count);
    $('.mini-cart__units').updateUnits(count);
}

function getNumEnding(iNumber, aEndings) {
    var sEnding, i;
    iNumber = iNumber % 100;
    if (iNumber >= 11 && iNumber <= 19) {
        sEnding = aEndings[2];
    }
    else {
        i = iNumber % 10;
        switch (i) {
            case (1):
                sEnding = aEndings[0];
                break;
            case (2):
            case (3):
            case (4):
                sEnding = aEndings[1];
                break;
            default:
                sEnding = aEndings[2];
        }
    }
    return sEnding;
}


(function () {
    var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
        animationStart = 'webkitAnimationStart mozAnimationStart MSAnimationStart oanimationstart animationstart';
    $.fn.extend({
        animateCss: function (name, after) {
            var $this = this,
                after = after || function () {
                    };
            $this.addClass(name);
            $this.one(animationStart, function () {
                $this.addClass('animating');
            });
            setTimeout(function () {
                if (!$this.hasClass('animating')) {
                    $this.removeClass('animating ' + name);
                    after.call($this);
                } else {
                    $this.one(animationEnd, function () {
                        $this.removeClass('animating ' + name);
                        after.call($this);
                    });
                }
            }, 100);
            return this;
        },
        inCssState: function (state, after) {
            var after = after || function () {
                };
            this.data('cssState', state)
                .removeClass(state + 'Out')
                .animateCss(state + 'In', function () {
                    this.addClass(state);
                    this.trigger('cssState.' + state + 'InDone');
                    after.call(this);
                });
            return this;
        },
        outCssState: function (state, after) {
            var after = after || function () {
                };
            this.data('cssState', '')
                .removeClass(state + 'In')
                .animateCss(state + 'Out', function () {
                    this.removeClass(state);
                    this.trigger('cssState.' + state + 'OutDone');
                    after.call(this);
                });
            return this;
        }
    });
})()
