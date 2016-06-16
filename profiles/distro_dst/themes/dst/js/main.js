(function($) {

    $(document).ready(function() {

            if ($('body').find('.main-slider').length > 0) {
                $('.main-slider').bxSlider({
                    minSlides: 1,
                    maxSlides: 1,
                    slideWidth: 1250,
                    auto: false,
                    pause: 5000,
                    nextText: '&#xf054;',
                    prevText: '&#xf053;',
                    autoHover: true,
                    pager: false,
                    mode: 'horizontal',
                });
            }

    }); //doc ready end--------------------------------    



    // set equal height of collums 
    function setEqualHeight(columns) {
        var tallestcolumn = 0;
        columns.each(function() {
            currentHeight = $(this).height();
            if (currentHeight > tallestcolumn) {
                tallestcolumn = currentHeight;
            }
        });
        columns.height(tallestcolumn);
    }

    // dropdown 
    function upDown(object, target) {
        $(target).hide();
        $(object).click(function() {
            if ($(target).is(':visible')) $(target).slideUp('fast');
            else $(target).slideDown('fast');
        }).css('cursor', 'pointer');
    }

    Drupal.behaviors.temizaciya_formy = {

        attach: function(context, settings) {

        }

    }

}(jQuery));