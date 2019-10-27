 jQuery(document).ready(function($){
    $('.woocommerce-cart').on('click', '.minus', function (e) {
        var $inputQty = $(this).parent().find('input.qty');
        var val = parseInt($inputQty.val());
        var step = $inputQty.attr('step');
        step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
        if (val > 0) {
            $inputQty.val(val - step).change();
        }
    });
    $('.woocommerce-cart').on('click', '.plus', function (e) {
        var $inputQty = $(this).parent().find('input.qty');
        var val = parseInt($inputQty.val());
        var step = $inputQty.attr('step');
        step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
        $inputQty.val(val + step).change();
    });
 });