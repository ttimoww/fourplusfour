jQuery(document).ready(function($){
    // Add to Cart Colors
    $('.variations input').click(function(){
        $('.variations label').css('color', '#000');
        const id = $(this).attr('id');
        $(`label[for="${id}"]`).css('color', '#fff');
    })

    // Fix option color on redirected page
    $('.variations input:radio:checked').each(function(){
        const id = $(this).attr('id');
        $(`label[for="${id}"]`).css('color', '#fff');
    })

    // Fix color when size is being reset
    $('.reset_variations').click(() => $('.variations label').css('color', '#000'));

    // Scroll to add to cart form
    $('.product__name-small').click(() => {
        const infoHeight = $(".product__info-small").height();
        const windowHeight = $(window).height();
        $([document.documentElement, document.body]).animate({
            scrollTop: $(".product__info-small").offset().top - windowHeight + infoHeight
        }, 800);
    })
});