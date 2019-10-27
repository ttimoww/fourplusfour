jQuery(document).ready(function($){
    // Toggle Searchbar
    $('#toggle-searchbar').click(() => {
        if (!$('header').hasClass('searchbar-visible')){
            $('header').addClass('searchbar-visible');
        } else{
            $('header').removeClass('searchbar-visible');
        }
    })

    // Close Searchbar
    $('#close-searchbar').click(() => {
        $('header').removeClass('searchbar-visible');
    })

    // Close Searchbar on scroll
    $(window).scroll(() => {
        if ($('header').hasClass('searchbar-visible')){
            $('header').removeClass('searchbar-visible');
        }
    })

    // Toggle Menu
    $('.toggle-menu').click(() => {
        $('header').removeClass('searchbar-visible');
        if (!$('header').hasClass('mobile-menu-visible')){
            $('header').addClass('mobile-menu-visible');
        } else{
            $('header').removeClass('mobile-menu-visible');
        }
    })

    // Close Menu on wider viewport
    $(window).resize(function(){
        let windowWidth = $(this).width();
        if (windowWidth > 991){
            $('header').removeClass('mobile-menu-visible');
        }
    })

    // Toggle Searchbar from inside menu
    $('#toggle-searchbar-from-menu').click(() => {
        $('header').removeClass('mobile-menu-visible');
        window.setTimeout(() => $('header').addClass('searchbar-visible'), 500)
    })

    // Mobile Menu Collapse
    $('#menu-mobile-menu>.menu-item-has-children a').click(function(e){
        $(this).parent().hasClass('opened') ? $(this).parent().removeClass('opened') : $(this).parent().addClass('opened');
        e.stopPropagation();
    })
});

