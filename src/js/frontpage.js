jQuery(document).ready(function($){
    
    // Parallax
    $(window).scroll(()=>{
        let scrolled = $(this).scrollTop();

        $('.parralax').css('transform', `translateY(-${scrolled * 0.25}px)`)
    })

    const images = $('.homepage__landing__images').children('img');
    if (images){
        setInterval(() => {
            
            let active = $('.homepage__landing__images img.activeslide');
            let next = active.next().length ? active.next() : $(".homepage__landing__images img:first");
            active.addClass('last-activeslide');
            next.css( { opacity: 0.0} ).addClass('activeslide').animate( { opacity : 1.0}, 1500, function() {
                active.removeClass('activeslide last-activeslide');
            } );

        }, 6000)
    }

});